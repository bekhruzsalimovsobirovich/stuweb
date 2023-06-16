<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <b>Sanoat</b> <b style="color: royalblue">Texnika</b> <b style="color: #aa00ff">Universal</b>
                    </a>
                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                         id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item">
                                <a style="color: {{request()->is('/') ? '#eb5834' : ''}}" class="nav-link" href="{{route('main')}}">Asosiy sahifa</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: {{request()->is('about') ? '#eb5834' : ''}}" class="nav-link" href="{{route('about')}}">Biz haqimizda</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: {{request()->is('courses') ? '#eb5834' : ''}}" class="nav-link" href="{{route('courses')}}">Kurslar</a>
                            </li>
                            <li class="nav-item">
                                <a style="color: {{request()->is('contact') ? '#eb5834' : ''}}" class="nav-link" href="{{route('contact')}}">Aloqa</a>
                            </li>
                            <li class="d-none d-lg-block">
                                <a style="border-radius: 5px" class="btn_1" href="{{route('login')}}">Log In</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
