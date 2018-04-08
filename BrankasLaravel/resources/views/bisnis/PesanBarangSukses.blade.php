<!DOCTYPE html>


<html lang="{{ app()->getLocale() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Brankas') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
            * {
              box-sizing: border-box;
            }

            body {
              background-color: #f1f1f1;
            }

            #regForm {
              background-color: #ffffff;
              margin: 100px auto;
              font-family: Raleway;
              padding: 40px;
              width: 70%;
              min-width: 300px;
            }

            h1 {
              text-align: center;
            }

            input {
              padding: 10px;
              width: 100%;
              font-size: 17px;
              font-family: Raleway;
              border: 1px solid #aaaaaa;
            }

            /* Mark input boxes that gets an error on validation: */
            input.invalid {
              background-color: #ffdddd;
            }

            /* Hide all steps by default: */
            .tab {
              display: none;
            }

            button {
              background-color: #4CAF50;
              color: #ffffff;
              border: none;
              padding: 10px 20px;
              font-size: 17px;
              font-family: Raleway;
              cursor: pointer;
            }

            button:hover {
              opacity: 0.8;
            }

            #prevBtn {
              background-color: #bbbbbb;
            }

            /* Make circles that indicate the steps of the form: */
            .step {
              height: 15px;
              width: 15px;
              margin: 0 2px;
              background-color: #bbbbbb;
              border: none;
              border-radius: 50%;
              display: inline-block;
              opacity: 0.5;
            }

            .step.active {
              opacity: 1;
            }

            /* Mark the steps that are finished and valid: */
            .step.finish {
              background-color: #4CAF50;
            }
      </style>

</head>

<body>
  <div id="app">
      <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  <!--{{ config('app.name', 'Brankas') }} -->
                  good flow
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">


                    <a class="nav-link " href={{url('/bussinessman/order/filter') }}>  Order
                    <a class="nav-link" href={{url('/bussinessman/order/pilihgudang') }}>  Cari Gudang
                    <a class="nav-link" href={{url('/bussinessman/inventory/databarang') }}>  Inventory
                    <a class="nav-link" href={{url('/bussinessman/history') }}>  History
                    <a class="nav-link" href={{url('/bussinessman/staistik') }}>  Statistik

                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest

                          <a class="nav-link" href="{{ route('login') }}">Login</a>
                          <a class="nav-link" href="{{ route('register') }}">Register</a>
                      @else
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>
    </div>

  <div class = "tabcontent">
    <div>
        <h1> SUKSES ISI 2!!! </h1>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
