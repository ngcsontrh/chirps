@include('partials.head')
@include('partials.navbar')
        
    <div class="container">
        @yield('content')
        @if(session()->has('success'))
        <div class="toast-container position-fixed bottom-0 end-0">
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <strong class="me-auto">Thành công</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                  {{session('success')}}
                </div>
            </div>
        </div>
        @endif
    </div>

@include('partials.footer')