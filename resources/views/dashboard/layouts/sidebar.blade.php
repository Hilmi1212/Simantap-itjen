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
                <span>Carousel Page</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/ctuposts*') ? 'active' : '' }}" href="/dashboard/ctuposts">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Tu page
                </a>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/cauditorposts*') ? 'active' : '' }}"
                    href="/dashboard/cauditorposts">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Auditor Page
                </a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/cappposts*') ? 'active' : '' }}"
                    href="/dashboard/cappposts">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    App 1 page
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/cappbposts*') ? 'active' : '' }}"
                    href="/dashboard/cappbposts">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    App 2 page
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/cappcposts*') ? 'active' : '' }}"
                    href="/dashboard/cappcposts">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    App 3 page
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/footer*') ? 'active' : '' }}" href="/dashboard/footer">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Footer
                </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-center px-3 mt-4 mb-1 text-muted">
                <span>Add New User</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link{{ Request::is('dashboard/register*') ? '' : '' }}" href="/dashboard/register">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    All User
                </a>
            </li>
        </ul>


    </div>
</nav>
