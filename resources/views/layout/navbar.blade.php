<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a href="index.html">
                <img class="img-fluid" src="../files/assets/images/logo.png" alt="Theme-Logo" />
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu icon-toggle-right"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-right">
                <li class="user-profile header-notification">

                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{session()->get('user')->picture_url}}" class="img-radius" alt="User-Profile-Image">
                            <span>{{session()->get('user')->name}}</span>
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <!-- <li>
                                <a href="#!">
                                <i class="feather icon-settings"></i> Settings

                            </a>
                            </li>
                            <li>
                                <a href="#">
                                <i class="feather icon-user"></i> Profile

                            </a>
                            </li>
                            <li>
                                <a href="email-inbox.html">
                                <i class="feather icon-mail"></i> My Messages

                            </a>
                            </li>
                            <li>
                                <a href="auth-lock-screen.html">
                                <i class="feather icon-lock"></i> Lock Screen

                            </a>
                            </li> -->
                            <li>
                                <a href="{{ url('logout') }}">
                                <i class="feather icon-log-out"></i> Logout

                            </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>