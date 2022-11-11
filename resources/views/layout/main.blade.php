<!DOCTYPE html>
<html lang="en">
    <head>
        @include('common.header')
        @livewireStyles
        @livewireScripts
    </head>
    <body class="sb-nav-fixed">
        @include('common.topNav')
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @if (Auth::user()->user_type_id ==1)
                    @include('common.librarianNav')
                @else
                    @include('common.sideNav')
                @endif

            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        @yield('content')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    @include('common.footer')
                </footer>
            </div>
        </div>
        <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
