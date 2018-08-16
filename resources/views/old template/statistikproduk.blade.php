<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GarudaPOS | Dashboard </title>

            @include('link.statistikproduk')

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

            
        <!-- Insert Page Name Here -->   STATISTIK PRODUK   <!-- Insert Page Name Here -->

            
              </h1></li> </ul>

            @include('template.third')    

    <!----- /Template ----->

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
                            <option value="NV">ASUS ROG</option>
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

            @include('template.fourth')

      </div>
    </div>

            @include('script.produk')

  </body>
</html>