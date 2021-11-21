<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">

    </head>
    <body>

            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

                <div class="container">
                    <a class="text-white nav-link h3" href="{{ url('/') }}">Merchandise</a>
                </div>

                <div class="container d-flex align-items-center justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('create-merchandise') }}">Create new Merchandise</a>
                          </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('merchandise-list-show') }}">Merchandise List</a>
                      </li>
                    </ul>
                </div>
              </nav>

            <div class="container d-flex align-items-start justify-content-start">
                @yield('content')
            </div>
    </body>
</html>
