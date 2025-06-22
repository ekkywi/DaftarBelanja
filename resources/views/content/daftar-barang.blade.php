@extends("layout.app")

@section("title")
    DaftarBelanja {!! "&mdash;" !!} Daftar Barang
@endsection

@section("styles")
    <link href="{{ asset("vendors/feather/feather.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/ti-icons/css/themify-icons.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/css/vendor.bundle.base.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/css/vertical-layout-light/style.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/mdi/css/materialdesignicons.min.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/select2/select2.min.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/select2-bootstrap-theme/select2-bootstrap.min.css") }}" rel="stylesheet">
@endsection

@section("content")
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="card-title mb-0">Daftar Barang Belanja</h4>
                            </div>
                            <p class="card-description">
                                Tampilkan, edit, atau hapus barang belanja Anda di sini.
                            </p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Catatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->notes }}</td>
                                                <td>
                                                    <a class="btn btn-warning btn-sm" href="{{ route("items.edit", $item->id) }}">Edit</a>
                                                    <form action="{{ route("items.destroy", $item->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
