@extends('partials.layout')

@section('content')
<section class=" py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
          <div class="card border border-light-subtle rounded-3 shadow-sm">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <h4 class="fw-normal text-center text-secondary mb-4">Đăng nhập</h4>

              <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="row gy-2 overflow-hidden">
                @error('error')
                <p class="text-danger">{{ $message }}</p>
                @enderror
                  <div class="col-12">
                    <div class=" mb-3">
                      <label for="username" class="form-label">Tên tài khoản</label>
                      <input type="text" class="form-control" name="username" id="username" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class=" mb-3">
                      <label for="password" class="form-label">Mật khẩu</label>
                      <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                </div>
                
                  <div class="col-12">
                    <div class="d-flex gap-2 justify-content-between">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="rememberMe" id="showPassword">
                        <label class="form-check-label text-secondary" for="showPassword" id='labelShowPassword'>
                          Hiện mật khẩu
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid my-3">
                      <button class="btn btn-primary btn-lg" type="submit">Đăng nhập</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection