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
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title mb-0">Daftar Barang Belanja</h4>
                </div>
                <p class="card-description">
                    Add class <code>.table-hover</code>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Catatan</th>
                                <th>Kelola</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jacob</td>
                                <td>Photoshop</td>
                                <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                                <td><label class="badge badge-danger">Pending</label></td>
                            </tr>
                            <tr>
                                <td>Messsy</td>
                                <td>Flash</td>
                                <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                                <td><label class="badge badge-warning">In progress</label></td>
                            </tr>
                            <tr>
                                <td>John</td>
                                <td>Premier</td>
                                <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                                <td><label class="badge badge-info">Fixed</label></td>
                            </tr>
                            <tr>
                                <td>Peter</td>
                                <td>After effects</td>
                                <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                                <td><label class="badge badge-success">Completed</label></td>
                            </tr>
                            <tr>
                                <td>Dave</td>
                                <td>53275535</td>
                                <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                                <td><label class="badge badge-warning">In progress</label></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
