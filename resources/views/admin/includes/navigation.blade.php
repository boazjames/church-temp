<nav class="navbar navbar-default nav navbar-fixed-top bg-blue" id="main-nav">
    <div class="inline quick-links float-right">
        <i class="fa fa-gears"></i> <span class="text-bold">ADMIN</span>
        <button class="btn-transparent" id="messages"><i class="fa fa-envelope-o white-color"></i><span class="white-color bg-blue-dark">5</span></button>
        <div class="position-absolute messages hidden">
            <ul>
                <li class="text-bold">You have 2 new messages</li>
                <li><a><span>Ruth</span><span>Pray for me</span><div><i class="fa fa-clock-o"></i> 2 hours ago</div></a></li>
                <li><a><span>John</span><span>Do you have bible studies</span><div><i class="fa fa-clock-o"></i> 3 hours ago</div></a></li>
                <li class="text-center"><a>View all messages</a></li>
            </ul>
        </div>
        <button class="btn-transparent" id="notifications"><i class="fa fa-flag-o white-color"></i><span class="white-color bg-blue-dark">2</span></button>
        <div class="position-absolute notifications hidden">
            <ul>
                <li class="text-bold">You have 2 new notifications</li>
                <li><a><span>Ruth</span><span>Pray for me</span><div><i class="fa fa-clock-o"></i> 2 hours ago</div></a></li>
                <li><a><span>John</span><span>Do you have bible studies</span><div><i class="fa fa-clock-o"></i> 3 hours ago</div></a></li>
                <li class="text-center"><a>View all notifications</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- side navigation -->
<nav class="navbar float-left side-nav bg-white col-lg-3 col-md-3 col-sm-12 col-xs-12 inline" id="nav-collapsed">
    <ul>
        <li class="item1"><h5 class="text-bold white-color">Christian Church</h5><button class="toggle-lg float-right" action="show"><span class="fa fa-bars white-color"></span></button></li>
        <li class="bg-white text-center">
            @if(Auth::user()->image)
            <img src="../storage/user-images/{{Auth::user()->image}}" class="user-img img-circle">
            @else
                <img src="../users-img/user.jpg" class="user-img img-circle">
                @endif
            <h6 class="text-bold">{{Auth::user()->salutation}} {{Auth::user()->username}}</h6>
            <div class="text-center">
                </a> <button class="btn-transparent" id="settings"><i class="fa fa-cog blue-color"></i></button>
                <a href="logout"><button class="btn-transparent" id="sign-out"><i class="fa fa-sign-out blue-color"></i></button></a>
            </div>
        </li>
        <li class="overview-link item"><a class="white-color"><button class="btn-transparent"><i class="fa fa-cogs white-color"></i></button>Dashboard</a></li>
        <li class="item"><a class="white-color"><button class="btn-transparent"><i class="fa fa-book white-color"></i></button>Sermons</a><i class="fa fa-caret-right white-color float-right"></i>
        <ul class="position-absolute hidden">
            <li class="view-sermon"><a class="white-color"><button class="btn-transparent"><i class="fa fa-edit white-color"></i></button>View Sermon</a></li>
            <li class="add-sermon-link"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-plus-circle white-color"></i></button>Add Sermon</a></li>
        </ul>
        </li>
        <li class="item"><a class="white-color"><button class="btn-transparent"><i class="fa fa-video-camera white-color"></i></button>Videos</a><i class="fa fa-caret-right white-color float-right"></i>
            <ul class="position-absolute hidden">
                <li class="view-video"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-edit white-color"></i></button>View Videos</a></li>
                <li class="add-video-link"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-plus-circle white-color"></i></button>Link Video</a></li>
            </ul>
        </li>
        <li class="item"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-clock-o white-color"></i></button>Service</a><i class="fa fa-caret-right white-color float-right"></i>
            <ul class="position-absolute hidden">
                <li class="view-time"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-edit white-color"></i></button>View Time</a></li>
                <li class="set-time-link"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-plus-circle white-color"></i></button>Set Time</a></li>
            </ul>
        </li>
        <li class="item"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-user white-color"></i></button>Admins</a><i class="fa fa-caret-right white-color float-right"></i>
            <ul class="position-absolute hidden">
                <li class="view-admin"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-eye white-color"></i></button>View Admins</a></li>
                <li class="add-admin-link"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-plus-circle white-color"></i></button>Add Admin</a></li>
            </ul>
        </li>
        <li class="item"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-paper-plane white-color"></i></button>Visit</a><i class="fa fa-caret-right white-color float-right"></i>
            <ul class="position-absolute hidden">
                <li class="home-page"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-home white-color"></i></button>Home Page</a></li>
                <li class="sermons-page text-center"><a href="" class="white-color">Sermons Page</a></li>
            </ul>
        </li>
        <li class="show-calender item"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-calendar white-color"></i></button>Calender</a></li>
    </ul>
</nav>

<!-- side navigation small -->
<nav class="navbar float-left side-nav bg-white col-lg-3 col-md-3 col-sm-12 col-xs-12 inline" id="nav-collapsed-sm">
    <ul>
        <li class="item1-sm"><button class="toggle" action="show"><span class="fa fa-bars white-color"></span></button></li>
        <li class="bg-white text-center">
            @if(Auth::user()->image)
            <img src="../storage/user-images/{{Auth::user()->image}}" class="user-img-sm img-circle">
            @else
                <img src="../storage/user-images/user.jpg" class="user-img-sm img-circle">
            @endif
        </li>
        <li class="overview-link item"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-cogs white-color"></i></button></a></li>
        <li class="item"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-book white-color"></i></button></a>
            <ul class="position-absolute hidden">
                <li class="view-sermon"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-edit white-color"></i></button>View Sermon</a></li>
                <li class="add-sermon-link"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-plus-circle white-color"></i></button>Add Sermon</a></li>
            </ul>
        </li>
        <li class="item"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-video-camera white-color"></i></button></a>
            <ul class="position-absolute hidden">
                <li class="view-video"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-edit white-color"></i></button>View Videos</a></li>
                <li class="add-video-link"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-plus-circle white-color"></i></button>Link Video</a></li>
            </ul>
        </li>
        <li class="item"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-clock-o white-color"></i></button></a>
            <ul class="position-absolute hidden">
                <li class="view-time"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-edit white-color"></i></button>View Time</a></li>
                <li class="set-time-link"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-plus-circle white-color"></i></button>Set Time</a></li>
            </ul>
        </li>
        <li class="item"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-user white-color"></i></button></a>
            <ul class="position-absolute hidden">
                <li class="view-admin"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-eye white-color"></i></button>View Admins</a></li>
                <li class="add-admin-link"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-plus-circle white-color"></i></button>Add Admin</a></li>
            </ul>
        </li>
        <li class="item"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-paper-plane white-color"></i></button></a>
            <ul class="position-absolute hidden">
                <li class="home-page"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-home white-color"></i></button>Home Page</a></li>
                <li class="sermons-page text-center"><a href="" class="white-color">Sermons Page</a></li>
            </ul>
        </li>
        <li class="item"><a href="" class="white-color"><button class="btn-transparent"><i class="fa fa-calendar white-color"></i></button></a></li>
    </ul>
</nav>