<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js"
        integrity="sha512-Dm5UxqUSgNd93XG7eseoOrScyM1BVs65GrwmavP0D0DujOA8mjiBfyj71wmI2VQZKnnZQsSWWsxDKNiQIqk8sQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('adminhome.css') }}">
    <link rel="stylesheet" href="{{ asset('adminnav.css') }}">
    <link rel="stylesheet" href="{{ asset('form.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('menu_show.css') }}"> --}}
    <link rel="icon" href="favicon.png" type="image/png">
    <script src="{{ asset('admin.js') }}"></script>


    <title>Admin page</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img ">

        </div>
        <div class="justify-content-end align-items-center" style="display:inline-flex;">
            <img src="{{ asset('silverspoonsimg/silver spoon.png') }}"
                style="height: 50px; width: 50px; border-radius: 50%;">
            <h5 class="ms-3 mt-2" style="font-weight: bolder;">Silver spoons</h5>
        </div>

    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo "> <img src="{{ asset('silverspoonsimg/silver spoon.png') }}"
                        style="height: 50px; width: 50px; border-radius: 50%;" /> <span
                        class="nav_logo-name">Admin</span> </a>
                <div class="nav_list"> <a href="/admin" class="nav_link "> <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span> </a>
                    <a href="{{ route('cuisins.index') }}" class="nav_link "> <i class='bx bx-food-menu nav_icon'></i>
                        <span class="nav_name">Cuisins</span> </a>
                    <a href="{{ route('menu.index') }}" class="nav_link"> <i class="fa-solid fa-utensils nav_icon"></i>
                        <span class="nav_name">Dishes</span> </a>
                     <a href="{{ route('table.index') }}" class="nav_link"><i class='bx bx-table nav_icon'></i> <span
                            class="nav_name">Tables</span> </a>
                    <a href="{{ route('coupons.index') }}" class="nav_link"> <i class='bx bxs-coupon nav_icon'></i> <span class="nav_name">coupon</span> </a>
                    <a href="{{ route('banners.index') }}" class="nav_link"> <i class="fa-regular fa-images"></i> <span
                            class="nav_name">banner</span> </a>
                    <a href="{{route('order.index')}}" class="nav_link"> <i class="fa-solid fa-bowl-food nav_icon"></i> <span
                            class="nav_name">Orders</span> </a>
                    {{-- <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span
                            class="nav_name">Report</span> </a>
                    <a href="#" class="nav_link"> <i class="fa-solid fa-file-invoice-dollar nav_icon"></i> <span
                            class="nav_name">Revenue</span> </a> --}}
                </div>
                <a href="/" class="nav_link" style="font-size: 20px; font-weight: bold; color: white;"> <i
                        class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </div>
        </nav>
    </div>
    <!--Container Main start-->

    <!--Container Main end-->
