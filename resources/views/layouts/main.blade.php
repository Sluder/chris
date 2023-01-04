<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-language" content="en-us">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">

        @yield('meta')

        <title>CMC | @yield('title')</title>

        {{-- Styles --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @stack('styles')
    </head>

    <body>
        <nav class="navbar navbar-expand-sm navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand d-none d-md-block" href="{{ route('view.index') }}">CMC</a>

                <ul class="nav navbar-nav">
                    <li class="nav-item ms-4 {{ (request()->is('/')) ? 'active' : '' }}">
                        <a href="{{ route('view.index') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item ms-4 {{ (request()->is('/our-work')) ? 'active' : '' }}">
                        <a href="{{ route('view.ourWork') }}" class="nav-link">Our Work</a>
                    </li>
                </ul>

                <div class="contact">
                    <p>(330) 418-6616 <i class="fas fa-phone-alt ms-2"></i></p>
                    <p>cmiloproductions@gmail.com <i class="far fa-envelope-open ms-2"></i></p>
                </div>
            </div>
        </nav>

        <div class="content">
            @yield('content')

            @stack('modals')
        </div>

        {{-- Scripts --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ mix('js/app.js') }}"></script>

        @stack('scripts')
    </body>
</html>
