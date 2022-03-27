<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\order;
use App\Models\user_complaint;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;

class orderController extends Controller
{
    //admin show all current order details
    public function showOrder(Request $request)
    {
        $data = order::whereIn('status',['Pick Up','City Warehouse','Shipped','Area Warehaouse']);
        if(isset($request->search) && $request->search){
       
        $data->where('awb_no', 'LIKE' ,'%'.$request->search.'%');
           
         }
       $data = $data->get();
        return view("admin.orders.admin-current-order", compact('data'));
    }

   
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
        $data = order::where('status','Done');
        if(isset($request->search) && $request->search){
       
            $data->where('awb_no', 'LIKE' ,'%'.$request->search.'%');
               
             }
           $data = $data->get();
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
       $user = Auth::user();
       $city = $user->city;
       $data = order::with('user')->whereHas('user', function ($query) use ($city) {
           $query->where('city', $city);
       })->where('status','Done');

       if(isset($request->search) && $request->search){
      
        $data->where('awb_no', 'LIKE' ,'%'.$request->search.'%');
           
         }
       $data = $data->get();

       return view("manager.managerorder.manager-complete-order", compact('data'));
   }

   //manager show current order
   public function showManagerCurrentOrder(Request $request)
   {
       $user = Auth::user();
       $city = $user->city;
       $data = order::with('user')->whereHas('user', function ($query) use ($city) {
           $query->where('city', $city);
       })->whereIn('status',['Pick Up','City Warehouse','Shipped','Area Warehouse']);

       if(isset($request->search) && $request->search){
      
        $data->where('awb_no', 'LIKE' ,'%'.$request->search.'%');
           
         }
       $data = $data->get();

       return view("manager.managerorder.manager-current-order", compact('data'));
   }

 
   //manager download current order as a pdf
   public function exportManagerCurrentOrder(Request $request)
   {
    $user = Auth::user();
    $city = $user->city;
    $data = order::with('user')->whereHas('user', function ($query) use ($city) {
        $query->where('city', $city);
    })->whereIn('status',['Pick Up','City Warehouse','Shipped','Area Warehouse'])->get();
   
    $pdf = PDF::loadView('pdf.deliveryboyCurrentOrder',[
        'data'=>$data
    ]);
    return $pdf->download('deliveryboyCurrentOrder.pdf');
   }

   //manager download complete order as a pdf
   public function exportManagerCompleteOrder(Request $request)
   {
    $user = Auth::user();
       $city = $user->city;
       $data = order::with('user')->whereHas('user', function ($query) use ($city) {
           $query->where('city', $city);
       })->where('status','Done')->get();
   
    $pdf = PDF::loadView('pdf.deliveryboyCompleteOrder',[
        'data'=>$data
    ]);
    return $pdf->download('deliveryboyCompleteOrder.pdf');
   }

   //dboy show his order
   public function showDboyCurrentOrder(Request $request)
   {
    $user = Auth::user();
    $area = $user->area;
    $data = order::with('user')->whereHas('user', function ($query) use ($area) {
        $query->where('area', $area);
    })->whereIn('status',['Pick Up','City Warehouse','Shipped','Area Warehouse']);

    if(isset($request->search) && $request->search){
      
        $data->where('awb_no', 'LIKE' ,'%'.$request->search.'%');
           
         }
       $data = $data->get();

     return view("deliveryboy.dboy-order.deliveryboy-order", compact('data'));
   }

   //dboy download his order as a pdf
   public function exportDboyOrder(Request $request)
    {
     $user = Auth::user();
    $area = $user->area;
    $data = order::with('user')->whereHas('user', function ($query) use ($area) {
        $query->where('area', $area);
    })->whereIn('status',['Pick Up','City Warehouse','Shipped','Area Warehouse'])->get();
   
   $pdf = PDF::loadView('pdf.DboyOrders',[
         'data'=>$data
     ]);
     return $pdf->download('DboyOrders.pdf');
    }
 

   public function manageOrderStatus($id) {
        $data = order::with('user')->find($id);
       return view("manager.managerorder.manager-order-update-status", compact('data'));
   }

   public function updateOrderStatus(Request $request) {
        $input = $request->all();
        $order = order::find($input['order_id'])->update(['status' => $input['status']]);

        return redirect('manager-current-order');
   }

   public function trackOrder(Request $request) {
       
       $order = order::where('awb_no', $request->search)->first();

       if($order) {
        return view("tracking.tracking", compact('order'));
       }

       return back()->withSuccess('AWB Number is invalid!');
      
        }
    

   //user show his current order
   public function getCurrentOrder(Request $request)
   {
    $user = Auth::user();
    $data = $user->orders()->whereIn('status',['Pick Up','City Warehouse','Shipped','Area Warehouse']);

    if(isset($request->search) && $request->search)
    {
       $data->where('awb_no', 'LIKE' ,'%'.$request->search.'%');
           
    }      
       $data = $data->get();
    
    return view("user.userorder.user-current-order",compact('data'));
    }
    
    //user show his complete order
    public function getCompleteOrder(Request $request)
   {
    $user = Auth::user();
    $data = $user->orders()->where('status','Done');
       
    if(isset($request->search) && $request->search)
    {
       $data->where('awb_no', 'LIKE' ,'%'.$request->search.'%');
           
    }      
       $data = $data->get();

   
    return view("user.userorder.user-completed-order",compact('data'));
    }

    //user download his current order as a pdf
    public function exportUserCurrentOrder(Request $request)
    {
        $user = Auth::user();
        $data = $user->orders->whereIn('status',['Pick Up','City Warehouse','Shipped','Area Warehouse']);
    
     $pdf = PDF::loadView('pdf.userCurrentOrder',[
         'data'=>$data
     ]);
     return $pdf->download('userCurrentOrder.pdf');
    }

    //user download his complete order as a pdf
    public function exportUserCompleteOrder(Request $request)
    {
        $user = Auth::user();
        $data = $user->orders->whereIn('status','Done');
    
     $pdf = PDF::loadView('pdf.userCompleteOrder',[
         'data'=>$data
     ]);
     return $pdf->download('userCompleteOrder.pdf');
    }
 
   

}
