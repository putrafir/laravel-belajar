<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="/">Putra</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}"
                        href="/categories">Categories</a>
                </li>


            </ul>

            <form class="d-flex" role="search" action="/blog">

                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    value="{{ request('search') }}">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <ul class=" navbar-nav">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i
                                        class="bi bi-layout-text-sidebar-reverse"></i>My
                                    Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                                </form>

                            </li>
                        </ul>
                    </li>
                @else
                    <li class=" nav-item">
                        <a href="/login" class=" nav-link  {{ Request::is('login') ? 'active' : '' }}"><i
                                class="bi bi-box-arrow-in-right"></i>Login</a>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
