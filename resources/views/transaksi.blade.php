@extends('template')

@section('link')

    <title>GarudaPOS | Transaksi </title>

    <!-- Bootstrap -->
    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Fix for bugged data table -->
    <link href="../assets/build/css/table-fix.css" rel="stylesheet">

    <!--data table-->
    <link href="https://cdn.datatables.net/select/1.2.6/css/select.dataTables.min.css" rel="stylesheet" >
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.bootstrap.min.css">

    <!-- Custom Theme Style -->
    <link href="../assets/build/css/custom.min.css" rel="stylesheet">

@endsection

@section('title')

  <h1 style="margin:20px; font-size:20px; color:#EDEDED;">TRANSAKSI</h1>

@endsection

@section('content')

        <!-- page content -->
        <br><br><div class="right_col menu_fixed" role="main">
            <!--line chart transaksi penjualan-->
            <br><br>
            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
              
                <div class="x_panel">
                  <!--table list produk-->
                 

                  <div class="x_content">

                <div class="row">
                    
                      <!--table list produk-->
                       <table id="listproduk" class="table table-striped" style="width:100%; font-size:11px;">
                        
            <thead>
                          <tr>
                            <th class="column-title">SKU</th>
                            <th class="column-title">Nama Produk</th>
                            <th class="column-title">Variasi</th>
                            <th class="column-title">Harga</th>
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

                <div class="col-md-6 col-sm-12 col-xs-12">
              
                <div class="x_panel">
                     <h4 class="pull-left"><i class="fa fa-shopping-cart"></i> Keranjang Belanja</h4>
                      
                      <button class=" btn btn-danger" style="float: right"><i class="fa fa-trash"></i>  Kosongkan Keranjang</button>
                  <!--table list produk-->
                  <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

<!--<p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>-->

                      <!--table list produk-->
                      <table id="listcart" class="table" style="font-size:9px;width: 100%">
                        <thead>
                          <tr class="">
                            <th class="column-title">Nama Produk</th>
                            <th class="column-title">Variasi</th>
                            <th class="column-title">Harga Satuan</th>
                            <th class="column-title">Jumlah</th>
                            <th class="column-title">Subtotal</th>
                            <th class="column-title">Action</th>                            
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        
                          <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                                                    <tr class="even pointer">
                            <td class=" ">ASUS ROG</td>
                            <td class=" ">Red</td>
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" "><div class="form-group">
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
                            <td class=" ">2.400.000.00,-</td>
                            <td class=" " style="text-align: center;"><i class="glyphicon glyphicon-remove glyphicon-remove-transaksi"></i></td>
                          </tr>

                          </tbody>
                        </table>

                            <h3 style="float: left">Total Harga</h3>
                            
                            <h3 style="text-align:right;float: right">Rp. 4.800.000.00,-</h3>
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
                  
                  <a data-toggle="modal" data-target="#bayar" class="btn btn-primary btn-lg" style="width:100%; margin-bottom: 10%">BAYAR</a>
                      </div>
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

    <script src="../assets/vendors/DateJS/build/snippet.js"></script> 

    <!-- PNotify -->
    <script src="../assets/vendors/pnotify/dist/pnotify.js"></script>
    <script src="../assets/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../assets/vendors/pnotify/dist/pnotify.nonblock.js"></script> 

    <!-- bootstrap-progressbar -->
    <script src="../assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../assets/vendors/iCheck/icheck.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="../assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../assets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <script>
    	var product;
    	var cart;

        $(document).ready(function() {
        	$('#listproduk').DataTable( {
            "scrollY":        "400px",
            "scrollX":        true,
            "scrollCollapse": true,
            "paging":         true,
            "fixedColumns":   true,
            "select": true
        });
            $('#listcart').DataTable( {
            "scrollY":        "200px",
            "scrollX":        true,
            "scrollCollapse": true,
            "paging":         true,
            "fixedColumns":   true,
            "select": true
    });    });

       
    </script>

    
    <!-- Custom Theme Scripts -->
    <script src="../assets/build/js/custom.min.js"></script>

@endsection
