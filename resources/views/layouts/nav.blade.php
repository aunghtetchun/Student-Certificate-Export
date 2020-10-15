@auth
    <div class="aside-left bg-white px-3 pb-2 min-vh-100 shadow">
        <ul class="menu" style="list-style-type: none">
            <li class="brand-icon">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset(\App\Custom::$info['c-logo']) }}" class="brand-icon-img">
                        <small class="text-primary font-weight-bold h5 mb-0 ml-2">{{ \App\Custom::$info['short_name'] }}</small>
                    </div>
                    <button class="btn btn-light d-block d-lg-none aside-menu-close">
                        <i class="feather-x fa-2x"></i>
                    </button>
                </div>
            </li>
            <li>
                <a class="menu-item mt-3" href="{{ route('home') }}">
                    <span>
                        <i class="feather-home mr-1"></i>
                        Dashboard
                    </span>
                </a>
            </li>
            <li>
                <div class="my-5"></div>
            </li>

            <li>
                <h5 class="text-secondary">
                    Access Management
                </h5>
            </li>

            <li>
                <a class="menu-item" href="{{ route('access.create') }}">
                    <span>
                        <i class="feather-archive mr-1"></i>
                        Access
                    </span>
                    <span class="badge badge-pill badge-light shadow-sm">
                        {{ $accessList->count() }}
                    </span>
                </a>
            </li>

            <li>
                <div class="my-5"></div>
            </li>
            <li>
                <h5 class="text-secondary">
                    Entry Management
                </h5>
            </li>
            <li>
                <a class="menu-item" href="{{ route('entry.index') }}">
                    <span>
                        <i class="feather-server mr-1"></i>
                        Entry List
                    </span>
                    <span class="badge badge-pill badge-light shadow-sm">
                        {{ $entryList->count() }}
                    </span>
                </a>
            </li>
            <li>
                <div class="my-5"></div>
            </li>

            <li>
                <h5 class="text-secondary">
                    Student Management
                </h5>
            </li>
            <li>
                <a class="menu-item" href="{{ route('student.index') }}">
                    <span>
                        <i class="fas fa-users mr-1"></i>
                        Student List
                    </span>
                    <span class="badge badge-pill badge-light shadow-sm">
                         {{ $studentList->count() }}
                    </span>
                </a>
            </li>

            <li>
                <div class="my-5"></div>
            </li>

                <li>
                    <h5 class="text-secondary">
                        Certificate Management
                    </h5>
                </li>
                <li>
                    <a class="menu-item" href="{{ route('certificate.index') }}">
                    <span>
                        <i class="fas fa-users mr-1"></i>
                        Certificate List
                    </span>
                        <span class="badge badge-pill badge-light shadow-sm">
                         {{ $certificateList->count() }}
                    </span>
                    </a>
                </li>
                <li>
                    <div class="my-5"></div>
                </li>


            <li>
                <h5 class="text-secondary">
                    Course Management
                </h5>
            </li>
            <li>
                <a class="menu-item" href="{{ route("course.create") }}">
                    <span>
                        <i class="fas fa-chalkboard-teacher  mr-1"></i>
                        Add Course
                    </span>
                </a>
            </li>
            <li>
                <a class="menu-item" href="{{ route("course.index") }}">
                    <span>
                        <i class="fas fa-chalkboard-teacher  mr-1"></i>
                        Course List
                    </span>
                    <span class="badge badge-pill badge-light shadow-sm">
                        {{ $courseList->count() }}
                    </span>
                </a>
            </li>
            <li>
                <h5 class="text-secondary">
                    Batch Management
                </h5>
            </li>
            <li>
                <a class="menu-item" href="{{ route('batch.create') }}">
                    <span>
                        <i class="feather-layers mr-1"></i>
                        Add Batch
                    </span>
                </a>
            </li>
            <li>
                <a class="menu-item" href="{{ route("batch.index") }}">
                    <span>
                        <i class="feather-layers  mr-1"></i>
                        Batch List
                    </span>
                    <span class="badge badge-pill badge-light shadow-sm">
                        {{ $batchList->count() }}
                    </span>
                </a>
            </li>
            <li>
                <div class="my-5"></div>
            </li>

{{--            logout--}}
            <li>
                <a class="menu-item alert-danger text-danger" onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="#">
                    <span>
                        <i class="fas fa-lock"></i>
                        Logout
                    </span>
                </a>
            </li>
        </ul>
    </div>


@endauth
