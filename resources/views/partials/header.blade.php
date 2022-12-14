<!doctype html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $metaTitle ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? '' }}}" />    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ url('../images/favicon.png') }}">
    @if(!empty($ogImage))
    <meta property="og:image" content="{{ $ogImage }}" />
    <meta property="og:title" content="{{ $metaTitle }}" />
    <meta property="og:description" content="{{ $metaDescription }}" />
    @endif
</head>

<body>
<div id="app">
    <navigation
        home_url="{{ route('homepage') }}"
        about_url="{{ route('about') }}"
        blog_url="{{ route('blogs') }}"
        contact_url="{{ route('contact') }}"
    ></navigation>
