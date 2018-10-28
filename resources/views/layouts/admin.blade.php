<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Online Order System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/plugins/pace/pace-theme-flash.css" rel="stylesheet" />
    <link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="/pages/css/pages-icons.css" rel="stylesheet" />
    <link href="/pages/css/pages.min.css" rel="stylesheet" />

    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header horizontal-menu horizontal-app-menu dashboard">
    @auth
      @include('shared.navbar')
    @endauth
    
    <div class="page-container">
      @section('content-wrapper')
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper">
          @yield('content')
          @include('shared.copyright')
        </div>
      @show
    </div>

    @yield('name')
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    @include('shared.scripts')

    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
  </body>
</html>