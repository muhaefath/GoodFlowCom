@if(Auth::guard('web')->check())
  <p class = "text-succsess">
    you are login as User
  </p>
  @else
  <p class = "text-danger">
    you are logout as user
  </p>

@endif

@if(Auth::guard('admin')->check())
  <p class = "text-succsess">
    you are login as admin
  </p>
  @else
  <p class = "text-danger">
    you are logout as admin
  </p>

@endif

@if(Auth::guard('warehouseman')->check())
  <p class = "text-succsess">
    you are login as warehouseman
  </p>
  @else
  <p class = "text-danger">
    you are logout as warehouseman
  </p>

@endif
