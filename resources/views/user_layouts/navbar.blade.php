<!-- navbar section -->
<div id="navbar" class="fixed-top">
    <div class="row">
        <div class="col-lg-6 col-md-6 offset-lg-3 offset-md-3 col-12 py-2 nav-border-purple" id="top-nav">
            <div class="row">
                <div class="col-4">
                    <a href="{{ url('/') }}" class="text-decoration-none">
                        <div class="d-flex">
                            <img src="{{ asset('assets/img/logo.png') }}" class="d-block img-fluid" width="50px" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{ url('/') }}" class="text-decoration-none">
                        <div class="d-flex justify-content-center">
                            <span class="text-warning fw-bold ms-2" style="margin-top: 10px;font-family:Source Sans Pro, sans-serif; font-size: 22px; text-shadow: 2px 3px 4px #545454;">DELIGHT</span>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <div class="d-flex justify-content-end">
                        @guest
                        <div class="mt-2">
                            <a href="{{ route('login') }}" class="btn btn-sm btn-purple text-white me-2">
                                <i class="fas fa-unlock me-2"></i>
                                LOGIN
                            </a>
                        </div>
                        @endguest
                        @auth
                        <div class="mt-2">
                            <i class="fas text-white fa-bell me-1"></i>
                            <button class="btn sidebarToggle">
                                <i class="fas fa-bars text-white"></i>
                            </button>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
            {{-- <div class="d-flex justify-content-between px-3">
                <div></div>
                <a href="{{ url('/') }}" class="text-decoration-none">
            <div class="d-flex">
                <img src="{{ asset('assets/img/logo-v.png') }}" width="150px" alt="">
            </div>
            </a>
            @guest
            <div class="mt-2">
                <a href="{{ route('login') }}" class="btn btn-sm btn-purple text-white me-2">
                    <i class="fas fa-unlock me-2"></i>
                    LOGIN
                </a>
            </div>
            @endguest
            @auth
            <div class="mt-2">
                <i class="fas text-white fa-bell me-1"></i>
                <button class="btn sidebarToggle">
                    <i class="fas fa-bars text-white"></i>
                </button>
            </div>
            @endauth
        </div> --}}
    </div>
</div>
</div>
<!-- offcanvas start -->

<!-- offcanvas end -->
<!-- navbar section -->