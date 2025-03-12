<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/logo.png" type="image/x-icon">
    <title>Admin Home | HealthEase </title>
    <!-- bootstrap stylesheet -->
    <link rel="stylesheet" href={{asset("css/customizeBootstrap.css")}}>
    <!-- css stylesheet -->
    <link rel="stylesheet" href={{asset("css/style.css")}}>
</head>

<body class="body-bg">



<div id='preloader'>
    <svg id='loader-1'  height='210' width='550' xmlns='http://www.w3.org/2000/svg'
         xmlns:xlink='http://www.w3.org/1999/xlink'>
        <path id='loader-2' stroke='#DE6262' fill='none' stroke-width='2' stroke-linejoin='round'
              d='M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210' />
    </svg>
</div>

<!-- sidebar start -->
<div class="sidebar">
    <div class="sidebar-wrapper">
        <div>
            <i class="fa-solid fa-x hide-menubar" id="hide-menubar"></i>
            <div class="p-xl-20 p-10 ">
                <div class="logo pb-20">
                    <a class="d-flex align-items-center" href="index.html">
                        <img class="ms-10 show-item lp-2" src="/img/LIMARIA2x-1_optimized.png" alt="logo">
                    </a>
                </div>
                <div class="py-20 bb-2 bt-1">
                        <img class="rounded-circle" src="/img/admin.png" alt="admin">
                        <span class="para-1b show-item ms-10">Limaria Admin</span>
                    </a>
                </div>
            </div>
            <div class="side-menu">
                <ul>
                    <li>
                        <a href="{{route('clinic.index')}}">
                            <i class="fa-solid fa-house-chimney-medical"></i>
                            <span class="show-item">Клініки</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('employee.index')}}">
                            <i class="fa-solid fa-user-doctor"></i>
                            <span class="show-item">Лікарі</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('request.index')}}">
                            <i class="fa-solid fa-truck"></i>
                            <span class="show-item"> Заявки на забір</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
            @csrf
            <button class="log-out">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span class="show-item"> Вийти </span>
            </button>
        </form>

    </div>
</div>

<!-- sidebar end  -->
<!-- main content & top header start  -->
<main class="content-wrapper">
    <!-- header section start  -->
    <header>
        <div class="d-flex align-items-center gap-xl-30 gap-3">

            <button class="toggle-menu btn">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>

            <a href="https://limaria.com.ua" target="_blank">
                <i class="fa-solid fa-globe me-10"></i>
                <span class="fs-base header-item-hide">Перейти на сайт</span>
            </a>
        </div>
    </header>
    @yield("content")


</main>


<!-- main content & top header end  -->
<!-- jquery -->
<script src={{asset("js/plugin/jquery-3.7.0.min.js")}}></script>
<!-- bootstrap js  -->
<script src={{asset("js/plugin/bootstrap.min.js")}}></script>
<!-- nice select  -->
<script src={{asset("js/plugin/jquery.nice-select.min.js")}}></script>
<!-- chart js  -->
<script src={{asset("js/plugin/cdn.jsdelivr.net_npm_chart.js")}}></script>
<!-- plugin customize js  -->
<script src={{asset("js/pluginCustomization.js")}}></script>

<!-- main js  -->
<script src={{asset("js/main.js")}}></script>
</body>

</html>
