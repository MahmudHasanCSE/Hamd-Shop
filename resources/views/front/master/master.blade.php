<!DOCTYPE html>
<html lang="zxx">

<head>

    @include('front.includes.meta')

    <title>@yield('title')</title>

    @include('front.includes.css')

</head>

<body>
<div class="main-wrapper main-wrapper-2">
    @include('front.includes.header')

    @yield('body')

    @include('front.includes.footer')

    @include('front.includes.modal')

    @include('front.includes.mobile-menu')

</div>

@include('front.includes.script')

{{-- toastr for dashboard --}}
@if(Session::has('message'))
    <script>
        $(document).ready(function () {
            toastr.success('{{Session::get('message')}}');
        })
    </script>
@endif

</body>

</html>
