        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-layout="stroke-svg">
            <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                        src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a>
                <div class="back-btn"><i class="fa fa-angle-left"> </i></div>
                <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                </div>
            </div>
            <!-- <div class="logo-icon-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                        src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div> -->
          <div class="logo-icon-wrapper"><a href="{{ route('admin.dashboard') }}">AAMRAM</a></div> 
            <nav class="sidebar-main">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="sidebar-menu">
                    <ul class="sidebar-links" id="simple-bar">
                        <li class="back-btn"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                                    src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
                            <div class="mobile-back text-end"> <span>Back </span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                       
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                href="javascript:void(0)">
                               
                                <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                                </svg><span class="lan-7-1">Master</span></a>
                            <ul class="sidebar-submenu">
                                @can('role.index')
                                    <li><a href="{{ route('admin.role.index') }}">Role</a></li>
                                @endcan
                                @can('user.index')
                                    <li><a href="{{ route('admin.user.index') }}">User</a></li>
                                @endcan
                            @can('user.index')
                                    <li><a href="{{ route('admin.district.index') }}">District</a></li>
                                    @endcan
                                    @can('user.index')
                                    <li><a href="{{ route('admin.city.index') }}">City</a></li>
                                    @endcan

                            @can('user.index')
                            <li><a href="{{ route('admin.product.index') }}">Product</a></li>
                                @endcan
                            </ul>
                        </li>

                        <!-- <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg><span class="lan-7-1">Master</span></a>
                            <ul class="sidebar-submenu">
                                
                             
        
                           
                          
                            </ul>
                    </li> -->

                    <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                        href="javascript:void(0)">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                        </svg><span class="lan-7-1">Inword</span></a>
                        <ul class="sidebar-submenu">

                      
                        
                        </ul>
                </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                        href="javascript:void(0)">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-file') }}"></use>
                        </svg><span class="lan-7-1">Sale Order</span></a>
                        <ul class="sidebar-submenu">
                          
                        </ul>
                    </li>
                   
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                        href="javascript:void(0)">
                        <svg class="stroke-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                        </svg><span class="lan-7-1">Outword</span></a>
                        <ul class="sidebar-submenu">
                           
                           
                        </ul>
                    </li>

                  
                        
                    </ul>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </div>
            </nav>
        </div>
        <!-- Page Sidebar Ends-->
