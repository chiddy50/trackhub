
<div class="iq-sidebar  sidebar-default">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="{{route('dashboard')}}" class="header-logo">
            {{-- <img src="{{asset('images/logo.png')}}" class="img-fluid  light-logo" alt="logo"> --}}
            <h5 class="logo-title text-white ml-3 mt-1">Trackhub</h5>
        </a>
        <div class="iq-menu-bt-sidebar ">
            <svg class="svg-icon feather feather-repeat wrapper-menu animated rotation"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="17 1 21 5 17 9"></polyline>
            <path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
            </svg>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="{{activeRoute('dashboard')}}">
                    <a href="{{route('dashboard')}}" class="svg-icon">                        
                            <svg class="svg-icon feather feather-home"  width="20" height="20" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        <span class="ml-3">Dashboards</span>
                    </a>
                </li>

                <li class="{{activeRoute('add-rider')}}">
                    <a href="#addRider" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="las la-user-plus"></i><span>Fleet Mgt</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="addRider" class="iq-submenu collapse" data-parent="#otherpage">
                        <li class="{{activeRoute('add-rider')}}">
                            <a href="{{route('rider.add')}}">
                                <i class="las la-bomb"></i><span>Add Riders</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('rider-list')}}">
                            <a href="{{route('rider.list')}}">
                                <i class="las la-exclamation-circle"></i><span>Manage Rider</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{activeRoute('add-courier')}}">
                    <a href="{{route('add.courier')}}" class="svg-icon">                        
                            {{-- <svg class="svg-icon feather feather-home"  width="20" height="20" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="svg-icon feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        <span class="ml-3">Courier</span>
                    </a>
                </li>

                <li class="{{activeRoute('vehicle-list')}}">
                    <a href="{{route('vehicle.list')}}" class="svg-icon">                        
                            {{-- <svg class="svg-icon feather feather-home"  width="20" height="20" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="svg-icon feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                        <span class="ml-3">Vehicles</span>
                    </a>
                </li>

                <li class="{{activeRoute('orders')}}">
                    <a href="{{route('view.orders')}}" class="svg-icon">                        
                            {{-- <svg class="svg-icon feather feather-home"  width="20" height="20" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="svg-icon feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        <span class="ml-3">Orders</span>
                    </a>
                </li>

                <li class="">
                    {{-- <a href="#otherpage" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i>
                            <svg width="20" class="svg-icon" id="iq-main-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                            </svg>
                        </i>
                        <span>other page</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a> --}}

                    <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        
                        {{-- <li class="">
                                <a href="{{route('maintenance')}}" class="">
                                    <i class="las la-cubes"></i><span>Maintenance</span>
                                </a>
                            <ul id="pages-maintenance" class="iq-submenu collapse"  data-parent="#otherpage">
                            </ul>
                        </li> --}}
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
    </div>