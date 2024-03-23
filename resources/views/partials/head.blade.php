<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Chirps</title>
</head>
<body>
    @if(session()->has('success'))
    <div class="toast-container position-absolute top-0 end-0">
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
    
    <script>
        window.onload = (event) => {
            let myAlert = document.querySelectorAll('.toast')[0];
            if (myAlert) {
                let bsAlert = new bootstrap.Toast(myAlert);
                bsAlert.show();
            }
        };
    </script>