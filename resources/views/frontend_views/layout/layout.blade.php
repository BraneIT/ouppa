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
            <a href="/">ДОМА</a>
            <div class="dropdown">
            <button class="dropbtn">ЗА НАС ▼</button>
            <div class="dropdown-content">
                <a href="">ЛИЧНА КАРТА</a>
                <a href="">РАЗВОЈ И ИСТОРИЈАТ</a>
                <a href="">ОРГАНИЗАЦИЈА</a>
                <a href="">ЗА НАШИОТ ПАТРОН</a>
                <a href="">ВИЗИЈА И МИСИЈА</a>
                <div class="dropdown">
                    <button class="dropbtn">ПРИЕМНИ ДЕНОВИ ▶</button>
                    <div class="dropdown-content">
                        <a href="">ПРИЕМНИ ДЕН НА УЧИЛИШТЕТО</a>
                        <a href="">ПРИЕМНИ ДЕН НА НАСТАВНИЦИТЕ</a>
                    </div>
                </div>
                
            </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">ДОКУМЕНТИ ▼</button>
                    <div class="dropdown-content">
                                 <a href="#">СТАТУТ</a>
                        <a href="#">ГОДИШНА ПРОГРАМА ЗА РАБОТА НА УЧИЛИШТЕТО И ГОДИШНИ И ПОЛУГОДИШНИ ИЗВЈЕШТАИ</a>
                        <a href="#">РАЗВОЈНА ПРОГРАМА ЗА РАБОТА НА УЧИЛИШТЕТО</a>
                        <a href="#">ИЗВЈЕШТАИ ОД САМОЕВАЛУАЦИЈА</a>
                        <a href="#">ИНТЕГРАЛНА ИНСПЕКЦИЈА</a>
                        <a href="#">ПЛАН/СКИЦА НА УЧИЛИШТЕТО</a>
                        <a href="#">ПРАВИЛНИЦИ И ПРОПИСИ</a>
                    </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">УЧЕНИЦИ ▼</button>
                <div class="dropdown-content">
                    <div class="dropdown">
                        <button class="dropbtn">ОДЕЛЕНИЈА ▶</button>
                        <div class="dropdown-content">
                            <a href="">РАКОВОДИТЕЛИ НА ПАРАЛЕЛКИ</a>
                        </div>
                    </div>
                    <a href="">УЧЕНИЧКИ КЛУБОВИ</a>
                    <a href="">УЧЕНИЧКА ТЕЛА</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">НАСТАВА ▼</button>
                <div class="dropdown-content">
                    <a href="">НАСТАВНИ ПРОГРАМИ ПО ГЕНЕРАЦИИ И ПРЕДМЕТИ И ЗАКОНИ</a>
                    <a href="">ПЛАНИРАЊА ЗА ОЦЕНУВАЊЕ</a>
                    <div class="dropdown">
                        <button class="dropbtn">ДОДАТНА НАСТАВА ▶</button>
                    </div>
                    <a href="">ВОННАСТАВНИ АКТИВНОСТИ</a>
                    <a href="">БИБЛИОТЕКА</a>
                </div>

            </div>
            <div class="dropdown">
                <button class="dropbtn">РАСПОРЕДИ ▼</button>
                <div class="dropdown-content">
                    <div class="dropdown">
                        <button class="dropbtn">РАСПОРЕД НА НАСТАВАТА ▶</button>
                        <div class="dropdown-content">
                            <a href="">РАСПОРЕД НА ОДЕЛЕНСКА НАСТАВА</a>
                            <a href="">РАСПОРЕД НА ПРЕДМЕТНА НАСТАВА</a>
                        </div>
                    </div>
                    <a href="">РАСПОРЕД НА СМЕНИ</a>
                    <a href="">РАСПОРЕД НА SВОНЕЊЕ</a>
                </div>
            </div>
            <a href="#">ВРАБОТЕНИ ▼</a>
            <a href="#">НОВОСТИ</a>
            <a href="#">МЕЃУЕТНИЧКА ИНТЕГРАЦИЈА ВО ОБРАЗОВАНИЕТО</a>
            <a href="#">УЧЕСТВО НА НАТПРЕВАРИ И ОСВЕНИ НАГРАДИ ▼</a>
            <a href="#">ПРОЕКТИ ▼</a>
            <a href="#">АКТИВНОСТИ</a>
            <a href="#">ЕТВИНИНГ ▼</a>
            <div class="dropdown">
            <button class="dropbtn">ЕРАЗМУС + ▼</button>
            <div class="dropdown-content  erasmus">
                @foreach($erasmus as $item)
                    <a href="#">{{ $item->name }}</a>
                    <!-- Adjust the href attribute as needed -->
                @endforeach
            </div>
        </div>
            <a href="#">ПРВАЧИЊА 2023/2024</a>
            <a href="/gallery">ГАЛЕРИЈА</a>
            <a href="#">ФИНАНСИСКИ ДОКУМЕНТИ</a>
            <a href="#">КОНТАКТ</a>
            <a href="#">ИНФОРМАЦИИ ОД ЈАВЕН КАРАКТЕР</a>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        <div class="location-warpper">
        <div class="location-container">
        <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2964.7146953236943!2d21.387743300000004!3d42.00639820000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1354147111727d33%3A0xb985a47630bbc8af!2sPetar%20Pop%20Arsov%20Elementary%20School!5e0!3m2!1ssr!2smk!4v1708513104578!5m2!1ssr!2smk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="location-info">
            <p>Адреса на училиште</p>
            <h2>ТРИФУН БУЗЕВ бб</h2>
            <p>Карпош IV - Скопје </p>
        </div>
        </div>
    </div>
        <p>Copyright © 2024 OOU "Petar Pop Arsov"</p>
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Include Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  

</body>
</html>