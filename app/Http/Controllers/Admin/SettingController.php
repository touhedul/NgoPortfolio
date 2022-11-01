<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use File;
use Image;

class SettingController extends Controller
{
    public function setting()
    {
        $settings = Setting::all();
        return view('admin.setting', compact('settings'));
    }

    public function settingCompany(Request $request)
    {
        Setting::where('key', 'website_name')->update(['value' => $request->website_name]);
        Setting::where('key', 'address')->update(['value' => $request->address]);
        Setting::where('key', 'phone_number')->update(['value' => $request->phone_number]);
        Setting::where('key', 'email')->update(['value' => $request->email]);
        Setting::where('key', 'facebook')->update(['value' => $request->facebook]);
        Setting::where('key', 'linkedin')->update(['value' => $request->linkedin]);

        $setting = Setting::where('key', 'logo')->first();
        if ($request->hasFile('logo')) {
            //delete previous image
            if (File::exists('images/' . $setting->logo)) {
                File::delete('images/' . $setting->logo);
            }
            //add new image
            $image = $request->file('logo');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(150, 80)->save('images/' . $imageName);

            Setting::where('key', 'logo')->update(['value' => $imageName]);
        }

        return back()->with('success', 'Information Updated Successful.');
    }

    public function settingOffice(Request $request)
    {
        Setting::where('key', 'office_name')->update(['value' => $request->office_name]);
        Setting::where('key', 'office_address')->update(['value' => $request->office_address]);
        Setting::where('key', 'office_phone')->update(['value' => $request->office_phone]);
        Setting::where('key', 'office_email')->update(['value' => $request->office_email]);
        Setting::where('key', 'office_map')->update(['value' => $request->office_map]);
        Setting::where('key', 'youtube')->update(['value' => $request->youtube]);

        $setting = Setting::where('key', 'logo_footer')->first();
        if ($request->hasFile('logo_footer')) {
            //delete previous image
            if (File::exists('images/' . $setting->logo_footer)) {
                File::delete('images/' . $setting->logo_footer);
            }
            //add new image
            $image = $request->file('logo_footer');
            $imageName = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(150, 80)->save('images/' . $imageName, 50);

            Setting::where('key', 'logo_footer')->update(['value' => $imageName]);
        }

        return back()->with('success', 'Information Updated Successful.');
    }
}
