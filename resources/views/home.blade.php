@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-md-6 mx-auto">
    <div class="card card-user">
        <div>
            <div class="image">
                <img src="{{asset('asset\img\futuristic.jpg')}}" width="100%" height="250"  alt="...">
            </div>
            <div class="content">
                <div class="author">
                    <div class="d-flex justify-content-center">
                        <img 
                            class="avatar border-white"
                            width="150px" height="150px" 
                            src="{{asset('asset\img\icon-535.webp')}}" alt="...">
                    </div>
                    <div class="d-flex justify-content-center">
                        <h4 class="title font-weight-bolder">{{Auth::user()->name}}
                            <a href="#" class="text-muted">
                                <small>{{Auth::user()->email}}</small>
                            </a>
                        </h4>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <small>{{Auth::user()->created_at->diffForHumans()}}</small> 
                    </div>    
                </div>  
            </div>  
        </div>    
    </div>
    </hr>
    <div class="text-center">
        <div class="row">
                @role('anggota')
                <div class="col-md-4 col-md-offset-1">
                    <h5>
                        Rp.150000
                        <br>
                        <small class="text-muted">Saldo Simpanan</small>
                    </h5>
                </div>
                @else
                <div class="col-md-4 col-md-offset-1">
                    <h5>Rp.150000</h5>
                    <br>
                    <small>Tabungan</small>
                </div>
                @endrole
                @role('anggota')
                <div class="col-md-3">
                    <h5>
                        Rp.200000
                        <br>
                        <small class="text-muted">Dana Pinjaman</small>
                    </h5>
                </div>
                @else
                <div class="col-md-3">
                    <h5>
                        pengajuan
                    </h5>
                    <br>
                    <small>Data Pinjaman</small>
                </div>
                @endrole
                @role('anggota')
                <div class="col-md-3">
                    <h5>
                        Rp.5000
                        <br>
                        <small class="text-muted">Total Pinjaman</small>
                    </h5>
                </div>
                @else
                <div class="col-md-3">
                    <h5>
                        Rp.5000  
                    </h5>
                    <br>
                    <small>Total Pinjaman</small>
                </div>
                @endrole
                @role('anggota')
                <div class="col-md-4">
                    <h5>
                       pengajuan
                        <br>
                        <small class="text-muted">Pengajuan Pinjaman</small>
                    </h5>
                </div>
                @else
                <div class="col-md-4">
                    <h5>
                       pengajuan
                    </h5>
                    <br>
                    <small class="text-muted">Pengajuan Pinjaman</small>
                </div>
                @endrole
                @role('anggota')
                <div class="col-md-3">
                    <h5>
                      penarikan
                        <br>
                        <a href="">
                            <small class="text-muted">aaa</small>
                        </a>
                    </h5>
                </div>
                @else   
                <div class="col-md-4">
                    <h5 class="mb-3">
                     penarikan
                    </h5>
                    <a href="">
                        <small class="text-muted">Penarikan</small>
                    </a>
                </div>
                @endrole
        </div>
    </div>
</div>
 
@endsection
