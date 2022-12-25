<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">


            @if(auth()->user()->role=='admin')
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.statisticians')}}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Statisticians
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.users')}}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    Users
                </a>
            </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('user.create')}}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    New User
                </a>
            </li>
            @endif

        </ul>

    </div>
</nav>
