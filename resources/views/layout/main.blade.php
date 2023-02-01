<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANV 2023</title>
    <!-- let's include cdn files -->
    <!--1. Owl Carousel Min.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- 2. Owl Carousel Theme Min.css -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <!-- 3rd party -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite([])
    @yield('css')
</head>

<body>
    <!-- navbar -->
    @include('layout.navbar')
    <header class="mt-4">
        <h1 class="text-center" style="font-family: 'Newsreader', serif; font-weight: 500">Conference Member Area</h1>
        <div style="width: 100px; height: 5px; background-color: #98b43c; margin: auto"></div>
    </header>
    <div class="row mt-3 mx-auto" style="width: 98%;">
        <aside class="col-lg-3" style="min-height: 100vh; border: 2px solid black; padding: 0">
            <ul class="nav d-block" style="font-family: 'Newsreader', serif">
                <li class="nav-item sidebar-item d-flex justify-content-between">
                    <a href="/" class="text-decoration-none sidebar-item-text" style="font-size: 28px">
                        DASHBOARD
                    </a>
                    <i class="fa-solid fa-chevron-right" style="font-size: 20px"></i>
                </li>
                <li class="nav-item sidebar-item d-flex justify-content-between">
                    <a href="/abstract" class="text-decoration-none sidebar-item-text" style="font-size: 28px">
                        ABSTRACT
                    </a>
                    <i class="fa-solid fa-chevron-right" style="font-size: 20px"></i>
                </li>
                <li class="nav-item sidebar-item d-flex justify-content-between">
                    <a href="/payment" class="text-decoration-none sidebar-item-text" style="font-size: 28px">
                        PAYMENT
                    </a>
                    <i class="fa-solid fa-chevron-right" style="font-size: 20px"></i>
                </li>
                <li class="nav-item sidebar-item d-flex justify-content-between">
                    <a href="#" class="text-decoration-none sidebar-item-text" style="font-size: 28px">
                        PAPER
                    </a>
                    <i class="fa-solid fa-chevron-right" style="font-size: 20px"></i>
                </li>
                <li class="nav-item sidebar-item d-flex justify-content-between">
                    <a href="#" class="text-decoration-none sidebar-item-text" style="font-size: 28px">
                        PRESENTATION
                    </a>
                    <i class="fa-solid fa-chevron-right" style="font-size: 20px"></i>
                </li>
            </ul>
        </aside>
        <main class="col-lg-9" style="min-height: 200vh; border: 2px solid black; border-left: none">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>



    {{-- <script>
        $(function() {
            $('.sidebar-item').on('mouseover', function() {
                $('.sidebar-item-text').css('color', '#fff')
            })
            $('.sidebar-item').on('mouseleave', function() {
                $('.sidebar-item-text').css('color', '#000')
            })
        })
    </script> --}}


</body>

</html>
