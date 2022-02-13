<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/boostrap_4/app.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/boostrap_4/styles.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style type="text/css">
      #header {
          margin: 0;
          padding: 10px 10px 0 10px;
          background: #b0b0b0 url("{{ asset('public/images/header_background.png') }}") repeat;
      }
    </style>


    <script src="{{ asset('public/js/jquery/app.js') }}"></script>
    <script src="{{ asset('public/js/jquery/popper.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery/styles.js') }}"></script>
    <script src="{{ asset('public/js/jquery/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery/jquery-3.5.1.min.js') }}"></script>



    <title>Apps</title>
  </head>
  <body style="padding-top:10%; background: #f4f3ef;">


    <div class="row" style="padding-left: 5px;padding-right: 5px;">
      <div class="col-md-4"></div>
      <div class="col-md-4" >
        <div class="card" style="border: 1px solid rgb(25 135 84);">
          <div class="card-header" style="font-weight:700;     color: #198754;">Login To Demo Application</div>
          <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <label style="text-align: center; color:#9b9b9b; font-weight:500; font-size: 14px;">Email</label>
                  <input type="text" class="form-control" name="">
                </div>
                <div class="col-md-12">
                  <label style="text-align: center; color:#9b9b9b; font-weight:500; font-size: 14px;">Password</label>
                  <input type="password" class="form-control" name="">
                </div>

                <div class="col-md-12">
                  <label style="font-size:12px; color:blue;">Forgot Password ?</label>
                </div>
                
              </div>
          </div>
          <div class="card-footer">
            <div class="row">
                <div class="col-md-12">
                  <a href="<?= url('/')?>/register">
                    <button class="btn btn-warning" style="font-size:12px; color: #fff; float: left; background-color: #ff6c21;border-color: #ff6c21;">New Account</button>
                  </a>
                  <a href="<?= url('/')?>/builder">
                    <button class="btn btn-success" style="font-size:12px; float: right;">Login</button>
                  </a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>

  </body>
</html>
