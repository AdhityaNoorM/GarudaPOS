@extends('template')

@section('link')

    <title>GarudaPOS | Detail Transaksi </title>

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

  <h1 style="margin:20px; font-size:20px; color:#EDEDED;">DETAIL TRANSAKSI</h1>

@endsection

@section('content')

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
    
    <!-- Custom Theme Scripts -->
    <script src="../assets/build/js/custom.min.js"></script>


@endsection