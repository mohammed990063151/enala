<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactSetting;

class ContactSettingsController extends Controller
{
    public function edit()
    {
        $setting = ContactSetting::first();
        return view('admin.contact.settings', compact('setting'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'title'     => 'nullable|string',
            'subtitle'  => 'nullable|string',
            'email'     => 'nullable|string',
            'phone'     => 'nullable|string',
            'whatsapp'  => 'nullable|string',
            'address'   => 'nullable|string',
            'map_embed' => 'nullable|string',
        ]);

        ContactSetting::updateOrCreate(['id'=>1], $data);

        return back()->with('success','✔ تم تحديث الإعدادات بنجاح');
    }
}
