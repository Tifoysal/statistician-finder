
<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark" href="">FAQs</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Help</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Support</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-dark pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="{{route('home')}}" class="text-decoration-none"><img style="height: 100px" src="{{url('/uploads/logo.png')}}" alt="">
               <h1> Statistician finder </h1>

{{--                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Statistician</span>Finder</h1>--}}
            </a>
        </div>

        <div class="col-lg-6 col-6 text-left">
            <form action="{{route('user.search')}}" >
                <div class="input-group">
                    <input style="height: 60px;" name="search_key" type="text" class="form-control border-green-600" placeholder="Search for statistician">
                    <div class="input-group-append">
                            <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-6 text-right">
            <a href="{{route('registration')}}" class="btn btn-success">
              Registration
                <i class="fas fa-user text-white"></i>
            </a>
            <a href="{{route('login')}}" class="btn btn-success">
                Login
                <i class="fas fa-key text-white"></i>
            </a>

        </div>
    </div>
</div>
<!-- Topbar End -->
