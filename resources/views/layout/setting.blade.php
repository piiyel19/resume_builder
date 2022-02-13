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
        <script src="{{ asset('public/js/jquery/app.js') }}"></script>
        <script src="{{ asset('public/js/jquery/popper.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery/styles.js') }}"></script>
        <script src="{{ asset('public/js/jquery/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery/jquery-3.5.1.min.js') }}"></script>
        <style type="text/css">
            #header {
            margin: 0;
            padding: 10px 10px 0 10px;
            background: #b0b0b0 url("{{ asset('public/images/header_background.png') }}") repeat;
            }
        </style>
        <title>Application Customize</title>
    </head>
    <body>
        <div id="wrapper" class="wrapper-content">
            <div id="sidebar-wrapper" style="background: black; overflow-x: hidden; overflow-y: hidden;">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand" style="height: 100px;background: black;margin: 0px; ">
                      
                      <a style=" float: left;">  
                        <div class="row">
                          <div class="col-3">
                            <img src="https://www.kindpng.com/picc/m/664-6643641_avatar-transparent-background-user-icon-hd-png-download.png" class="rounded" width="50px;"> 
                          </div>
                          <div class="col-9">
                            <p style="float: left;">Muhammad Farid</p>
                            <p style="float: left;">Software Engineer</p>
                          </div>
                        </div>                      
                        
                      </a>
                        
                    </li>
                    <li <?php if(request()->segment(1)=='notification'){ echo 'class="active"'; }?>>
                        <a href="<?= url('/')?>/notification"><i class="fa fa-bell"></i> Notification</a>
                    </li>
                    <li <?php if((request()->segment(1)=='builder')||(request()->segment(1)=='form')){ echo 'class="active"'; }?>>
                        <a href="<?= url('/')?>/builder"><i class="fa fa-cog"></i> Builder</a>
                    </li>
                    <li <?php if(request()->segment(1)=='profile'){ echo 'class="active"'; }?>>
                        <a href="<?= url('/')?>/profile"><i class="fa fa-user-circle-o"></i> Profile Details</a>
                    </li>
                    <li <?php if(request()->segment(1)=='work'){ echo 'class="active"'; }?>>
                        <a href="<?= url('/')?>/work"><i class="fa fa-briefcase"></i> Work Experience</a>
                    </li>
                    <li <?php if(request()->segment(1)=='education'){ echo 'class="active"'; }?>>
                        <a href="<?= url('/')?>/education"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</a>
                    </li>
                    <li <?php if(request()->segment(1)=='skill'){ echo 'class="active"'; }?>>
                        <a href="<?= url('/')?>/skill"><i class="fa fa-star-half-o" aria-hidden="true"></i> Skill</a>
                    </li>
                    <li <?php if(request()->segment(1)=='cv'){ echo 'class="active"'; }?>>
                        <a href="<?= url('/')?>/cv"><i class="fa fa-file-text-o" aria-hidden="true"></i> Cover Letter</a>
                    </li>
                    <li>
                        <a href="<?= url('/')?>/download_resume"><i class="fa fa-download"></i> Download Resume</a>
                    </li>
                    <li>
                        <a href="<?= url('/')?>/download_cv"><i class="fa fa-download"></i> Download Cover Letter</a>
                    </li>
                    <li>
                        <a href="<?= url('/')?>/login"><i class="fa fa-power-off"></i> Logout</a>
                    </li>
                </ul>
            </div>
            <div id="page-content-wrapper">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="btn-menu btn btn-success btn-toggle-menu" type="button" style="font-size: 12px;">
                            <i class="fa fa-bars"></i>
                            </button>
                            <span style="font-size: 20px; padding-left:10px; font-weight:700;" id="title_header"></span>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="ti-panel"></i>
                                        <p>Stats</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-settings"></i>
                                        <p>Settings</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid" style="padding-bottom:50px;">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    </body>
    </body>
</html>
<style type="text/css">
    body{
    background:#f4f3ef;    
    }
    #wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    }
    #wrapper.toggled {
    padding-left: 250px;
    }
    #sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background:#fff;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    }
    #sidebar-wrapper {
    box-shadow: inset -1px 0px 0px 0px #DDDDDD;
    }
    #wrapper.toggled #sidebar-wrapper {
    width: 250px;
    }
    #page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
    }
    #wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
    }
    /* Sidebar Styles */
    .sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
    }
    .sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
    }
    .sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
    }
    .sidebar-nav li a:hover {
    text-decoration: none;
    }
    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
    text-decoration: none;
    }
    .sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
    }
    .sidebar-nav > .sidebar-brand a {
    color: #999999;
    }
    .sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
    }
    @media(min-width:768px) {
    #wrapper {
    padding-left: 250px;
    }
    #wrapper.toggled {
    padding-left: 0;
    }
    #sidebar-wrapper {
    width: 250px;
    }
    #wrapper.toggled #sidebar-wrapper {
    width: 0;
    }
    #page-content-wrapper {
    padding: 20px;
    position: relative;
    }
    #wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0;
    }
    }
    #sidebar-wrapper li.active > a:after {
    border-right: 17px solid #f4f3ef;
    border-top: 17px solid transparent;
    border-bottom: 17px solid transparent;
    content: "";
    display: inline-block;
    position: absolute;
    right: -1px;
    }
    .sidebar-brand {
    border-bottom: 1px solid rgba(102, 97, 91, 0.3);
    }
    .sidebar-brand {
    padding: 18px 0px;
    margin: 0 20px;
    }
    .navbar .navbar-nav > li > a p {
    display: inline-block;
    margin: 0;
    }
    p {
    font-size: 16px;
    line-height: 1.4em;
    }
    .navbar-default {
    background-color: #f4f3ef;
    border:0px;
    border-bottom: 1px solid #DDDDDD;
    }
    btn-menu {
    border-radius: 3px;
    padding: 4px 12px;
    margin: 14px 5px 5px 20px;
    font-size: 14px;
    float: left;
    }
</style>
<script type="text/javascript">
    $(function(){
        $(".btn-toggle-menu").click(function() {
            $("#wrapper").toggleClass("toggled");
        });
    })

    function info(cat)
    {
        if(cat=='skill'){
            var title = 'Skill Information';
            var body = 'This is simple Information..';
        } else if(cat=='education'){
            var title = 'Education Information';
            var body = 'This is simple Information..';
        } else if(cat=='work'){
            var title = 'Work Experience Information';
            var body = 'This is simple Information..';
        } else if(cat=='profile'){
            var title = 'Profile Information';
            var body = 'This is simple Information..';
        }  else if(cat=='cv'){
            var title = 'Cover Letter Information';
            var body = 'This is simple Information..';
        }  else if(cat=='template'){
            var title = 'Template Information';
            var body = 'This is simple Information..';
        }  else {

        }  

        $("#modal_title").html(title);
        $("#modal_body").html(body);
        $("#myModal").modal('show');
    }

    function close_modal()
    {
        $("#myModal").modal('hide');
    }
</script>



<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title" id="modal_title" style="font-size:12px;"></h4>
        <button type="button" class="close" onclick="close_modal();" >&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="modal_body" style="font-size:12px;">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="close_modal();" style="font-size:10px;">Close</button>
      </div>

    </div>
  </div>
</div>