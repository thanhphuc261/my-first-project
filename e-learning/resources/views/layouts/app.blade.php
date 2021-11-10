<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning @yield('title')</title>
    <link rel="stylesheet" href="{{asset('style.css')}}"/>

</head>
<body>
    <div id="wrapper">
        <div id="header">
            HEADER + LOGO
        </div>
        <div id="container">
            <div id="left-menu">
                <ul>
                <li><a href="{{ route('trang-chu')}}">Trang chủ</a></li>
                <li><a href="{{ route('ds-giang-vien')}}">Giảng viên</a></li>
                </ul>
            </div>
            <div id="main-content">@yield('main_content')</div>
            <div style="clear: both"></div>
        </div>
        <div id="footer">Footer</div>
    </div>
</body>
</html>