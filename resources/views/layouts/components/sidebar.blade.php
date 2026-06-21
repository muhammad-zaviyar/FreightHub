
<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="{{ route('dashboard') }}" class="header-logo">
            <img src="{{ asset('build/assets/images/brand-logos/desktop-logo.png') }}"  alt="logo" class="desktop-logo">
            <img src="{{ asset('build/assets/images/brand-logos/toggle-logo.png') }}"   alt="logo" class="toggle-logo">
            <img src="{{ asset('build/assets/images/brand-logos/desktop-white.png') }}" alt="logo" class="desktop-white">
            <img src="{{ asset('build/assets/images/brand-logos/toggle-white.png') }}"  alt="logo" class="toggle-white">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>

            <ul class="main-menu">

                <!-- ===== MAIN ===== -->
                <li class="slide__category"><span class="category-name">Main</span></li>

                <!-- Dashboard — all roles -->
                <li class="slide">
                    <a href="{{ route('dashboard') }}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm5 15h-2v-6H9v6H7v-7.81l5-4.5 5 4.5V18z"/>
                        </svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>

                <!-- ===== OPERATIONS ===== -->
                @canany(['airwaybill.create', 'airwaybill.view', 'parcel.track', 'complaint.create', 'complaint.view', 'complaint.manage'])
                <li class="slide__category"><span class="category-name">Operations</span></li>
                @endcanany

                {{-- Air Way Bill --}}
                @canany(['airwaybill.create', 'airwaybill.view'])
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M21 3L3 10.53v.98l6.84 2.65L12.48 21h.98L21 3z"/>
                        </svg>
                        <span class="side-menu__label">Air Way Bill</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Air Way Bill</a></li>
                        @can('airwaybill.create')
                        <li class="slide">
                            <a href="{{ route('airwaybill.create') }}" class="side-menu__item">Create AWB</a>
                        </li>
                        @endcan
                        @can('airwaybill.view')
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">AWB List</a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcanany

                {{-- Track Parcel --}}
                @can('parcel.track')
                <li class="slide">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M17 8C8 10 5.9 16.17 3.82 21H5.71c.32-.83.69-1.59 1.08-2.23C9 14 13 12 21 12v-4L17 8z"/>
                        </svg>
                        <span class="side-menu__label">Track Parcel</span>
                    </a>
                </li>
                @endcan

                {{-- Complaints --}}
                @canany(['complaint.create', 'complaint.view', 'complaint.manage'])
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/>
                        </svg>
                        <span class="side-menu__label">Complaints</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Complaints</a></li>
                        @can('complaint.create')
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">New Complaint</a>
                        </li>
                        @endcan
                        @can('complaint.view')
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">All Complaints</a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcanany

                <!-- ===== ACCOUNTS ===== -->
                @canany(['accounts.view', 'invoice.receive', 'invoice.view'])
                <li class="slide__category"><span class="category-name">Accounts</span></li>

                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                        </svg>
                        <span class="side-menu__label">Accounts</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Accounts</a></li>
                        @can('accounts.view')
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">Overview</a>
                        </li>
                        @endcan
                        @canany(['invoice.receive', 'invoice.view'])
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">Invoices</a>
                        </li>
                        @endcanany
                    </ul>
                </li>
                @endcanany

                <!-- ===== DELIVERY ===== -->
                @canany(['delivery.upload_picture', 'delivery.view'])
                <li class="slide__category"><span class="category-name">Delivery</span></li>

                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zm-.5 1.5 1.96 2.5H17V9.5h2.5zM6 18c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm2.22-3c-.55-.61-1.33-1-2.22-1s-1.67.39-2.22 1H3V6h12v9H8.22zM18 18c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z"/>
                        </svg>
                        <span class="side-menu__label">Delivery</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Delivery</a></li>
                        @can('delivery.upload_picture')
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">Upload Picture</a>
                        </li>
                        @endcan
                        @can('delivery.view')
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">Delivery List</a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcanany

                <!-- ===== ADMIN ===== -->
                @role('super_admin')
                <li class="slide__category"><span class="category-name">Administration</span></li>

                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368">
                            <path d="M0 0h24v24H0V0z" fill="none"/>
                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                        </svg>
                        <span class="side-menu__label">Users</span>
                        <i class="ri-arrow-right-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1"><a href="javascript:void(0)">Users</a></li>
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">All Users</a>
                        </li>
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">Create User</a>
                        </li>
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">Roles & Permissions</a>
                        </li>
                    </ul>
                </li>
                @endrole

            </ul>

            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </div>
        </nav>
    </div>
    <!-- End::main-sidebar -->

</aside>
