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

        <main class="py-4">

                    <form id="regForm" method ="POST" action ="/bussinessman/order/{{$status}}/sukses">
                              <h1>Data Barang:</h1>
                              <!-- One "tab" for each step in the form: -->


                                <!--
                                <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
                                <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
                              -->

                              <div class="tab">Daftar Barang:
                                  <p><input placeholder="Nama Barang" oninput="this.className = ''" name="NamaBarang"></p>
                                  <p><input placeholder="Deskripsi" oninput="this.className = ''" name="Deskripsi"></p>
                                  <p><input placeholder="quantity" oninput="this.className = ''" name="qty"></p>
                                <!--
                                <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
                                <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
                              -->
                              </div>

                              <div class="tab">
                                  <p id="logined"> sukses </p>
                                  <a href="/login" id="belumlogin">silahkan login terlebih dahulu</a>
                              </div>


                              <div style="overflow:auto;">
                                <div style="float:right;">
                                  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                  <button type="button" id="Reorder" onclick="nextPrev(0)">Tambah</button>
                                </div>
                              </div>
                              <!-- Circles which indicates the steps of the form: -->
                              <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>

                              </div>
                              {{csrf_field()}}
                      </form>

                            <script>
                            var currentTab = 0; // Current tab is set to be the first tab (0)
                            var ceklogin = true;
                            showTab(currentTab); // Display the crurrent tab

                            function showTab(n) {
                              // This function will display the specified tab of the form...
                              var x = document.getElementsByClassName("tab");
                              x[n].style.display = "block";
                              //... and fix the Previous/Next buttons:
                              if (n == 0) {
                                document.getElementById("prevBtn").style.display = "none";

                              } else {
                                document.getElementById("prevBtn").style.display = "inline";

                              }
                              if (n == 1) {
                                document.getElementById("Reorder").style.display = "inline";
                              } else {
                                document.getElementById("Reorder").style.display = "none";
                              }
                              if (n == (x.length - 1)) {
                                document.getElementById("nextBtn").innerHTML = "Submit";
                                document.getElementById("Reorder").style.display = "none";
                                if(!ceklogin)
                                {
                                    document.getElementById("belumlogin").style.display = "none";
                                    document.getElementById("nextBtn").style.display = "none";
                                }else{
                                  document.getElementById("logined").style.display = "none";
                                }
                              } else {
                                document.getElementById("nextBtn").innerHTML = "Next";
                                document.getElementById("nextBtn").style.display = "inline";
                              }


                              //... and run a function that will display the correct step indicator:
                              fixStepIndicator(n)
                            }

                            function nextPrev(n) {
                              // This function will figure out which tab to display
                              var x = document.getElementsByClassName("tab");
                              // Exit the function if any field in the current tab is invalid:
                              if (n == 1 && !validateForm()) return false;
                              // Hide the current tab:
                              x[currentTab].style.display = "none";
                              // Increase or decrease the current tab by 1:
                              currentTab = currentTab + n;
                              // if you have reached the end of the form...
                              if (currentTab >= x.length) {
                                // ... the form gets submitted:
                                document.getElementById("regForm").submit();
                                return false;
                              }
                              // Otherwise, display the correct tab:
                              showTab(currentTab);
                            }

                            function validateForm() {
                              // This function deals with validation of the form fields
                              var x, y, i, valid = true;
                              x = document.getElementsByClassName("tab");
                              y = x[currentTab].getElementsByTagName("input");
                              // A loop that checks every input field in the current tab:
                              for (i = 0; i < y.length; i++) {
                                // If a field is empty...
                                if (y[i].value == "") {
                                  // add an "invalid" class to the field:
                                  y[i].className += " invalid";
                                  // and set the current valid status to false
                                  valid = false;
                                }
                              }
                              // If the valid status is true, mark the step as finished and valid:
                              if (valid) {
                                document.getElementsByClassName("step")[currentTab].className += " finish";
                              }
                              return valid; // return the valid status
                            }

                            function fixStepIndicator(n) {
                              // This function removes the "active" class of all steps...
                              var i, x = document.getElementsByClassName("step");
                              for (i = 0; i < x.length; i++) {
                                x[i].className = x[i].className.replace(" active", "");
                              }
                              //... and adds the "active" class on the current step:
                              x[n].className += " active";
                            }
                            </script>
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
