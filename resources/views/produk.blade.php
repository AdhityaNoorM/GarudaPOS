@extends('template')

@section('link')

    <title>GarudaPOS | Produk </title>

    <!-- Bootstrap -->
    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> 

     <!-- custom table (fixed) -->
    <link href="css/custom_table.css" rel="stylesheet">

    <link href="../assets/build/css/table-fix-large.css" rel="stylesheet">    

    <!--data table-->
    <link href="https://cdn.datatables.net/select/1.2.6/css/select.dataTables.min.css" rel="stylesheet" >
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/fixedcolumns/3.2.6/css/fixedColumns.bootstrap.min.css">
    <!-- Custom Theme Style -->
    <link href="../assets/build/css/custom.min.css" rel="stylesheet">

@endsection

@section('title')

  <h1 style="margin:20px; font-size:20px; color:#EDEDED;">PRODUK</h1>

@endsection

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"><br>
                    <a data-toggle="modal" href="tambah_produk.html" class="btn btn-success btn-lg" style="width:100%"><b>+Tambahkan Produk</b></a><br><br>
                    

                    <table id="datatable" href="/viewo" class="table table-striped" style="width:100%">
                      
                     

                      <thead>
                        <tr>
                          <th></th>
                          <th>Nama Produk </th>
                          <th>Kategori </th>
                          <th>Merek </th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      @foreach ($produk as $key => $value)
                          <tr>
                            <td></td>
                            <td>{{$value->produk_title}}</td>
                            <td>{{$value->SKU}}</td>
                            <td>{{$value->brand_title}}</td>
                            <td>{{$value->is_var_available}}</td>
                            <td>
                            <a href=""><button type="button" class="btn btn-warning btn-sm" ><i class="fa fa-edit"></i> Update</button></a>
                            <a href="detailproduk"><button type="button" class="btn btn-info btn-sm" ><i class="fa fa-eye"></i> View Detail</button></a>
                            <a href=""><button type="button" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i> Delete</button></a>
                          </td>
                          </tr>
                      @endforeach
                      </tbody>
                    </table>
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