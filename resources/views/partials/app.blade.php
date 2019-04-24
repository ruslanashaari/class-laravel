<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @include('partials.script')

  @include('partials.style')

</head>
<body>

<div class="container-fluid margin-left-160">
  <div class="row content">

    <div class="col-sm-9">
      @include('partials.sidebar')
    </div>

    <br>
    @yield('content')

  </div>
</div>

@include('partials.footer')

</body>
</html>
