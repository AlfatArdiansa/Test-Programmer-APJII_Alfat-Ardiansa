<nav class="navbar navbar-expand-lg" style="background-color: rgba(1,17,25,1)">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/" style="color: rgba(0,166,251,1)">IT Fest 2023</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        @auth
        <div class="dropdown">
          <button class="btn fw-bolder dropdown-toggle" style="background-color: rgba(0,166,251,1); color: #ffffff" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}!
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/admin">My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </div>
        @endauth

        @guest
        @if ($pageTitle !== "Login")
        <a href="/login"><button class="btn fw-bolder" style="background-color: rgba(0,166,251,1); color: #ffffff">Login</button></a>
        @else
        <a href="/"><button class="btn fw-bolder" style="background-color: rgba(0,166,251,1); color: #ffffff">Home</button></a>
        @endif   
        @endguest
      </div>
    </div>
  </div>
</nav>