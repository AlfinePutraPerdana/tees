<template>
        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Artikel</li>
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
              <h3 class="card-title">Daftar Artikel</h3>

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
              <form action="">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul Artikel</th>
                      <th>Kategori</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Kisahku</td>
                      <td>Kisah Sukses</td>
                      <td>
                        <span class="badge badge-warning">Menunggu Verifikasi</span>
                      </td>
                      <td>
                          <!-- Button trigger modal -->
                          <a href="/revisi-artikel" class="btn btn-primary btn-sm">
                              <i class="fas fa-edit"></i> <b>Ubah</b>
                          </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Buletin</td>
                      <td>Berita</td>
                      <td>
                        <span class="badge badge-danger">Revisi</span>
                      </td>
                      <td>
                        <a href="/revisi-artikel" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i> <b>Ubah</b>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
                  <div class="card-footer clearfix">
                    <div class="col-md-4 float-left">
                      <!-- Button trigger modal -->
                      <a href="/tambah-artikel" class="btn btn-primary"><i class="fas fa-plus-circle"></i> <b>Tambah</b></a>
                    </div>
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
