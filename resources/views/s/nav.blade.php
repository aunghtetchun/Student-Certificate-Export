<div class="site-menu dropdown">
    <button class="btn btn-outline-info btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bars mr-0 mr-md-2"></i> <span class="d-none d-md-inline">Menu</span>
    </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item text-theme" href="{{ route('s.index') }}">
            <i class="fas fa-home fa-fw mr-2"></i> Dashboard
        </a>
        <a class="dropdown-item" href="{{ route('s.rc') }}">
            <i class="fas fa-box fa-fw mr-2"></i> Certificate 4 U
        </a>
        <a class="dropdown-item" href="{{ route('s.list') }}">
            <i class="fas fa-file-alt fa-fw mr-2"></i> Certificate List
        </a>


        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="fas fa-lock-open fa-fw mr-2"></i> Logout
        </a>
    </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" class="d-none" method="POST">
    @csrf
</form>
