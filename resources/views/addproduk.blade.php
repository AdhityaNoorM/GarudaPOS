@extends('template')

@section('link')

    <title>GarudaPOS | Tambah Produk </title>

    <!-- Bootstrap -->
    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

     <!-- custom table (fixed) -->
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

  <h1 style="margin:20px; font-size:20px; color:#EDEDED;">TAMBAH PRODUK</h1>

@endsection

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"><br>
				  <div class="row">
				  
				  <div class="col-md-12 col-sm-12 col-xs-12">
					
				  <!-- form produk-->
				  <div class="col-md-12 col-sm-12 col-xs-12 table-fix">
						<input type="text" id="namaproduk" class="form-control" name="namaproduk" placeholder="Nama Produk" required="" style="border-radius:5px; border: 1px solid green;">
				  </div>
				  
				  
				  
						
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
						<!--kategori produk-->
						<select class="select form-control input-sm" tabindex="-1" style="margin-top: 20px; border: 1px solid green; border-radius:5px;" >
                            <option>Pilih Kategori Produk</option>
                            <option value="AK">Smartphone</option>
                            <option value="HI">Laptop</option>
                            <option value="CA">Tablet</option>
                        </select>
						<a href="/kategoriproduk"><small style="color:green;" >+ Buat Kategori Produk Baru</small></a>
					</div> 
					
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 "> 
							<!--merek produk-->
							<select class="select form-control input-sm" tabindex="-1" style="margin-top: 20px; border: 1px solid green; border-radius:5px;" >
								<option>Pilih Merek Produk</option>
								<option value="AK">ASUS</option>
								<option value="HI">Lenovo</option>
								<option value="CA">Samsung</option>
								<option value="NV">ASUS ROG</option>
							</select>
							<a href="/merekproduk"><small style="color:green;">+ Buat Merek Produk Baru</small></a>
				
					</div>
				
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<br><textarea id="deskripsiproduk" class="form-control" name="deskripsiproduk" placeholder="Deskripsi Produk" required="" style=" height:250px; border-radius:5px; border: 1px solid green;"></textarea>
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div class= row">
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 ">
						<br><label style="margin-top: 8px">Input Gambar Produk:</label>
							</div>
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 ">
						<br>
				
				<input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" style="opacity: 0"/>	
					<label for="file-1" style="margin-top: -20px;margin-left: 30px; position: absolute;" class="pull-right"><span>Choose a file&hellip;</span></label>

					
					</div>
		     	  </div>
			    </div>
		      </div>
		    </div>
		  </div>
		</div>
	  </div>
	  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 table-fix">
	  	 <div class="x_panel">
          <div class="x_title">
            <div class="clearfix"></div>
              </div>
                <div class="x_content"><br>				  

					  <div class="table-responsive" style="margin-top: -20px">
					  <button class="btn btn-success pull-right">+Tambah Variasi</button>
						<br>
						<table id="datatable" class="table table-striped" style="width:100%; font-size:11px;">
							<thead>
							  <tr>
								<th class="column-title">SKU</th>
								<th class="column-title">Variasi</th>
								<th class="column-title">Harga Modal</th>
								<th class="column-title">Harga Jual</th>
								<th class="column-title">Status</th>
								<th class="column-title">Jumlah Stok</th>
							  </tr>
							</thead>

							<tbody>

							  <tr class="even pointer">
								<td>PRDK00001</td>
								<td>Red</td>
								<td>2.100.000.00,-</td>
								<td>2.500.000.00,-</td>
								<td>Tersedia</td>
								<td>20</td>
							  </tr>
							  
							  <tr class="even pointer">
								<td>PRDK00002</td>
								<td>White</td>
								<td>2.000.000.00,-</td>
								<td>2.400.000.00,-</td>
								<td>Tersedia</td>
								<td>24</td>
							  </tr>
							  
							  <tr class="even pointer">
								<td>PRDK00003</td>
								<td>Black</td>
								<td>2.000.000.00,-</td>
								<td>2.400.000.00,-</td>
								<td>Tersedia</td>
								<td>23</td>
							  </tr>
							  
							  <tr class="even pointer">
								<td>PRDK00004</td>
								<td>Gold</td>
								<td>1.900.000.00,-</td>
								<td>2.400.000.00,-</td>
								<td>Tidak Tersedia</td>
								<td>0</td>
							  </tr>
							  
							  <tr class="even pointer">
								<td>PRDK00005</td>
								<td>Green</td>
								<td>2.200.000.00,-</td>
								<td>2.600.000.00,-</td>
								<td>Tersedia</td>
								<td>50</td>
							  </tr>
							  
							  <tr class="even pointer">
								<td>PRDK00006</td>
								<td>Aqua</td>
								<td>2.600.000.00,-</td>
								<td>3.400.000.00,-</td>
								<td>Tersedia</td>
								<td>12</td>
							  </tr>

							  <tr class="even pointer">
								<td>PRDK00006</td>
								<td>Aquamarine</td>
								<td>2.600.000.00,-</td>
								<td>3.400.000.00,-</td>
								<td>Tersedia</td>
								<td>12</td>
							  </tr>

							  <tr class="even pointer">
								<td>PRDK00006</td>
								<td>Navy</td>
								<td>2.600.000.00,-</td>
								<td>3.400.000.00,-</td>
								<td>Tersedia</td>
								<td>12</td>
							  </tr>

							  <tr class="even pointer">
								<td>PRDK00006</td>
								<td>Teal</td>
								<td>2.600.000.00,-</td>
								<td>3.400.000.00,-</td>
								<td>Tersedia</td>
								<td>12</td>
							  </tr>
							  
							  <tr class="even pointer">
								<td>PRDK00006</td>
								<td>Cyan</td>
								<td>2.600.000.00,-</td>
								<td>3.400.000.00,-</td>
								<td>Tersedia</td>
								<td>12</td>
							  </tr>

							  <tr class="even pointer">
								<td>PRDK00006</td>
								<td>Brown</td>
								<td>2.600.000.00,-</td>
								<td>3.400.000.00,-</td>
								<td>Tersedia</td>
								<td>12</td>
							  </tr>

							  <tr class="even pointer">
								<td>PRDK00006</td>
								<td>Pink</td>
								<td>2.600.000.00,-</td>
								<td>3.400.000.00,-</td>
								<td>Tersedia</td>
								<td>12</td>
							  </tr>

							  <tr class="even pointer">
								<td>PRDK00006</td>
								<td>Lavender</td>
								<td>2.600.000.00,-</td>
								<td>3.400.000.00,-</td>
								<td>Tersedia</td>
								<td>12</td>
							  </tr>

								</tbody>
							  </table>
							</div>
							
							  <br><button class="btn btn-success pull-right">Simpan</button>
							  <button class="btn btn-danger pull-right">Kembali</button>
					
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
        $(document).ready(function() {
        var table = $('#datatable').DataTable( {
            scrollY:        "300px",
            scrollX:        true,
            scrollCollapse: true,
            paging:         true,
            fixedColumns:   true,
            select: true
        } );
    } );
    </script>

    <!-- Custom Theme Scripts -->
 <script src="../assets/build/js/custom.min.js"></script>

@endsection