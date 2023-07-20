<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/product_card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    

</head>

<body>
    @extends('client_view.frontend')
    @section('content')
    <!-- Banner start-->
    
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://theme.hstatic.net/1000383440/1000607590/14/slideshow_1.jpg?v=171"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://theme.hstatic.net/1000383440/1000607590/14/slideshow_2.jpg?v=171"
                        class="d-block w-100" alt="...">
                </div>
                <!-- <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
              </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Banner end-->
        <!-- New product start-->
        <div class="section-collection" style="width: 100%; border: 1px solid green;">
            <div class="collection-1" style="width: 100%; border: 1px solid yellow;">
                <div class="container" style="width: 100%; border: 1px solid red;">
                    <div class="wrapper-heading-home" style="width: 100%; border: 1px solid purple;">
                        <h2><a href="">San Pham Moi</a></h2>
                        <div class="view-all" style="border: 1px solid blue;width: 100%;">
                            <a href="">Xem them</a>
                        </div>
                    </div>
                    <div class="row" style="padding: 20px 0;">
                        @foreach ($productsWithImages as $item)
                        <div class="col-md-3 col-sm-6 col-xs-6 product">
                            <div class="product_block">
                                <div class="product-img">
                                    <a href="">
                                        <picture class="pt1"><img
                                                src="{{ $item['image1'] }}"
                                                alt=""></picture>
                                        <picture class="pt2"><img
                                                src="{{$item['image2']}}"
                                                alt=""></picture>
                                    </a>
                                    <div class="button-add">
                                        <button style="bottom: 0;left: 0;">Buy</button>
                                        <button>Add to cart</button>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <div class="box-pro-details">
                                        <h3 class="pro-name">
                                            <a href="">
                                            {{ $item['product']->ProductName }}
                                            </a>
                                        </h3>
                                        <div class="pro-price">
                                            <p>{{ $item['product']->Price }}đ</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>

    <!-- New product end-->
    @endsection




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</html>