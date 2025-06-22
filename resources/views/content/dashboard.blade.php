@extends("layout.app")

@section("title")
    DaftarBelanja {!! "&mdash;" !!} Dashboard
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
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Selamat Datang Pengguna!</h3>
                            <h6 class="font-weight-normal mb-0">Anda dapat mengelola daftar barang belanja Anda disini</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card tale-bg">
                        <div class="card-people mt-auto">
                            <img alt="people" src="{{ asset("images/shopping.png") }}">
                            <div class="weather-info">
                                <div class="d-flex">
                                    <div>
                                        <h2 class="mb-0 font-weight-normal"><i class="mdi mdi-cart-outline me-2"></i>Aplikasi Daftar Belanja</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin transparent">
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                    <p class="mb-4 font-weight-bold">Total Barang Belanja Anda</p>
                                    <p class="fs-30 mb-2 font-weight-bold">{{ $totalItems }}</p>
                                    <p class="font-weight-bold">Barang</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue">
                                <div class="card-body">
                                    <p class="mb-4 font-weight-bold">Barang Terakhir Ditambahkan</p>
                                    @if ($lastItem)
                                        <p class="fs-30 mb-2 font-weight-bold">{{ $lastItem->name }}</p>
                                        <p class="font-weight-bold">{{ $lastItem->created_at->setTimezone("Asia/Jakarta")->format("d-m-Y H:i") }}</p>
                                    @else
                                        <p class="fs-30 mb-2 font-weight-bold">-</p>
                                        <p class="font-weight-bold">-</p>
                                    @endif
                                </div>
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
@endsection
