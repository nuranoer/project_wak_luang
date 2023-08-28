@extends('layout.admin')

@section('contents')

<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Data Produk Wak Luang</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-Export</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered" >
                                        <a href="" class="btn btn-primary">Tambah Produk</a>
                                            <thead>
                                                <tr>
                                                    <th><center>No</center></th>
                                                    <th><center>Nama Barang</center></th>
                                                    <th><center>Harga</center></th>
                                                    <th><center>Deskripsi</center></th>
                                                    <th><center>Kategori</center></th>
                                                    <th><center>Gambar</center></th>
                                                    <th><center>Aksi</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $no = 1;
                                                @endphp
                                                @foreach($produk as $p)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $p->nama_barang }}</td>
                                                    <td>{{ $p->harga }}</td>
                                                    <td>{{ $p->deskripsi }}</td>
                                                    <td>{{ $p->kategori }}</td>
                                                    <td>
                                                        <img src="{{ asset('images/produk/cut/' . $p->gambar) }}" alt="Gambar Produk" width="100">
                                                    </td>
                                                    <td>
                                                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    @endsection
@section('asset')

   <!-- jquery vendor -->
   <script src="{{ asset('assetsadmin/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('assetsadmin/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->

    <script src="{{ asset('assetsadmin/js/lib/bootstrap.min.js') }}"></script><script src="{{ asset('assetsadmin/js/scripts.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('assetsadmin/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/data-table/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/data-table/datatables-init.js') }}"></script>
@endsection