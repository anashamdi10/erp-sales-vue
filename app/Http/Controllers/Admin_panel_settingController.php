<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Admin_panel_settings;
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

        if (!empty($data)) {
            if ($data['updated_by'] > 0) {
                $data['updated_by_admin'] = Admin::where('id', $data['updated_by'])->value('name');
            }
        }

        return response()->json($data);
    }
}
