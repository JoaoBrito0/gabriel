@extends('layouts.default')

@section('title','Products')

@section('content')
    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
        <div class="container">
        <div class="row flex-row-reverse">
            <div>
            <div class="product_top_bar">
                <div class="left_dorp">
                <select class="sorting">
                    <option value="1">Default sorting</option>
                    <option value="2">Default sorting 01</option>
                    <option value="4">Default sorting 02</option>
                </select>
                <select class="show">
                    <option value="1">Show 12</option>
                    <option value="2">Show 14</option>
                    <option value="4">Show 16</option>
                </select>
                </div>
            </div>

            <div class="latest_product_inner">
                <div class="row">
                <!--Apresentação de um produto-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                    <div class="product-img">
                        <img
                        class="card-img"
                        src="img/product/inspired-product/i1.jpg"
                        alt=""
                        />
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                        <h4>8.8</h4>
                        </a>
                    </div>
                    </div>
                </div>
                <!--Fim da apresentação do produto-->
                <!--Apresentação de um produto-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                    <div class="product-img">
                        <img
                        class="card-img"
                        src="img/product/inspired-product/i1.jpg"
                        alt=""
                        />
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                        <h4>10.9</h4>
                        </a>
                    </div>
                    </div>
                </div>
                <!--Fim da apresentação do produto-->
                <!--Apresentação de um produto-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                    <div class="product-img">
                        <img
                        class="card-img"
                        src="img/product/inspired-product/i1.jpg"
                        alt=""
                        />
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                        <h4>12.9</h4>
                        </a>
                    </div>
                    </div>
                </div>
                <!--Fim da apresentação do produto-->
                <!--Apresentação de um produto-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                    <div class="product-img">
                        <img
                        class="card-img"
                        src="img/product/inspired-product/i1.jpg"
                        alt=""
                        />
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                        <h4>A2</h4>
                        </a>
                    </div>
                    </div>
                </div>
                <!--Fim da apresentação do produto-->
                <!--Apresentação de um produto-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                    <div class="product-img">
                        <img
                        class="card-img"
                        src="img/product/inspired-product/i1.jpg"
                        alt=""
                        />
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                        <h4>A4</h4>
                        </a>
                    </div>
                    </div>
                </div>
                <!--Fim da apresentação do produto-->
                <!--Apresentação de um produto-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                    <div class="product-img">
                        <img
                        class="card-img"
                        src="img/product/inspired-product/i1.jpg"
                        alt=""
                        />
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                        <h4>Alumínio</h4>
                        </a>
                    </div>
                    </div>
                </div>
                <!--Fim da apresentação do produto-->
                <!--Apresentação de um produto-->
                <div class="col-lg-4 col-md-6">
                    <div class="single-product">
                    <div class="product-img">
                        <img
                        class="card-img"
                        src="img/product/inspired-product/i1.jpg"
                        alt=""
                        />
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                        <h4>Aço</h4>
                        </a>
                    </div>
                    </div>
                </div>
                <!--Fim da apresentação do produto-->
                </div>
            </div>
            </div>

        </div>
        </div>
    </section>
@endsection
