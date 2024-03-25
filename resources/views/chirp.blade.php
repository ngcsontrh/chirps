@extends('partials.layout')

@section('content')

<form method="POST"class="col-md-3" action="{{route('chirps.update', $chirp)}}">
    @csrf
    @method('patch')
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Sửa chirps</h5>
        <div class="d-flex justify-content-between align-items-center">
            <label class="card-subtitle mb-2 form-label">Message:</label>
            <input type="text" name="message" class="form-control"
            value="{{$chirp->message}} ">
        </div>
        
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
      </div>
    </div>
</form>

@endsection