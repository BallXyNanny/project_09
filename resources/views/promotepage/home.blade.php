@extends('layouts.promote')
@section('content')

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="public/template/promote/assets/img/BBTEA.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Doracha Tea</b></h1>
                                <h3 class="h2">ชานมไข่มุกโดราชะ</h3>
                                <p>
                                    Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1). 
                                    This template is 100% free provided by <a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank">TemplateMo</a> website. 
                                    Image credits go to <a rel="sponsored" class="text-success" href="https://stories.freepik.com/" target="_blank">Freepik Stories</a>,
                                    <a rel="sponsored" class="text-success" href="https://unsplash.com/" target="_blank">Unsplash</a> and
                                    <a rel="sponsored" class="text-success" href="https://icons8.com/" target="_blank">Icons 8</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites. 
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_03.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Repr in voluptate</h1>
                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                <p>
                                    We bring you 100% free CSS templates for your websites. 
                                    If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1"><b>Type of Menu</b></h1>
                <p>
                   ประเภทเมนูเครื่องดื่มในร้าน
                </p>
            </div>
        </div>
        <div class="row" id="img">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('template/promote/assets/img/BBTEA.jpg') }}" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Bubble Tea</h5>
                <p class="text-center"><a class="btn btn-success">Buy</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('template/promote/assets/img/BBTEA.jpg') }}" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Tea</h2>
                <p class="text-center"><a class="btn btn-success">Buy</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('template/promote/assets/img/BBTEA.jpg') }}" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Green Tea</h2>
                <p class="text-center"><a class="btn btn-success">Buy</a></p>
            </div>
        </div>
        </section>
        <section class="container py-5">
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('template/promote/assets/img/BBTEA.jpg') }}"  class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Soda</h5>
                <p class="text-center"><a class="btn btn-success">Buy</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('template/promote/assets/img/BBTEA.jpg') }}"  class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Coffee</h2>
                <p class="text-center"><a class="btn btn-success">Buy</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="{{ asset('template/promote/assets/img/BBTEA.jpg') }}"  class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Snack</h2>
                <p class="text-center"><a class="btn btn-success">Buy</a></p>
            </div>
        </div>
        </section>

        
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1"><b>Beverage</b></h1>
                    <p>
                       เมนูแนะนำ
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="{{ asset('template/promote/assets/img/TeaTea.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                               
                                <li class="text-muted text-right">45THB</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Bubble Tea</a>
                            <p class="card-text">
                                ชานมไข่มุก
                            </p>
                            <a class="btn btn-success">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="{{ asset('template/promote/assets/img/TeaTea.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                               
                                <li class="text-muted text-right">40THB</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Smoothie</a>
                            <p class="card-text">
                                น้ำปั่น
                            </p>
                            <a class="btn btn-success">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="{{ asset('template/promote/assets/img/TeaTea.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                               
                                <li class="text-muted text-right">40THB</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Iced Green Tea Latte</a>
                            <p class="card-text">
                                ชาเขียวเย็น
                            </p>
                            <a class="btn btn-success">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


@stop