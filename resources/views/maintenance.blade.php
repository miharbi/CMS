<!doctype html>
<html lang="{{ App::getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>{{ trans('globals.site_maintenance') }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Site Maintenance">
<meta name="author" content="{{ Config::get('cms.author') }}">
<style type="text/css">
    body{text-align:center;font:20px Helvetica, sans-serif;color:#333;padding:150px;}
    h1{font-size:50px;}
    article{display:block;text-align:left;width:650px;margin:0 auto;}
    a{color:#dc8100;text-decoration:none;}
    a:hover{color:#333;text-decoration:none;}
</style>
<link rel="shortcut icon" href="{!! asset('favicon.ico') !!}">
</head>
<body>
<article>
    <h1>{{ trans('globals.back_soon') }}!</h1>
    <div>
        <p>
            {{ trans('globals.site_maintenance_message') }}!
        </p>
        <p>
            — {{ trans('globals.the_web_team') }}
        </p>
    </div>
</article>
</body>
</html>
