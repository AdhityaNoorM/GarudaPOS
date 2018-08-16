<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GarudaPOS | Kelola Produk </title>

            @include('link.produk')
  </head>

  <body class="nav-md footer_fixed header_fixed">


            @include('template.first')

            <a href="/" class="site_title"><i class="fa fa-paw"></i>

            <span>  GarudaPOS </span></a>
            </div> <div class="clearfix"></div> <br>

            @include('template.second')

              <li class=""><h1 style="margin:20px; font-size:20px; color:#EDEDED;">



        <!-- Insert Page Name Here -->   PRODUK   <!-- Insert Page Name Here -->


              </h1></li> </ul>

            @include('template.third')

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
                          <th>Nama Produk </th>
                          <th>SKU </th>
                          <th>Merek </th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                      @foreach ($produk as $key => $value)
                          <tr>
                            <th>{{$value->produk_title}}</th>
                            <th>{{$value->SKU}}</th>
                            <th>{{$value->brand_title}}</th>
                            <th>{{$value->is_var_available}}</th>
                            <th></th>
                          </tr>
                      @endforeach


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        <!-- /page content -->
        </div>

            @include('template.fourth')

      </div>
    </div>

            @include('script.produk')

  </body>
</html>
