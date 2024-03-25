@extends('partials.layout')

@section('content')
<main>
    <div class="container-fluid">
        <h2 class="my-4">Chirps</h2>
        
        <div class="row">
          @auth
          <form method="POST" action="{{route('chirps.store')}}" class="col-md-3">
            @csrf
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Thêm chirps</h5>
                <div class="d-flex justify-content-between align-items-center">
                    <label class="card-subtitle mb-2 form-label">Message:</label>
                    <input type="text" name="message" class="form-control" style="max-width: 60%;">
                </div>
                
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
              </div>
            </div>
          </form>
          @endauth
          <div class="col-md-9">
            <table class="table text-center">
              <thead>
                <tr>
                  {{-- <th scope="col">ID</th> --}}
                  <th scope="col">User</th>
                  <th scope="col">Message</th>
                  <th scope="col">Created at</th>
                  <th scope="col">Updated at</th>
                  @auth
                  <th scope="col">Thao tác</th>
                  @endauth
                </tr>
              </thead>

              <tbody>
                @foreach ($chirps as $chirp)
                <tr>
                      
                  <td>{{ $chirp->user->userInformation->fullname }}</td>
                  <td>{{ $chirp->message }}</td>
                  <td>{{ $chirp->created_at }}</td>
                  <td>{{ $chirp->updated_at }}</td>
                  @if($chirp->user->is(auth()->user()))
                  <td>
                    <form method="get" action="{{route('chirps.edit', $chirp)}}">
                      <button type="submit" class="btn btn-sm btn-warning">Sửa</button>
                    </form>
                    <form method="post" action="{{route('chirps.destroy', $chirp)}}">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                    </form>
                  </td>
                  @endif
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          
        </div>
    </div>
  </main>
@endsection