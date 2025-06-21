<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield("title")</title>

    {{-- styles --}}
    @yield("styles")

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
                        @yield("content")
                    </div>
                </div>

                {{-- footer --}}
                @include("components.footer")

            </div>
        </div>
    </div>

    {{-- scripts --}}
    @yield("scripts")
</body>

</html>
