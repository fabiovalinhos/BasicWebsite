<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Acme</title>

    <link rel="stylesheet" href="/css/app.css" type='text/css'>
</head>

<body>

    @include('inc.navbar')
    
    <div class="container">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif

        <div class="row">
            <div class="col-md-8 col-lg-8">
                @include('inc.messages')
                @yield('content')
            </div>
            
            <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>

    <footer id="footer" class="footer mt-auto py-3 text-center text-muted">
        <div class="container">
            Copyright <?php echo date("Y"); ?> &copy; Acme
        </div>
    </footer>
    



</body>
</html>