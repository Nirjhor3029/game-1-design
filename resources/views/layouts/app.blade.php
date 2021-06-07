<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upscale</title>

    {{-- Bootsrap - 4 --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- Bootsrap - 4 --}}
    {{-- For input field --}}
    <script src="{{ 'assets/js/' }}/handleCounter.js"></script>

    <link rel="stylesheet" href="{{ 'assets/css' }}/custom.css">
    <link rel="stylesheet" href="{{ 'assets/css' }}/handle-counter.css">
</head>

<body>
    <header class="header">
        <a href="#" class="logo">
            <img src="{{ 'assets/images/icons/' }}/logo.svg" alt="">
        </a>

        <nav>
            <ul class="nav__links">
                <li><a href="{{ route('overview') }}">Overview</a></li>
                <li><a href="{{ route('recruitment') }}">Recruitment</a></li>
                <li><a href="{{ route('budgeting') }}">Budgeting</a></li>
                <li><a href="{{ route('revenue') }}">Revenue</a></li>
                <li><a href="{{ route('financial-statement') }}">Financial Statements</a></li>
                <li><a href="{{ route('decision-driven') }}">Dicision Driven</a></li>
                <li><a href="{{ route('overview') }}">Course Points</a></li>
            </ul>
        </nav>

        <a class="profile" href="#">
            <img src="{{ 'assets/images/icons/' }}/User.svg" alt="user">
        </a>
    </header>
    {{-- <li><a href="#">Overview</a></li> --}}

    <main>
        <div class="main-content">
            @yield('content')
        </div>
    </main>
</body>

</html>
