@extends('template')

@section('link')

    <title>GarudaPOS | Dashboard </title>

    <!-- Bootstrap -->
    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../assets/build/css/custom.min.css" rel="stylesheet">

@endsection

@section('title')

<!-- Dashboard-->

  <h1 style="margin:20px; font-size:20px; color:#EDEDED;">DASHBOARD</h1>

@endsection

@section('content')

        <!-- page content -->
        <br><br><div class="right_col" role="main">
          

        <div class="">

        
            <div class="row top_tiles">

                      
                      

                      <div id="pilihoutlet" class="pull-right" style="cursor: pointer; padding: 5px 10px;">
                        <select class="select select-danger form-control input-sm" tabindex="-1" style="margin-top:-4.2%; margin-bottom:10px; border: 1px solid green; border-radius:5px;" >
                            <option>All Outlet</option>
                            <option value="AK">Kantor Pusat</option>
                            <option value="HI">Cab. Buah batu</option>
                            <option value="CA">Cab. Ciwaruga</option>
                            <option value="NV">Cab. Suryalaya</option>
                            <option value="OR">Cab. Sarijadi</option>
                            <option value="WA">Cab. Sukajadi</option>
                        </select>
                      </div>

                      <!--datepicker-->
                      <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border-radius:5px; border: 1px solid green">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span></span> <b class="caret"></b>
                      </div>

                    </div>


              <!--Total Penjualan -->
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                <div class="tile-stats bg-green" >
                  <div class="icon" style="color:white; opacity:0.5"><i class="glyphicon glyphicon-shopping-cart"></i></div>
                  <div class="count" ><h2>Total Penjualan</h2></div>
                  <h3 style="color:white;"><b>Rp. 58.345.000</b></h3><br><br><br>
                </div>
              </div>

              <!--Total Profit-->
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12" >
                <div class="tile-stats bg-green" >
                  <div class="icon" style="color:white; opacity:0.5"><i class="fa fa-line-chart"></i></div>
                  <div class="count" ><h2>Total Profil</h2></div>
                  <h3 style="color:white;"><b>Rp. 17.105.000</b></h3><br><br><br>
                </div>
              </div>

              <!--Jumlah Transaksi-->
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12" >
                <div class="tile-stats bg-green" >
                  <div class="icon" style="color:white; opacity:0.5"><i class="fa fa-money"></i></div>
                  <div class="count" ><h2>Jumlah Transaksi</h2></div>
                  <h3 style="color:white;"><b>20</b></h3><br><br><br>
                </div>
              </div>
            </div>

            <!--line chart transaksi penjualan-->
            <br>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ringkasan Penjualan</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="demo-container" style="height:300px">
                        <div id="chart_plot_02" class="demo-placeholder"></div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection


@section('script')

    <!-- jQuery -->
    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../assets/vendors/Flot/jquery.flot.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../assets/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../assets/vendors/moment/min/moment.min.js"></script>
    <script src="../assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../assets/build/js/custom.min.js"></script>

@endsection