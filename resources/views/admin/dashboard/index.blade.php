@extends('layouts.simple.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <!-- Range slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/rangeslider/rSlider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/fullcalender.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>
                        Project Management </h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Project-Management</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row size-column">
            <div class="col-xxl-9 box-col-12">
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card o-hidden small-widget">
                            <div class="card-body total-project border-b-primary border-2"><span
                                    class="f-light f-w-500 f-14">Total Project</span>
                                <div class="project-details">
                                    <div class="project-counter">
                                        <h2 class="f-w-600">1,523</h2><span class="f-12 f-w-400">(This month)</span>
                                    </div>
                                    <div class="product-sub bg-primary-light">
                                        <svg class="invoice-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#color-swatch') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                                <ul class="bubbles">
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card o-hidden small-widget">
                            <div class="card-body total-Progress border-b-warning border-2"> <span
                                    class="f-light f-w-500 f-14">In Progress</span>
                                <div class="project-details">
                                    <div class="project-counter">
                                        <h2 class="f-w-600">836</h2><span class="f-12 f-w-400">(This month) </span>
                                    </div>
                                    <div class="product-sub bg-warning-light">
                                        <svg class="invoice-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#tick-circle') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                                <ul class="bubbles">
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card o-hidden small-widget">
                            <div class="card-body total-Complete border-b-secondary border-2"><span
                                    class="f-light f-w-500 f-14">Complete</span>
                                <div class="project-details">
                                    <div class="project-counter">
                                        <h2 class="f-w-600">475</h2><span class="f-12 f-w-400">(This month) </span>
                                    </div>
                                    <div class="product-sub bg-secondary-light">
                                        <svg class="invoice-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#add-square') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                                <ul class="bubbles">
                                    <li class="bubble"> </li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"> </li>
                                    <li class="bubble"></li>
                                    <li class="bubble"> </li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card o-hidden small-widget">
                            <div class="card-body total-upcoming"><span class="f-light f-w-500 f-14">Upcoming</span>
                                <div class="project-details">
                                    <div class="project-counter">
                                        <h2 class="f-w-600">189</h2><span class="f-12 f-w-400">(This month) </span>
                                    </div>
                                    <div class="product-sub bg-light-light">
                                        <svg class="invoice-icon">
                                            <use href="{{ asset('assets/svg/icon-sprite.svg#edit-2') }}"></use>
                                        </svg>
                                    </div>
                                </div>
                                <ul class="bubbles">
                                    <li class="bubble"> </li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                    <li class="bubble"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header card-no-border total-revenue">
                                <h4>Project Statistics</h4>
                                <div class="sales-chart-dropdown-select">
                                    <div class="card-header-right-icon">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle dropdown-toggle-store"
                                                id="dropdownMenuButtonStore" data-bs-toggle="dropdown"
                                                aria-expanded="false">This Week</button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuButtonStore"><a class="dropdown-item"
                                                    href="#">This Day</a><a class="dropdown-item"
                                                    href="#">This Month</a><a class="dropdown-item"
                                                    href="#">This year</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="statistics">
                                    <div id="statisticschart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header card-no-border total-revenue">
                                <h4>Today Work</h4><a href="">View All </a>
                            </div>
                            <div class="card-body pt-0">
                                <div class="today-work-table table-responsive custom-scrollbar">
                                    <table class="today-working-table w-100">
                                        <tbody>
                                            <tr>
                                                <td><span class="f-w-500 f-light d-block f-12 mb-1">App Design</span><a
                                                        class="f-w-500 f-14" href="">NFT
                                                        Illustration...</a>
                                                </td>
                                                <td> <span class="f-w-500 f-light d-block f-12 mb-1">Assigned to</span><a
                                                        class="f-w-500 f-14" href="">Cody
                                                        Fisher</a></td>
                                                <td><span class="f-w-500 f-light d-block f-12 mb-1">Days Left</span><a
                                                        class="f-w-500 f-14" href="">02</a></td>
                                                <td class="text-end">
                                                    <div class="badge-light-primary product-sub badge rounded-pill ">
                                                        <span>High</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="f-w-500 f-light d-block f-12 mb-1">App Design</span><a
                                                        class="f-w-500 f-14" href="">NFT
                                                        Illustration...</a>
                                                </td>
                                                <td> <span class="f-w-500 f-light d-block f-12 mb-1">Arlene McCoy</span><a
                                                        class="f-w-500 f-14" href="">Assigned
                                                        to</a></td>
                                                <td><span class="f-w-500 f-light d-block f-12 mb-1">Days Left</span><a
                                                        class="f-w-500 f-14" href="">12</a></td>
                                                <td class="text-end">
                                                    <div class="badge-light-primary product-sub badge rounded-pill ">
                                                        <span>High</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="f-w-500 f-light d-block f-12 mb-1">Web Design</span><a
                                                        class="f-w-500 f-14" href="">Appron’s 3D
                                                        Co...</a>
                                                </td>
                                                <td> <span class="f-w-500 f-light d-block f-12 mb-1">Assigned to</span><a
                                                        class="f-w-500 f-14" href="">Kristin
                                                        Watson</a></td>
                                                <td><span class="f-w-500 f-light d-block f-12 mb-1">Days Left</span><a
                                                        class="f-w-500 f-14" href="">12</a></td>
                                                <td class="text-end">
                                                    <div class="badge-light-warning product-sub badge rounded-pill ">
                                                        <span>Medium</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="f-w-500 f-light d-block f-12 mb-1">Desktop App</span><a
                                                        class="f-w-500 f-14" href="">Rental Car</a>
                                                </td>
                                                <td> <span class="f-w-500 f-light d-block f-12 mb-1">Assigned to</span><a
                                                        class="f-w-500 f-14" href="">Darlene
                                                        Robertson</a>
                                                </td>
                                                <td><span class="f-w-500 f-light d-block f-12 mb-1">Days Left</span><a
                                                        class="f-w-500 f-14" href="">05</a></td>
                                                <td class="text-end">
                                                    <div class="badge-light-secondary product-sub badge rounded-pill ">
                                                        <span>low</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="f-w-500 f-light d-block f-12 mb-1">Template
                                                        Design</span><a class="f-w-500 f-14"
                                                        href="">E-commerce</a></td>
                                                <td> <span class="f-w-500 f-light d-block f-12 mb-1">Assigned to</span><a
                                                        class="f-w-500 f-14" href="">Wade
                                                        Warren</a></td>
                                                <td><span class="f-w-500 f-light d-block f-12 mb-1">Days Left</span><a
                                                        class="f-w-500 f-14" href="">31</a></td>
                                                <td class="text-end">
                                                    <div class="badge-light-primary product-sub badge rounded-pill ">
                                                        <span>High</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="f-w-500 f-light d-block f-12 mb-1">App Design</span><a
                                                        class="f-w-500 f-14" href="">Food
                                                        Delivery</a></td>
                                                <td> <span class="f-w-500 f-light d-block f-12 mb-1">Assigned to</span><a
                                                        class="f-w-500 f-14" href="">Smith John</a>
                                                </td>
                                                <td><span class="f-w-500 f-light d-block f-12 mb-1">Days Left</span><a
                                                        class="f-w-500 f-14" href="">20</a></td>
                                                <td class="text-end">
                                                    <div class="badge-light-warning product-sub badge rounded-pill ">
                                                        <span>Medium</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header card-no-border total-revenue">
                                <h4>Important Project List</h4><a class="d-none d-sm-block"
                                    href="">View
                                    All</a>
                            </div>
                            <div class="card-body pt-0 row important-project">
                                <div class="col-xl-4 col-md-6 box-col-6">
                                    <div class="projectlist-card">
                                        <div class="projectlist">
                                            <div class="project-data"><img class="nft-img img-fluid"
                                                    src="{{ asset('assets/images/dashboard-2/category/1.png') }}"
                                                    alt="nft">
                                                <div> <a class="f-14 f-w-500 d-block" href="">Net
                                                        Banking
                                                        App</a><span class="f-light f-12 f-w-500">Client: Jordan</span>
                                                </div>
                                            </div><span class="badge rounded-pill badge-primary bg-light-primary">7 Days
                                                Left</span>
                                        </div>
                                        <div class="project-date"><span class="f-light f-12 f-w-500">10 Oct, 2024
                                            </span><span class="f-light f-12 f-w-500">15 Nov, 2024 </span></div>
                                        <div class="range_4">
                                            <div class="slider-container">
                                                <div class="slider_thumb range-slider_thumb"></div>
                                                <div class="range-slider_line">
                                                    <div class="slider_line range-slider_line-fill"></div>
                                                </div>
                                                <input class="slider_input range-slider_input" type="range"
                                                    value="50;" min="0" max="100">
                                            </div>
                                        </div>
                                        <div class="project-comment">
                                            <div class="avatar-showcase">
                                                <div class="avatars">
                                                    <div class="customers d-inline-block avatar-group">
                                                        <ul>
                                                            <li class="d-inline-block"><img class="img-25 rounded-circle"
                                                                    src="{{ asset('assets/images/user/18.png') }}"
                                                                    alt="">
                                                            </li>
                                                            <li class="d-inline-block"><img class="img-25 rounded-circle"
                                                                    src="{{ asset('assets/images/user/15.png') }}"
                                                                    alt="">
                                                            </li>
                                                            <li class="d-inline-block"><img class="img-25 rounded-circle"
                                                                    src="{{ asset('assets/images/user/19.png') }}"
                                                                    alt="">
                                                            </li>
                                                            <li class="d-inline-block"><img class="img-25 rounded-circle"
                                                                    src="{{ asset('assets/images/user/17.png') }}"
                                                                    alt="">
                                                            </li>
                                                            <li class="d-inline-block">
                                                                <p class="rounded-circle bg-light">+2 </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-comment-icon">
                                                <div class="project-link">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#messages-2') }}">
                                                        </use>
                                                    </svg><span>18 </span>
                                                </div>
                                                <div class="project-link">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#paperclip') }}">
                                                        </use>
                                                    </svg><span>2 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-meeting-details">
                                            <div class="project-meeting"><span class="f-light f-12 f-w-500">Last
                                                    Meeting</span><span class="f-light f-12 f-w-500">Next Meeting </span>
                                            </div>
                                            <div class="project-meeting-time"><a class="f-14 f-w-500 "
                                                    href="">2 Nov 23,10:00 AM</a><a
                                                    class="f-14 f-w-500 " href="">8 Nov
                                                    23,09:45 AM</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 box-col-6">
                                    <div class="projectlist-card">
                                        <div class="projectlist">
                                            <div class="project-data"><img class="nft-img img-fluid"
                                                    src="{{ asset('assets/images/dashboard-2/category/2.png') }}"
                                                    alt="nft">
                                                <div><a class="f-14 f-w-500 d-block" href="">NFT
                                                        Website</a><span class="f-light f-12 f-w-500">Client : Albert
                                                        Flores</span></div>
                                            </div><span class="badge rounded-pill badge-primary bg-light-primary">24 Days
                                                Left</span>
                                        </div>
                                        <div class="project-date"> <span class="f-light f-12 f-w-500">15 Oct,
                                                2024</span><span class="f-light f-12 f-w-500">01 Dec, 2024</span></div>
                                        <div class="range_4">
                                            <div class="slider-container">
                                                <div class="slider_thumb range-slider_thumb"> </div>
                                                <div class="range-slider_line">
                                                    <div class="slider_line range-slider_line-fill"></div>
                                                </div>
                                                <input class="slider_input range-slider_input" type="range"
                                                    value="78" min="0" max="100">
                                            </div>
                                        </div>
                                        <div class="project-comment">
                                            <div class="avatar-showcase">
                                                <div class="avatars">
                                                    <div class="customers d-inline-block avatar-group">
                                                        <ul>
                                                            <li class="d-inline-block"><img class="img-25 rounded-circle"
                                                                    src="{{ asset('assets/images/user/24.png') }}"
                                                                    alt="">
                                                            </li>
                                                            <li class="d-inline-block"><img class="img-25 rounded-circle"
                                                                    src="{{ asset('assets/images/user/21.png') }}"
                                                                    alt="">
                                                            </li>
                                                            <li class="d-inline-block"><img class="img-25 rounded-circle"
                                                                    src="{{ asset('assets/images/user/23.png') }}"
                                                                    alt="">
                                                            </li>
                                                            <li class="d-inline-block"><img class="img-25 rounded-circle"
                                                                    src="{{ asset('assets/images/user/22.png') }}"
                                                                    alt="">
                                                            </li>
                                                            <li class="d-inline-block">
                                                                <p class="rounded-circle bg-light">+5 </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-comment-icon">
                                                <div class="project-link">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#messages-2') }}">
                                                        </use>
                                                    </svg><span>18</span>
                                                </div>
                                                <div class="project-link">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#paperclip') }}">
                                                        </use>
                                                    </svg><span>2 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-meeting-details">
                                            <div class="project-meeting"> <span class="f-light f-12 f-w-500">Last
                                                    Meeting</span><span class="f-light f-12 f-w-500">Next Meeting </span>
                                            </div>
                                            <div class="project-meeting-time"><a class="f-14 f-w-500 "
                                                    href=""> 2 Nov 23,10:00 AM</a><a
                                                    class="f-14 f-w-500 " href="">8 Nov
                                                    23,09:45 AM</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 box-col-none marketing-app-card">
                                    <div class="projectlist-card">
                                        <div class="projectlist">
                                            <div class="project-data"> <img class="nft-img img-fluid"
                                                    src="{{ asset('assets/images/dashboard-2/category/3.png') }}"
                                                    alt="nft">
                                                <div><a class="f-14 f-w-500 d-block"
                                                        href="">Marketing App
                                                    </a><span class="f-light f-12 f-w-500">Client : Jane Cooper </span>
                                                </div>
                                            </div><span class="badge rounded-pill badge-primary bg-light-primary">31 Days
                                                Left</span>
                                        </div>
                                        <div class="project-date"><span class="f-light f-12 f-w-500">01 Nov, 2024
                                            </span><span class="f-light f-12 f-w-500">18 Dec, 2024 </span></div>
                                        <div class="range_4">
                                            <div class="slider-container">
                                                <div class="slider_thumb range-slider_thumb"></div>
                                                <div class="range-slider_line">
                                                    <div class="slider_line range-slider_line-fill"></div>
                                                </div>
                                                <input class="slider_input range-slider_input" type="range"
                                                    value="35" min="0" max="100">
                                            </div>
                                        </div>
                                        <div class="project-comment">
                                            <div class="avatar-showcase">
                                                <div class="avatars">
                                                    <div class="customers d-inline-block avatar-group">
                                                        <ul>
                                                            <li class="d-inline-block"><img class="img-25 rounded-circle"
                                                                    src="{{ asset('assets/images/user/25.png') }}"
                                                                    alt="">
                                                            </li>
                                                            <li class="d-inline-block"><img class="img-25 rounded-circle"
                                                                    src="{{ asset('assets/images/user/26.png') }}"
                                                                    alt="">
                                                            </li>
                                                            <li class="d-inline-block"><img class="img-25 rounded-circle"
                                                                    src="{{ asset('assets/images/user/27.png') }}"
                                                                    alt="">
                                                            </li>
                                                            <li class="d-inline-block"> <img class="img-25 rounded-circle"
                                                                    src="{{ asset('assets/images/user/28.png') }}"
                                                                    alt="">
                                                            </li>
                                                            <li class="d-inline-block">
                                                                <p class="rounded-circle bg-light">+8 </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-comment-icon">
                                                <div class="project-link">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#messages-2') }}">
                                                        </use>
                                                    </svg><span class="f-light f-12 f-w-500">20</span>
                                                </div>
                                                <div class="project-link">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#paperclip') }}">
                                                        </use>
                                                    </svg><span class="f-light f-12 f-w-500">7</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-meeting-details">
                                            <div class="project-meeting"> <span class="f-light f-12 f-w-500">Last
                                                    Meeting</span><span class="f-light f-12 f-w-500">Next Meeting </span>
                                            </div>
                                            <div class="project-meeting-time"> <a class="f-14 f-w-500 "
                                                    href="">6 Nov 23,2:56 PM</a><a
                                                    class="f-14 f-w-500 " href="">10 Nov 23,
                                                    7:12
                                                    AM</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="card recent-order">
                            <div class="card-header card-no-border total-revenue">
                                <h4 class="m-0">All Project Table</h4>
                                <div class="header-top"></div><a href="">View All </a>
                            </div>
                            <div class="card-body pt-0">
                                <div class="project-table table-responsive custom-scrollbar">
                                    <table class="order-table project-table w-100">
                                        <thead>
                                            <tr>
                                                <th>Project Name</th>
                                                <th>Client Name</th>
                                                <th>End Date</th>
                                                <th>Assigned to</th>
                                                <th>Status</th>
                                                <th>Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="project-comment  d-flex gap-2">
                                                        <div class="radial-chart-wrap">
                                                            <div class="widgetsChart" id="widgetsChart1"></div>
                                                        </div>
                                                        <div> <a class="f-w-500 f-14 " href="">Pet
                                                                App
                                                                Design</a>
                                                            <div class="project-comment-icon">
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#messages-2') }}">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">20</span>
                                                                </div>
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#paperclip') }}">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">7</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">Darrell Steward</a><span
                                                            class="f-w-500 f-light f-12 d-block">darrells@example.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">15 Nov, 2024</a><span
                                                            class="f-w-500 f-light f-12 d-block">8 Days Left</span></div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">Team Roha</a><span
                                                            class="f-w-500 f-light f-12 d-block">12 Member</span></div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="txt-primary d-flex gap-2 align-items-center justify-content-center">
                                                        <span class="pending bg-primary"></span><span
                                                            class="f-w-500 f-13 txt-primary">Active</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon11" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon11"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="project-comment  d-flex gap-2">
                                                        <div class="radial-chart-wrap">
                                                            <div class="widgetsChart" id="widgetsChart2"></div>
                                                        </div>
                                                        <div> <a class="f-w-500 f-14 "
                                                                href="">Chain Desktop
                                                                App</a>
                                                            <div class="project-comment-icon">
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#messages-2') }}">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">20</span>
                                                                </div>
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#paperclip') }}">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">7</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">Eleanor Pena</a><span
                                                            class="f-w-500 f-light f-12 d-block">pena12@example.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">20 Nov, 2024</a><span
                                                            class="f-w-500 f-light f-12 d-block">13 Days Left</span></div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">Team Suresh</a><span
                                                            class="f-w-500 f-light f-12 d-block">10 Member</span></div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="txt-warning d-flex gap-2 align-items-center justify-content-center">
                                                        <span class="pending bg-warning"></span><span
                                                            class="f-w-500 f-13 txt-warning">On Hold</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon12" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon12"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="project-comment  d-flex gap-2">
                                                        <div class="radial-chart-wrap">
                                                            <div class="widgetsChart" id="widgetsChart3"></div>
                                                        </div>
                                                        <div> <a class="f-w-500 f-14 "
                                                                href="">Business Web
                                                                Design</a>
                                                            <div class="project-comment-icon">
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#messages-2') }}">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">20</span>
                                                                </div>
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#paperclip') }}">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">7</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">Robert Fox</a><span
                                                            class="f-w-500 f-light f-12 d-block">foxxxx8s@example.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">22 Nov, 2024</a><span
                                                            class="f-w-500 f-light f-12 d-block">15 Days Left</span></div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">Team Liza</a><span
                                                            class="f-w-500 f-light f-12 d-block">7 Member</span></div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="txt-secondary d-flex gap-2 align-items-center justify-content-center">
                                                        <span class="pending bg-secondary"></span><span
                                                            class="f-w-500 f-13 txt-secondary">Pending</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon13" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon13"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="project-comment  d-flex gap-2">
                                                        <div class="radial-chart-wrap">
                                                            <div class="widgetsChart" id="widgetsChart4"></div>
                                                        </div>
                                                        <div> <a class="f-w-500 f-14 " href="">NFT
                                                                App
                                                                Design</a>
                                                            <div class="project-comment-icon">
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#messages-2') }}">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">20</span>
                                                                </div>
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#paperclip') }}">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">7</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">Arlene McCoy</a><span
                                                            class="f-w-500 f-light f-12 d-block">arlene78@example.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">28 Nov, 2024</a><span
                                                            class="f-w-500 f-light f-12 d-block">21 Days Left</span></div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">Team Sulekha</a><span
                                                            class="f-w-500 f-light f-12 d-block">9 Member</span></div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="txt-primary d-flex gap-2 align-items-center justify-content-center">
                                                        <span class="pending bg-primary"></span><span
                                                            class="f-w-500 f-13 txt-primary">Active</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon14" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon14"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="project-comment  d-flex gap-2">
                                                        <div class="radial-chart-wrap">
                                                            <div class="widgetsChart" id="widgetsChart5"></div>
                                                        </div>
                                                        <div> <a class="f-w-500 f-14 "
                                                                href="">Digital Avtar
                                                                Web Design</a>
                                                            <div class="project-comment-icon">
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#messages-2') }}">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">20</span>
                                                                </div>
                                                                <div class="project-link">
                                                                    <svg>
                                                                        <use
                                                                            href="{{ asset('assets/svg/icon-sprite.svg#paperclip') }}">
                                                                        </use>
                                                                    </svg><span class="f-w-500 f-light f-12">7</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">Courtney Henry</a><span
                                                            class="f-w-500 f-light f-12 d-block">henry45@example.com</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">2 Dec, 2024</a><span
                                                            class="f-w-500 f-light f-12 d-block">25 Days Left</span></div>
                                                </td>
                                                <td>
                                                    <div class="product-sub"><a class="f-w-500 f-14 "
                                                            href="">Team Shreena</a><span
                                                            class="f-w-500 f-light f-12 d-block">12 Member</span></div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="txt-primary d-flex gap-2 align-items-center justify-content-center">
                                                        <span class="pending bg-primary"></span><span
                                                            class="f-w-500 f-13 txt-primary">Active</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon15" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-horizontal') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon15"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 box-col-6">
                        <div class="card recent-order">
                            <div class="card-header card-no-border total-revenue">
                                <h4 class="m-0">Top Client List</h4>
                                <div class="header-top"></div><a href="">View All </a>
                            </div>
                            <div class="card-body pt-0">
                                <div class="client-list-table table-responsive custom-scrollbar">
                                    <table class="order-table w-100">
                                        <tbody>
                                            <tr>
                                                <td class="client-list">
                                                    <div class="user-id">
                                                        <div class="avatars me-2">
                                                            <div class="avatar"><img class="img-50 rounded-circle"
                                                                    src="{{ asset('assets/images/user/29.png') }}"
                                                                    alt="#">
                                                                <div class="status status-dnd bg-warning"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-sub"><a class="f-14 f-w-500 "
                                                                href="user-profile.pug">Jenny Bell</a><span
                                                                class="d-block f-light f-w-500">India</span></div>
                                                    </div>
                                                    <div class="user-comment w-100">
                                                        <div class="product-sub"> <a class="f-14 f-w-500 "
                                                                href="user-profile.pug">jennybell@gmail.com</a><span
                                                                class="d-block f-light f-w-500">+84 342 556 555 </span>
                                                        </div>
                                                        <div class="product-sub">
                                                            <svg class="invoice-icon">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#messages-3') }}">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="client-list">
                                                    <div class="user-id">
                                                        <div class="avatars me-2">
                                                            <div class="avatar"><img class="img-50 rounded-circle"
                                                                    src="{{ asset('assets/images/user/30.png') }}"
                                                                    alt="#">
                                                                <div class="status status-dnd bg-warning"></div>
                                                            </div>
                                                        </div>
                                                        <div class="product-sub"><a class="f-14 f-w-500 "
                                                                href="user-profile.pug">Albert Flores</a><span
                                                                class="d-block f-light f-w-500">UK</span></div>
                                                    </div>
                                                    <div class="user-comment w-100">
                                                        <div class="product-sub"><a class="f-14 f-w-500 "
                                                                href="user-profile.pug">albert78@gmail.com</a><span
                                                                class="d-block f-light f-w-500">+77 445 551 629</span>
                                                        </div>
                                                        <div class="product-sub">
                                                            <svg class="invoice-icon">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#messages-3') }}">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="client-list">
                                                    <div class="user-id">
                                                        <div class="avatars me-2">
                                                            <div class="avatar"> <img class="img-50 rounded-circle"
                                                                    src="{{ asset('assets/images/user/33.png') }}"
                                                                    alt="#">
                                                                <div class="status status-dnd bg-warning"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-sub"><a class="f-14 f-w-500 "
                                                                href="user-profile.pug">Jane Cooper</a><span
                                                                class="d-block f-light f-w-500">London</span></div>
                                                    </div>
                                                    <div class="user-comment w-100">
                                                        <div class="product-sub"> <a class="f-14 f-w-500 "
                                                                href="user-profile.pug">jane145@gmail.com</a><span
                                                                class="d-block f-light f-w-500">+56 955 510 831</span>
                                                        </div>
                                                        <div class="product-sub">
                                                            <svg class="invoice-icon">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#messages-3') }}">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="client-list">
                                                    <div class="user-id">
                                                        <div class="avatars me-2">
                                                            <div class="avatar"> <img class="img-50 rounded-circle"
                                                                    src="{{ asset('assets/images/user/31.png') }}"
                                                                    alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="product-sub"> <a class="f-14 f-w-500 "
                                                                href="user-profile.pug">Devon Lane</a><span
                                                                class="d-block f-light f-w-500">America</span></div>
                                                    </div>
                                                    <div class="user-comment w-100">
                                                        <div class="product-sub"><a class="f-14 f-w-500 "
                                                                href="user-profile.pug">devom796@gmail.com</a><span
                                                                class="d-block f-light f-w-500">+56 955 570 095</span>
                                                        </div>
                                                        <div class="product-sub">
                                                            <svg class="invoice-icon">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#messages-3') }}">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="client-list">
                                                    <div class="user-id">
                                                        <div class="avatars me-2">
                                                            <div class="avatar"><img class="img-50 rounded-circle"
                                                                    src="{{ asset('assets/images/user/32.png') }}"
                                                                    alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="product-sub"><a class="f-14 f-w-500 "
                                                                href="user-profile.pug">Cody Fisher</a><span
                                                                class="d-block f-light f-w-500">Canada</span></div>
                                                    </div>
                                                    <div class="user-comment w-100">
                                                        <div class="product-sub"><a class="f-14 f-w-500 "
                                                                href="user-profile.pug">cody7895@gmail.com</a><span
                                                                class="d-block f-light f-w-500">+226 795 552 31</span>
                                                        </div>
                                                        <div class="product-sub">
                                                            <svg class="invoice-icon">
                                                                <use
                                                                    href="{{ asset('assets/svg/icon-sprite.svg#messages-3') }}">
                                                                </use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 box-col-6">
                        <div class="card">
                            <div class="card-header card-no-border total-revenue">
                                <h4>Time Line</h4>
                            </div>
                            <div class="card-body pt-0">
                                <div class="overflow-auto theme-scrollbar custom-scrollbar">
                                    <div class="timeline-calendar custom-scrollbar">
                                        <div class="custom-calendar" id="calendar-container">
                                            <div class="time-line" id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 d-xxl-block d-none activity-group box-col-none">
                <div class="card add-project-link">
                    <div class="categories"> </div>
                    <div class="categories-content"> <span class="text-truncate col-8 f-12 d-block mb-2">Let’s add work to
                            your space</span><a href="">+Add Project </a></div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header card-no-border total-revenue">
                                <h4>Activity Log </h4>
                                <div class="sales-chart-dropdown-select">
                                    <div class="card-header-right-icon online-store">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle dropdown-toggle-store"
                                                id="dropdownMenuButtondown" data-bs-toggle="dropdown"
                                                aria-expanded="false">Employee </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuButtondown"><a class="dropdown-item"
                                                    href="#">All </a><a class="dropdown-item"
                                                    href="#">Employee</a><a class="dropdown-item"
                                                    href="#">Client </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="activity-log-card">
                                    <ul>
                                        <li class="activity-log">
                                            <div class="d-flex align-items-start gap-2"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/26.png') }}" alt="user" />
                                                <div>
                                                    <div class="common-space user-id">
                                                        <h6> <a class="f-w-500 f-12"
                                                                href="">Jenny
                                                                Wilson</a></h6><span class="f-light f-w-500 f-12">Today
                                                            10:45 AM</span>
                                                    </div>
                                                    <div class="d-flex mb-2"><span class="f-light f-w-500 f-12">Commented
                                                            on : </span><a class="f-w-500 f-12"
                                                            href=""> NFT
                                                            App</a></div><span class="f-light f-w-500 f-12 d-block">This
                                                        smithe design looks great!! but this page as i mention
                                                        belove.</span><a class="f-12 f-w-500 username"
                                                        href=""></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="activity-log">
                                            <div class="d-flex align-items-start gap-2"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/34.png') }}" alt="user" />
                                                <div>
                                                    <div class="common-space user-id">
                                                        <h6> <a class="f-w-500 f-12"
                                                                href="">Darlene
                                                                Robertson</a></h6><span class="f-light f-w-500 f-12">Today
                                                            10:43 AM</span>
                                                    </div>
                                                    <div class="d-flex mb-2"><span class="f-light f-w-500 f-12">Shared
                                                            File to : </span><a class="f-w-500 f-12"
                                                            href="">Barkha</a></div><span
                                                        class="f-light f-w-500 f-12 d-block">Food Delivery App figma &amp;
                                                        Ai file shared to a .zip file to make it easier to send.</span><a
                                                        class="f-12 f-w-500 username"
                                                        href=""></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="activity-log">
                                            <div class="d-flex align-items-start gap-2"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/35.png') }}" alt="user" />
                                                <div>
                                                    <div class="common-space user-id">
                                                        <h6> <a class="f-w-500 f-12"
                                                                href="">Seema
                                                                Joshi</a></h6><span class="f-light f-w-500 f-12">Today
                                                            10:42 AM</span>
                                                    </div>
                                                    <div class="d-flex mb-2"><span class="f-light f-w-500 f-12">Meeting :
                                                        </span><a class="f-w-500 f-12" href="">Eva
                                                            Website</a>
                                                    </div><span class="f-light f-w-500 f-12 d-block">You can send the AI
                                                        file as attachment service and share a download link.</span><a
                                                        class="f-12 f-w-500 username"
                                                        href="">@barkha_singh</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="activity-log">
                                            <div class="d-flex align-items-start gap-2"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/44.png') }}" alt="user" />
                                                <div>
                                                    <div class="common-space user-id">
                                                        <h6> <a class="f-w-500 f-12"
                                                                href="">Elara
                                                                Winter</a></h6><span class="f-light f-w-500 f-12">Today
                                                            06:45 AM</span>
                                                    </div>
                                                    <div class="d-flex mb-2"><span class="f-light f-w-500 f-12">Meeting :
                                                        </span><a class="f-w-500 f-12" href="">Eva
                                                            Website</a>
                                                    </div><span class="f-light f-w-500 f-12 d-block">Metting about next
                                                        page design of eva website.</span><a class="f-12 f-w-500 username"
                                                        href=""></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="activity-log">
                                            <div class="d-flex align-items-start gap-2"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/38.png') }}" alt="user" />
                                                <div>
                                                    <div class="common-space user-id">
                                                        <h6> <a class="f-w-500 f-12"
                                                                href="">Arya
                                                                Shwanno</a></h6><span class="f-light f-w-500 f-12">Today
                                                            05:51 AM</span>
                                                    </div>
                                                    <div class="d-flex mb-2"><span class="f-light f-w-500 f-12">Add new
                                                            screen :</span><a class="f-w-500 f-12"
                                                            href="">Pet
                                                            App</a></div><span class="f-light f-w-500 f-12 d-block">Make
                                                        sure your AI file is cloud storage like Google Drive or
                                                        Dropbox.</span><a class="f-12 f-w-500 username"
                                                        href=""></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6">
                        <div class="card">
                            <div class="card-header card-no-border total-revenue card-title-underline">
                                <h4>Message</h4><a href="">+ New Message </a>
                            </div>
                            <div class="card-body pt-0">
                                <div class="user-message">
                                    <ul>
                                        <li>
                                            <div class="activity-log"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/39.png') }}" alt="user" />
                                                <div class="status bg-warning"></div>
                                                <div class="activity-name">
                                                    <div>
                                                        <h6> <a class="f-w-500 f-14"
                                                                href="">Maren
                                                                Ross</a></h6><span class="f-light f-w-500 f-12 ">Hey,
                                                            What’s today update ?</span>
                                                    </div>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon21" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-vertical') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon21"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-log"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/40.png') }}" alt="user" />
                                                <div class="status bg-undefined"></div>
                                                <div class="activity-name">
                                                    <div>
                                                        <h6> <a class="f-w-500 f-14"
                                                                href="">Brooklyn
                                                                Simmons</a></h6><span class="f-light f-w-500 f-12 ">I know
                                                            it will work.</span>
                                                    </div>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon22" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-vertical') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon22"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-log"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/41.png') }}" alt="user" />
                                                <div class="status bg-warning"></div>
                                                <div class="activity-name">
                                                    <div>
                                                        <h6> <a class="f-w-500 f-14"
                                                                href="">Floyd
                                                                Miles</a></h6><span class="f-light f-w-500 f-12 ">Sir, Can
                                                            remove part in des...</span>
                                                    </div>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon23" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-vertical') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon23"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-log"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/42.png') }}" alt="user" />
                                                <div class="status bg-undefined"></div>
                                                <div class="activity-name">
                                                    <div>
                                                        <h6> <a class="f-w-500 f-14"
                                                                href="">Dianne
                                                                Russell</a></h6><span class="f-light f-w-500 f-12 ">So,
                                                            what is my next work ?</span>
                                                    </div>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon24" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-vertical') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon24"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-log"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/43.png') }}" alt="user" />
                                                <div class="status bg-warning"></div>
                                                <div class="activity-name">
                                                    <div>
                                                        <h6> <a class="f-w-500 f-14"
                                                                href="">Darlene
                                                                Robertson</a></h6><span class="f-light f-w-500 f-12 ">Can
                                                            we add that here ?</span>
                                                    </div>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon25" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-vertical') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon25"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-log"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/44.png') }}" alt="user" />
                                                <div class="status bg-undefined"></div>
                                                <div class="activity-name">
                                                    <div>
                                                        <h6> <a class="f-w-500 f-14"
                                                                href="">Jenny
                                                                Wilson</a></h6><span class="f-light f-w-500 f-12 ">Hey,
                                                            What’s today update ?</span>
                                                    </div>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon26" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-vertical') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon26"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-log"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/45.png') }}" alt="user" />
                                                <div class="status bg-warning"></div>
                                                <div class="activity-name">
                                                    <div>
                                                        <h6> <a class="f-w-500 f-14"
                                                                href="">Ralph
                                                                Edwards</a></h6><span class="f-light f-w-500 f-12 ">ok,
                                                            send it.</span>
                                                    </div>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon28" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-vertical') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon28"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-log"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/15.png') }}" alt="user" />
                                                <div class="status bg-warning"></div>
                                                <div class="activity-name">
                                                    <div>
                                                        <h6> <a class="f-w-500 f-14"
                                                                href="">Ronald
                                                                Richards</a></h6><span class="f-light f-w-500 f-12 ">Thank
                                                            you !!!</span>
                                                    </div>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon29" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-vertical') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon29"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="activity-log"><img
                                                    class="activity-log-img rounded-circle img-fluid me-2"
                                                    src="{{ asset('assets/images/user/47.png') }}" alt="user" />
                                                <div class="status bg-undefined"></div>
                                                <div class="activity-name">
                                                    <div>
                                                        <h6> <a class="f-w-500 f-14"
                                                                href="">Courtney
                                                                Henry</a></h6><span class="f-light f-w-500 f-12 ">No,
                                                            you’ve to do one more variant.</span>
                                                    </div>
                                                    <div class="product-sub">
                                                        <div class="dropdown">
                                                            <div id="dropdownMenuButtonicon30" data-bs-toggle="dropdown"
                                                                aria-expanded="false" role="menu">
                                                                <svg class="invoice-icon">
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#more-vertical') }}">
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                            <div class="dropdown-menu dropdown-menu-end"
                                                                aria-labelledby="dropdownMenuButtonicon30"><span
                                                                    class="dropdown-item">Last Month</span><span
                                                                    class="dropdown-item">Last Week</span><span
                                                                    class="dropdown-item">Last Day </span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6">
                        <div class="card overflow-hidden">
                            <div class="card-body pt-0 project-ideas-card">
                                <div class="project-card">
                                    <div><span class="f-22 f-w-500 text-center">Get more ideas for your important
                                            project</span>
                                        <div class="btn-showcase text-center"> <a href="">
                                                <button class="btn btn-pill btn-outline-primary-2x b-r-8 active">Upgrade
                                                    Now</button></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <!-- Range Slider js-->
    <script src="{{ asset('assets/js/range-slider/rSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangeslider/rangeslider.js') }}"></script>
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <!-- calendar js-->
    <script src="{{ asset('assets/js/calendar/fullcalender.js') }}"></script>
    <script src="{{ asset('assets/js/calendar/custom-calendar.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_2.js') }}"></script>
    <script src="{{ asset('assets/js/animation/wow/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
@endsection