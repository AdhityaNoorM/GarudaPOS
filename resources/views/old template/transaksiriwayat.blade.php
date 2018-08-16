<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GarudaPOS | Riwayat Transaksi </title>

            @include('link.transaksiriwayat')

  </head>

  <body class="nav-md footer_fixed header_fixed">

    <!----- Template ----->

            @include('template.first')

            <a href="/" class="site_title"><i class="fa fa-paw"></i>
            <span>


        <!-- Insert Company Here -->   GarudaPOS   <!-- /Insert Company Here -->


            </span></a>
            </div> <div class="clearfix"></div> <br>

            @include('template.second')

              <li class=""><h1 style="margin:20px; font-size:20px; color:#EDEDED;">


        <!-- Insert Page Name Here -->   RIWAYAT TRANSAKSI   <!-- Insert Page Name Here -->


              </h1></li> </ul>

            @include('template.third')

    <!----- /Template ----->

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
                     <table id="datatable" class="table table-striped" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID Transaksi</th>
                          <th>Nama Kasir</th>
                          <th>Waktu Transaksi</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      @foreach ($transaksi as $key => $value)
                      <tr>
                        <th>{{$value->id_transaksi}}</th>
                        <th>{{$value->id_user}}</th>
                        <th>{{$value->tanggal_transaksi}}</th>
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

            @include('script.transaksiriwayat')

  </body>
</html>
