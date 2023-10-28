<nav class="navbar navbar-expand-lg bg-success bg-gradient navbar-dark" >
  <div class="container">
    <a class="navbar-brand" href="/posts">Tamaya</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ ($active === "posts") ? "active" : "" }}" href="/posts">Posts</a>


      </div>
      <ul class="navbar-nav ms-auto ">
      @auth
        <li class="nav-item dropdown ms-auto">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/posts">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item" > <i class="bi bi-box-arrow-right"></i>
                  Logout</button>
              </form>
            </li>
      </ul>
      </li>

      @else
      <div class="navbar-nav ms-auto">
        <a class="nav-link {{ ($active === "login") ? "active" : "" }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
      </div>
      @endauth
    </ul>
    </div>
  </div>
</nav>
