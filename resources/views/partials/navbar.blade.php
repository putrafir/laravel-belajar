<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">Putra</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($active==='home')?'active':'' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active==='about')?'active':'' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active==='posts')?'active':'' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active==='categories')?'active':'' }}" href="/categories">Categories</a>
          </li>
        
         
        </ul>
       
        <form class="d-flex" role="search" action="/blog">

          @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          
          @if (request('author'))
              <input type="hidden" name="author" value="{{ request('author') }}">
          @endif

          <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class=" navbar-nav">
          <li class=" nav-item">
          <a href="/login" class=" nav-link  {{ ($active==='login')?'active':'' }}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
          </li>
                  </ul>
      </div>
    </div>
</nav>