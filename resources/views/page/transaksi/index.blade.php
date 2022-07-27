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
                    <li class="breadcrumb-item active">Data Transaksi</li>
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

                            <div class="" style="float: right">
                                <a href="/transaksi/form" class="btn btn-sm btn-primary">Tambah Data</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table class="table table-nowrap table-sm text-center">
                                <tr>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA</th>
                                    <th>TANGGAL</th>
                                    <th>HP</th>
                                    <th>ALAMAT</th>
                                    <th>TUJUAN</th>
                                    <th>Action</th>
                                </tr>
                                <tbody>
                                    @forelse ($transaksi as $item)
                                        <tr>
                                            <th scope="row">{{ $nomor++ }}</th>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->tgl }}</td>
                                            <td>{{ $item->hp }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->tujuans->kd_tujuan }}</td>
                                            <td>
                                                <a href="/transaksi/edit/{{ $item->id }}"
                                                    class="btn btn-success btn-sm">edit</a>

                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#modal-default{{ $item->id }}">
                                                    hapus
                                                </button>

                                                {{-- Modal Hapus --}}
                                                <div class="modal fade" id="modal-default{{ $item->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Peringatan</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Yakin data Transaksi <b>{{ $item->nama }}</b> ingin
                                                                dihapus?
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Batal</button>
                                                                <form method="POST" action="/transaksi/{{ $item->id }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">No Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
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