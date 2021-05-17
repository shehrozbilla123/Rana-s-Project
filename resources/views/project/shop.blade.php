@extends('master.layout')
@section('title', 'shop')
@section('naveb', 'active')
@section('content')


    <style>
        .b1{
            background-color: orangered;
            color: white;
        }
        .a2{
           color: black;
        }
        .a2:hover, .img2:hover .a2{
            text-decoration: none;
            color: red;
        }

    </style>


   <div class="container">
    <div class="row">

        <div class="col-4 mt-5 mb-5">
            <input type="text" placeholder="  Search Product..." style="width: 100%" class="py-2">
              <button class="btn btn-sm mt-1 px-3 py-2 b1">Search</button>
         <h4 class="mt-5">Filter by Price</h4>
            <button class="btn btn-sm mt-5 px-3 py-2 b1 font-weight-bold">Filter</button>
            <progress class="text-danger"></progress>

            <h4 class="mt-5">Products</h4>

            <div class="row mb-3 mt-5 img2">
                <div class="col mt-2">
                    <a href="/DressShirt" class="font-weight-bold a2">
                        Dress-Shirt
                    </a>
                     <br>
                    <span class="font-weight-bold">RS:1000</span>
                </div>

                <div class="col">
                  <a href="/DressShirt">
                      <img src="{{asset('image/s.JPG')}}" class="img-fluid w-25 h-100 a2">
                  </a>
                </div>
            </div>

            <div class="row mb-3 img2">
                <div class="col mt-2">
                    <a href="" class="font-weight-bold a2">Black-Shoes
                    </a>
                    <br>
                    <span class="font-weight-bold">RS:800</span>
                </div>

                <div class="col">
                    <a href="" class="a2">
                     <img src="{{asset('image/hjh.JPG')}}" class="img-fluid w-25 h-100 a2">
                    </a>
                </div>
            </div>


            <div class="row mb-3 img2">
                <div class="col mt-2">
                    <a href="/Cap" class="font-weight-bold a2">Black-Cap
                    </a><br>
                    <span class="font-weight-bold">RS:400</span>
                </div>

                <div class="col">
                    <a href="/Cap" class="a2">
                     <img src="{{asset('image/ca.JPG')}}" class="img-fluid w-25 h-100 a2">
                    </a>
                </div>

            </div>


            <div class="row mb-3 img2">
                <div class="col mt-2">
                    <a href="" class="font-weight-bold a2">Lether-Belt
                    </a><br>
                    <span class="font-weight-bold">RS:500</span>
                </div>

                <div class="col">

                    <a href="">
                        <img src="{{asset('image/blll.JPG')}}" class="img-fluid w-25 h-100 a2">
                    </a>
                </div>

            </div>


            <div class="row img2">
                <div class="col mt-2">
                    <a href="" class="font-weight-bold a2">Jeans-Pent
                    </a>
                    <br>
                    <span class="font-weight-bold">RS:1100</span>
                </div>

                <div class="col">
                    <a href="" class="a2">
                      <img src="{{asset('image/pp.JPG')}}" class="img-fluid w-25 h-100 a2">
                    </a>
                </div>
            </div>


            <h4 class="mt-5">Top rated products</h4>

            <div class="row mb-3 mt-5 img2">
                <div class="col mt-2">
                    <a href="" class="font-weight-bold a2">New Design Shirt
                    </a>
                    <br>
                    <span class="font-weight-bold">RS:1300</span>
                </div>

                <div class="col">
                    <a href="">
                     <img src="{{asset('image/lk.JPG')}}" class="img-fluid w-25 h-100 a2">
                    </a>
                </div>
            </div>

            <div class="row mb-3 img2">
                <div class="col mt-2">
                    <a href="" class="font-weight-bold a2">Jeans Pent
                    </a><br>
                    <span class="font-weight-bold">RS:1500</span>
                </div>

                <div class="col">
                    <a href="" class="a2">
                      <img src="{{asset('image/p.JPG')}}" class="img-fluid w-25 h-100 a2">
                    </a>
                </div>
            </div>


            <div class="row mb-3 img2">
                <div class="col mt-2">
                    <a href="" class="font-weight-bold a2">Brown Shoes
                    </a>
                    <br>
                    <span class="font-weight-bold">RS:4000</span>

                </div>

                <div class="col">
                    <a href="">
                      <img src="{{asset('image/ioi.webp')}}" class="img-fluid w-25 h-100 a2">
                    </a>
                </div>

            </div>


            <div class="row mb-3 img2">
                <div class="col mt-2">
                    <a href="" class="font-weight-bold a2">New Design Belt
                    </a>
                    <br>
                    <span class="font-weight-bold">RS:800</span>
                </div>

                <div class="col">
                    <a href="">
                      <img src="{{asset('image/bl.JPG')}}" class="img-fluid w-25 h-100 a2">
                    </a>
                </div>

            </div>


            <div class="row img2">
                <div class="col mt-2">
                    <a href="" class="font-weight-bold a2">New Cap
                    </a>
                    <br>
                    <span class="font-weight-bold">RS:500</span>
                </div>

                <div class="col">
                    <a href="" class="a2">
                      <img src="{{asset('image/ca.JPG')}}" class="img-fluid w-25 h-100">
                    </a>
                </div>
            </div>
        </div>




        <div class="col-8">

            <div class="row">
                <div class="col-3">
                    <h1 class="text-dark mt-5 mb-5">Shop</h1>
                </div>
                <div class="col mt-5">

                    <div class="row mt-2">
                        <div class="col-5 mt-2">
                            Showing 1–12 of 22 results
                        </div>
                        <div class="col">
                            <select class="form-control w-75 ">
                                <option>Default Sorting</option>
                                <option>Sort by Popularity</option>
                                <option>Sort by average rating</option>
                                <option>Sort by latest</option>
                                <option>Sort by Price:Low to Heigh</option>
                                <option>Sort by Price:Heigh to Low</option>
                            </select>
                        </div>
                    </div>


                </div>
            </div>

            <div class="row div1">
                <div class="col">
                    <img src="{{asset('image/gf.JPG')}}" class="img-fluid" style="height: 250px">
                    <h6 class="text-dark mt-3 text-center">Dress-Shirt</h6>
                    <h6 class="text-center text-danger mt-2">
                        Price: <del>2800</del> <span class="text-dark">1400</span>
                    </h6>
                    <center>
                        <button class="btn mt-3 b1">
                            Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                    </center>
                </div>

                <div class="col">
                    <img src="{{asset('image/hjh.JPG')}}" class="img-fluid" style="height: 250px">
                    <h6 class="text-dark mt-3 text-center">BLack Shoes</h6>
                    <h6 class="text-center text-danger mt-2">
                        Price: <del>2800</del> <span class="text-dark">1400</span>
                    </h6>
                    <center>
                        <button class="btn mt-3 b1">
                            Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                    </center>
                </div>

                <div class="col">
                    <img src="{{asset('image/bll.JPG')}}" class="img-fluid" style="height: 250px">
                    <h6 class="text-dark mt-3 text-center">Lether-Belt</h6>
                    <h6 class="text-center text-danger mt-2">
                        Price: <del>2800</del> <span class="text-dark">1400</span>
                    </h6>
                    <center>
                        <button class="btn mt-3 b1">
                            Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                    </center>
                </div>
            </div>

            <div class="row mt-5">

                <div class="col">
                    <img src="{{asset('image/a1.JPG')}}" class="img-fluid img2" style="height: 250px">
                    <h6 class="text-dark mt-3 text-center">Brown-Coat</h6>
                    <h6 class="text-center text-danger mt-2 a2">
                        Price: <del>2800</del> <span class="text-dark">1400</span>
                    </h6>
                    <center>
                        <button class="btn btn-dark mt-3 bt1">
                            Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                    </center>
                </div>

                <div class="col">
                    <img src="{{asset('image/ca.JPG')}}" class="img-fluid img2" style="height: 250px">
                    <h6 class="text-dark mt-3 text-center">Black-Cap</h6>
                    <h6 class="text-center text-danger mt-2 a2">
                        Price: <del>2800</del> <span class="text-dark">1400</span>
                    </h6>
                    <center>
                        <button class="btn btn-dark mt-3 bt1">
                            Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                    </center>
                </div>

                <div class="col">
                    <img src="{{asset('image/ss.png')}}" class="img-fluid img2" style="height: 250px">
                    <h6 class="text-dark mt-3 text-center">New Design-Shirt</h6>
                    <h6 class="text-center text-danger mt-2 a2">
                        Price: <del>2800</del> <span class="text-dark">1400</span>
                    </h6>
                    <center>
                        <button class="btn btn-dark mt-3 bt1">
                            Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                    </center>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col">
                    <img src="{{asset('image/download.JPG')}}" class="img-fluid img2" style="height: 250px">
                    <h6 class="text-dark mt-3 text-center">White Pent-Coat</h6>
                    <h6 class="text-center text-danger mt-2 a2">
                        Price: <del>2800</del> <span class="text-dark">1400</span>
                    </h6>
                    <center>
                        <button class="btn btn-warning mt-3 bt1">
                            Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                    </center>
                </div>

                <div class="col">
                    <img src="{{asset('image/pp.JPG')}}" class="img-fluid img2" style="height: 250px">
                    <h6 class="text-dark mt-3 text-center">Jeans-Pent</h6>
                    <h6 class="text-center text-danger mt-2 a2">
                        Price: <del>2800</del> <span class="text-dark">1400</span>
                    </h6>
                    <center>
                        <button class="btn btn-warning mt-3 bt1">
                            Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                    </center>
                </div>

                <div class="col">
                    <img src="{{asset('image/cc.JPG')}}" class="img-fluid img2" style="height: 250px">
                    <h6 class="text-dark mt-3 text-center">White-Cap</h6>
                    <h6 class="text-center text-danger mt-2 a2">
                        Price: <del>2800</del> <span class="text-dark">1400</span>
                    </h6>
                    <center>
                        <button class="btn btn-warning mt-3 bt1">
                            Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                    </center>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col">
                    <img src="{{asset('image/hk.JPEG')}}" class="img-fluid img2" style="height: 250px">
                    <h6 class="text-dark mt-3 text-center">New Design-Shirt</h6>
                    <h6 class="text-center text-danger mt-2 a2">
                        Price: <del>2800</del> <span class="text-dark">1400</span>
                    </h6>
                    <center>
                        <button class="btn btn-danger mt-3 bt1">
                            Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                    </center>
                </div>

                <div class="col">
                    <img src="{{asset('image/ppo.webp')}}" class="img-fluid img2" style="height: 250px">
                    <h6 class="text-dark mt-3 text-center">White-Shoes</h6>
                    <h6 class="text-center text-danger mt-2 a2">
                        Price: <del>2800</del> <span class="text-dark">1400</span>
                    </h6>
                    <center>
                        <button class="btn btn-danger mt-3 bt1">
                            Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                    </center>
                </div>

                <div class="col">
                    <img src="{{asset('image/blll.JPG')}}" class="img-fluid img2" style="height: 250px">
                    <h6 class="text-dark mt-3 text-center">Brown-Belt</h6>
                    <h6 class="text-center text-danger mt-2 a2">
                        Price: <del>2800</del> <span class="text-dark">1400</span>
                    </h6>
                    <center>
                        <button class="btn btn-danger mt-3 bt1">
                            Add to Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                    </center>
                </div>
            </div>


        </div>
    </div>
   </div>
@endsection
