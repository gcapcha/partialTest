<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
      <div class="content-wrapper">
          <div>
              @yield('main-content')
          </div>
      </div>
    </div>
    @section('scripts')
      @include('Cuestionary.partials.scripts-cuestionary')
    @show
</body>
</html>