<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use Redirect;
use App\Models\{City,Area};
use Illuminate\Support\Facades\DB;

class DropdownController extends Controller
{
    
    public function index()
    {  
        $data = City::get(["name", "id"]);
      
        return view('admin.manager.add-new-manager', compact('data'));
    }
    
    public function getAreasForCity(Request $request)
    {
        $area = Area::where('city_id',$request->city_id)->get(["name","id"]);
       return $area; 
    }

    public function index1()
    {  
        $data = City::get(["name", "id"]);
      
        return view('manager.manager-dboy.add-new-deliveryboy', compact('data'));
    }
    
    public function getAreasForCity1(Request $request)
    {
        $area = Area::where('city_id',$request->city_id)->get(["name","id"]);
       return $area; 
    }
}
