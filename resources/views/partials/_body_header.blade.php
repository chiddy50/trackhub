
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light">

        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
            <i class="ri-menu-line wrapper-menu"></i>
            <a href="index.html" class="header-logo">
            <img src="{{asset('images/logo.png')}}" class="img-fluid  light-logo" alt="logo"><h5 class="logo-title ml-3 mt-1">EmailCHIMP</h5>
            </a>
            <div class="navbar-breadcrumb">
                            <h4>Dashboard</h4>
                        </div>
        </div>
        <div class="d-flex align-items-center justify-content-between">
            {{-- <div class="iq-search-bar device-search">
                <form action="#" class="searchbox">
                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                <input type="text" class="text search-input" placeholder="Search for your document , people,...">
                </form>
            </div> --}}
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">  
                        {{-- <li class="nav-item nav-icon search-content">
                            <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-search-line"></i>
                            </a>
                            <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                <form action="#" class="searchbox p-2">
                                    <div class="form-group mb-0 position-relative">
                                    <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                    <a href="#" class="search-link"><i class="las la-search"></i></a> 
                                    </div>
                                </form>
                            </div>
                        </li>                --}}

                        {{-- <li class="nav-item nav-icon dropdown"> 
                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButtontwo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-notification-line"></i>
                                        <span class="bg-primary dots"></span>
                                    </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButtontwo">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                        <div class="p-4">
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pb-4">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="{{asset('images/user/01.jpg')}}" alt="01">
                                                    </div>
                                                    <div class="media-body ml-4">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Emma Watson</h5>
                                                            <small class="text-dark"><b>12 : 47 pm</b></small>
                                                        </div>
                                                        <small class="mb-0 font-size-14">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="{{asset('images/user/02.jpg')}}" alt="02">
                                                    </div>
                                                    <div class="media-body ml-4">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Ashlynn Franci</h5>
                                                            <small class="text-dark"><b>11 : 30 pm</b></small>
                                                        </div>
                                                        <small class="mb-0 font-size-14">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card pt-3">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small" src="{{asset('images/user/03.jpg')}}" alt="03">
                                                    </div>
                                                    <div class="media-body ml-4">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Kianna Carder</h5>
                                                            <small class="text-dark"><b>11 : 21 pm</b></small>
                                                        </div>
                                                        <small class="mb-0 font-size-14">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a class="right-ic btn btn-primary btn-block position-relative iq-logout" href="#" role="button">
                                            View All
                                        </a>                                   
                                    </div>
                                </div>
                            </div>
                        </li> --}}

                        <li class="nav-item nav-icon dropdown"> 
                            <a href="#" class="search-toggle iq-user-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img
                                src="@if($user->display_image) 
                                {{  asset('uploads/images/'.$user->display_image) }} 
                                @else 
                                {{ asset('images/user/one.png') }} 
                                @endif"
                                 class="img-fluid rounded-small" alt="user">
                                {{-- <img src="{{asset('images/user/one.png')}}" class="img-fluid rounded-small" alt="user"> --}}

                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                            
                                <div class="card mb-0">
                                
                                    <div class="card-body p-0">
                                        <div class="profile-header">
                                            <div class="profile-details">
                                                <a href="{{route('userdetails.userprofile')}}" class="iq-sub-card"> 
                                                    <div class="rounded bg-info iq-card-icon-small">
                                                        <i class="ri-file-user-line"></i>
                                                    </div>
                                                    <div class="media-body">
                                                    <h5 class="mb-0">My Profile</h5>
                                                    <p class="mb-0 font-size-14">View personal profile details</p>
                                                    </div>
                                                </a>
                                            </div>
                                            {{-- <div class="profile-details">
                                                <a href="{{route('userdetails.userprofileedit')}}" class="iq-sub-card">
                                                    <div class="rounded bg-success iq-card-icon-small">
                                                        <i class="ri-profile-line"></i>
                                                    </div>
                                                    <div class="media-body">
                                                    <h5 class="mb-0">Edit Profile</h5>
                                                    <p class="mb-0 font-size-14">Modify Your details</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="profile-details">
                                                <a href="{{route('account')}}" class="iq-sub-card">
                                                    <div class="rounded bg-danger iq-card-icon-small">
                                                        <i class="ri-account-box-line"></i>
                                                    </div>
                                                    <div class="media-body">
                                                    <h5 class="mb-0">Account</h5>
                                                    <p class="mb-0 font-size-14">Manage your account parameters.</p>
                                                    </div>
                                                </a>
                                            </div>


                                            <div class="profile-details">
                                                <a href="{{route('setting')}}" class="iq-sub-card border-none">
                                                    <div class="rounded bg-warning iq-card-icon-small">
                                                    <i class="ri-lock-line"></i>
                                                    </div>
                                                    <div class="media-body">
                                                    <h5 class="mb-0">Settings</h5>
                                                    <p class="mb-0 font-size-14">Control your privacy parameters.</p>
                                                    </div>
                                                </a>
                                            </div> --}}
                                            
                                        </div>

                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <a class="right-ic btn btn-primary btn-block position-relative iq-logout" role="button">
                                                <button type="submit" style="background: transparent; border: none;" >Log Out</button>                                                    
                                            </a>
                                        </form>                                    
                                    </div>
                                </div>
                            </div>
                        
                        </li>                    
                    </ul>                     
                </div> 
            </div>
            </div>
        </nav>
    </div>
</div>
