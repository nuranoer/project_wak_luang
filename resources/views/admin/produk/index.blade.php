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
                                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{ $p->id }}"><i class="fa fa-trash"></i></button>
                                                        <!-- <button type="button" class="btn btn-danger btn-xs" onclick="confirmDelete('{{ $p->id }}')"><i class="fa fa-trash"></i></button> -->
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
                                                    <form id="formTambah" enctype="multipart/form-data" action="/admin/produk/simpan" method="post">
                                                    <!-- ID formTambah untuk digunakan dalam Ajax -->
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="nama_barang">Nama Barang</label>
                                                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
                                                                    </div>

                                                                    <!-- <div class="form-group">
                                                                        <label for="slug">Slug</label>
                                                                        <input type="text" class="form-control @error('slug') is-invalid @enderror"" id="slug" name="slug" placeholder="Slug">
                                                                        @error('slug')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div> -->

                                                                    <div class="form-group">
                                                                        <label for="harga">Harga</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">Rp.</span>
                                                                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="kategori">Kategori</label>
                                                                        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="tag">Tag</label>
                                                                        <input type="text" class="form-control" id="tag" name="tag" placeholder="Tag">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="deskripsi">Deskripsi</label>
                                                                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="gambar">Gambar</label>
                                                                        <input type="file" class="form-control" id="gambar" name="gambar">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Tambahkan field lainnya sesuai kebutuhan -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
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
                                                        <h6>Nama Barang</h6>
                                                        <p>{{ $p->nama_barang }} <span id="detailNamaBarang"></span></p>
                                                        <h6>Harga</h6>
                                                        <p>{{ $p->harga }} <span id="detailHarga"></span></p>
                                                        <h6>Kategori</h6>
                                                        <p>{{ $p->kategori }} <span id="detailKategori"></span></p>
                                                        <h6>Deskripsi</h6>
                                                        <p>{{ $p->deskripsi }} <span id="detailDeskripsi"></span></p>
                                                        <img src="{{ asset('images/produk/' . $p->gambar) }}" alt="Gambar Produk" width="200">
                                                        <!-- Tambahkan field lainnya sesuai kebutuhan -->
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal untuk form edit -->
                                        <div class="modal fade" id="editModal{{ $p->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true" style="overflow: auto !important;">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel">Edit Produk</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form id="formEdit" enctype="multipart/form-data" method="post" action="/admin/produk/edit/{{ $p->id }}"> 
                                                        @csrf
                                                        <div class="modal-body">
                                                            <input type="hidden" name="id" id="id">
                                                             <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="nama_barang">Nama Barang</label>
                                                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $p->nama_barang }}">
                                                                    </div>

                                                                    <!-- <div class="form-group">
                                                                        <label for="slug">Slug</label>
                                                                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $p->slug }}">
                                                                    </div> -->
                                                                    <div class="form-group">
                                                                        <label for="harga">Harga</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">Rp.</span>
                                                                            <input type="text" class="form-control" id="harga" name="harga" value="{{ $p->harga }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="kategori">Kategori</label>
                                                                        <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $p->kategori }}">
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="tag">Tag</label>
                                                                        <input type="text" class="form-control" id="tag" name="tag" value="{{ $p->tag }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="deskripsi">Deskripsi</label>
                                                                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $p->deskripsi }}</textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="gambar">Gambar</label>
                                                                        <img id="gambar-preview" src="{{ asset('images/produk/' . $p->gambar) }}" alt="Preview Gambar" style="max-width: 100px;">
                                                                        <input type="file" class="form-control" id="gambar" name="gambar">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Tambahkan field lainnya sesuai kebutuhan -->
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <!-- Modal untuk hapus -->

                                        <div class="modal fade text-left" id="deleteModal{{ $p->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger">
                                                        <h5 class="modal-title text-white" id="myModalLabel120">PERHATIAN!
                                                        </h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <h6><b>Apakah anda yakin menghapus data <span class="text-danger">"{{ $p->nama_barang }}"</span>? <br>
                                                    Data yang sudah dihapus tidak dapat dikembalikan.</b></h6>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <a href="/admin/produk/hapus/{{ $p->id }}" class="btn btn-danger ml-1">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Delete it!</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <script src="{{ asset('assetsadmin/js/lib/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/sweetalert/sweetalert.init.js') }}"></script>
    <!-- bootstrap -->

    <script src="{{ asset('assetsadmin/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/scripts.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('assetsadmin/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assetsadmin/js/lib/data-table/datatables-init.js') }}"></script>

    <script>
    $(document).ready(function() {
        $('#tambahModal button.btn-primary').on('click', function() {
            // Ambil data dari form dan kirim ke server menggunakan Ajax
            $.ajax({
                url: '/admin/produk/simpan', // Ganti dengan URL untuk mengirim data form
                type: 'POST',
                data: $('#formTambah').serialize(), // Gantikan 'formTambah' dengan ID form tambah
            });
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#editModal button#edit_button').on('click', function() {
            // Ambil data dari form edit dan kirim ke server menggunakan Ajax
            var id = $(this).data('id');
            var nama_barang = $(this).data('nama-barang');
            var slug = $(this).data('slug');
            var harga = $(this).data('harga');
            var kategori = $(this).data('kategori');
            var tag = $(this).data('tag');
            var deskripsi = $(this).data('deskripsi');
            var gambarUrl = $(this).data('gambar');

            $('#id').val(id);
            $('#nama_barang').val(nama_barang);
            $('#slug').val(slug);
            $('#harga').val(harga);
            $('#kategori').val(kategori);
            $('#tag').val(tag);
            $('#deskripsi').val(deskripsi);
            $('#gambar-preview').attr('src', gambarUrl);
            
            $.ajax({
                url: '', // Ganti dengan URL untuk mengirim data form edit
                type: 'POST', // Gantikan 'POST' dengan metode HTTP yang sesuai
                data: $('#formEdit').serialize(), // Gantikan 'formEdit' dengan ID form edit
                success: function(response) {
                    // Tanggapi respon sukses dari server
                    swal("Success!", "Produk berhasil diedit!", "success");
                    $('#editModal').modal('hide'); // Tutup modal
                },
                error: function(response) {
                    // Tanggapi respon gagal dari server
                    swal("Error!", "Terjadi kesalahan. Produk gagal diedit.", "error");
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
                        $('#detailKategori').text(response.kategori);
                        $('#detailDeskripsi').text(response.deskripsi);
                        $('#detailGambar').attr('src', response.gambar);
                    },
                    error: function(response) {
                        alert('Gagal mengambil informasi produk.');
                    }
                });
            });
        });
    </script>

    <script>
    function confirmDelete(id) {
        // Tampilkan SweetAlert konfirmasi hapus
        Swal.fire({
            title: 'Konfirmasi Hapus',
            text: 'Apakah Anda yakin ingin menghapus item ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna menekan "Ya, Hapus!", lakukan aksi penghapusan di sini
                $.ajax({
                    url: '/admin/produk/hapus/' + id, // Sesuaikan dengan URL Anda
                    type: 'DELETE', // Gunakan metode DELETE
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        // Tanggapi respon sukses dari server
                        Swal.fire('Sukses', 'Item berhasil dihapus!', 'success');
                        // Selanjutnya, lakukan hal yang sesuai seperti menghapus baris dari tabel HTML
                    },
                    error: function(response) {
                        // Tanggapi respon gagal dari server
                        Swal.fire('Error', 'Terjadi kesalahan saat menghapus item.', 'error');
                    }
                });
            }
        });
    }


    </script>



@endsection