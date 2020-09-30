<div class="p-2 d-flex px-0 bg-primary shadow-sm rounded justify-content-between align-items-center header animate__animated animate__fadeIn">
        <button class="btn btn-primary d-inline d-lg-none aside-menu-open mb-0">
            <i class="feather-menu fa-2x mb-0"></i>
        </button>
        <form class="d-none d-md-block" action="{{ route('certificate.index') }}">

            <div class="form-inline">

                <div class="dropdown mr-3">
                    <a class="btn btn-light bg-transparent text-white border-0 dropdown-toggle text-uppercase" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-plus-circle"></i> Quick Add
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item text-uppercase" href="{{ route('certificate.create') }}">
                            Add Certificate
                        </a>
                        <a class="dropdown-item text-uppercase" href="{{ route('course.create') }}">
                            Add Course
                        </a>

                        <a class="dropdown-item text-uppercase" href="{{ route('batch.create') }}">
                            Add Batch
                        </a>
                    </div>
                </div>
                <div class="form-group mr-2">
                    <input type="text" class="form-control" name="orderCode" placeholder="Find Certificate" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-light">
                        <i class="fa fa-search text-primary"></i>
                    </button>
                </div>
            </div>
        </form>
        <div class="dropdown">
            <a class="btn btn-light bg-transparent text-white border-0 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset(Auth::user()->photo) }}" class="rounded-circle" style="width: 30px" alt="">
                <span class="d-none d-lg-inline">
                    {{ Auth::user()->name }}
                </span>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" target="_blank" href="{{ \App\Custom::$info['email_link'] }}">
                    <i class="feather-mail"></i>
                    EMail
                </a>
                <a class="dropdown-item" target="_blank" href="{{ \App\Custom::$info['facebook_link'] }}">
                    <i class="feather-facebook"></i>
                    Facebook
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-lock"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
            </div>
        </div>
    </div>
