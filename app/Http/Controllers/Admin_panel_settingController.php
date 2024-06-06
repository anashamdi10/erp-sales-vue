<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Admin_panel_settings;

use DateTime;
use Illuminate\Http\Request;

class Admin_panel_settingController extends Controller
{
    public function index(){
        
        return view('admin.admin_panel_settings.index');
    }

    public function get_company_info(){
        $name = auth()->guard('admin')->name;
        $com_code = Admin::where('name', $name)->value('com_code');
        $data = Admin_panel_settings::where('com_code', $com_code)->first();

        $dt = new DateTime($data['updated_at']);
        $data['date'] = $dt->format("Y-m-d");
        $data['time'] = $dt->format("H:i a");
        $newDateTime = date('A', strtotime($data['time']));
        $data['timeType'] = (($newDateTime == 'Am') ? 'صباحا':'مساءا');

        

        return response()->json($data);
    }


    public function edit()
    {
        return view('admin.admin_panel_settings.edit' );
    }
    public function update($com_code , Request $request)
    {   
        
        $name = auth()->guard('admin')->name;
        $data = Admin_panel_settings::where('com_code', $com_code)->first();
        $data['system_name'] = $request->system_name;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['general_alert'] = $request->general_alert;
        $data['updated_by'] = $name;
        $data['updated_at'] = date('Y-m-d H:i');

        if($request->photo !== null ){
            $request->validate([
                'photo'     =>'required | mimes:png,jpg,jpeg'
            ]);
            $the_file_Path = uploadImage('admin/uploads', $request->photo);
            $data['photo']= $the_file_Path;
        }

        $data->save();




    }
}
