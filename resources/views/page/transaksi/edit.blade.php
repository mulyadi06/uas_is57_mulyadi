@extends('layouts.master')

@section('navtrans', 'active')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Transaksi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Form Edit Transaksi</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">


                            {{-- <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="post" action="/transaksi/{{$transaksi->id}}">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" value="{{ $transaksi->nama }}" name="nama" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tanggal</label>
                                        <input type="date" value="{{ $transaksi->tgl }}" name="tgl" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Hp</label>
                                        <input type="text" value="{{ $transaksi->hp }}" name="hp" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Alamat</label>
                                        <input type="text" value="{{ $transaksi->alamat }}" name="alamat" class="form-control" id="exampleInputPassword1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tujuan</label>
                                        <select name="tujuan" class="form-control" id="">
                                            <option value="{{ $transaksi->tujuans_id }}">Pilih Tujuan</option>
                                            @foreach ($tujuan as $item)
                                                <option value="{{ $item->id }}">{{ $item->kd_tujuan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
    
@endsection