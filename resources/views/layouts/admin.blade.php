<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="/GSD/gsd/assets/img/apple-icon.png">
	<link rel="icon" type="image/ico" href="/GSD/gsd/assets/img/logo.png">	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>We Assure</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
    <link href="/GSD/gsd/bootstrap3/css/bootstrap.css" rel="stylesheet" />
	<link href="/GSD/gsd/assets/css/gsdk.css" rel="stylesheet" />  
    <link href="/GSD/gsd/assets/css/demo.css" rel="stylesheet" /> 
    
        <!--     Font Awesome     -->
    <link href="/GSD/gsd/bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>


<style type="text/css">
    .main{
        background-image: url('/GSD/gsd/assets/img/bg.png');
        padding-bottom: 100px;
    }
    p{font-family: 'Source Sans Pro';}
</style>

  @yield('style')
</head>
<body>
<div id="navbar-full">
    <div class="container">
        <nav class="navbar navbar-ct-red navbar-transparent navbar-fixed-top" role="navigation">
          
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/Admin">
                     <div class="logo-container">
                        <div class="logo">
                            <img src="/GSD/gsd/assets/img/logo.png">
                        </div>
                        <div class="brand" style="color: white">
                           WE<i style="color: black">ASSURE</i> <small><small style="color: yellow; ">&nbsp;&nbsp;&nbsp;&nbsp;INSURANCE</small></small>
                        </div>
                    </div>
                </a>
            </div>
              
            <!-- /.navbar-collapse -->
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">

                <li class="active">
                    <a href="/Admin">
                    <i class="fa fa-user"></i>&nbsp;Employees</a></li>
                <li><a href="/AdminUpdates">
                    <i class="fa fa-cloud-upload"></i>&nbsp;Updates</a></li>
                <li><a href="/AdminGallery">
                    <i class="fa fa-th-large"></i>&nbsp;Gallery</a></li>
                <li><a href="/logout">
                    <i class="fa fa-power-off"></i>&nbsp;Logout</a></li>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->
   


    <div class='blurred-container'>

        <div class="img-src" style="background-image: url('/GSD/gsd/assets/img/home1.jpg')"></div>
    </div> <!-- end carousel -->
</div>     

@yield('content')

    <script src="/GSD/gsd/jquery/jquery-1.10.2.js" type="text/javascript"></script>
	<!-- <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script> -->

	<script src="/GSD/gsd/bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	<script src="/GSD/gsd/assets/js/gsdk-checkbox.js"></script>
	<script src="/GSD/gsd/assets/js/gsdk-radio.js"></script>
	<script src="/GSD/gsd/assets/js/gsdk-bootstrapswitch.js"></script>
	<script src="/GSD/gsd/assets/js/get-shit-done.js"></script>
    <script src="/GSD/gsd/assets/js/custom.js"></script>

<script type="text/javascript">
         
    $('.btn-tooltip').tooltip();
    $('.label-tooltip').tooltip();
    $('.pick-class-label').click(function(){
        var new_class = $(this).attr('new-class');  
        var old_class = $('#display-buttons').attr('data-class');
        var display_div = $('#display-buttons');
        if(display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
        }
    });
	$('.carousel').carousel({
      interval: 4000
    });
    
</script>
  @yield('script')
</body>
</html>