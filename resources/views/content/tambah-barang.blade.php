@extends("layout.app")

@section("title")
    DaftarBelanja {!! "&mdash;" !!} Tambah Barang
@endsection

@section("styles")
    <link href="{{ asset("vendors/feather/feather.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/ti-icons/css/themify-icons.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/css/vendor.bundle.base.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/css/vertical-layout-light/style.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/mdi/css/materialdesignicons.min.css") }}" rel="stylesheet">
@endsection

@section("content")
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Barang Baru</h4>
                            <p class="card-description">
                                Form penambahan barang belanja baru
                            </p>
                            <form action="{{ route("items.store") }}" class="forms-sample" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Nama Barang</label>
                                    <input class="form-control" id="name" name="name" placeholder="Masukan nama barang belanja" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Jumlah Barang</label>
                                    <input class="form-control" id="quantity" min="1" name="quantity" placeholder="Masukan jumlah barang belanja" type="number" value="1">
                                </div>
                                <div class="form-group">
                                    <label for="notes">Catatan Tambahan</label>
                                    <textarea class="form-control" id="notes" name="notes" placeholder="Berikan catatan tambahan apabila ada" rows="4"></textarea>
                                </div>
                                <button class="btn btn-primary mr-2" type="submit">Tambah</button>
                                <button class="btn btn-light" onclick="window.location='{{ route("items.index") }}'" type="button">Batal</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include("components.footer")
    </div>
@endsection

@section("scripts")
    <script src="{{ asset("vendors/js/vendor.bundle.base.js") }}"></script>
    <script src="{{ asset("vendors/js/off-canvas.js") }}"></script>
    <script src="{{ asset("vendors/js/hoverable-collapse.js") }}"></script>
    <script src="{{ asset("vendors/js/template.js") }}"></script>
    <script src="{{ asset("vendors/js/settings.js") }}"></script>
    <script src="{{ asset("vendors/js/todolist.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session("success"))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session("success") }}',
                timer: 2000,
                showConfirmButton: false
            });
        </script>
    @endif
    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                html: `{!! implode("<br>", $errors->all()) !!}`,
                showConfirmButton: false,
                timer: 5000
            });
        </script>
    @endif
@endsection
