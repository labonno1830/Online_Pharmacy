<style>
a {
    display: flex;
    align-items: center;
    padding: 8px 10px;
    margin-bottom: 1rem;
    border-radius: 0.5rem;
    color: #ededed;
    text-decoration: none;
    transition: 0.3s;
}
</style> 
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('homepage')}}">
                <span class="icon">
                    <i class="fa-solid fa-2x fa-suitcase-medical"></i>
                </span>
                <strong>epharma</strong>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#footer-dark">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Covid-19 essential</Covid-19></a></li>
                            <li><a class="dropdown-item" href="#">Medical items</a></li>
                            <li><a class="dropdown-item" href="#">Medicine</a></li>

                        </ul>
                    </li>

                </ul>

                <form class="row" role="search" method="GET" action="{{url('/search')}}">
                    <div class="col-md-6">
                        <input class="form-control me-2" type="search" name="search" value="{{Request::get('search')}}"
                            placeholder="Search medicine" aria-label="Search">
                    </div>
                    @if(Auth::user())
                    <div class="dropdown col-md-2">
                        <button class="btn btn-outline-light  bg-light  text-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                        </button>
                       <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('userdashboard')}}"><i
                                        class="fa-solid fa-circle-user"></i> dashboard</a></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i>
                                    logout</a></li>
                        </ul>
                    </div> 
                    @else
                    <div class="col-md-2">
                        <a class="btn btn-outline-light bg-light text-dark" href="{{route('login')}}">login</a>
                    </div>
                    @endif

                    <div class="col-md-2">
                        <a class="btn btn-outline-light  bg-light  text-dark" href="{{route('cart')}}"><i class="fa-solid fa-cart-shopping">{{count(Cart::content())}}</i></a>
                    </div>
                </form>
      
            </div>
        </div>
    </nav>
</header>