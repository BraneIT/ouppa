<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/frontend_css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="menu">
            
        <div class="logo">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Example Image">
            </div>
            <div class="logo-label">
                <p>ОСНОВНО УЧИЛИШТЕ</p>
                <h1 class="logo-label-name">ПЕТАР ПОП АРСОВ</h1>
                <p>ОПШТИНА КАРПОШ</p>
            </div>   
        </div>
         <button class="hamburger-menu-btn">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
        <div class="menu-items">
            <a href="#">ДОМА</a>
            <a href="#">ЗА НАС</a>
            <a href="#">ДОКУМЕНТИ</a>
            <a href="#">УЧЕНИЦИ</a>
            <a href="#">НАСТАВА</a>
            <a href="#">РАСПОРЕДИ</a>
            <a href="#">ВРАБОТЕНИ</a>
            
            <a href="#">МЕЃУЕТНИЧКА ИНТЕГРАЦИЈА ВО ОБРАЗОВАНИЕТО</a>
            <a href="#">УЧЕСТВО НА НАТПРЕВАРИ И ОСВЕНИ НАГРАДИ</a>
            <a href="#">ПРОЕКТИ</a>
            <a href="#">АКТИВНОСТИ</a>
            <a href="#">ЕТВИНИНГ</a>
            <a href="#">ЕРАЗМУС +</a>
            <a href="#">ПРВАЧИЊА 2023/2024</a>
            
            <a href="#">ФИНАНСИСКИ ДОКУМЕНТИ</a>
            <a href="#">КОНТАКТ</a>
            <a href="#">ИНФОРМАЦИИ ОД ЈАВЕН КАРАКТЕР</a>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        <p>ОУ ПЕТАР ПОП АРСОВ ОПШТИНА КАРПОШ </p>
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>