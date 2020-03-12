@extends('layouts.menubar')

@section('open','menu-open')

@section('permintaan','active')

@section('rencana-kerja','active')

@section('content')

{{--  <rencana-kerja></rencana-kerja> --}}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rencana Kerja Tahunan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Rencana Kerja Tahunan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Rencana Kerja Tahunan <a href="/tambah-rkt" class="btn btn-sm btn-primary"><i class="fas fa-plus-circle"></i> <b>Tambah</b></a></h3>  
                
              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <form action="/rkt/send" method="POST" enctype="multipart/form-data">
            <div class="card-body table-responsive p-0" style="height: 350px;">
                {{ csrf_field() }}
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th class="text-center">Judul Rencana</th>
                      <th class="text-center">Status</th> 
                      <th class="text-center">Aksi</th>
                      <th>Pilih</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($rencanas as $rencana)
                      <tr>
                        <td>{{($rencanas->currentPage()-1)*$rencanas->perPage()+$loop->iteration}}</td>
                        <td>{{ $rencana->judul }}</td>
                        <td align="center">
                            @if ($rencana->status == 0 )
                                <span class="badge badge-info">Menunggu Hasil Pembahasan</span>
                            @elseif ($rencana->status == 1)
                                <span class="badge badge-warning">Menunggu Verifikasi</span>  
                            @elseif ($rencana->status == 2)
                                <span class="badge badge-danger">Revisi</span>
                            @endif
                        </td>
                        <td align="center">
                            @if ($rencana->status == 0 )
                                <a href="/rkt/{{ $rencana->id }}/edit" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <b>Ubah</b></a>
                            @elseif ($rencana->status == 2)
                                <a href="/rkt/{{ $rencana->id }}/edit" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <b>Ubah</b></a>
                            @endif
                        </td>
                        <td>
                            <div class="icheck-success d-inline">
                            @if ($rencana->status == 0 )
                                    <input type="checkbox" name="kirim[]" value="{{$rencana->id}}" id="{{ $rencana->id }}">
                                    <label for="{{ $rencana->id }}"></label>
                            @elseif ($rencana->status == 2)
                                    <input type="checkbox" name="kirim[]" value="{{$rencana->id}}" id="{{ $rencana->id }}">
                                    <label for="{{ $rencana->id }}"></label>
                            @endif
                            </div>
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
            </div>
                <div class="card-footer clearfix">
                    <button  type="submit"  class="btn btn-primary"><i class="far fa-paper-plane"></i> <b>Kirim</b></button>
                    <ul class="pagination pagination-sm m-0 float-right">
                      {{ $rencanas->links() }}
                    </ul>
                </div>
        </form>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">
                <i class="fas fa-info-circle"></i>
                <b>Info</b>
              </h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <h5>Silahkan unduh format Berita Acara Pembahasan <a href="">Disini</a></h5>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>


@endsection




