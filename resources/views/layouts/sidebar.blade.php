<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                {{-- <img src="{{ URL::asset('assets/images/logo-dark-sm.png') }}" alt="" height="22"> --}}
                <b style="font-size: 30px;">O</b>
            </span>
            <span class="logo-lg">
                {{-- <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="22"> --}}
                <b style="font-size: 30px;">OASys</b>
            </span>
        </a>

        <a href="index" class="logo logo-light">
            <span class="logo-lg">
                {{-- <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="22"> --}}
                <b style="font-size: 30px;">OASys</b>
            </span>
            <span class="logo-sm">
                {{-- <img src="{{ URL::asset('assets/images/logo-light-sm.png') }}" alt="" height="22"> --}}
                <b style="font-size: 30px;">O</b>
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 header-item vertical-menu-btn topnav-hamburger">
        <span class="hamburger-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->

            <ul class="metismenu list-unstyled" id="side-menu">

                {{-- Dashboard --}}
                <li class="menu-title" data-key="t-applications">Dashboard</li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="icon nav-icon" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-dashboards">Dashboard <b>OAsys</b></span>
                        <span class="badge rounded-pill bg-primary">3</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="icon nav-icon" data-eva="grid-outline"></i>
                        <span class="menu-item" data-key="t-dashboards">Dashboard <b>HR</b></span>
                        <span class="badge rounded-pill bg-danger">5</span>
                    </a>
                </li>

                {{-- Administrator --}}
                @php $isAdmin = true @endphp
                @if ($isAdmin)
                    <li class="menu-title" data-key="t-applications">Administrator</li>

                    {{-- module --}}
                    <li>
                        <a href="javascript: void(0);">
                            <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                            <span class="menu-item" data-key="t-ecommerce">Module</span>
                        </a>
                    </li>

                    {{-- Role --}}
                    <li>
                        <a href="javascript: void(0);">
                            <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                            <span class="menu-item" data-key="t-ecommerce">Role</span>
                        </a>
                    </li>

                    {{-- User --}}
                    <li>
                        <a href="javascript: void(0);">
                            <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                            <span class="menu-item" data-key="t-ecommerce">User</span>
                        </a>
                    </li>
                @endif

                {{-- Request & Approval --}}
                    <li class="menu-title" data-key="t-applications">Request & Approval</li>

                    {{-- Request & Approval Advance --}}
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                            <span class="menu-item" data-key="t-ecommerce">Advance</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">

                            {{-- Approval Advance --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Approval</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Report Advance --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Report</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Request Advance --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Request</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Approval & Request IT --}}
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                            <span class="menu-item" data-key="t-ecommerce">IT</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">

                            {{-- Approval IT --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Approval</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Report IT --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Report</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Request IT --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Request</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Request & Approval MMF --}}
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                            <span class="menu-item" data-key="t-ecommerce">MMF</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">

                            {{-- Aproval MMF --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Approval</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Report MMF --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Report</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Request MMF --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Request</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Approval & Request Payment --}}
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                            <span class="menu-item" data-key="t-ecommerce">Payment</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">

                            {{-- Approval Payment --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Approval</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Report Payment --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Report</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Request Payment --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Request</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Aprroval & Request PH Coverage --}}
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                            <span class="menu-item" data-key="t-ecommerce">PH Coverage</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">

                            {{-- Aprroval PH Coverage --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Approval</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Report PH Coverage --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Report</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Request PH Coverage --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Request</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>
                        </ul>

                        {{-- Aprroval & Request RFC --}}
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                            <span class="menu-item" data-key="t-ecommerce">RFC</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">

                            {{-- Aprroval RFC --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Approval</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Record RFC --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Record</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Request RFC --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Request</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Aproval & Request SKPL --}}
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                            <span class="menu-item" data-key="t-ecommerce">SKPL</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">

                            {{-- Aproval SKPL --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Approval</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Data SKPL --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Data</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- DOT Timesheet SKPL --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">DOT Timesheet</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Request SKPL --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Request</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Approval & Request Travel --}}
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">
                            <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                            <span class="menu-item" data-key="t-ecommerce">Travel</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">

                            {{-- Approval Travel --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Approval</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Report Travel --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Report</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>

                            {{-- Request Travel --}}
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                    <span class="menu-item" data-key="t-dashboards">Request</span>
                                    <span class="badge rounded-pill bg-primary">3</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                {{-- Master --}}
                    <li class="menu-title" data-key="t-applications">Master</li>

                    {{-- Master Approver --}}
                    @php $hasMasterApprover = true @endphp
                    @if ($hasMasterApprover)
                        <li>
                            <a href="javascript: void(0);">
                                <i class="icon nav-icon" data-eva="grid-outline"></i>
                                <span class="menu-item" data-key="t-dashboards">Approver</span>
                            </a>
                        </li>
                    @endif

                    {{-- Master Balance --}}
                    @php $hasMasterBalance = true @endphp
                    @if ($hasMasterBalance)
                        <li>
                            <a href="javascript: void(0);">
                                <i class="icon nav-icon" data-eva="grid-outline"></i>
                                <span class="menu-item" data-key="t-dashboards">Balance</span>
                            </a>
                        </li>
                    @endif

                    {{-- Master Company --}}
                    @php $hasMasterCompany = true @endphp
                    @if ($hasMasterCompany)
                        <li>
                            <a href="javascript: void(0);">
                                <i class="icon nav-icon" data-eva="grid-outline"></i>
                                <span class="menu-item" data-key="t-dashboards">Company</span>
                            </a>
                        </li>
                    @endif

                    {{-- Master Department --}}
                    @php $hasMasterDepartment = true @endphp
                    @if ($hasMasterDepartment)
                        <li>
                            <a href="javascript: void(0);">
                                <i class="icon nav-icon" data-eva="grid-outline"></i>
                                <span class="menu-item" data-key="t-dashboards">Department</span>
                            </a>
                        </li>
                    @endif

                    {{-- Master Designation --}}
                    @php $hasMasterDesignation = true @endphp
                    @if ($hasMasterDesignation)
                        <li>
                            <a href="javascript: void(0);">
                                <i class="icon nav-icon" data-eva="grid-outline"></i>
                                <span class="menu-item" data-key="t-dashboards">Designation</span>
                            </a>
                        </li>
                    @endif

                    {{-- Master Division --}}
                    @php $hasMasterDivision = true @endphp
                    @if ($hasMasterDivision)
                        <li>
                            <a href="javascript: void(0);">
                                <i class="icon nav-icon" data-eva="grid-outline"></i>
                                <span class="menu-item" data-key="t-dashboards">Division</span>
                            </a>
                        </li>
                    @endif

                    {{-- Master Division --}}
                    @php $hasMasterHoliday = true @endphp
                    @if ($hasMasterHoliday)
                        <li>
                            <a href="javascript: void(0);">
                                <i class="icon nav-icon" data-eva="grid-outline"></i>
                                <span class="menu-item" data-key="t-dashboards">Holiday</span>
                            </a>
                        </li>
                    @endif

                    {{-- Master Internal Hiring --}}
                    @php $hasMasterInternalHiring = true @endphp
                    @if ($hasMasterInternalHiring)
                        <li>
                            <a href="javascript: void(0);">
                                <i class="icon nav-icon" data-eva="grid-outline"></i>
                                <span class="menu-item" data-key="t-dashboards">Internal Hiring</span>
                            </a>
                        </li>
                    @endif

                    {{-- Master RFC Activity --}}
                    @php $hasMasterRfcActivity = true @endphp
                    @if ($hasMasterRfcActivity)
                        <li>
                            <a href="javascript: void(0);">
                                <i class="icon nav-icon" data-eva="grid-outline"></i>
                                <span class="menu-item" data-key="t-dashboards">RFC Activity</span>
                            </a>
                        </li>
                    @endif

                    {{-- Master RFC Contractor --}}
                    @php $hasMasterRfcContractor = true @endphp
                    @if ($hasMasterRfcContractor)
                        <li>
                            <a href="javascript: void(0);">
                                <i class="icon nav-icon" data-eva="grid-outline"></i>
                                <span class="menu-item" data-key="t-dashboards">RFC Contractor</span>
                            </a>
                        </li>
                    @endif

                    {{-- Master RFC SK --}}
                    @php $hasMasterRfcSk = true @endphp
                    @if ($hasMasterRfcSk)
                    <li>
                        <a href="javascript: void(0);">
                            <i class="icon nav-icon" data-eva="grid-outline"></i>
                            <span class="menu-item" data-key="t-dashboards">RFC SK</span>
                        </a>
                    </li>
                    @endif

            </ul>
        </div>

        <!-- Sidebar -->
        <div class="p-3 px-4 sidebar-footer">
            <p class="mb-1 main-title">
                <script>
                    document.write(new Date().getFullYear())
                </script> &copy; <b>OAsys</b>.
            </p>
            <p class="mb-0">Developed by <b>KF Planning</b></p>
        </div>
    </div>
</div>
<!-- Left Sidebar End -->