@extends('partials.layout')

{{-- @section('content')
    <form method="POST" action="/register">
        @csrf
        <div class="mb-3">
          <label for="username" class="form-label">Tài khoản</label>
          <input type="text" class="form-control" id="username" name="username" value="{{old('username')}}">
          @error('username')
          <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Họ tên</label>
          <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
          @error('name')
          <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="password" class="form-label">Mật khẩu</label>
          <input type="password" class="form-control" id="password" name="password">
          @error('password')
          <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Đăng ký</button>
    </form>
@endsection --}}


@section('content')
<section class=" py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
          <div class="card border border-light-subtle rounded-3 shadow-sm">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <h4 class="fw-normal text-center text-secondary mb-4">Đăng ký</h4>

              <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <div class="row gy-2 overflow-hidden">
                  <div class="col-12">
                    <div class=" mb-3">
                      <label for="username" class="form-label">Tên tài khoản</label>
                      <input type="text" class="form-control" name="username" id="username" required>
                      @error('username')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="col-12">
                    <div class=" mb-3">
                      <label for="password" class="form-label">Mật khẩu</label>
                      <input type="password" class="form-control" name="password" id="password" required>
                      @error('password')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class=" mb-3">
                        <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                      </div>
                  </div>
                  <div class="col-12">
                    <div class="d-flex gap-2 justify-content-between">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="showPassword" id="showPassword">
                        <label class="form-check-label text-secondary" for="showPassword" id = 'labelShowPassword'>
                          Hiện mật khẩu
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid my-3">
                      <button class="btn btn-primary btn-lg" type="submit">Đăng ký</button>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const passwordField = document.getElementById('password');
    const confirmPasswordField = document.getElementById('password_confirmation');
    const toggleButton = document.getElementById('showPassword');
    const labelShowPassword = document.getElementById('labelShowPassword');
    toggleButton.addEventListener('click', function() {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            confirmPasswordField.type = 'text';
            labelShowPassword.textContent = 'Ẩn mật khẩu';
        } else {
            passwordField.type = 'password';
            confirmPasswordField.type = 'password';
            labelShowPassword.textContent = 'Hiện mật khẩu';
        }
    });
});
</script>
@endsection

