
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                            <a class="nav-link" href="{{route('user.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link" href="{{route('user.available_books')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Available Books
                            </a>


                            <a class="nav-link" href="{{route('user.checkedBooks')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Checked Books
                            </a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: {{Auth::user()->name}}</div>
                        Reader
                    </div>
                </nav>
