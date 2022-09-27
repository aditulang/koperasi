<?php

namespace App\Http\Controllers\Reportsss ;

use PDF;
use App\User;
use App\Saving;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SavingsController extends Controller
{
    public function all()
    {

        $users = Saving::with('user')->get();

        $pdf = PDF::loadView('cetak.savings.all', compact('users'))->setPaper('a4', 'landscape');

        return $pdf->stream('laporan_simpanan.pdf');
    }
}