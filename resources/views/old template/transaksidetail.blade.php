<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GarudaPOS | Detail Transaksi </title>

            @include('link.transaksidetail')

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

            
        <!-- Insert Page Name Here -->   DETAIL TRANSAKSI   <!-- Insert Page Name Here -->

            
              </h1></li> </ul>

            @include('template.third')    

    <!----- /Template ----->

        <!-- page content -->
        <div class="right_col" role="main">
          

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
               
               <table class="table" style="font-size:190%;">
                              <thead >
                                <tr>
                                  <th>ID TRANSAKSI</th>
                                  <th colspan="2">TRC000001</th>
                                </tr>
                              </thead>
                              
                              <thead>
                                <tr>
                                  <th>TGL TRANSAKSI</th>
                                  <th colspan="2">02/12/2018</th>
                                </tr>
                              </thead>

                              <thead>
                                <tr>
                                  <th>JAM TRANSAKSI</th>
                                  <th colspan="2">13:00:12</th>
                                </tr>
                              </thead>

                              <thead>
                                <tr>
                                  <th>NAMA KASIR</th>
                                  <th colspan="2">Lucky Ramdani</th>
                                </tr>
                              </thead>

                            </table>
                        </div>
                    </div> 

                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="x_panel">
               
                        <table class="table">
                             
                              <tbody>
                                
                                <tr>
                                  <td>Total Harga</td>
                                  <td colspan="2">Rp. 19.200.000,00,-</td>
                                </tr>
                                
                                <tr>
                                  <td>Biaya Tambahan</td>
                                  <td colspan="2">Rp. 0,00,-</td>
                                </tr>

                                <tr>
                                  <td>Diskon</td>
                                  <td colspan="2">Rp. 1.000.000,00,-</td>
                                </tr>

                                <tr>
                                  <td>Harga Akhir</td>
                                  <td colspan="2">Rp. 18.200.000,00,-</td>
                                </tr>

                                <tr>
                                  <td>Uang Diterima</td>
                                  <td colspan="2">Rp. 19.000.000,00,-</td>
                                </tr>

                                <tr>
                                  <td>Kembalian</td>
                                  <td colspan="2">Rp. 800.000,00,-</td>
                                </tr>  
                                                                
                              </tbody>
                            </table>
                        </div>
                    </div> 

                    <div class="col-md-12 sm-12 xs-12">
                      <div class="x_panel" >
                        <table id="datatable" class="table">
                        <thead>

                          <th>Nama Produk</th>
                            <th>Variasi</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                          </tr>
                        </thead>


                        <tbody>

                          <tr>
                            <td>ASUS ROG</td>
                            <td>Red</td>
                            <td>2.400.000.00,-</td>
                            <td>2</td>
                            <td>4.800.000.00,-</td>
                          </tr>

                          <tr>
                            <td>Lenovo ThinkPad X220</td>
                            <td>Black</td>
                            <td>1.200.000.00,-</td>
                            <td>1</td>
                            <td>1.200.000.00,-</td>
                          </tr>

                         
                          
                          
                          
                          

                        </tbody>
                      </table>
                  </div>
                </div>
              </div>

              </div>
            </div>
        <!-- /page content -->
        </div>
        
            @include('template.fourth')

      </div>
    </div>

            @include('script.transaksidetail')

  </body>
</html>