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
            @yield("content")
            {{-- footer --}}
        </div>
    </div>
    </div>

    {{-- scripts --}}
    @yield("scripts")
</body>

</html>
