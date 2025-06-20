<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <title>Skydash Admin</title>
    <link href="{{ asset("vendors/feather/feather.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/ti-icons/css/themify-icons.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/css/vendor.bundle.base.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/css/vertical-layout-light/style.css") }}" rel="stylesheet">
    <link href="{{ asset("vendors/mdi/css/materialdesignicons.min.css") }}" rel="stylesheet">

</head>

<body>
    <div class="container-scroller">
        {{-- topbar --}}
        @include("components.topbar")

        {{-- page body wrapper --}}
        <div class="container-fluid page-body-wrapper">

            {{-- sidebar --}}
            @include("components.sidebar")

            {{-- content --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                    </div>
                </div>

                {{-- footer --}}
                @include("components.footer")

            </div>
        </div>
    </div>

    <script src="{{ asset("vendors/js/vendor.bundle.base.js") }}"></script>
    <script src="{{ asset("vendors/js/off-canvas.js") }}"></script>
    <script src="{{ asset("vendors/js/hoverable-collapse.js") }}"></script>
    <script src="{{ asset("vendors/js/template.js") }}"></script>
    <script src="{{ asset("vendors/js/settings.js") }}"></script>
    <script src="{{ asset("vendors/js/todolist.js") }}"></script>
</body>

</html>
