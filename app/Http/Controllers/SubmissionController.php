<?php

namespace App\Http\Controllers;
use App\Submission;

use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {   
        $submissions = ""; 
        return view('submissions.index', compact('submissions'));
    }
}
