<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cabify</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Muli:100,700" rel="stylesheet" type="text/css">
        <!--link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet"  -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--link href="{{ url('/css/cabify.css') }}" rel="stylesheet" type="text/css" -->
        <link href="{{ url('/css/cabify.css') }}" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>


        </style>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-31266594-3"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-31266594-3');
        </script>
	</head>

    <body>
        <div class="container">
            <div class="row">
                <div class="logo">
        <img src="{{ url('/img/logo.png') }}" border="0">
    </div>		</div>
            <div class="row">
                    <div class="col-sm-1"></div>
        <div class="col-sm-11 frase"><img src="{{ url('/img/frase.png') }}" border="0"></div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5 menu"><a href="{{ url('/video') }}"><img src="{{ url('/img/video.png') }}" class="img-responsive" border="0"></a></div>
        <div class="col-sm-6 menu"><a href="{{ url('/prospects') }}"><img src="{{ url('/img/conocer.png') }}" class="img-responsive" border="0"></a></div>
        <div class="col-sm-12 footer"><img src="{{ url('/img/footer.png') }}" class="img-responsive" border="0"></div>
        <!--iframe src="//player.vimeo.com/video/11712103?byline=0&amp;portrait=0" width="500" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </body>
</html>
