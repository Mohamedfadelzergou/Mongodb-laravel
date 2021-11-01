<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zergou | Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="{{asset('image/x-icon" href="media/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('dependencies/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dependencies/icofont/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('dependencies/slick-carousel/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('dependencies/slick-carousel/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('dependencies/magnific-popup/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('dependencies/sal.js/sal.css')}}">
    <link rel="stylesheet" href="{{asset('dependencies/mcustomscrollbar/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('dependencies/select2/css/select2.min.css')}}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
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
                            <a href="index.html"><img src="{{asset('media/logo.png')}}" alt="Zergou"></a>
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
                                            <img src="{{asset('media/figure/chat_5.jpg')}}" alt="Chat">
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
                        <a href="index.html"><img src="{{asset('media/logo2.png')}}" alt="Logo"></a>
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
                                    <img src="{{asset('media/figure/chat_4.jpg')}}" alt="chat">
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
                <!-- Banner Area Start -->
                <div class="banner-user">
                    <div class="banner-content">
                        <div class="media">
                            <div class="item-img">
                                <img src="{{asset('media/banner/user_1.jpg')}}" alt="User">
                            </div>
                            <div class="media-body">
                                <h3 class="item-title">{{$user->fname}} {{$user->lname}}</h3>
                                <div class="item-subtitle">{{$user->localisation}}</div>
                                <ul class="item-social">
                                    <li><a href="#" class="bg-fb"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#" class="bg-twitter"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#" class="bg-dribble"><i class="icofont-dribbble"></i></a></li>
                                    <li><a href="#" class="bg-youtube"><i class="icofont-brand-youtube"></i></a></li>
                                    <li><a href="#" class="bg-behance"><i class="icofont-behance"></i></a></li>
                                </ul>
                                <ul class="user-meta">
                                    <li>Posts: <span>30</span></li>
                                    <li>Comments: <span>12</span></li>
                                    <li>Friends: <span>1.2k</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-box user-top-header">
                    <ul class="menu-list">
                        <li class="active"><a href="#">Timeline</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Friends</a></li>
                        <li><a href="#">Groups</a></li>
                        <li><a href="#">Photos</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">Badges</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Forums</a></li>
                        <li>
                            <div class="dropdown">
                                <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    ...
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Shop</a>
                                    <a class="dropdown-item" href="#">Blog</a>
                                    <a class="dropdown-item" href="#">Others</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="block-box post-input-tab">
                            <form method="Post" action="{{route('status')}}">
                                @csrf
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="top" title="STATUS">
                                    <a class="nav-link active" data-toggle="tab" href="#post-status" role="tab" aria-selected="true"><i class="icofont-copy"></i>Status</a>
                                </li>
                                {{-- <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="top" title="MEDIA">
                                    <a class="nav-link" data-toggle="tab" href="#post-media" role="tab" aria-selected="false"><i class="icofont-image"></i>Photo/ Video Album</a>
                                </li>
                                <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="top" title="BLOG">
                                    <a class="nav-link" data-toggle="tab" href="#post-blog" role="tab" aria-selected="false"><i class="icofont-list"></i>Blog</a>
                                </li> --}}
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="post-status" role="tabpanel">
                                    <textarea name="body" id="status-input1" class="form-control textarea" placeholder="Share what are you thinking . . ." cols="30" rows="6"></textarea>
                                </div>
                                {{-- <div class="tab-pane fade" id="post-media" role="tabpanel">
                                    <!-- <label>Media Gallery</label>
        	                <a href="#" class="media-insert"><i class="icofont-upload-alt"></i>Upload</a> -->
                                    <textarea name="status-input" id="status-input2" class="form-control textarea" placeholder="Share what are you thinking . . ." cols="30" rows="6"></textarea>
                                </div>
                                <div class="tab-pane fade" id="post-blog" role="tabpanel">
                                    <textarea name="status-input" id="status-input3" class="form-control textarea" placeholder="Share what are you thinking . . ." cols="30" rows="6"></textarea>
                                </div> --}}
                            </div>
                            <div class="post-footer">
                                <div class="insert-btn">
                                    <a href="#"><i class="icofont-photobucket"></i></a>
                                    <a href="#"><i class="icofont-tags"></i></a>
                                    <a href="#"><i class="icofont-location-pin"></i></a>
                                </div>
                                <div class="submit-btn">
                                    <button type="submit" class="btn btn-success rounded">Post Submit</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        @if (!$statuses->count())
                            <p>There nothink in your time line </p>
                        @else
                        @foreach ($statuses as $status)
                        <div class="block-box post-view">
                            <div class="post-header">
                                <div class="media">
                                    <div class="user-img">
                                        <img src="{{asset('media/figure/chat_5.jpg')}}" alt="Aahat">
                                    </div>
                                    <div class="media-body">
                                        <div class="user-title"><a href="{{route('profile',$status->user->id)}}">{{$status->user->fname}} {{$status->user->lname}}</a></div>
                                        <ul class="entry-meta">
                                            <li class="meta-privacy"><i class="icofont-users-alt-4"></i>Friends</li>
                                            <li class="meta-time">{{$status->created_at->diffForHumans()}}</li>
                                        </ul>
                                    </div>
                                </div>
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
                            <div class="post-body">
                                <div class="post-no-thumbnail">
                                    <p>{{$status->body}}</p>
                                </div>
                                <div class="post-meta-wrap">
                                    <div class="post-meta">
                                        <div class="post-reaction">
                                            <div class="reaction-icon">
                                                <img src="{{asset('media/figure/reaction_1.png')}}" alt="icon">
                                                <img src="{{asset('media/figure/reaction_2.png')}}" alt="icon">
                                                <img src="{{asset('media/figure/reaction_3.png')}}" alt="icon">
                                            </div>
                                            <div class="meta-text">{{$status->likes->count()}}</div>
                                        </div>
                                    </div>
                                    <div class="post-meta">
                                        <div class="meta-text">{{$status->replies->count()}} Comments</div>
                                        <div class="meta-text">05 Share</div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-footer">
                                <ul>
                                    <li class="post-react">
                                        <a href="#"><i class="icofont-thumbs-up"></i>React!</a>
                                        <ul class="react-list">
                                            @if (Auth::user()->hasLikedStatus($status))
                                            <li><a href="#"><img src="{{asset('media/figure/reaction_1.png')}}" alt="Like"></a></li>
                                            @else
                                            <li><a href="{{route('likestatus',$status->id)}}"><img src="{{asset('media/figure/reaction_1.png')}}" alt="Like"></a></li>
                                            @endif
                                            <li><a href="#"><img src="{{asset('media/figure/reaction_3.png')}}" alt="Like"></a></li>
                                            <li><a href="#"><img src="{{asset('media/figure/reaction_4.png')}}" alt="Like"></a></li>
                                            <li><a href="#"><img src="{{asset('media/figure/reaction_2.png')}}" alt="Like"></a></li>
                                            <li><a href="#"><img src="{{asset('media/figure/reaction_7.png')}}" alt="Like"></a></li>
                                            <li><a href="#"><img src="{{asset('media/figure/reaction_6.png')}}" alt="Like"></a></li>
                                            <li><a href="#"><img src="{{asset('media/figure/reaction_5.png')}}" alt="Like"></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="icofont-comment"></i>Comment</a></li>
                                    <li class="post-share">
                                        <a href="javascript:void(0);" class="share-btn"><i class="icofont-share"></i>Share</a>
                                        <ul class="share-list">
                                            <li><a href="#" class="color-fb"><i class="icofont-facebook"></i></a></li>
                                            <li><a href="#" class="color-messenger"><i class="icofont-facebook-messenger"></i></a></li>
                                            <li><a href="#" class="color-instagram"><i class="icofont-instagram"></i></a></li>
                                            <li><a href="#" class="color-whatsapp"><i class="icofont-brand-whatsapp"></i></a></li>
                                            <li><a href="#" class="color-twitter"><i class="icofont-twitter"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-comment">
                                <ul class="comment-list">
                                    @if ($status->replies->count())
                                    @foreach ($status->replies as $reply)
                                    <li class="main-comments">
                                        <div class="each-comment">
                                            <div class="post-header">
                                                <div class="media">
                                                    <div class="user-img">
                                                        <img src="{{asset('media/figure/chat_14.jpg')}}" alt="Aahat">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-title"><a href="user-timeline.html">{{$reply->status->user->fname}} {{$reply->status->user->lname}}</a></div>
                                                        <ul class="entry-meta">
                                                            <li class="meta-privacy"><i class="icofont-world"></i>Friends</li>
                                                            <li class="meta-time">{{$reply->created_at->diffForHumans()}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
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
                                            <div class="post-body">
                                                <p>{{$reply->body}}</p>
                                            </div>
                                            <div class="post-footer">
                                                <ul>
                                                    <li class="react-icon">
                                                        <img src="{{asset('media/figure/reaction_1.png')}}" alt="icon">
                                                        <img src="{{asset('media/figure/reaction_2.png')}}" alt="icon">
                                                        <span class="px-3">{{$reply->likes->count()}}</span>
                                                    </li>
                                                    <li class="post-react">
                                                        <a href="#"><i class="icofont-thumbs-up"></i>React!</a>
                                                        <ul class="react-list">
                                                            <li><a href="{{route('likereply',$status->id)}}"><img src="{{asset('media/figure/reaction_1.png')}}" alt="Like"></a></li>
                                                            <li><a href="#"><img src="{{asset('media/figure/reaction_3.png')}}" alt="Like"></a></li>
                                                            <li><a href="#"><img src="{{asset('media/figure/reaction_4.png')}}" alt="Like"></a></li>
                                                            <li><a href="#"><img src="{{asset('media/figure/reaction_2.png')}}" alt="Like"></a></li>
                                                            <li><a href="#"><img src="{{asset('media/figure/reaction_7.png')}}" alt="Like"></a></li>
                                                            <li><a href="#"><img src="{{asset('media/figure/reaction_6.png')}}" alt="Like"></a></li>
                                                            <li><a href="#"><img src="{{asset('media/figure/reaction_5.png')}}" alt="Like"></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#"><i class="icofont-reply"></i>Reply</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        {{-- 
                                        <ul class="children">
                                            <li class="main-comments">
                                                <div class="each-comment">
                                                    <div class="post-header">
                                                        <div class="media">
                                                            <div class="user-img">
                                                                <img src="{{asset('media/figure/notifiy_1.png')}}" alt="Aahat">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="user-title"><a href="user-timeline.html">Neko Bebo</a></div>
                                                                <ul class="entry-meta">
                                                                    <li class="meta-time">5 mins ago</li>
                                                                </ul>
                                                            </div>
                                                        </div>
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
                                                    <div class="post-body">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem..</p>
                                                    </div>
                                                    <div class="post-footer">
                                                        <ul>
                                                            <li class="react-icon">
                                                                <img src="{{asset('media/figure/reaction_1.png')}}" alt="icon">
                                                                <img src="{{asset('media/figure/reaction_3.png')}}" alt="icon">
                                                            </li>
                                                            <li class="post-react">
                                                                <a href="#"><i class="icofont-thumbs-up"></i>React!</a>
                                                                <ul class="react-list">
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_1.png')}}" alt="Like"></a></li>
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_3.png')}}" alt="Like"></a></li>
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_4.png')}}" alt="Like"></a></li>
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_2.png')}}" alt="Like"></a></li>
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_7.png')}}" alt="Like"></a></li>
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_6.png')}}" alt="Like"></a></li>
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_5.png')}}" alt="Like"></a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#"><i class="icofont-reply"></i>Reply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="main-comments">
                                                <div class="each-comment">
                                                    <div class="post-header">
                                                        <div class="media">
                                                            <div class="user-img">
                                                                <img src="{{asset('media/figure/notifiy_1.png')}}" alt="Aahat">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="user-title"><a href="user-timeline.html">Neko Bebo</a></div>
                                                                <ul class="entry-meta">
                                                                    <li class="meta-time">5 mins ago</li>
                                                                </ul>
                                                            </div>
                                                        </div>
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
                                                    <div class="post-body">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque..</p>
                                                    </div>
                                                    <div class="post-footer">
                                                        <ul>
                                                            <li class="react-icon">
                                                                <img src="{{asset('media/figure/reaction_1.png')}}" alt="icon">
                                                                <img src="{{asset('media/figure/reaction_2.png')}}" alt="icon">
                                                            </li>
                                                            <li class="post-react">
                                                                <a href="#"><i class="icofont-thumbs-up"></i>React!</a>
                                                                <ul class="react-list">
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_1.png')}}" alt="Like"></a></li>
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_3.png')}}" alt="Like"></a></li>
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_4.png')}}" alt="Like"></a></li>
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_2.png')}}" alt="Like"></a></li>
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_7.png')}}" alt="Like"></a></li>
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_6.png')}}" alt="Like"></a></li>
                                                                    <li><a href="#"><img src="{{asset('media/figure/reaction_5.png')}}" alt="Like"></a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#"><i class="icofont-reply"></i>Reply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    @endforeach
                                    @endif
                                    
                                    {{-- <li class="main-comments">
                                        <div class="each-comment">
                                            <div class="post-header">
                                                <div class="media">
                                                    <div class="user-img">
                                                        <img src="{{asset('media/figure/chat_14.jpg')}}" alt="Aahat">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-title"><a href="#">test11</a></div>
                                                        <ul class="entry-meta">
                                                            <li class="meta-privacy"><i class="icofont-world"></i>Friends</li>
                                                            <li class="meta-time">test11</li>
                                                        </ul>
                                                    </div>
                                                </div>
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
                                            <div class="post-body">
                                                <p>test</p>
                                            </div>
                                            <div class="post-footer">
                                                <ul>
                                                    <li class="react-icon">
                                                        <img src="{{asset('media/figure/reaction_1.png')}}" alt="icon">
                                                        <img src="{{asset('media/figure/reaction_2.png')}}" alt="icon">
                                                    </li>
                                                    <li class="post-react">
                                                        <a href="#"><i class="icofont-thumbs-up"></i>React!</a>
                                                        <ul class="react-list">
                                                            <li><a href="#"><img src="{{asset('media/figure/reaction_1.png')}}" alt="Like"></a></li>
                                                            <li><a href="#"><img src="{{asset('media/figure/reaction_3.png')}}" alt="Like"></a></li>
                                                            <li><a href="#"><img src="{{asset('media/figure/reaction_4.png')}}" alt="Like"></a></li>
                                                            <li><a href="#"><img src="{{asset('media/figure/reaction_2.png')}}" alt="Like"></a></li>
                                                            <li><a href="#"><img src="{{asset('media/figure/reaction_7.png')}}" alt="Like"></a></li>
                                                            <li><a href="#"><img src="{{asset('media/figure/reaction_6.png')}}" alt="Like"></a></li>
                                                            <li><a href="#"><img src="{{asset('media/figure/reaction_5.png')}}" alt="Like"></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#"><i class="icofont-reply"></i>Reply</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                                {{-- <div class="load-more-btn">
                                    <a href="#" class="item-btn">Load More Comments <span>4+</span></a>
                                </div> --}}
                                <div class="comment-reply">
                                    <div class="user-img">
                                        <img src="{{asset('media/figure/chat_15.jpg')}}" alt="Aahat">
                                    </div>
                                    
                                    <div class="input-box">
                                        <form method="POST" action="{{route('replystatus',$status->id)}}">
                                            @csrf
                                            <input type="text" name="body" class="form-control" placeholder="Your Reply....">        
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                        {{-- <div class="block-box load-more-btn">
                            <a href="#" class="item-btn"><i class="icofont-refresh"></i>Load More Posts</a>
                        </div> --}}
                    </div>
                    <div class="col-lg-4 widget-block widget-break-lg">
                        <div class="widget widget-user-about">
                            <div class="widget-heading">
                                <h3 class="widget-title">About Me</h3>
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
                            <div class="user-info">
                                <p>Hi! My name is Rebeca Powel but some people may know me asserty GamePagla! I have a Newbike channel where I stream.</p>
                                <ul class="info-list">
                                    <li><span>Joined:</span>{{$user->date}}</li>
                                    <li><span>E-mail:</span>{{$user->email}}</li>
                                    <li><span>Address:</span>{{$user->localisation}}</li>
                                    <li class="social-share"><span>Social:</span>
                                        <div class="social-icon">
                                            <a href="#"><i class="icofont-facebook"></i></a>
                                            <a href="#"><i class="icofont-twitter"></i></a>
                                            <a href="#"><i class="icofont-dribbble"></i></a>
                                            <a href="#"><i class="icofont-whatsapp"></i></a>
                                            <a href="#"><i class="icofont-instagram"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget-gallery">
                            <div class="widget-heading">
                                <h3 class="widget-title">Photo Gallery</h3>
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
                            <ul class="photo-list">
                                <li><a href="#"><img src="{{asset('media/figure/widget_gallery1.jpg')}}" alt="Gallery"></a></li>
                                <li><a href="#"><img src="{{asset('media/figure/widget_gallery2.jpg')}}" alt="Gallery"></a></li>
                                <li><a href="#"><img src="{{asset('media/figure/widget_gallery3.jpg')}}" alt="Gallery"></a></li>
                                <li><a href="#"><img src="{{asset('media/figure/widget_gallery4.jpg')}}" alt="Gallery"></a></li>
                                <li><a href="#"><img src="{{asset('media/figure/widget_gallery5.jpg')}}" alt="Gallery"></a></li>
                                <li><a href="#"><img src="{{asset('media/figure/widget_gallery6.jpg')}}" alt="Gallery"></a></li>
                                <li><a href="#"><img src="{{asset('media/figure/widget_gallery2.jpg')}}" alt="Gallery"></a></li>
                                <li><a href="#"><img src="{{asset('media/figure/widget_gallery4.jpg')}}" alt="Gallery"></a></li>
                                <li><a href="#" data-photo="20+"><img src="{{asset('media/figure/widget_gallery1.jpg')}}" alt="Gallery"></a></li>
                            </ul>
                        </div>
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
                                                    <img src="{{asset('media/figure/chat_1.jpg')}}" alt="Chat">
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
                                                    <img src="{{asset('media/figure/chat_2.jpg')}}" alt="Chat">
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
                                                    <img src="{{asset('media/figure/chat_3.jpg')}}" alt="Chat">
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
                                                    <img src="{{asset('media/figure/chat_4.jpg')}}" alt="Chat">
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
                                                    <img src="{{asset('media/figure/chat_1.jpg')}}" alt="Chat">
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
                                                    <img src="{{asset('media/figure/chat_2.jpg')}}" alt="Chat">
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
                                                    <img src="{{asset('media/figure/chat_3.jpg')}}" alt="Chat">
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
                                                    <img src="{{asset('media/figure/chat_4.jpg')}}" alt="Chat">
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
                                                    <img src="{{asset('media/figure/chat_1.jpg')}}" alt="Chat">
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
                                                    <img src="{{asset('media/figure/chat_2.jpg')}}" alt="Chat">
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
                                                    <img src="{{asset('media/figure/chat_3.jpg')}}" alt="Chat">
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
                                                    <img src="{{asset('media/figure/chat_4.jpg')}}" alt="Chat">
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
                                <img src="{{asset('media/figure/widget_banner_1.png')}}" alt="banner">
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
                                        <a href="index.html"><img src="{{asset('media/logo_dark.png')}}" alt="Logo"></a>
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
                                    <img src="{{asset('media/figure/chat_12.jpg')}}" alt="Chat">
                                </div>
                                <div class="author-text">
                                    <span>How are you Fahim vai ? Tommorow office will be your last day of Bachelor life.</span>
                                </div>
                            </li>
                            <li class="chat-you">
                                <div class="author-img">
                                    <img src="{{asset('media/figure/chat_11.jpg')}}" alt="Chat">
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
    <script src="{{asset('dependencies/jquery/js/jquery.min.js')}}"></script>
    <script src="{{asset('dependencies/popper.js/js/popper.min.js')}}"></script>
    <script src="{{asset('dependencies/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dependencies/imagesloaded/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('dependencies/isotope-layout/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('dependencies/slick-carousel/js/slick.min.js')}}"></script>
    <script src="{{asset('dependencies/sal.js/sal.js')}}"></script>
    <script src="{{asset('dependencies/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('dependencies/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('dependencies/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('dependencies/elevate-zoom/jquery.elevatezoom.js')}}"></script>
    <script src="{{asset('dependencies/bootstrap-validator/js/validator.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script>

    <!-- Site Scripts -->
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>