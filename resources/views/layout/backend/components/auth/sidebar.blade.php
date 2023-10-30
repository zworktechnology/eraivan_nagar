<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                    src="{{ asset('assets/backend/images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark"
                    src="{{ asset('assets/backend/images/logo/logo_dark.png') }}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                    src="{{ asset('assets/backend/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                src="{{ asset('assets/backend/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="letter-box.html">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/backend/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/backend/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-8">Applications</h6>
                    </div>
                  </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack">    </i>
                        <label class="badge badge-light-secondary">New</label><a class="sidebar-link sidebar-title" href="#">
                        <svg class="stroke-icon">
                            <use href="../assets/svg/icon-sprite.svg#stroke-project"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="../assets/svg/icon-sprite.svg#fill-project"></use>
                        </svg><span>Plot Booking           </span></a>
                        <ul class="sidebar-submenu">
                        <li><a href="{{ route('booking.index') }}">Booking List</a></li>
                        <li><a href="projectcreate.html">Create new</a></li>
                        </ul>
                  </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('plot.index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/backend/svg/icon-sprite.svg#stroke-maps') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/backend/svg/icon-sprite.svg#fill-maps') }}"></use>
                            </svg>
                            <span>Plot</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('reference.index') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/backend/svg/icon-sprite.svg#stroke-user') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/backend/svg/icon-sprite.svg#fill-user') }}"></use>
                            </svg>
                            <span>Reference</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
