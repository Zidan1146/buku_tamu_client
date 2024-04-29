<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>OPEN HOUSE 2024!</title>
        <link rel="stylesheet" href="{{ asset('select2\dist\css\select2.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('style.css') }}"/>
    </head>
    <body>
      <a href="https://www.flaticon.com/free-icons/wand" title="wand icons" id="credit">Wand icons created by Freepik - Flaticon</a>
        <div class="form">
          <h1>OPEN HOUSE</h1>
          <h2>REKAYASA PERANGKAT LUNAK</h2>
          <ul class="tab-group">
            <li class="tab active"><a href="#sendiri">Sendiri</a></li>
            <li class="tab"><a href="#rombongan">Rombongan</a></li>
          </ul>
            
          <div class="tab-content">
            <div id="sendiri"> 
              
              <form action="{{ url('login') }}" method="post">
              @csrf
    
              <div class="field-wrap">
                <label>
                  Alamat/Instansi
                </label>
                <input type="text" name="instansi"required autocomplete="off"/>
              </div>
              
              <div class="field-wrap">
                <label>
                  Nama
                </label>
                <input type="text" name="nama[0]"required autocomplete="off"/>
              </div>
              
              <button type="submit" id="submit" class="button button-block">Masuk</button>
              
              </form>
    
            </div>
              
            <div id="rombongan">
              <form action="{{ route('login') }}" method="post">
              @csrf
                
                <div class="field-wrap">
                  <label>
                    Alamat/Instansi
                  </label>
                  <input type="text" name="instansi"required autocomplete="off"/>
                </div>
                
                <div class="add-row">
                  <div class="field-wrap" id="selecting">
                      <!-- <label class="active highlight">
                        Jumlah Orang
                      </label> -->
                    <select class="select2" id="jumlah" name="jumlah" label="Jumlah Orang" required>
                      <option value="1" id="1">1</option>
                      <option value="2" id="2"selected>2</option>
                      <option value="3" id="3">3</option>
                      <option value="4" id="4">4</option>
                      <option value="5" id="5">5</option>
                      <option value="6" id="6">6</option>
                      <option value="7" id="7">7</option>
                      <option value="8" id="8">8</option>
                      <option value="9" id="9">9</option>
                      <option value="10" id="10">10</option>
                    </select>
                  </div>

                  <div id="field-list">
                    <div class="field-wrap">
                      <label>
                        Nama 1
                      </label>
                      <input type="text" name="nama[0]" required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                      <label>
                        Nama 2
                      </label>
                      <input type="text" name="nama[1]" required autocomplete="off"/>
                    </div>
                  </div>
                </div>
                
                <button type="submit" class="button button-block">Masuk</button>
                
              </form>
      
            </div>
              
          </div><!-- tab-content -->
          
      </div> <!-- /form -->
      @if (session('success'))
        <div class="popover success">
          <div class="content">
            <p style="font-size: 2em;">Success!</p>
          </div>
        </div>
      @endif
      <div id="wand">
        <img src="{{ asset('magic-wand.png')}}" alt="">
      </div>
      <script src="{{ asset('jquery.js')}}"></script>
      <script src="{{ asset('select2\dist\js\select2.min.js')}}"></script>
      <script src="{{ asset('script.js')}}"></script>
    </body>
</html>