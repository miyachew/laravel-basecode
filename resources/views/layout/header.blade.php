<header class="main-header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="javascript:void(0)" >
            <span class="fa fa-bars"> </span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                        <span class="hidden-xs">{{ Auth::user()->email }}</span>
                        <li class="user-body"><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>