<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-center px-3 mt-4 mb-1 text-muted">
                <span>Card</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/tuposts*') ? 'active' : '' }}" href="/dashboard/tuposts">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Tu Page
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/auditorposts*') ? 'active' : '' }}"
                    href="/dashboard/auditorposts">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Auditor Page
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/appposts*') ? 'active' : '' }}" href="/dashboard/appposts">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    APP 1 Page
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/appbposts*') ? 'active' : '' }}"
                    href="/dashboard/appbposts">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    APP 2 Page
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/appcposts*') ? 'active' : '' }}"
                    href="/dashboard/appcposts">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    APP 3 Page
                </a>
            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-center px-3 mt-4 mb-1 text-muted">
                <span>Title Page</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Tu page
                </a>
            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-center px-3 mt-4 mb-1 text-muted">
                <span>Add New User</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link{{ Request::is('dashboard/register*') ? '' : '' }}" href="/dashboard/register">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Admin
                </a>
            </li>


        </ul>


    </div>
</nav>
