    <aside class="left-sidebar with-vertical">
        <div><!-- ---------------------------------- -->
            <!-- Start Vertical Layout Sidebar -->
            <!-- ---------------------------------- -->
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="{{ asset('images/logos/dark-logo.svg') }}" class="text-nowrap logo-img">
                    <img src="{{ asset('assets/images/logos/dark-logo.svg') }}" class="dark-logo" alt="Logo-Dark" />
                    <img src="{{ asset('assets/images/logos/light-logo.svg') }}" class="light-logo" alt="Logo-light" />
                </a><a href="javascript:void(0)"
                    class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                    <i class="ti ti-x"></i>
                </a>
            </div>

            <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                <ul id="sidebarnav">
                    <!-- ---------------------------------- -->
                    <!-- Home -->
                    <!-- ---------------------------------- -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Home</span>
                    </li>
                    <!-- ---------------------------------- -->
                    <!-- Dashboard -->
                    <!-- ---------------------------------- -->
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-home"></i>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.category.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-list"></i>
                            </span>
                            <span class="hide-menu">Kategori</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.product.index') }}" aria-expanded="false">
                            <span>
                                <i class="ti ti-package"></i>
                            </span>
                            <span class="hide-menu">Produk</span>
                        </a>
                    </li>
                </ul>
                </li>
                </ul>
            </nav>
        </div>
    </aside>
