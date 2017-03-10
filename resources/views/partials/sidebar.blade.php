<div class="sidebar" data-color="purple" data-image="{{URL::asset('light/img/sidebar-5.jpg')}}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a>
            </div>

            <ul class="nav">
                <li {{ Route::is('dashboard')?'class=active':'' }}>
                    <a href="{{route('dashboard')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li {{Route::is('profile')?' class=active':'' }}>
                    <a href="{{route('profile')}}">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li {{Route::is('table')?' class=active':'' }}>
                    <a href="{{route('table')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li {{Route::is('typography')?' class=active':'' }}>
                    <a href="{{route('typography')}}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li {{Route::is('icon')?' class=active':'' }}>
                    <a href="{{route('icon')}}">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li {{Route::is('maps')?' class=active':'' }}>
                    <a href="{{route('maps')}}">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li {{Route::is('notification')?' class=active':'' }}>
                    <a href="{{route('notification')}}">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
                <li {{Route::is('login')?' class=active':'' }}>
                    <a href="{{route('login')}}">
                        <i class="pe-7s-users"></i>
                        <p>Login</p>
                    </a>
                </li>
                <li {{Route::is('register')?' class=active':'' }}>
                    <a href="{{route('register')}}">
                        <i class="pe-7s-users"></i>
                        <p>Register</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="{{route('upgrade')}}">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>