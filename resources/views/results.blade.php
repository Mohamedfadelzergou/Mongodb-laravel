<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zergou | Resultrs</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">
    <link rel="stylesheet" href="dependencies/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dependencies/icofont/icofont.min.css">
    <link rel="stylesheet" href="dependencies/slick-carousel/css/slick.css">
    <link rel="stylesheet" href="dependencies/slick-carousel/css/slick-theme.css">
    <link rel="stylesheet" href="dependencies/magnific-popup/css/magnific-popup.css">
    <link rel="stylesheet" href="dependencies/sal.js/sal.css">
    <link rel="stylesheet" href="dependencies/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="dependencies/select2/css/select2.min.css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,400&amp;display=swap" rel="stylesheet">
</head>

<body class="bg-link-water">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="icofont-bubble-up"></i>
    </a>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper">
        <!-- Top Header -->
        <header class="fixed-header">
            <div class="header-menu">
                <div class="navbar">
                    <div class="nav-item d-none d-sm-block">
                        <div class="header-logo">
                            <a href="index.html"><img src="media/logo.png" alt="Zergou"></a>
                        </div>
                    </div>
                    <div class="nav-item nav-top-menu">
                        <nav id="dropdown" class="template-main-menu">
                            <ul class="menu-content">
                                <li class="header-nav-item">
                                    <a href="{{route('home')}}" class="menu-link active">Home</a>
                                </li>
                                <li class="header-nav-item">
                                    <a href="{{route('friends')}}" class="menu-link active">Members Friends</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="nav-item header-control">
                        <div class="inline-item d-none d-md-block">
                            <form action="{{route('search')}}">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search here.......">
                                    <div class="input-group-append">
                                        <button class="submit-btn" type="submit"><i class="icofont-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="inline-item d-flex align-items-center">
                        </div>
                        <div class="inline-item">
                            <div class="dropdown dropdown-admin">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    <span class="media">
                                        <span class="item-img">
                                            <img src="media/figure/chat_5.jpg" alt="Chat">
                                            <span class="acc-verified"><i class="icofont-check"></i></span>
                                        </span>
                                        <span class="media-body">
                                            <span class="item-title">{{Auth::user()->lname}}</span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="admin-options">
                                        <li><a href="{{ route('profile',auth()->user()->id) }}">Profile</a></li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Sidebar Left -->
        <div class="fixed-sidebar">
            <div class="fixed-sidebar-left small-sidebar">
                <div class="sidebar-toggle">
                    <button class="toggle-btn toggler-open">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="sidebar-menu-wrap">
                    <div class="mCustomScrollbar" data-mcs-theme="dark" data-mcs-axis="y">
                        <ul class="side-menu">
                            <li><a href="{{route('home')}}" class="menu-link" data-toggle="tooltip" data-placement="right" title=" Status"><i class="icofont-newspaper"></i></a></li>
                            <li><a href="user-timeline.html" class="menu-link" data-toggle="tooltip" data-placement="right" title="Profile"><i class="icofont-list"></i></a></li>
                            <li><a href="{{route('friends')}}" class="menu-link" data-toggle="tooltip" data-placement="right" title="MEMBERS FRIENDS"><i class="icofont-users-alt-4"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fixed-sidebar-left large-sidebar">
                <div class="sidebar-toggle">
                    <div class="sidebar-logo">
                        <a href="index.html"><img src="media/logo2.png" alt="Logo"></a>
                    </div>
                    <button class="toggle-btn toggler-close">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="sidebar-menu-wrap">
                    <div class="mCustomScrollbar" data-mcs-theme="dark" data-mcs-axis="y">
                        <ul class="side-menu">
                            <li><a href="{{route('home')}}" class="menu-link"><i class="icofont-newspaper"></i><span class="menu-title">Status</span></a></li>
                            <li><a href="user-timeline.html" class="menu-link"><i class="icofont-list"></i><span class="menu-title">Profile</span></a></li>
                            <li><a href="{{route('friends')}}" class="menu-link"><i class="icofont-users-alt-4"></i><span class="menu-title">Members Friends</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar Right -->
        <div class="fixed-sidebar right">
            <div class="fixed-sidebar-right small-sidebar">
                <div class="sidebar-toggle" id="chat-head-toggle">
                    <button class="chat-icon">
                        <i class="icofont-speech-comments"></i>
                    </button>
                </div>
                <div class="sidebar-menu-wrap">
                    <div class="mCustomScrollbar" data-mcs-theme="dark" data-mcs-axis="y">
                        <ul class="user-chat-list">
                            @foreach ($members as $member)
                            <li class="chat-item chat-open">
                                <div class="author-img">
                                    <img src="media/figure/chat_4.jpg" alt="chat">
                                    <span class="chat-status online"></span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <div class="page-content">

            <!--=====================================-->
            <!--=        Newsfeed  Area Start       =-->
            <!--=====================================-->
            <div class="container">
                <div class="block-box user-top-header">
                    <ul class="menu-list">
                        <li class="active"><a href="#">Users</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="user-list-view forum-member">
                            
                            @if (!$users->count())
                            <p>No result found , sorry.</p>
                            @else
                            @foreach ($users as $user)
                            <div class="widget-author block-box">
                                <div class="author-heading">
                                    <div class="cover-img">
                                        <img src="media/figure/cover_1.jpg" alt="cover">
                                    </div>
                                    <div class="profile-img">
                                        <a href="{{route('profile',$user->id)}}">
                                            <img src="{{$user->getAvatarUrl()}}" alt="author">
                                        </a>
                                    </div>
                                    <div class="profile-name">
                                        <h4 class="author-name"><a href="{{route('profile',$user->id)}}">{{$user->fname}} {{$user->lname}}</a></h4>
                                        <div class="author-location">@ {{$user->lname}}</div>
                                    </div>
                                </div>
                                <ul class="author-badge">
                                    <li><a href="#" class="bg-salmon-gradient"><i class="icofont-star"></i></a></li>
                                    <li><a href="#" class="bg-sun-gradient"><i class="icofont-squirrel"></i></a></li>
                                    <li><a href="#" class="bg-jungle-gradient"><i class="icofont-rocket-alt-1"></i></a></li>
                                </ul>
                                <ul class="author-statistics">
                                    <li>
                                        <a href="#"><span class="item-number">30</span> <span class="item-text">POSTS</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="item-number">12</span> <span class="item-text">COMMENTS</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="item-number">1,125</span> <span class="item-text">Friends</span></a>
                                    </li>
                                </ul>
                            </div> 
                            @endforeach
                            @endif
                            
                            <div class="widget-author block-box">
                                <div class="author-heading">
                                    <div class="cover-img">
                                        <img src="media/figure/cover_2.jpg" alt="cover">
                                    </div>
                                    <div class="profile-img">
                                        <a href="#">
                                            <img src="media/figure/author_3.jpg" alt="author">
                                        </a>
                                    </div>
                                    <div class="profile-name">
                                        <h4 class="author-name"><a href="#">Julia Zessy</a></h4>
                                        <div class="author-location">@zessyr</div>
                                    </div>
                                </div>
                                <ul class="author-badge">
                                    <li><a href="#" class="bg-salmon-gradient"><i class="icofont-star"></i></a></li>
                                    <li><a href="#" class="bg-sun-gradient"><i class="icofont-squirrel"></i></a></li>
                                    <li><a href="#" class="bg-jungle-gradient"><i class="icofont-rocket-alt-1"></i></a></li>
                                </ul>
                                <ul class="author-statistics">
                                    <li>
                                        <a href="#"><span class="item-number">30</span> <span class="item-text">POSTS</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="item-number">12</span> <span class="item-text">COMMENTS</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="item-number">1,125</span> <span class="item-text">VIEWS</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-author block-box">
                                <div class="author-heading">
                                    <div class="cover-img">
                                        <img src="media/figure/cover_3.jpg" alt="cover">
                                    </div>
                                    <div class="profile-img">
                                        <a href="#">
                                            <img src="media/figure/author_4.jpg" alt="author">
                                        </a>
                                    </div>
                                    <div class="profile-name">
                                        <h4 class="author-name"><a href="#">Fahim Rahman</a></h4>
                                        <div class="author-location">@rahman</div>
                                    </div>
                                </div>
                                <ul class="author-badge">
                                    <li><a href="#" class="bg-salmon-gradient"><i class="icofont-star"></i></a></li>
                                    <li><a href="#" class="bg-sun-gradient"><i class="icofont-squirrel"></i></a></li>
                                    <li><a href="#" class="bg-jungle-gradient"><i class="icofont-rocket-alt-1"></i></a></li>
                                </ul>
                                <ul class="author-statistics">
                                    <li>
                                        <a href="#"><span class="item-number">30</span> <span class="item-text">POSTS</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="item-number">12</span> <span class="item-text">COMMENTS</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="item-number">1,125</span> <span class="item-text">VIEWS</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-author block-box">
                                <div class="author-heading">
                                    <div class="cover-img">
                                        <img src="media/figure/cover_4.jpg" alt="cover">
                                    </div>
                                    <div class="profile-img">
                                        <a href="#">
                                            <img src="media/figure/author_5.jpg" alt="author">
                                        </a>
                                    </div>
                                    <div class="profile-name">
                                        <h4 class="author-name"><a href="#">Aahat Akter</a></h4>
                                        <div class="author-location">@aahat</div>
                                    </div>
                                </div>
                                <ul class="author-badge">
                                    <li><a href="#" class="bg-salmon-gradient"><i class="icofont-star"></i></a></li>
                                    <li><a href="#" class="bg-sun-gradient"><i class="icofont-squirrel"></i></a></li>
                                    <li><a href="#" class="bg-jungle-gradient"><i class="icofont-rocket-alt-1"></i></a></li>
                                </ul>
                                <ul class="author-statistics">
                                    <li>
                                        <a href="#"><span class="item-number">30</span> <span class="item-text">POSTS</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="item-number">12</span> <span class="item-text">COMMENTS</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="item-number">1,125</span> <span class="item-text">VIEWS</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-author block-box">
                                <div class="author-heading">
                                    <div class="cover-img">
                                        <img src="media/figure/cover_5.jpg" alt="cover">
                                    </div>
                                    <div class="profile-img">
                                        <a href="#">
                                            <img src="media/figure/author_6.jpg" alt="author">
                                        </a>
                                    </div>
                                    <div class="profile-name">
                                        <h4 class="author-name"><a href="#">Aahat Akter</a></h4>
                                        <div class="author-location">@aahat</div>
                                    </div>
                                </div>
                                <ul class="author-badge">
                                    <li><a href="#" class="bg-salmon-gradient"><i class="icofont-star"></i></a></li>
                                    <li><a href="#" class="bg-sun-gradient"><i class="icofont-squirrel"></i></a></li>
                                    <li><a href="#" class="bg-jungle-gradient"><i class="icofont-rocket-alt-1"></i></a></li>
                                </ul>
                                <ul class="author-statistics">
                                    <li>
                                        <a href="#"><span class="item-number">30</span> <span class="item-text">POSTS</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="item-number">12</span> <span class="item-text">COMMENTS</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="item-number">1,125</span> <span class="item-text">VIEWS</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-author block-box">
                                <div class="author-heading">
                                    <div class="cover-img">
                                        <img src="media/figure/cover_6.jpg" alt="cover">
                                    </div>
                                    <div class="profile-img">
                                        <a href="#">
                                            <img src="media/figure/author_7.jpg" alt="author">
                                        </a>
                                    </div>
                                    <div class="profile-name">
                                        <h4 class="author-name"><a href="#">Aahat Akter</a></h4>
                                        <div class="author-location">@aahat</div>
                                    </div>
                                </div>
                                <ul class="author-badge">
                                    <li><a href="#" class="bg-salmon-gradient"><i class="icofont-star"></i></a></li>
                                    <li><a href="#" class="bg-sun-gradient"><i class="icofont-squirrel"></i></a></li>
                                    <li><a href="#" class="bg-jungle-gradient"><i class="icofont-rocket-alt-1"></i></a></li>
                                </ul>
                                <ul class="author-statistics">
                                    <li>
                                        <a href="#"><span class="item-number">30</span> <span class="item-text">POSTS</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="item-number">12</span> <span class="item-text">COMMENTS</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="item-number">1,125</span> <span class="item-text">VIEWS</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="block-box load-more-btn">
                                <a href="#" class="item-btn"><i class="icofont-refresh"></i>Load More Member</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 widget-block widget-break-lg">
                        <div class="widget widget-memebers">
                            <div class="widget-heading">
                                <h3 class="widget-title">Members</h3>
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        ...
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Close</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="newest-member" role="tabpanel">
                                    <div class="members-list">
                                        @foreach ($members as $member)
                                        <div class="media">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="media/figure/chat_1.jpg" alt="Chat">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title"><a href="#">Aahat Akter</a></h4>
                                                <div class="item-username">@Aahat </div>
                                                <div class="member-status online"><i class="icofont-check"></i></div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                        <div class="media">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="media/figure/chat_2.jpg" alt="Chat">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title"><a href="#">Kazi Rahman</a></h4>
                                                <div class="item-username">@Rahman</div>
                                                <div class="member-status online"><i class="icofont-check"></i></div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="media/figure/chat_3.jpg" alt="Chat">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title"><a href="#">Alia Karon</a></h4>
                                                <div class="item-username">@Alia</div>
                                                <div class="member-status online"><i class="icofont-check"></i></div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="media/figure/chat_4.jpg" alt="Chat">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title"><a href="#">Masterero</a></h4>
                                                <div class="item-username">@Master</div>
                                                <div class="member-status offline"><i class="icofont-check"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="popular-member" role="tabpanel">
                                    <div class="members-list">
                                        <div class="media">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="media/figure/chat_1.jpg" alt="Chat">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title"><a href="#">Aahat Akter</a></h4>
                                                <div class="item-username">@Aahat </div>
                                                <div class="member-status online"><i class="icofont-check"></i></div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="media/figure/chat_2.jpg" alt="Chat">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title"><a href="#">Kazi Rahman</a></h4>
                                                <div class="item-username">@Rahman</div>
                                                <div class="member-status online"><i class="icofont-check"></i></div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="media/figure/chat_3.jpg" alt="Chat">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title"><a href="#">Alia Karon</a></h4>
                                                <div class="item-username">@Alia</div>
                                                <div class="member-status online"><i class="icofont-check"></i></div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="media/figure/chat_4.jpg" alt="Chat">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title"><a href="#">Masterero</a></h4>
                                                <div class="item-username">@Master</div>
                                                <div class="member-status offline"><i class="icofont-check"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="active-member" role="tabpanel">
                                    <div class="members-list">
                                        <div class="media">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="media/figure/chat_1.jpg" alt="Chat">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title"><a href="#">Aahat Akter</a></h4>
                                                <div class="item-username">@Aahat </div>
                                                <div class="member-status online"><i class="icofont-check"></i></div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="media/figure/chat_2.jpg" alt="Chat">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title"><a href="#">Kazi Rahman</a></h4>
                                                <div class="item-username">@Rahman</div>
                                                <div class="member-status online"><i class="icofont-check"></i></div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="media/figure/chat_3.jpg" alt="Chat">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title"><a href="#">Alia Karon</a></h4>
                                                <div class="item-username">@Alia</div>
                                                <div class="member-status online"><i class="icofont-check"></i></div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="item-img">
                                                <a href="#">
                                                    <img src="media/figure/chat_4.jpg" alt="Chat">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title"><a href="#">Masterero</a></h4>
                                                <div class="item-username">@Master</div>
                                                <div class="member-status offline"><i class="icofont-check"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-banner">
                            <h3 class="item-title">Most Popular</h3>
                            <div class="item-subtitle">Circle Application</div>
                            <a href="#" class="item-btn">
                                <span class="btn-text">Register Now</span>
                                <span class="btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21px" height="10px">
                                        <path fill-rule="evenodd" d="M16.671,9.998 L12.997,9.998 L16.462,6.000 L5.000,6.000 L5.000,4.000 L16.462,4.000 L12.997,0.002 L16.671,0.002 L21.003,5.000 L16.671,9.998 ZM17.000,5.379 L17.328,5.000 L17.000,4.621 L17.000,5.379 ZM-0.000,4.000 L3.000,4.000 L3.000,6.000 L-0.000,6.000 L-0.000,4.000 Z" />
                                    </svg>
                                </span>
                            </a>
                            <div class="item-img">
                                <img src="media/figure/widget_banner_1.png" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=====================================-->
            <!--=        Footer Area Start       	=-->
            <!--=====================================-->
            <footer class="footer-wrap footer-dashboard">
                <div class="main-footer">
                    <div class="container">
                        <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1">
                            <div class="col">
                                <div class="footer-box">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="media/logo_dark.png" alt="Logo"></a>
                                    </div>
                                    <p>Dorem ipsum dolor sit amet consec adipisicing elit sed do eiusmod por incidiut labore et loreLorem ipsum kelly amieo dolorey.</p>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-lg-center">
                                <div class="footer-box">
                                    <h3 class="footer-title">
                                        Important Links
                                    </h3>
                                    <div class="footer-link">
                                        <ul>
                                            <li><a href="{{route('home')}}">Home</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-lg-center">
                                <div class="footer-box">
                                    <h3 class="footer-title">
                                        Community
                                    </h3>
                                    <div class="footer-link">
                                        <ul>
                                            <li><a href="newsfeed.html">Status</a></li>
                                            <li><a href="user-timeline.html">Profile</a></li>
                                            <li><a href="user-friends.html">Friends</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-lg-center">
                                <div class="footer-box">
                                    <h3 class="footer-title">
                                        Followers
                                    </h3>
                                    <div class="footer-link">
                                        <ul>
                                            <li><a href="https://www.facebook.com/">facebook</a></li>
                                            <li><a href="https://twitter.com/">twitter</a></li>
                                            <li><a href="https://www.instagram.com/">instagram</a></li>
                                            <li><a href="https://www.youtube.com/">Youtube</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-copyright">Copy© Zergou 2021. All Rights Reserved</div>
                </div>
            </footer>



        </div>
        <!-- Chat Modal Here -->
        <div class="chat-conversion-box" id="chat-box-modal" tabindex="-1" aria-labelledby="chat-modal-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="chat-modal-label">Fahim Rahman <span class="online"></span></h6>
                        <div class="action-icon">
                            <button class="chat-shrink"><i class="icofont-minus"></i></button>
                            <button type="button" class="close chat-close chat-open" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <ul class="chat-conversion">
                            <li class="chat-others">
                                <div class="author-img">
                                    <img src="media/figure/chat_12.jpg" alt="Chat">
                                </div>
                                <div class="author-text">
                                    <span>How are you Fahim vai ? Tommorow office will be your last day of Bachelor life.</span>
                                </div>
                            </li>
                            <li class="chat-you">
                                <div class="author-img">
                                    <img src="media/figure/chat_11.jpg" alt="Chat">
                                </div>
                                <div class="author-text">
                                    <span>hmm That's great</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Write your text here.....">
                                <div class="chat-plus-icon"><i class="icofont-plus-circle"></i></div>
                                <div class="file-attach-icon">
                                    <a href="#"><i class="icofont-slightly-smile"></i></a>
                                    <a href="#"><i class="icofont-camera"></i></a>
                                    <a href="#"><i class="icofont-image"></i></a>
                                    <a href="#"><i class="icofont-mic"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery Js -->
    <script src="dependencies/jquery/js/jquery.min.js"></script>
    <script src="dependencies/popper.js/js/popper.min.js"></script>
    <script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
    <script src="dependencies/imagesloaded/js/imagesloaded.pkgd.min.js"></script>
    <script src="dependencies/isotope-layout/js/isotope.pkgd.min.js"></script>
    <script src="dependencies/slick-carousel/js/slick.min.js"></script>
    <script src="dependencies/sal.js/sal.js"></script>
    <script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="dependencies/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="dependencies/select2/js/select2.min.js"></script>
    <script src="dependencies/elevate-zoom/jquery.elevatezoom.js"></script>
    <script src="dependencies/bootstrap-validator/js/validator.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>
</html>