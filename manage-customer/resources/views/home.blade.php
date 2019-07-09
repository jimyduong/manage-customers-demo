<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="css/home.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <a href="{{route('customers.index')}}">
        <button type="submit" class="btn btn-default">Home</button>
    </a>
    <span class="dropdown" >
        <button class="dropbtn btn btn-default">Language</button>
        <div class="dropdown-menu dropdown-content ">
            <a class='dropdown-item' href="{{route('user.change-language', ['en'])}}">English</a>
            <a class='dropdown-item' href="{{route('user.change-language', ['vi'])}}">Vietnam</a>
        </div>
    </span>
    <div class="col-6">
        <form class="navbar-form navbar-right" action="{{route('customers.search')}}">
            @csrf
            <div class="row">
                <div class="col-8">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" name="keyword">
                    </div>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-default">@lang('language.Search')</button>
                </div>
            </div>
        </form>
    </div>
    @yield('content')
</div>
</body>
</html>