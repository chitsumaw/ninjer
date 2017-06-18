<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="/images/favicon.png" />
		<title> @yield('title')</title>

		<!--for Job Monster-->
		<link rel='stylesheet' href='/css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='/css/custom.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='/css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='/css/jquery.datetimepicker.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='/css/chosen.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Serif:100,300,400,700,900,300italic,400italic,700italic,900italic' type='text/css' media='all'/>
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat:100,300,400,700,900,300italic,400italic,700italic,900italic' type='text/css' media='all'/>
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<!-- <script type='text/javascript' src='jmjs/jquery.js'></script> -->
		<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'> </script>
		<script src="js/js.cookie.js"> </script>
		<script src="node_modules/vue/dist/vue.min.js"> </script>
		<script src="node_modules/vue-resource/dist/vue-resource.min.js"> </script>
		<script src="bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"> </script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-96331456-1', 'auto');
		  ga('send', 'pageview');
		</script>
	</head>
	<body>
		<!-- @section('sidebar')
            This is the master sidebar.
        @show -->
        
            @yield('content')
        

	</body>
</html>