<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;

class orderController extends Controller
{
    //admin show all current order details
    public function showOrder(Request $request)
    {
        $data = order::all()->whereIn('status',['Pick Up','City Warehouse','Shipped','Area Warehaouse']);
        return view("admin.orders.admin-current-order", compact('data'));
    }
    //admin export as a pdf current order
    
    public function exportCurrentOrderDetails()
    {
        $data = order::all()->whereIn('status',['Pick Up','City Warehouse','Shipped','Area Warehaouse']);
        $pdf = PDF::loadView('pdf.adminCurrentOrder',[
            'data'=>$data
        ]);
        return $pdf->download('AdminCurrentOrder.pdf');
    }

     //admin delete from current order
     public function deleteAdminOrder($id)
     {
        order::find($id)->delete();
         return redirect('admin-current-order');
     }

    //admin show completed order
    public function showCompleteOrder(Request $request)
    {
        $data = order::all()->where('status','Done');
        return view("admin.orders.admin-completed-order", compact('data'));
    }

    //admin delete from complete order
    public function deleteCompleteOrder($id)
    {
       order::find($id)->delete();
        return redirect('admin-completed-order');
    }

    //admin export as a pdf complete order
    
    public function exportCompleteOrderDetails()
    {
        $data = order::all()->where('status','Done');
        $pdf = PDF::loadView('pdf.adminCompleteOrder',[
            'data'=>$data
        ]);
        return $pdf->download('AdminCompleteOrder.pdf');
    }

   //manager show completed order
   public function showManagerCompleteOrder(Request $request)
   {
       $data = order::all()->where('status','Done');
       return view("manager.managerorder.manager-complete-order", compact('data'));
   }
   
   //manager show current order 
   public function showManagerCurrentOrder(Request $request)
   {
    $data = order::all()->whereIn('status',['Pick Up','City Warehouse','Shipped','Area Warehaouse']);
    return view("manager.managerorder.manager-current-order", compact('data'));
   }
}
