<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/frontend_css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
     <title>@yield('title')</title>
</head>
<body>
    <div class="menu">
            
        <div class="logo">
            <div class="logo-container">
                <img src="{{ asset('images/fav-icon.png') }}" alt="Example Image">
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
            
            <a href="/">ДОМА </a>
            <div class="dropdown">
            <button class="dropbtn">ЗА НАС <i class="fa-solid fa-angle-down"></i></button> 
            <div class="dropdown-content">
                <a href="">ЛИЧНА КАРТА</a>
                <a href="">РАЗВОЈ И ИСТОРИЈАТ</a>
                <a href="">ОРГАНИЗАЦИЈА</a>
                <a href="">ЗА НАШИОТ ПАТРОН</a>
                <a href="">ВИЗИЈА И МИСИЈА</a>
                <div class="dropdown">
                    <button class="dropbtn">ПРИЕМНИ ДЕНОВИ <i class="fa-solid fa-angle-right"></i></button>
                    <div class="dropdown-content">
                        <a href="">ПРИЕМНИ ДЕН НА УЧИЛИШТЕТО</a>
                        <a href="">ПРИЕМНИ ДЕН НА НАСТАВНИЦИТЕ</a>
                    </div>
                </div>
                
            </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">ДОКУМЕНТИ <i class="fa-solid fa-angle-down"></i></button>
                    <div class="dropdown-content">
                                 <a href="/statut">СТАТУТ</a>
                        <a href="/godisna_programa">ГОДИШНА ПРОГРАМА ЗА РАБОТА НА УЧИЛИШТЕТО И ГОДИШНИ И ПОЛУГОДИШНИ ИЗВЈЕШТАИ</a>
                        <a href="/razvojna_programa">РАЗВОЈНА ПРОГРАМА ЗА РАБОТА НА УЧИЛИШТЕТО</a>
                        <a href="/izvestaj_od_samoevaluacija">ИЗВЈЕШТАИ ОД САМОЕВАЛУАЦИЈА</a>
                        <a href="integralna_inspekcija">ИНТЕГРАЛНА ИНСПЕКЦИЈА</a>
                        <a href="/skica">ПЛАН/СКИЦА НА УЧИЛИШТЕТО</a>
                        <a href="/pravilnici_i_propisi">ПРАВИЛНИЦИ И ПРОПИСИ</a>
                        <a href="/finansiski_dokumenti">ФИНАНСИСКИ ДОКУМЕНТИ</a>
                    </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">УЧЕНИЦИ <i class="fa-solid fa-angle-down"></i></button>
                <div class="dropdown-content">
                    <div class="dropdown">
                        <button class="dropbtn">ОДЕЛЕНИЈА <i class="fa-solid fa-angle-right"></i></button>
                        <div class="dropdown-content">
                            <a href="/rakovoditeli_na_paralelki">РАКОВОДИТЕЛИ НА ПАРАЛЕЛКИ</a>
                        </div>
                    </div>
                    <a href="">УЧЕНИЧКИ КЛУБОВИ</a>
                    <a href="">УЧЕНИЧКА ТЕЛА</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">НАСТАВА <i class="fa-solid fa-angle-down"></i></button>
                <div class="dropdown-content">
                    <a href="">НАСТАВНИ ПРОГРАМИ ПО ГЕНЕРАЦИИ И ПРЕДМЕТИ И ЗАКОНИ</a>
                    <a href="">ПЛАНИРАЊА ЗА ОЦЕНУВАЊЕ</a>
                    <div class="dropdown">
                        <button class="dropbtn">ДОДАТНА НАСТАВА ▶</button>
                        <div class="dropdown-content">
                            <a href="#">ДОДАТНА ОДЕЉЕНСКА НАСТАВА</a>
                            <a href="#">ДОДАТНА ПРЕДМЕТНА НАСТАВА</a>
                            <a href="#">ДОПУНСКА ОДЕЉЕНСКА НАСТАВА</a>
                            <a href="#">ДОПУНСКА ПРЕДМЕТНА НАСТАВА</a>
                        </div>
                    </div>
                    <a href="">ВОННАСТАВНИ АКТИВНОСТИ</a>
                    <a href="">БИБЛИОТЕКА</a>
                </div>

            </div>
            <div class="dropdown">
                <button class="dropbtn">РАСПОРЕДИ <i class="fa-solid fa-angle-down"></i></button>
                <div class="dropdown-content">
                    <div class="dropdown">
                        <button class="dropbtn">РАСПОРЕД НА НАСТАВАТА <i class="fa-solid fa-angle-right"></i></button>
                        <div class="dropdown-content">
                            <a href="">РАСПОРЕД НА ОДЕЛЕНСКА НАСТАВА</a>
                            <a href="">РАСПОРЕД НА ПРЕДМЕТНА НАСТАВА</a>
                        </div>
                    </div>
                    <a href="">РАСПОРЕД НА СМЕНИ</a>
                    <a href="">РАСПОРЕД НА SВОНЕЊЕ</a>
                </div>
            </div>
            <a href="#">ВРАБОТЕНИ <i class="fa-solid fa-angle-down"></i></a>
            <a href="#">НОВОСТИ</a>
            <a href="#">МЕЃУЕТНИЧКА ИНТЕГРАЦИЈА ВО ОБРАЗОВАНИЕТО</a>
            <div class="dropdown">
            <button class="dropbtn">УЧЕСТВО НА НАТПРЕВАРИ И ОСВЕНИ НАГРАДИ <i class="fa-solid fa-angle-down"></i></button>
                <div class="dropdown-content  erasmus">
                    
                   @foreach ($competitions as $year)
    <a href="ucestvo_na_natprevari_i_ostali_nagradi/{{ $year. "-" . $year+1 }}">УЧЕСТВО НА НАТПРЕВАРИ И ОСТАЛИ НАГРАДИ {{ $year }} / {{ $year+1 }}</a>
@endforeach
                </div>
            </div>
            <a href="#">ПРОЕКТИ <i class="fa-solid fa-angle-down"></i></a>
            <a href="#">АКТИВНОСТИ</a>
            <a href="#">ЕТВИНИНГ <i class="fa-solid fa-angle-down"></i></a>
            <div class="dropdown">
            <button class="dropbtn">ЕРАЗМУС + <i class="fa-solid fa-angle-down"></i></button>
            <div class="dropdown-content  erasmus">
                @foreach($erasmus as $item)
                    <a href="/erasmus/{{$item->slug}}">{{ $item->name }}</a>
                    <!-- Adjust the href attribute as needed -->
                @endforeach
            </div>
        </div>
            <a href="#">ПРВАЧИЊА 2023/2024</a>
            <a href="/gallery">ГАЛЕРИЈА</a>
            
            <a href="/kontakt">КОНТАКТ</a>
            <a href="#">ИНФОРМАЦИИ ОД ЈАВЕН КАРАКТЕР</a>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer hidden">
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
        <div class="copyright">
            <p>Copyright © 2024 OOU "Petar Pop Arsov"</p>
        </div>
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous" /> --}}

  

</body>
</html>