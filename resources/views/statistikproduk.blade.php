@extends('template')

@section('link')

    <title>GarudaPOS | Statistik Produk </title>

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

  <h1 style="margin:20px; font-size:20px; color:#EDEDED;">STATISTIK PRODUK</h1>

@endsection

@section('content')

        <!-- page content -->
        <br><br><div class="right_col" role="main">
          

        <div class="">

        


            <!--line chart statistik produk-->
            <br>
            <div class="row" style="margin-top:20px;">
          
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <div class="x_panel">
                  <div class="x_title">
          
          <h2>Lihat Statistik Penjaualan Produk Berdasarkan :</h2>
          <div class="clearfix"></div>
          
          
          
          <br><div id="statistikproduk" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left" style="cursor: pointer; padding: 5px 10px;">
                        
            <!--berdasarkan kategori -->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-left">
            <select class="select form-control input-sm " tabindex="-1" style="margin-top: 20px; border: 1px solid green; border-radius:5px;" >
                            <option>Semua Kategori</option>
                            <option value="AK">Smartphone</option>
                            <option value="HI">Laptop</option>
                            <option value="CA">Notebook</option>
                            <option value="NV">Tablet</option>
                        </select>
          </div>
            
            <!--berdasarkan merek produk-->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-left">
            <select class="select form-control input-sm" tabindex="-1" style="margin-top: 20px; border: 1px solid green; border-radius:5px;" >
                            <option>Semua Merek</option>
                            <option value="AK">ASUS</option>
                            <option value="HI">Lenovo</option>
                            <option value="CA">Dell</option>
                            <option value="NV">Samsung</option>
                        </select>
          </div>
            
          <!--berdasarkan nama produk-->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-left">
            <select class="select form-control input-sm" tabindex="-1" style="margin-top: 20px; border: 1px solid green; border-radius:5px;" >
                            <option>Semua Nama Produk</option>
                            <option value="AK">ASUS Zenfone Max</option>
                            <option value="HI">Lenovo ThinkPad X220</option>
                            <option value="CA">Samsung Galaxy Tab</option>
                            <option value="NV">Acer</option>
                        </select>
          </div>
                    </div>
          
          </div>
         </div>
        </div>
            <div class="col-lg-12 col-md- col-sm-12 col-xs-12" >
                <div class="x_panel">
                  <div class="x_title">
                    <!--datepicker-->
                      <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border-radius:5px; border: 1px solid green">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span></span> <b class="caret"></b>
                      </div>
                    
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
