<!DOCTYPE html>

<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">

      <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>

      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="/">Large</a>
      </div>

       <!-- Right Side Of Navbar -->
      <div class="col-4 d-flex justify-content-end align-items-center">
    
            <!-- Authentication Links -->
            @guest
                <div class="col-3 pt-1">
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('login') }}">Login</a>
                </div>
                <div class="col-3 pt-1" >
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Sign up</a>
                </div>
            @else
                
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                    
            @endguest
 
      </div>
    </div>

</header>

