<?php

namespace App\Http\Controllers;

use App\Models\dboy_complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function store(Request $request) {
        $user = Auth::user();

        dboy_complaint::create([
            'user_id' => $user->id,
            'subject' => $request->subject,
            'description' => $request->description,
        ]);

        return back()->withSuccess('Complaint submitted successfully!');
    }
}
