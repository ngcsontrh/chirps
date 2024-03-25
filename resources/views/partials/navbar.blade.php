<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Chirp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item">
            <a class="nav-link" href="/profile">Thông tin tài khoản</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Đăng xuất</a>
          </li>
          @else
          <div class="dropdown">
            <li class="btn nav-item dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Tài khoản
            </li>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/login">Đăng nhập</a></li>
              <li><a class="dropdown-item" href="/register">Đăng ký</a></li>
            </ul>
          </div>
          @endauth
        </ul>
      </div>
    </div>
</nav>