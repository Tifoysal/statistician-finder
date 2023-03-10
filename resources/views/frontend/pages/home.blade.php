@extends('frontend.master')


@section('content')


{{--    <!-- Navbar Start -->--}}
{{--    <div class="container-fluid mb-5">--}}
{{--        <div class="row border-top px-xl-5">--}}
{{--            <div class="col-lg-3 d-none d-lg-block">--}}
{{--                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">--}}
{{--                    <h6 class="m-0">Categories</h6>--}}
{{--                    <i class="fa fa-angle-down text-dark"></i>--}}
{{--                </a>--}}
{{--                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">--}}
{{--                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">--}}
{{--                        @foreach($categories as $category)--}}
{{--                        <a href="{{route('category.wise.products',$category->id)}}" class="nav-item nav-link">{{$category->name}}</a>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--            <div class="col-lg-9">--}}
{{--                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">--}}
{{--                    <a href="" class="text-decoration-none d-block d-lg-none">--}}
{{--                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>--}}
{{--                    </a>--}}
{{--                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">--}}
{{--                        <span class="navbar-toggler-icon"></span>--}}
{{--                    </button>--}}
{{--                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">--}}
{{--                        <div class="navbar-nav mr-auto py-0">--}}
{{--                            <a href="index.html" class="nav-item nav-link active">Home</a>--}}
{{--                            <a href="shop.html" class="nav-item nav-link">Shop</a>--}}
{{--                            <a href="detail.html" class="nav-item nav-link">Shop Detail</a>--}}
{{--                            <div class="nav-item dropdown">--}}
{{--                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>--}}
{{--                                <div class="dropdown-menu rounded-0 m-0">--}}
{{--                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>--}}
{{--                                    <a href="checkout.html" class="dropdown-item">Checkout</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a href="contact.html" class="nav-item nav-link">Contact</a>--}}
{{--                        </div>--}}
{{--                        <div class="navbar-nav ml-auto py-0">--}}
{{--                            @auth--}}

{{--                               <a href="{{route('user.profile')}}" class="nav-item nav-link">--}}
{{--                                   {{auth()->user()->name}}</a>--}}
{{--                                <a href="{{route('user.logout')}}" class="nav-item nav-link">Logout</a>--}}
{{--                            @else--}}
{{--                            <a href="" class="nav-item nav-link" data-toggle="modal" data-target="#login">Login </a>--}}
{{--                            <a href="" class="nav-item nav-link" data-toggle="modal" data-target="#registration">Registration</a>--}}
{{--                             @endauth--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </nav>--}}






{{--                <!-- Modal -->--}}
{{--                <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                    <div class="modal-dialog" role="document">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h5 class="modal-title" id="exampleModalLabel">Please Login</h5>--}}
{{--                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                    <span aria-hidden="true">&times;</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <form action="{{route('user.login')}}" method="post">--}}
{{--                                @csrf--}}
{{--                                <div class="modal-body">--}}

{{--                                    <div>--}}
{{--                                        <label for="">Enter your email</label>--}}
{{--                                        <input name="email" type="email" class="form-control" required placeholder="Enter email">--}}
{{--                                    </div>--}}

{{--                                    <div>--}}
{{--                                        <label for="">Enter your password</label>--}}
{{--                                        <input name="password" type="password" class="form-control" required placeholder="Enter password">--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                                    <button type="submit" class="btn btn-primary">Save changes</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}



{{--                <!-- Modal -->--}}
{{--                <div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                    <div class="modal-dialog" role="document">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h5 class="modal-title" id="exampleModalLabel">SignUp</h5>--}}
{{--                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                    <span aria-hidden="true">&times;</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}


{{--                                <form action="{{route('registration')}}" method="post" enctype="multipart/form-data">--}}
{{--                                    @csrf--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="name">Enter Your Name:</label>--}}
{{--                                        <input name="customer_name" type="text" class="form-control" id="name"  placeholder="Enter name">--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="exampleInputEmail1">Email address</label>--}}
{{--                                        <input name="customer_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group">--}}
{{--                                        <label for="number">Phone Number</label>--}}
{{--                                        <input name="customer_phone" type="text" class="form-control" id="number"  placeholder="Enter Number">--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group">--}}
{{--                                        <label for="exampleInputPassword1">Password</label>--}}
{{--                                        <input name="customer_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
{{--                                    </div>--}}

{{--                                    <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                                </form>--}}

{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}





{{--                <div id="header-carousel" class="carousel slide" data-ride="carousel">--}}
{{--                    <div class="carousel-inner">--}}
{{--                        <div class="carousel-item active" style="height: 410px;">--}}
{{--                            <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">--}}
{{--                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">--}}
{{--                                <div class="p-3" style="max-width: 700px;">--}}
{{--                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>--}}
{{--                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>--}}
{{--                                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item" style="height: 410px;">--}}
{{--                            <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">--}}
{{--                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">--}}
{{--                                <div class="p-3" style="max-width: 700px;">--}}
{{--                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>--}}
{{--                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>--}}
{{--                                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">--}}
{{--                        <div class="btn btn-dark" style="width: 45px; height: 45px;">--}}
{{--                            <span class="carousel-control-prev-icon mb-n2"></span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">--}}
{{--                        <div class="btn btn-dark" style="width: 45px; height: 45px;">--}}
{{--                            <span class="carousel-control-next-icon mb-n2"></span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Navbar End -->--}}


    <!-- Featured Start -->
{{--    <div class="container-fluid pt-5">--}}
{{--        <div class="row px-xl-5 pb-3">--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">--}}
{{--                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>--}}
{{--                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">--}}
{{--                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>--}}
{{--                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">--}}
{{--                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>--}}
{{--                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">--}}
{{--                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">--}}
{{--                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>--}}
{{--                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Statisticians</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img  style="height: 150px"  class="img-fluid" src="https://miro.medium.com/max/1400/1*m0H6-tUbW6grMlezlb52yw.png" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Python</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">20 Statisticians</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img style="height: 150px"  class="img-fluid" src="https://laravelnews.s3.amazonaws.com/images/laravel9-1646792144.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">PHP (Laravel)</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">12 Statisticians</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img   style="height: 150px"  class="img-fluid" src="https://www.i2tutorials.com/wp-content/media/2020/05/R-PROGRAMMING-LANGUAGE-i2tutorials.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0"> Programming R</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">14 Statisticians</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img  style="height: 150px"  class="img-fluid" src="https://builtin.com/sites/www.builtin.com/files/styles/og/public/2021-12/machine-learning-examples-applications.png" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Machine Learning</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">33 Statistician</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img  style="height: 150px"  class="img-fluid" src="https://miro.medium.com/max/792/1*lJ32Bl-lHWmNMUSiSq17gQ.png" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Web Designer</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">42 Statisticians</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img  style="height: 150px" class="img-fluid" src="https://res.cloudinary.com/dyd911kmh/image/upload/v1652357545/shutterstock_1770654182_d43667c1bc.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Data analyst</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->



    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">New Statisticians</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">

            @foreach($statistician  as $data)
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{url('/uploads/'.$data->image)}}" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{$data->name}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>Skills</h6>
{{--                            <h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="{{route('statistician.view',$data->id)}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>

                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
    <!-- Products End -->


    <!-- Subscribe Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="row justify-content-md-center py-5 px-xl-5">
            <div class="col-md-6 col-12 py-5">
                <div class="text-center mb-2 pb-2">
                    <h2 class="section-title px-5 mb-3"><span class="bg-secondary px-2">Stay Updated</span></h2>
                    <p>
                        By subscribe to our website you can stay connected with us.
                    </p>
                </div>
                <form action="">
                    <div class="input-group">
                        <input  type="text" class="form-control border-green-600 p-4" placeholder="Email Goes Here">
                        <div class="input-group-append">
                            <button class="btn btn-success px-4">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">

            <div class="container-fluid pt-5" >
                <div class="text-center mb-4">
                    <h2 class="section-title px-5"><span class="px-2">Statisticians from</span></h2>
                </div>
            </div>

            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item border p-4">
                        <img style="height: 150px" src="https://upload.wikimedia.org/wikipedia/commons/0/0e/United_States_University_-_Logo_2018.png" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img style="height: 150px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Uniformed_Services_University_Logo.png/1200px-Uniformed_Services_University_Logo.png" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img style="height: 150px" src="https://bcassetcdn.com/public/blog/wp-content/uploads/2022/05/11161532/Chicago-University-Logo.png" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img style="height: 150px" src="https://www.seekpng.com/png/detail/969-9698159_university-of-michigan-official-seal-university-in-usa.png" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img style="height: 150px" src="https://logos-world.net/wp-content/uploads/2021/03/Howard-University-Logo.png" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img style="height: 150px" src="https://bcassetcdn.com/public/blog/wp-content/uploads/2022/05/11161338/Washington-University-Logo.png" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img style="height: 150px" src="https://www.pngitem.com/pimgs/m/744-7442349_northeastern-university-usa-logo-png-download-transparent-png.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

@endsection

