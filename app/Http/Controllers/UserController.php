<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     //create read update delete
    //     $this->middleware(['permission:read_users'])->only('index');
    //     $this->middleware(['permission:create_users'])->only('create');
    //     $this->middleware(['permission:update_users'])->only('edit');
    //     $this->middleware(['permission:delete_users'])->only('destroy');
    // } //end of constructor

    //   public function index(Request $request)
    // {
    //     $users = User::whereHas('roles', function ($q) {
    //         $q->where('name', 'admin');
    //     })->where(function ($q) use ($request) {
    //         $q->when($request->search, function ($query) use ($request) {
    //             $query->where('first_name', 'like', '%' . $request->search . '%')
    //                 ->orWhere('last_name', 'like', '%' . $request->search . '%');
    //         });
    //     })->latest()->paginate(5);

    //     return view('dashboard.users.index', compact('users'));
    // }

    public function index(Request $request)
    {
        $users = User::whereRoleIs('admin')->where(function ($q) use ($request) {

            return $q->when($request->search, function ($query) use ($request) {

                return $query->where('first_name', 'like', '%' . $request->search . '%')
                    ->orWhere('last_name', 'like', '%' . $request->search . '%');
            });
        })->latest()->paginate(5);

        return view('admin.users.index', compact('users'));
    }


    public  function create()
    {
        return view('admin.users.create');
    } //end of create

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'first_name' => 'required',
    //         'last_name' => 'required',
    //         'email' => 'required|unique:users',
    //         'image' => 'image',
    //         'password' => 'required|confirmed',
    //         'permissions' => 'required|min:1'
    //     ]);

    //     $request_data = $request->except(['password', 'password_confirmation', 'permissions', 'image']);
    //     $request_data['password'] = bcrypt($request->password);

    //     if ($request->image) {
    //         Image::make($request->image)
    //             ->resize(300, null, function ($constraint) {
    //                 $constraint->aspectRatio();
    //             })
    //             ->save(public_path('uploads/user_images/' . $request->image->hashName()));

    //         $request_data['image'] = $request->image->hashName();
    //     }

    //     $user = User::create($request_data);
    //     // ربط الدور
    //     $user->roles()->attach(Role::where('name', 'admin')->first()->id, ['user_type' => User::class]);
    //     $permissionIds = Permission::whereIn('name', $request->permissions)->pluck('id')->toArray();
    //     $user->permissions()->syncWithPivotValues($permissionIds, ['user_type' => User::class]);

    //     // ربط الصلاحيات
    //     // $user->permissions()->sync($request->permissions);


    //     session()->flash('success', 'تم الإضافة بنجاح');
    //     return redirect()->route('dashboard.users.index');
    // }
    public function store(Request $request)
{
    $request->validate([
        'first_name'  => 'required',
        'last_name'   => 'required',
        'email'       => 'required|unique:users',
        'image'       => 'image',
        'password'    => 'required|confirmed',
        'permissions' => 'required|min:1'
    ]);

    $data = $request->except(['password', 'password_confirmation', 'permissions', 'image']);
    $data['password'] = bcrypt($request->password);

    if ($request->image) {
        Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save(public_path('uploads/user_images/' . $request->image->hashName()));

        $data['image'] = $request->image->hashName();
    }

    // 👤 إنشاء المستخدم
    $user = User::create($data);

    // 🧩 ربط الدور (Laratrust)
    $user->roles()->attach(
        \App\Models\Role::where('name', 'admin')->first()->id,
        ['user_type' => \App\Models\User::class]
    );

    // ✅ لا داعي لربط الصلاحيات هنا، لأن الدور admin يملكها كلها عبر الـ Seeder

    session()->flash('success', 'تمت الإضافة بنجاح');
    return redirect()->route('dashboard.users.index');
}



    public
    function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    } //end of user

    public
    function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($user->id),],
            'image' => 'image',
            'permissions' => 'required|min:1'
        ]);

        $request_data = $request->except(['permissions', 'image']);

        if ($request->image) {

            if ($user->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/user_images/' . $user->image);
            } //end of inner if

            Image::make($request->image)
                ->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('uploads/user_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();
        } //end of external if

        $user->update($request_data);

        $user->syncPermissions($request->permissions);
        session()->flash('success', __('تم التعديل بنجاح'));
        return redirect()->route('dashboard.users.index');
    } //end of update

    public
    function destroy(User $user)
    {
        if ($user->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/user_images/' . $user->image);
        } //end of if

        $user->delete();
        session()->flash('success', __('تم الحذف بنجاح'));
        return redirect()->route('dashboard.users.index');
    } //end of destroy

}//end of controller
