<?php

namespace App\Http\Controllers;

use App\Models\dboy_complaint;
use App\Models\user_complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;


class ComplaintController extends Controller
{
    //dboy complaint send
    public function store(Request $request)
    {
        $user = Auth::user();

        dboy_complaint::create([
            'dboy_id' => $user->id,
            'subject' => $request->subject,
            'description' => $request->description,
        ]);

        return back()->withSuccess('Complaint submitted successfully!');
    }

    //user complaint send
    public function storeUser(Request $request)
    {
        $user = Auth::user();

        user_complaint::create([
            'user_id' => $user->id,
            'subject' => $request->subject,
            'description' => $request->description,
        ]);

        return back()->withSuccess('Complaint submitted successfully!');
    }
    
    //user show only his complaint
    public function showUser(Request $request)
    {
        $user = Auth::user();

        $data = user_complaint::all();

        return view("user.usercomplaint.user-view-complaint", compact('data'));
    }

    //dboy show only his complaint
    public function showDboy(Request $request)
    {
        $user = Auth::user();
     

        $data = dboy_complaint::all();
        return view("deliveryboy.dboy-complaint.deliveryboy-view-complaint", compact('data'));
    }

    //admin show all dboy complaint
    public function showDboyComplaint(Request $request)
    {   

    $data = dboy_complaint::all();
        return view("admin.d-boy.admin-deliveryboy-complaints", compact('data'));
    }

    //admin download dboy complaint as pdf
    public function exportDboyComplaint()
    {
        $data = dboy_complaint::all();
        $pdf = PDF::loadView('pdf.dboyComplaint',[
            'data'=>$data
        ]);
        return $pdf->download('DboyComplaints.pdf');
    }

    //admin show all user complaint
    public function showUserComplaint(Request $request)
    {

        $data = user_complaint::all();
        return view("admin.user.admin-user-complaints", compact('data'));
    }
   
    //admin download user complaint as pdf
    public function  exportUserComplaint()
    {
        $data = user_complaint::all();
        $pdf = PDF::loadView('pdf.userComplaint',[
            'data'=>$data
        ]);
        return $pdf->download('UserComplaints.pdf');
    }


    //admin delete user complaint
    public function deleteUserComplaint($id)
    {
       user_complaint::find($id)->delete();
        return redirect('admin-user-complaints');
    }
   
    //admin delete dboy complaint

    public function deleteDboyComplaint($id)
    {
       dboy_complaint::find($id)->delete();
        return redirect('admin-deliveryboy-complaints');
    }
}
