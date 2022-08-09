<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <header class="header header-sticky mb-4">
        <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3 d-lg-none d-sm-block" type="button"
                onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                <svg class="icon icon-lg">
                    <use xlink:href="/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button><a class="header-brand d-md-none" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="assets/brand/coreui.svg#full"></use>
                </svg></a>
            <ul class="header-nav d-none d-md-flex">
                <li class="nav-item"><a class="nav-link" href="#">{{ $title }}</a></li>
            </ul>
            <ul class="header-nav ms-auto">
                <li class="nav-item">{{ auth()->user()->name }}</li>
            </ul>
            <ul class="header-nav ms-3">
                <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                        role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-md"><img class="avatar-img" src="/img/8.jpg" alt="user@email.com">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <div class="dropdown-header bg-light py-2">
                            <a class="dropdown-item" href="#">
                                <div class="dropdown-divider"></div>
                                <form action="/Logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <svg class="icon me-2">
                                            <use xlink:href="icons/svg/free.svg#cil-account-logout">
                                            </use>
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-0 ms-2">
                    <li class="breadcrumb-item">
                        <span>Home</span>
                    </li>
                    <li class="breadcrumb-item active"><span>{{  $title }}</span></li>
                </ol>
            </nav>
        </div>
    </header>