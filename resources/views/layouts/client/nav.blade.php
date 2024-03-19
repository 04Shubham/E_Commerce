<nav class="navbar navbar-expand-lg navbar-light bg-auto fixed-top"
data-navbar-on-scroll="data-navbar-on-scroll">
<div class="container"><a class="navbar-brand d-inline-flex" href="index.html"><img class="d-inline-block"
            src="{{ asset('client/img/gallery/logo.svg') }}" alt="logo" /><span
            class="text-1000 fs-3 fw-bold ms-2 text-gradient">Whafood</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
        </span></button>
    <div class="collapse navbar-collapse border-top border-lg-0 my-2 mt-lg-0" id="navbarSupportedContent">
        <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
            <p class="mb-0 fw-bold text-lg-center">Deliver to: <i
                    class="fas fa-map-marker-alt text-warning mx-2"></i><span class="fw-normal">Current
                    Location </span><span>Ranchi</span></p>
        </div> 
        <div class="mx-auto pt-5 pt-lg-0 d-block d-lg-none d-xl-block">
            <p class="mb-0 fw-bold text-lg-center">Contact Us: <i
                    class="fas fa-map-marker-alt text-warning mx-2"></i><span class="fw-normal">+91 9128117800</span></p>
        </div> 
        
        {{-- <div class="d-flex mt-4 mt-lg-0 ms-lg-auto ms-xl-0">
            <div class="input-group-icon pe-2"><i class="fas fa-search input-box-icon text-primary"></i>
                <input class="form-control border-0 input-box bg-100" type="search"
                    placeholder="Search Food" aria-label="Search" />
            </div> --}}
            {{-- @guest
                <a class="btn btn-primary shadow-warning text-white" href="{{ url('/login') }}"> <i
                        class="fas fa-user me-2"></i>Sign In</a>
            @else
                <a class="btn btn-white shadow-warning text-warning"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i
                        class="fas fa-user me-2"></i>Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            @endguest --}}
            
        </div>
    </div>
</div>
</nav>