<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="promo-bar">
        <a href="">
            <span>SNEAKER & CLOTHING AUTHENTIC 100%</span>
        </a>
    </div>
    <header class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="header-logo">
                        <a href="">BOSS GIAY</a>
                    </div>
                </div>
                <div class="col-md-8 hidden-ms ">
                    <div class="main-header--menu">
                        <nav class="desk-menu">
                            <ul>
                                <li><a href="">SNEAKER</a></li>
                                <li><a href="">SLIDE/SANDAL</a></li>
                                <li><a href="">BAG/CLOTHING</a></li>
                                <li><a href="">ACCESSORIES</a></li>
                                <li><a href="">CONTACT</a></li>
                                <li><a href="">SNEAKER SPA</a></li>
                                <li><a href="">MEMBER</a></li>
                                <li><a href="">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="main-header-action" >
                        <div class="action-acc"><a href=""><i class="fa-regular fa-user"></i></a></div>
                        <div class="action--search"><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></div>
                        <div class="action-cart">
                            <a href="">
                                <i class="fa-solid fa-cart-plus" style="letter-spacing: -15px;"></i>
                                <span class="count">(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
    @yield('content')
    </main>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>