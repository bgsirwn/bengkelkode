<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	{{HTML::style('dist/css/metro-bootstrap.css')}}
	{{HTML::style('dist/css/metro-bootstrap-responsive.css')}}
	{{HTML::style('dist/css/iconFont.css')}}
	{{HTML::style('dist/css/docs.css')}}
	
	{{HTML::style('dist/js/prettify/prettify.css')}}

	<!--css add-->
	{{HTML::style('dist/css/add/css.css')}}
	{{HTML::style('dist/css/add/settings.css')}}
	{{HTML::style('dist/css/add/custom.css')}}
	{{HTML::style('dist/css/add/style.css')}}
	{{HTML::style('dist/css/add/bootstrap.css')}}

	<!--Load JavaScript Libraries-->
	 <script>
	 var alamat = "{{URL::to('/')}}";
	 </script>
	{{HTML::script('dist/js/jquery/jquery.min.js')}}
	{{HTML::script('dist/js/jquery/jquery.widget.min.js')}}
	{{HTML::script('dist/js/jquery/jquery.mousewheel.js')}}
	{{HTML::script('dist/js/prettify/prettify.js')}}

	<!--Metro UI CSS JavaScript plugins-->
	{{HTML::script('dist/js/load-metro.js')}}

	<!--Local javascript-->
	{{HTML::script('dist/js/docs.js')}}
	 <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   	 <![endif]-->

   	 <!--syntaxhighligt-->
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shCore.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shLegacy.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushAppleScript.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushAS3.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushBash.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushColdFusionjs')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushCpp.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushCSharp.js')}}
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushCss.js')}} 	
   	 {{HTML::script('dist/js/ckeditor/plugins/syntaxhighlight/scripts/shBrushJava.js')}}
   	 {{HTML::style('dist/js/ckeditor/plugins/syntaxhighlight/styles/shCoreDefault.css')}}
   	 
	 <script type="text/javascript">SyntaxHighlighter.all();</script>


	<title>@yield('title')</title>
    
</head>
<body class="metro" style="margin-top: 70px; background-color: rgb(236, 240, 241);">
	
	@include('navbar')
    
	@yield('content')
	
	@include('footer')
</body>
</html>