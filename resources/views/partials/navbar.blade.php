<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
        <a class="navbar-brand" href="/"><i class="bi bi-app"></i> ECM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
            </div>
            <div class="navbar-nav">
                <a href="/product" class="nav-link">Product</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }}"><i
                        class="bi bi-box-arrow-right"></i> Login</a>
            </div>
        </div>
    </div>
</nav>
