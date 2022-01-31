
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>Kash Compass</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}"/>
i<link rel="stylesheet" href="{{ asset('/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('/plugins/morrisjs/morris.min.css') }}" />

<link rel="stylesheet" href="{{ asset('/css/main.css') }}"/>
<link rel="stylesheet" href="{{ asset('/css/color_skins.css') }}"/>
<link rel="stylesheet" href="{{ asset('/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" />
<link rel="stylesheet" href="{{ asset('/plugins/multi-select/css/multi-select.css') }}">
<link rel="stylesheet" href="{{ asset('/plugins/jquery-spinner/css/bootstrap-spinner.css') }}">
<link rel="stylesheet" href="{{ asset('/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('/plugins/bootstrap-select/css/bootstrap-select.css') }}" />
<link rel="stylesheet" href="{{ asset('/plugins/nouislider/nouislider.min.css') }}" />

</head>   <!-- include header -->

@if(Session::has('theme'))
<body class="theme-{{Session::get('theme')[0]}}">
@else
<body class="theme-blue">
@endif


@if(Session::has('menutheme'))
@if(Session::get('menutheme')[0] == "menu_dark")
<script>
var body = document.body;
body.classList.add("menu_dark");
 </script> 
@else
<script>
var body = document.body;
body.classList.remove("menu_dark");
</script>
 @endif
@endif 

