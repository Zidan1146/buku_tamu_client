<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>OPEN HOUSE 2024!</title>
        <link rel="stylesheet" href="{{ asset('select2\dist\css\select2.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('sweetalert\sweetalert2.css') }}"/>
    </head>
    <body>
      <a href="https://www.flaticon.com/free-icons/wand" title="wand icons" id="credit">Wand icons created by Freepik - Flaticon</a>
      <div class="form">
        <h1>OPEN HOUSE</h1>
        <h2>REKAYASA PERANGKAT LUNAK</h2>
          
        <div class="tab-content">
          <form action="{{ url('aksi') }}" method="post">
            @csrf
            <div class="field-wrap">
              <label>
                Name
              </label>
              <input type="text" name="name"required autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Pass
              </label>
              <input type="text" name="pass"required autocomplete="off"/>
            </div>
            
            <button type="submit" id="submit" class="button button-block">Masuk</button>
            
          </form>
    
        </div>
      </div>
      <div id="wand">
        <img src="{{ asset('magic-wand.png')}}" alt="">
      </div>
      <script src="{{ asset('jquery.js')}}"></script>
      <script src="{{ asset('select2\dist\js\select2.min.js')}}"></script>
      <script src="{{ asset('sweetalert\sweetalert2.js')}}"></script>
      <script src="{{ asset('script.js')}}"></script>
    </body>
</html>