<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Work+Sans:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <meta property="og:image" content="/assets/images/og-image.png">
        <meta property="twitter:card" content="summary_large_image">
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ $page->title }}" />
    </head>
    <body>
        @yield('body')


        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
