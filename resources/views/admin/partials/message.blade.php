@if (Session::has('success'))
  <div class="alert alert-success" role="alert">
  {{ Session::get('success')}}
  </div>
@endif

@if (Session::has('save'))
  <div class="alert alert-info" role="alert">
  {{ Session::get('save')}}
  </div>
@endif

@if (Session::has('deleted'))
  <div class="alert alert-warning" role="alert">
  {{ Session::get('deleted')}}
  </div>
@endif

@if (Session::has('failed'))
  <div class="alert alert-danger" role="alert">
    <strong>Failed:: </strong> {{ Session::get('failed')}}
  </div>
@endif

@if (count($errors) > 0 )
  <div class="alert alert-danger" role="alert">
    <strong>Failed: </strong>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
