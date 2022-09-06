<?php

namespace App\Http\Controllers\Installments;

use App\Loan;
use App\Installment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Laravel\Facade\Nexmo;



class InstallmentController extends Controller
{
    public function index()
    {
        $data = [
            'loans' => Loan::with('user','type')->where('terverifikasi', true)->get(),
        ];
        return view('installments.index', $data);
    }
    public function show(Loan $loan)
    {
        $this->authorize('show', $loan);
        
        return view('installments.show', compact('loan'));
    }
    public function create(Loan $loan)
    {
        $this->authorize('create', Loan::class);

        $data = [
            'loan'  => $loan,
            'angsuran_ke'   => $loan->installments()->count() + 1,
        ];

        return view('installments.create', $data);
    }
    
}