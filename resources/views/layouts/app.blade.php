<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="windows-1252">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="google-site-verification" content="AT5jwaJEXn5aWFhM1hGn9oCfXSskwvT8LML503pHYVQ" />
    <meta name="author" content="Webshop Technology +2349035155129" />

    <link rel="icon" type="image/ico" href="images/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="https://rccg-elimsanctuary.org/" />
    <meta name="image" href="images/elim-redeemed-logo.png">
    <meta name="googlebot" content="archive">
    <meta http-equiv="cache-control" content="public">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="description"
        content="Elim Sanctuary is a member of the Redeemed Christian Church of God (RCCG) and also
    the Provincial Headquaters for Lagos Province 37">
    <meta property="og:site_name" content="RCCG-ELIMSANCTUARY">
    <meta property="og:title" content="RCCG-ELIMSANCTUARY">
    <meta property="og:description"
        content="Elim Sanctuary is a member of the Redeemed Christian Church of God (RCCG) and also
    the Provincial Headquaters for Lagos Province 37">
    <meta property="og:image" content="https://rccg-elimsanctuary.org/images/elim-redeemed-logo.png">
    <meta property="og:url" content="https://rccg-elimsanctuary.org">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@RccgESL" />
    <meta name="twitter:creator" content="@RccgESL" />
    <meta property="og:url" content="https://twitter.com/RccgESL" />
    <meta property="og:title" content="RCCG-ELIMSANCTUARY" />
    <meta property="og:description"
        content="Elim Sanctuary is a member of the Redeemed Christian Church of God (RCCG) and also
    the Provincial Headquaters for Lagos Province 37" />
    <meta property="og:image" content="https://rccg-elimsanctuary.org/images/elim-redeemed-logo.png" />

    <!-- Facebook Tag -->
    <meta property="og:url" content="https://www.facebook.com/rccgesl/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="RCCG-ELIMSANCTUARY" />
    <meta property="og:description"
        content="Elim Sanctuary is a member of the Redeemed Christian Church of God (RCCG) and also
    the Provincial Headquaters for Lagos Province 37" />
    <meta property="og:image" content="https://rccg-elimsanctuary.org/images/elim-redeemed-logo.png" />
    <meta property="fb:app_id" content="225919332164015" />

    <!-- Linkedin Tag -->
    <meta property="og:title" content="RCCG-ELIMSANCTUARY" />
    <meta property="og:image" content="https://rccg-elimsanctuary.org/images/elim-redeemed-logo.png" />
    <meta property="og:description"
        content="Elim Sanctuary is a member of the Redeemed Christian Church of God (RCCG) and also
    the Provincial Headquaters for Lagos Province 37" />
    <meta property="og:url" content="https://rccg-elimsanctuary.org/" />

    <title>@yield('title')</title>
    <meta name="description"
        content="Elim Sanctuary is a member of the Redeemed Christian Church of God (RCCG) and also
        the Provincial Headquaters for Lagos Province 37">

    <link rel="shortcut icon" href="images/elim-redeemed-logo.png">

    <!-- style css -->
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165357571-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag(' js', new Date());
        gtag('config', 'UA-165357571-1');
    </script> -->

    <!-- Favicon link -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/fav/favicon-16x16.png">
    <link rel="manifest" href="images/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#357E32">
    <meta name="msapplication-TileImage" content="images/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#357E32">
    @livewireStyles
</head>

<body>
    @persist('header')
        <div class="body-inner">
            @livewire('menu.header')
        </div>
    @endpersist

    @yield('content')

    @persist('footer')
        <footer id="footer">
            <x-footer />
        </footer>
    @endpersist
    @livewireScripts
</body>

</html>
