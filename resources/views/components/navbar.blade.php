<nav class="navbar navbar-expand-sm navbar-dark bg-transparent container" id="main-navbar-wrapper">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('images/logo-small.svg') }}" alt="{{ config('app.name', 'Nubie') }}'s logo" class="img-fluid">
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#main-navigation-bar" aria-controls="main-navigation-bar"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-navigation-bar">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Works</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Our Team</a>
            </li>
        </ul>
    </div>
</nav>
