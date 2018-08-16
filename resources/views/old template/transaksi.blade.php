<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GarudaPOS | Transaksi </title>

            @include('link.transaksi')

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

            
        <!-- Insert Page Name Here -->   TRANSAKSI   <!-- Insert Page Name Here -->

            
              </h1></li> </ul>
              
            @include('template.third')    

    <!----- /Template ----->

        <!-- page content -->
        <br><br><div class="right_col" role="main">
    

            <!--line chart transaksi penjualan-->
            <br><br>
            <div class="row">
              <div class="col-md-6">
              
                <div class="x_panel">
                <!--cari produk -->
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Produk...">
                        <span class="input-group-btn ">
                          <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
                        </span>
                      </div>
                  

                  <!--table list produk-->
                  <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                <div class="row">
                    <div class="table-responsive">
                      <!--table list produk-->
                      <table class="table jambo_table" style="font-size:12px;">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">SKU</th>
                            <th class="column-title">Nama Produk</th>
                            <th class="column-title">Variasi</th>
                            <th class="column-title">Harga</th>
                            </th>
                          </tr>
                        </thead>

                        <tbody>

                          
                        @foreach ($produklist as $key => $value)
                        <tr>
                          <th>{{$value->SKU}}</th>
                          <th>{{$value->Produk_title}}</th>
                          <th>{{$value->nama_varian}}</th>
                          <th>{{$value->HARGA_JUAL}}</th>
                        </tr>
                          @endforeach

                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
              
                <div class="x_panel">
                     <h4><i class="fa fa-shopping-cart"></i> Keranjang Belanja</h4>
                      
                      <button class=" btn btn-danger" style="float: right"><i class="fa fa-trash"></i>  Kosongkan Keranjang</button>
                  <!--table list produk-->
                  <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

