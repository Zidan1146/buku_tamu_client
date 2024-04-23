<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>OPEN HOUSE 2024!</title>
        <link rel="stylesheet" href="{{ asset('style.css') }}"/>
    </head>
    <body>
        <div class="form">
      
            <ul class="tab-group">
              <li class="tab active"><a href="#sendiri">Sendiri</a></li>
              <li class="tab"><a href="#rombongan">Rombongan</a></li>
            </ul>
            
            <div class="tab-content">
              <div id="sendiri">   
                <h1>Silahkan Isi Terlebih Dahulu</h1>
                
                <form action="{{ url('login') }}" method="post">
                
      
                <div class="field-wrap">
                  <label>
                    Asal Instansi
                  </label>
                  <input type="text" name="instansi"required/>
                </div>
                
                <div class="field-wrap">
                  <label>
                    Nama
                  </label>
                  <input type="text" name="nama"required autocomplete="off"/>
                </div>
                
                <button type="submit" class="button button-block">Masuk</button>
                
                </form>
      
              </div>
              
              <div id="rombongan">   
                <h1>Silahkan Isi Oleh Seorang</h1>
                
                <form action="/" method="post">
                
                  
                <div class="field-wrap">
                  <label>
                    Asal Instansi
                  </label>
                  <input type="text" name="instansi"required/>
                </div>
                
                <div class="add-row">
                  <div class="field-wrap">
                      <label>
                        Jumlah Orang
                      </label>
                    <select name="jumlah" required>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div>

                  <div class="field-list">
                    <div class="field-wrap">
                      <label>
                        Nama
                      </label>
                      <input type="text" name="nama" required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                      <label>
                        Nama
                      </label>
                      <input type="text" name="nama2" required autocomplete="off"/>
                    </div>
                  </div>
                </div>
                
                <button type="submit" class="button button-block">Masuk</button>
                
                </form>
      
              </div>
              
            </div><!-- tab-content -->
            
      </div> <!-- /form -->
      <script src="{{ asset('jquery.js')}}"></script>
      <script src="{{ asset('script.js')}}"></script>
    </body>
</html>