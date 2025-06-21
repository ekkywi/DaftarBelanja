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
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Barang Baru</h4>
                <p class="card-description">
                    Form penambahan barang belanja baru
                </p>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="name">Nama Barang</label>
                        <input class="form-control" id="name" placeholder="Masukan nama barang belanja" type="text">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Jumlah Barang</label>
                        <input class="form-control" id="quantity" placeholder="Masukan jumlah barang belanja" type="email">
                    </div>
                    <div class="form-group">
                        <label for="notes">Catatan Tambahan</label>
                        <textarea class="form-control" id="notes" placeholder="Berikan catatan tambahan apabila ada" rows="4"></textarea>
                    </div>
                    <button class="btn btn-primary mr-2" type="submit">Simpan</button>
                    <button class="btn btn-light">Batal</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script src="{{ asset("vendors/js/vendor.bundle.base.js") }}"></script>
    <script src="{{ asset("vendors/js/off-canvas.js") }}"></script>
    <script src="{{ asset("vendors/js/hoverable-collapse.js") }}"></script>
    <script src="{{ asset("vendors/js/template.js") }}"></script>
    <script src="{{ asset("vendors/js/settings.js") }}"></script>
    <script src="{{ asset("vendors/js/todolist.js") }}"></script>
@endsection
