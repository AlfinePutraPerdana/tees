<template>
         <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pemberdayaan Mitra Lokal</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pemberdayaan Mitra Lokal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Mitra Lokal</h3>

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
            <div class="card-body table-responsive p-0" style="height: 300px;">
              <table class="table table-head-fixed">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Mitra Lokal</th>
                    <th>Alamat Mitra Lokal</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Mitra Lokal</td>
                    <td>Bogor</td>
                    <td><a href="/data-mitra" class="btn btn-sm btn-info"><i class="far fa-eye"></i> <b>Lihat</b></a></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Mitra Lokal</td>
                    <td>Bogor</td>
                    <td><a href="/data-mitra" class="btn btn-sm btn-info"><i class="far fa-eye"></i> <b>Lihat</b></a></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Mitra Lokal</td>
                    <td>Bogor</td>
                    <td><a href="/data-mitra" class="btn btn-sm btn-info"><i class="far fa-eye"></i> <b>Lihat</b></a></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Mitra Lokal</td>
                    <td>Bogor</td>
                    <td><a href="/data-mitra" class="btn btn-sm btn-info"><i class="far fa-eye"></i> <b>Lihat</b></a></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Mitra Lokal</td>
                    <td>Bogor</td>
                    <td><a href="/data-mitra" class="btn btn-sm btn-info"><i class="far fa-eye"></i> <b>Lihat</b></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
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
