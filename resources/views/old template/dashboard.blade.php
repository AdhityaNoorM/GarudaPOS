<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GarudaPOS | Dashboard </title>

            @include('link.dashboard')

  </head>

  <body class="nav-md footer_fixed">

    <!----- Template ----->   

            @include('template.first')

            <a href="/" class="site_title"><i class="fa fa-paw"></i>
            <span>


        <!-- Insert Company Here -->   GarudaPOS   <!-- /Insert Company Here -->

              
            </span></a>          
            </div> <div class="clearfix"></div> <br>

            @include('template.second')

              <li class=""><h1 style="margin:20px; font-size:20px; color:#EDEDED;">

            
        <!-- Insert Page Name Here -->   DASHBOARD   <!-- Insert Page Name Here -->

            
              </h1></li> </ul>

            @include('template.third')    

    <!----- /Template ----->         

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

            @include('template.fourth')

      </div>
    </div>

            @include('script.dashboard')

  </body>
</html>