<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback');
    }

    public function store(Request $request)
    {
        // Simpan data ke database
        Feedback::create($request->only(['name', 'email', 'message']));
        return redirect()->back()->with('message', 'Thank you for your feedback!');
    }
}
