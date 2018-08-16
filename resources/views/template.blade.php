<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('link')

  </head>

    <body class="nav-md footer_fixed">
      <div class="container body">
        <div class="main_container">
          <div class="col-md-3 left_col menu_fixed">
            <div class="left_col scroll-view">
              <div class="navbar nav_title" style="border: 0;">
                <a href="/" class="site_title">
                  <i class="fa fa-paw"></i>
                  <span>GarudaPOS</span>
                </a>          
              </div>
              <div class="clearfix"></div>
              <br>

<!-- sidebar menu -->

              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                  <ul class="nav side-menu side-menu-sm">
                    <li><a>
                      <i class="fa fa-dashboard"></i> Dashboard </a></li>

<!--dashboard sidebar-->

                    <li><a><i class="fa fa-dollar"></i> Transaksi <span class="fa fa-chevron-down"></span></a>

<!--sidebar transaksi-->

                      <ul class="nav child_menu">
                        <li><a href="transaksi">Transaksi</a></li>
                        <li><a href="transaksiriwayat">Riwayat Transaksi</a></li>
                      </ul>
                    </li>
                    <br>
                    <h3>Back Office Features</h3>
                    <br>

                    <!--head back office features-->

                    <li><a><i class="fa fa-line-chart"></i>Laporan<span class="fa fa-chevron-down"></span></a> <!-- laporan sidebar-->
                      <ul class="nav child_menu">
                        <li><a href="general_elements.html">Penjualan</a></li>
                        <li><a href="media_gallery.html">Transaksi</a></li>
                      </ul>
                    </li>

                    <li><a><i class="fa fa-archive"></i>Gudang<span class="fa fa-chevron-down"></span></a> <!-- gudang sidebar-->
                      <ul class="nav child_menu">
                        <li><a href="general_elements.html">Pengelolaan Produk</a></li>
                        <li><a href="media_gallery.html">Statistik Produk</a></li>
                      </ul>
                    </li>

                    <li><a><i class="fa fa-building"></i>Outlet<span class="fa fa-chevron-down"></span></a> <!-- outlet sidebar-->
                      <ul class="nav child_menu">
                        <li><a href="general_elements.html">Pengelolaan Outlet</a></li>
                        <li><a href="media_gallery.html">Statistik Outlet</a></li>
                      </ul>
                    </li>

                    <li><a><i class="fa fa-users"></i>Pegawai<span class="fa fa-chevron-down"></span></a> <!-- pegawai sidebar-->
                      <ul class="nav child_menu">
                        <li><a href="general_elements.html">Pengelolaan Pegawai</a></li>
                        <li><a href="media_gallery.html">Statistik Pegawai</a></li>
                      </ul>
                    </li>

                    <li><a><i class="fa fa-tags"></i>Promosi<span class="fa fa-chevron-down"></span></a> <!-- gudang sidebar-->
                      <ul class="nav child_menu">
                        <li><a href="general_elements.html">Pengelolaan Promosi</a></li>
                      </ul>
                    </li>              
                  </ul>
                </div>
              </div>

<!-- /sidebar menu -->

<!-- /menu footer buttons -->

              <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                  <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                  <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
              </div>

<!-- /menu footer buttons -->

            </div>
          </div>

<!-- top navigation -->

          <div class="top_nav">
            <div class="nav_menu">
              <nav>
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
			    <ul class="nav navbar-nav navbar-left">
			      <li class="">

        @yield('title')

			      </li>
			    </ul>
			    <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{asset('assets/images/img.jpg')}}" alt="">Lucky Ramdani - Pemilik
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li>
                      	<a href="javascript:;">
                      	  <i class="fa fa-user"></i>
                      	  Profil
                      	</a>
                      </li>
                      <li>
                       <a href="javascript:;">
                         <i class="fa fa-building"></i>
                         Profil Perusahaan
                       </a>
                      </li>
                      <li>
                        <a href="login.html">
                          <i class="fa fa-sign-out"></i>
                          Log Out
                        </a>
                      </li>
                    </ul>
                  </li>

                  <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                      <li>
                        <a>
                          <span class="image"><img src="{{asset('assets/images/img.jpg')}}" alt="Profile Image" /></span>
                          <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('assets/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('assets/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('assets/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>Lucky Ramdani</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
          </div>

<!-- /top navigation -->

        @yield('content')

<!-- footer content -->

        <footer>
          <div class="pull-right">
            Copyright &copy; CV. Garuda Infinity Kreasindo <a href="https://garudainfinity.com">2018</a>
          </div>
          <div class="clearfix"></div>
        </footer>

<!-- /footer content -->
    
      </div>
    </div>

        @yield('script')

  </body>
</html>