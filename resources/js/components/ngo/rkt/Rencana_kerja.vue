
<template>

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
            <div class="card-body table-responsive p-0" style="height: 400px;">
              <form action="">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul Rencana</th>
                      <th>Status</th> 
                      <th>Aksi</th>
                      <th>Pilih</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Rencana Kerja</td>
                      <td><span class="badge badge-info">Menunggu Hasil Pembahasan</span></td>
                      <td><a href="/revisi-rkt-draft" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <b>Ubah</b></a></td>
                      <td>
                        <div class="icheck-success d-inline">
                          <input type="checkbox" id="pilih1">
                          <label for="pilih1"></label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Rencana Kerja</td>
                      <td><span class="badge badge-warning">Menunggu Verifikasi</span></td>
                      <td><a href="/revisi-rkt-draft" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <b>Ubah</b></a></td>
                      <td>
                        <div class="icheck-success d-inline">
                          <input type="checkbox" id="pilih2">
                          <label for="pilih2"></label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Rencana Kerja</td>
                      <td><span class="badge badge-info">Menunggu Hasil Pembahasan</span></td>
                      <td><a href="/revisi-rkt-draft" class="btn btn-sm btn-primary"> <i class="fas fa-edit"></i> <b>Ubah</b></a></td>
                      <td>
                        <div class="icheck-success d-inline">
                          <input type="checkbox" id="pilih3">
                          <label for="pilih3"></label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Rencana Kerja</td>
                      <td><span class="badge badge-danger">Revisi</span></td>
                      <td><a href="/revisi-rkt-draft" class="btn btn-sm btn-primary"> <i class="fas fa-edit"></i> <b>Ubah</b></a></td>
                      <td>
                        <div class="icheck-success d-inline">
                          <input type="checkbox" id="pilih4">
                          <label for="pilih4"></label>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Rencana Kerja</td>
                      <td><span class="badge badge-info">Menunggu Hasil Pembahasan</span></td>
                      <td><a href="/revisi-rkt-draft" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <b>Ubah</b></a></td>
                      <td>
                        <div class="icheck-success d-inline">
                          <input type="checkbox" id="pilih5">
                          <label for="pilih5"></label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="card-footer clearfix">
                  <div class="col-md-4 float-left">
                    
                    <a href="/proses-rkt-draft" role="button" class="btn btn-primary"><i class="far fa-paper-plane"></i> <b>Kirim</b></a>
                  </div>
                    <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
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
  
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