<!--                    <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>-->

                    <div class="table-responsive">
                      <!--table list produk-->
                      <table class="table" style="font-size:9px;">
                        <thead>
                          <tr class="">
                            <th class="column-title">Nama Produk</th>
                            <th class="column-title">Variasi</th>
                            <th class="column-title">Harga Satuan</th>
                            <th class="column-title">Jumlah</th>
                            <th class="column-title">Subtotal</th>
                            </th>
                          </tr>
                        </thead>

                        <tbody>

                          
                          <tr class="even pointer">
                            <td>ASUS ROG</td>
                            <td>Red</td>
                            <td>2.400.000.00,-</td>
                            <td><div class="form-group">
                              <div class="input-group-transaksi input-group">

                                  <span class="input-group-btn">
                                      <button type="button" class="btn btn-default-deactive btn-xs btn-number" disabled="disabled" data-type="minus" data-field="quant[1]" style="color:white;margin-bottom:10px">
                                          <span class="glyphicon glyphicon-minus"></span>
                                      </button>
                                  </span>
                                  <input type="text" name="quant[1]" class="input-number input-xs" style="width:40px;margin-top:2px;padding-left:5px" value="1" min="0"  max="9999">
                                  <span class="input-group-btn">
                                      <button type="button" class="btn btn-default-deactive btn-xs btn-number" data-type="plus" data-field="quant[1]" style="color:white;margin-bottom:10px">
                                          <span class="glyphicon glyphicon-plus"></span>
                                      </button>
                                  </span>
                              </div></div></td>
                            <td>2.400.000.00,-</td>
                            <td><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                          <tr class="even pointer">
                            <td>ASUS ROG</td>
                            <td>Red</td>
                            <td>2.400.000.00,-</td>
                            <td><div class="form-group">
                              <div class="input-group-transaksi input-group">
                                  <span class="input-group-btn">
                                      <button type="button" class="btn btn-default-deactive btn-xs btn-number" disabled="disabled" data-type="minus" data-field="quant[2]" style="color:white;margin-bottom:10px">
                                          <span class="glyphicon glyphicon-minus"></span>
                                      </button>
                                  </span>
                                  <input type="text" name="quant[2]" class="input-number input-xs"value="1"  style="width:40px;margin-top:2px;padding-left:5px" min="0" max="9999" >
                                  <span class="input-group-btn">
                                      <button type="button" class="btn btn-default-deactive btn-xs btn-number" data-type="plus" data-field="quant[2]" style="color:white;margin-bottom:10px">
                                          <span class="glyphicon glyphicon-plus"></span>
                                      </button>
                                  </span>
                              </div></div></td>
                            <td>2.400.000.00,-</td>
                          <td><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                        </tr>

                          </tbody>
                        </table>

                            <h3 style="float: left">Total Harga</h3>
                            
                            <h3 style="text-align:right;float: right">Rp. 4.800.000.00,-</h3>
                          </div>

                      </div>
                    </div>
                  </div>
              </div>
        
            <!--form diskon-->
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
              
                <div class="x_panel">
                

                    
                  <!--table list produk-->
                  <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>


                  <div class="x_content">
                    <div class="col-lg-6 col-md-12 col-sm-8 col-xs-12">
                      <input class="form-control" placeholder="Input diskon" style="width:100%;" type="text">
                    </div>

                      <div class="col-lg-6 col-md-12 col-sm-4 col-xs-12">
                      <div class="btn-group" style="float: right;">
                            <button class="btn btn-primary btn-sm btn-disc"  type="button">Nominal</button>
                            <button class="btn btn-primary btn-sm btn-disc"  type="button">Persen</button>
                            <button class="btn btn-primary btn-sm btn-disc"  type="button">
                            Kode</button>
                      </div>
                    </div>

                    <!-- form tunai diterima-->
                    <div class="col-xs-12">
                      <br><input class="form-control" placeholder="Tunai diterima" type="text">
                    </div>
                </div>

                  </div>
                      

























                  <!-- Bayar Modal -->    
                  
                  <a data-toggle="modal" data-target="#bayar" class="btn btn-primary btn-lg" style="width:100%">BAYAR</a>
                                    </div>




                      </div>
                    </div>
                  </div>

                  

                      </div>
                    </div>
                  </div>
                  <!-- /modals -->
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

                      <div class="modal" id="bayar">
                    <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <center><h4 class="modal-title"><b>TRANSAKSI BERHASIL</b></h4></center>
                          </div><div class="container"></div>
                          <div class="modal-body">

                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID TRANSAKSI</th>
                                  <th colspan="2">TRC000001</th>
                                </tr>
                              </thead>
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
                          <div class="modal-footer">
                            <a data-target="#" data-dismiss="modal" class="btn btn-primary">Cetak Struk</a>
                            <a data-toggle="modal" data-target="#kirim_struk" class="btn btn-success">Kirim Struk</a>
                          </div>
                        </div>
                      </div>
                  </div>
                  

                  <!--modal kirim struk-->
                  <div class="modal" id="kirim_struk">
                    <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <center><h4 class="modal-title"><b>KIRIM STRUK</b></h4></center>
                          </div><div class="container"></div>
                          <div class="modal-body">
                            <!--form input email-->
                            <div class="col-xs-12">
                                  <center><label> Input Email Customer </label></center>
                              <br><input class="form-control" placeholder="Email" type="text"><br><br>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <a href="#" data-dismiss="modal" class="btn btn-danger">Kembali</a>
                            <a data-toggle="modal" data-target="#sukses_kirim" class="btn btn-success">Kirim</a>
                          </div>
                          </div>
                        </div>
                      </div>



                  <!--modal notifikasi kirim struk-->
                  <div class="modal" id="sukses_kirim">
                    <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            
                          </div><div class="container"></div>
                          <div class="modal-body">
                            <!--form input email-->
                            <div class="col-xs-12">
                                  <br><br><center><b><h1> STRUK BERHASIL DIKIRIM </h1></b></center><br><br><br><br><br><br><br><br><br><br><br><br>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <a href="transaksi" class="btn btn-success">OK</a>
                          </div>
                        </div>
                      </div>
                  </div>

            @include('script.transaksi')

  </body>
</html>