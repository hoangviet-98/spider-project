<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


@section('css')
    <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" href="customer/css/bootstrap.min.css">
        <link rel="stylesheet" href="customer/css/header.css">
        <link rel="stylesheet" href="customer/css/menu-toggle.css">
        <link rel="stylesheet" href="customer/css/index.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://codeseven.github.io/toastr/build/toastr.min.css">
        @if(session('toastr'))
            <script>
                var TYPE_MESSAGE = "{{session('toastr.type')}}";
                var MESSAGE = "{{session('toastr.message')}}";
            </script>
        @endif
    @show

    <title>Trang chủ | Hana Spa</title>
</head>
<body>

@include('frontend.partial.header')

@include('frontend.partial.menu')

@yield('content')
<hr>
@include('frontend.partial.foot')


@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>--}}

{{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"--}}
{{--            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"--}}
{{--            crossorigin="anonymous"></script>--}}
    <script src="customer/js/menu-toggle.js"></script>
    <script src="customer/js/bootstrap.min.js"></script>
    <!-- JS, Popper.js, and jQuery -->
{{--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"--}}
{{--            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"--}}
{{--            crossorigin="anonymous"></script>--}}
{{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"--}}
{{--            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"--}}
{{--            crossorigin="anonymous"></script>--}}
    <script src="https://codeseven.github.io/toastr/build/toastr.min.js"></script>
    <script type="text/javascript">
        if(typeof TYPE_MESSAGE != "undefined")
        {
            switch (TYPE_MESSAGE) {
                case 'success':
                    toastr.success(MESSAGE)
                    break;
                case 'error':
                    toastr.error(MESSAGE)
                    break;
            }
        }
    </script>

@show
</body>
</html>
