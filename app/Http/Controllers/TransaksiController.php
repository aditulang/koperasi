<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saving;
use App\Penarikan;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaction = Penarikan::with('savings')->get();        
        return view('transaksi.index', compact('transaction'));
    }
    public function edit($id)
    {
        $saving = Saving::findOrFail($id);

        return view('transaksi.edit', compact('saving'));
    }
    public function store(Request $request, $id)
    {
            $saving = Saving::findOrFail($id);

            $penarikan = Penarikan::create($request->all());
            if($penarikan->save()){
                $hitung = $saving->saldo - $penarikan->total;

                $saving->update([
                    'saldo' => $hitung,
                ]);
            }
            flash('Transaksi pengembalian berhasil dilakukan');
            return redirect()->route('savings.anggota');
    }


}