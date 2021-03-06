<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Home - {{ config('app.name') }}</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('site.pages.home._partials.header')
        <main class="main main--footerFixed bg-gray-100">
            @include('site.pages.home._partials.features-header')

            @include('site.pages.home._partials.what-is')

            @include('site.pages.home._partials.features')

            @include('site.pages.home._partials.plans')

            @include('site.pages.home._partials.contact')
        </main>
        @include('site.pages.home._partials.footer')
    </div>
</body>

</html>
