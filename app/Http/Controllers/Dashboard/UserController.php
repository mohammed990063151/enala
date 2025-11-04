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
    public function __construct()
    {
        //create read update delete
        $this->middleware(['permission:read_users'])->only('index');
        $this->middleware(['permission:create_users'])->only('create');
        $this->middleware(['permission:update_users'])->only('edit');
        $this->middleware(['permission:delete_users'])->only('destroy');
    } //end of constructor

    public function index(Request $request)
    {
        $users = User::whereHas('roles', function ($q) {
            $q->where('name', 'site_admin');
        })->where(function ($q) use ($request) {
            $q->when($request->search, function ($query) use ($request) {
                $query->where('first_name', 'like', '%' . $request->search . '%')
                    ->orWhere('last_name', 'like', '%' . $request->search . '%');
            });
        })->latest()->paginate(5);


        return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        return view('admin.users.create');
    } //end of create

    // public function store(Request $request)
    // {
    //     //  return $request;
    //     $request->validate([
    //         'first_name'  => 'required',
    //         'last_name'   => 'required',
    //         'email'       => 'required|unique:users',
    //         'image'       => 'image',
    //         'password'    => 'required|confirmed',
    //         'permissions' => 'required|min:1'
    //     ]);

    //     $data = $request->except(['password', 'password_confirmation', 'permissions', 'image']);
    //     $data['password'] = bcrypt($request->password);

    //     // 🖼️ رفع الصورة
    //     if ($request->image) {
    //         Image::make($request->image)
    //             ->resize(300, null, function ($constraint) {
    //                 $constraint->aspectRatio();
    //             })
    //             ->save(public_path('uploads/user_images/' . $request->image->hashName()));

    //         $data['image'] = $request->image->hashName();
    //     }

    //     // 👤 إنشاء المستخدم
    //     $user = User::create($data);
    //     $user->roles()->attach(
    //         \App\Models\Role::where('name', 'admin')->first()->id,
    //         ['user_type' => \App\Models\User::class]
    //     );
    //     // 🧩 ربط الدور (Laratrust v7+)
    //     // $user->addRole('admin'); // ✅ هذا هو الصحيح الآن

    //     // // 🔒 ربط الصلاحيات
    //     // if ($request->has('permissions') && is_array($request->permissions)) {
    //     //     foreach ($request->permissions as $permission) {
    //     //         $user->givePermission($permission); // ✅ Laratrust الحديثة
    //     //     }
    //     // }
    //     return $user;
    //     session()->flash('success', 'تمت الإضافة بنجاح');
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

    // 🖼️ رفع الصورة
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

    // 🧩 ربط المستخدم بدور "admin"
    $adminRole = \App\Models\Role::where('name', 'site_admin')->first();
    $user->roles()->attach($adminRole->id, ['user_type' => \App\Models\User::class]);

    // 🔒 ربط المستخدم بنفس صلاحيات الدور admin مثل Seeder
    $permissions = \App\Models\Permission::pluck('id')->toArray(); // جميع الصلاحيات
    $user->permissions()->syncWithPivotValues($permissions, ['user_type' => \App\Models\User::class]);

    session()->flash('success', 'تمت الإضافة بنجاح ✅ وتم منح المستخدم جميع الصلاحيات.');
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
