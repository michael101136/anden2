<!DOCTYPE>
<html lang="{{ app() ->getLocale() }}">
<head>
		<meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
           
    <link rel="shortcut icon" href="/assets/public/img/icons.png"/> 
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">   
    	 @include('public.partials.header')

    <title>{{ config ('app.name') }}</title>

</head>

<body>
   
      @include('public.es.layouts.navbar')

      {{-- slider --}}

       
      {{-- fin slider --}}

    @yield('content')




    	<!--========= scrip footer ===========-->
    	@include('public.partials.footer')
    	<!--========= fin  ===========-->

    @yield('script')


   
</html>