@extends('partials.layout')

@section('content')

<form method="POST" action="{{route('profile.update', $userInformation)}}" class="container">
    @method('patch')
    @csrf
    <h5 class="text-center mt-5">Thông tin tài khoản</h5>
    <div class="row">
        <div class="mb-3 col-8">
          <label class="form-label">Họ tên</label>
          <input type="text" class="form-control" name="fullname" value="{{old('message', $userInformation->fullname)}}">
        </div>
    
        <div class="mb-3 col-4">
            <label class="form-label">Giới tính</label>
            <select name="gender" class="form-control">
                @if(empty($userInformation->gender))
                <option selected>Chọn giới tính</option>
                @endif
                <option value="male">Nam</option>
                <option value="female">Nữ</option>
            </select>
        </div>
    </div>
    
    <div class="mb-3">
        <label class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" name="phone" value="{{old('message', $userInformation->phone)}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Địa chỉ</label>
        <textarea name="address" class="form-control" rows="3">{{old('message', $userInformation->address)}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
  </form>

@endsection