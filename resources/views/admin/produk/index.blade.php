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
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah Produk</button>
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Nama Barang</th>
                                                    <th class="text-center">Harga</th>
                                                    <th class="text-center">Deskripsi</th>
                                                    <th class="text-center">Kategori</th>
                                                    <th class="text-center">Aksi</th>
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
                                                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#detailModal{{ $p->id }}"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editModal{{ $p->id }}"><i class="fa fa-edit"></i></button>
                                                        <a href="" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapusModal{{ $p->id }}"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        <!-- Modal untuk form tambah -->
                                        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true" style="overflow: auto !important;">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="tambahModalLabel">Tambah Produk</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="formTambah"> <!-- ID formTambah untuk digunakan dalam Ajax -->
                                                            <div class="form-group">
                                                                <label for="nama_barang">Nama Barang</label>
                                                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="slug">Slug</label>
                                                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="harga">Harga</label>
                                                                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="kategori">Kategori</label>
                                                                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori">
                                                            </div>
                                                            <!-- Tambahkan field lainnya sesuai kebutuhan -->
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="button" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal untuk form detail -->
                                        @foreach($produk as $p)
                                        <div class="modal fade" id="detailModal{{ $p->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="detailModalLabel">Detail Produk</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Isi dengan informasi detail produk -->
                                                        <p>Nama Barang: <span id="detailNamaBarang"></span></p>
                                                        <p>Harga: <span id="detailHarga"></span></p>
                                                        <!-- Tambahkan field lainnya sesuai kebutuhan -->
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal untuk form edit -->
                                        
                                        <!-- Modal untuk hapus -->
                                        @endforeach
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

    <!-- Skrip untuk mengirim form menggunakan Ajax -->
    <script>
        $(document).ready(function() {
            $('#tambahModal button.btn-primary').on('click', function() {
                // Ambil data dari form dan kirim ke server menggunakan Ajax
                $.ajax({
                    url: '',
                    type: 'POST',
                    data: $('#formTambah').serialize(), // Gantikan 'formTambah' dengan ID form tambah
                    success: function(response) {
                        // Tanggapi respon sukses dari server
                        alert('Produk berhasil ditambahkan!');
                        $('#tambahModal').modal('hide'); // Tutup modal
                    },
                    error: function(response) {
                        // Tanggapi respon gagal dari server
                        alert('Terjadi kesalahan. Produk gagal ditambahkan.');
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#detailModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget); // Tombol yang ditekan
                var productId = button.data('id'); // Mengambil data-id dari tombol

                // Menggunakan AJAX untuk mengambil informasi produk dari server
                $.ajax({
                    url: '/get-product/' + productId, // Gantikan dengan URL yang sesuai
                    type: 'GET',
                    success: function(response) {
                        // Mengisi modal dengan informasi produk yang diambil dari server
                        $('#detailNamaBarang').text(response.nama_barang);
                        $('#detailHarga').text(response.harga);
                        // Mengisi field lainnya sesuai kebutuhan
                    },
                    error: function(response) {
                        alert('Gagal mengambil informasi produk.');
                    }
                });
            });
        });
    </script>


@endsection