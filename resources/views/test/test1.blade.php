<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="/assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="/assets/vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="/assets/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="/assets/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="/assets/css/app.min.css">
    </head>

    <body data-ma-theme="green">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
                    <div class="navigation-trigger__inner">
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                        <i class="navigation-trigger__line"></i>
                    </div>
                </div>

                <div class="header__logo hidden-sm-down">
                    <h1><a href="index.html">Material Admin 2.0</a></h1>
                </div>


                <ul class="top-nav">
                    <li class="hidden-xl-up"><a href="" data-ma-action="search-open"><i class="zmdi zmdi-search"></i></a></li>
                    <li class="dropdown hidden-xs-down">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
                            <div class="row app-shortcuts">
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-calendar"></i>
                                    <small class="">Calendar</small>
                                    <span class="app-shortcuts__helper bg-red"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-file-text"></i>
                                    <small class="">Files</small>
                                    <span class="app-shortcuts__helper bg-blue"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-email"></i>
                                    <small class="">Email</small>
                                    <span class="app-shortcuts__helper bg-teal"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-trending-up"></i>
                                    <small class="">Reports</small>
                                    <span class="app-shortcuts__helper bg-blue-grey"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-view-headline"></i>
                                    <small class="">News</small>
                                    <span class="app-shortcuts__helper bg-orange"></span>
                                </a>
                                <a class="col-4 app-shortcuts__item" href="">
                                    <i class="zmdi zmdi-image"></i>
                                    <small class="">Gallery</small>
                                    <span class="app-shortcuts__helper bg-light-green"></span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown hidden-xs-down">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-item theme-switch">
                                Theme Switch

                                <div class="btn-group btn-group-toggle btn-group--colors" data-toggle="buttons">
                                    <label class="btn bg-green active"><input type="radio" value="green" autocomplete="off" checked></label>
                                    <label class="btn bg-blue"><input type="radio" value="blue" autocomplete="off"></label>
                                    <label class="btn bg-red"><input type="radio" value="red" autocomplete="off"></label>
                                    <label class="btn bg-orange"><input type="radio" value="orange" autocomplete="off"></label>
                                    <label class="btn bg-teal"><input type="radio" value="teal" autocomplete="off"></label>

                                    <div class="clearfix mt-2"></div>

                                    <label class="btn bg-cyan"><input type="radio" value="cyan" autocomplete="off"></label>
                                    <label class="btn bg-blue-grey"><input type="radio" value="blue-grey" autocomplete="off"></label>
                                    <label class="btn bg-purple"><input type="radio" value="purple" autocomplete="off"></label>
                                    <label class="btn bg-indigo"><input type="radio" value="indigo" autocomplete="off"></label>
                                    <label class="btn bg-brown"><input type="radio" value="brown" autocomplete="off"></label>
                                </div>
                            </div>
                             @guest
                             <a href="" class="dropdown-item">Login</a>
                             <a href="" class="dropdown-item">Register</a>
                              @else
                            <a href="" class="dropdown-item">Fullscreen</a>
                            <a href="" class="dropdown-item">Clear Local Storage</a>
                            <a href="" class="dropdown-item">{{ Auth::user()->name }}</a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" class="dropdown-item">
                            Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            @endguest
                        </div>
                    </li>
                </ul>
            </header>

            <aside class="sidebar">
                <div class="scrollbar-inner">
                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="/assets/demo/img/profile-pics/8.jpg" alt="">
                            <div>
                                <div class="user__name">Malinda Hollaway</div>
                                <div class="user__email">malinda-h@gmail.com</div>
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">View Profile</a>
                            <a class="dropdown-item" href="">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="navigation__active"><a href=""><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-view-week"></i> Todo List Details</a>

                            <ul>
                                <li><a href="hidden-sidebar.html">Add Todo</a></li>
                                <li><a href="boxed-layout.html">List Title</a></li>
                            </ul>
                        </li>
                      </ul>
                </div>
            </aside>

            <aside class="chat">
                <div class="chat__header">
                    <h2 class="chat__title">Chat <small>Currently 20 contacts online</small></h2>

                    <div class="chat__search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>
                </div>

                <div class="scrollbar-inner">
                    <div class="listview listview--hover chat__buddies">
                        <a class="listview__item chat__available">
                            <img src="/assets/demo/img/profile-pics/7.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>hey, how are you doing.</p>
                            </div>
                        </a>

                        <a class="listview__item chat__available">
                            <img src="/assets/demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>hmm...</p>
                            </div>
                        </a>

                        <a class="listview__item chat__away">
                            <img src="/assets/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>all good</p>
                            </div>
                        </a>

                        <a class="listview__item">
                            <img src="/assets/demo/img/profile-pics/8.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>morbi leo risus portaac consectetur vestibulum at eros.</p>
                            </div>
                        </a>

                        <a class="listview__item">
                            <img src="/assets/demo/img/profile-pics/6.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>fusce dapibus</p>
                            </div>
                        </a>

                        <a class="listview__item chat__busy">
                            <img src="/assets/demo/img/profile-pics/9.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">Jeannette Lawson</div>
                                <p>cras mattis consectetur purus sit amet fermentum.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <a href="messages.html" class="btn btn--action btn--fixed btn-danger"><i class="zmdi zmdi-plus"></i></a>
            </aside>

            <section class="content">
                <header class="content__title">
                    <h1>Dashboard</h1>
                    <small>Welcome to the unique Material Design admin web app experience!</small>

                    <div class="actions">
                        <a href="" class="actions__item zmdi zmdi-trending-up"></a>
                        <a href="" class="actions__item zmdi zmdi-check-all"></a>

                        <div class="dropdown actions__item">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="" class="dropdown-item">Refresh</a>
                                <a href="" class="dropdown-item">Manage Widgets</a>
                                <a href="" class="dropdown-item">Settings</a>
                            </div>
                        </div>
                    </div>
                </header>


                <footer class="footer hidden-xs-down">
                    <p>© Material Admin Responsive. All rights reserved.</p>
                </footer>
            </section>
        </main>


        <script src="/assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/assets/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="/assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/assets/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="/assets/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <script src="/assets/vendors/bower_components/Flot/jquery.flot.js"></script>
        <script src="/assets/vendors/bower_components/Flot/jquery.flot.resize.js"></script>
        <script src="/assets/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="/assets/vendors/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="/assets/vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="/assets/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="/assets/vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
        <script src="/assets/vendors/jquery.sparkline/jquery.sparkline.min.js"></script>
        <script src="/assets/vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="/assets/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

        <!-- Charts and maps-->
        <script src="/assets/demo/js/flot-charts/curved-line.js"></script>
        <script src="/assets/demo/js/flot-charts/dynamic.js"></script>
        <script src="/assets/demo/js/flot-charts/line.js"></script>
        <script src="/assets/demo/js/flot-charts/chart-tooltips.js"></script>
        <script src="/assets/demo/js/other-charts.js"></script>
        <script src="/assets/demo/js/jqvmap.js"></script>

        <!-- App functions and actions -->
        <script src="/assets/js/app.min.js"></script>
    </body>
</html>
