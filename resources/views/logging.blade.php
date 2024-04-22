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
                
                <form action="/" method="post">
                
      
                <div class="field-wrap">
                  <label>
                    Asal Instansi<span class="req">*</span>
                  </label>
                  <input type="email"required autocomplete="off"/>
                </div>
                
                <div class="field-wrap">
                  <label>
                    Set A Password<span class="req">*</span>
                  </label>
                  <input type="password"required autocomplete="off"/>
                </div>
                
                <button type="submit" class="button button-block">Get Started</button>
                
                </form>
      
              </div>
              
              <div id="rombongan">   
                <h1>Silahkan Isi Oleh Seorang</h1>
                
                <form action="/" method="post">
                
                  <div class="field-wrap">
                  <label>
                    Email Address<span class="req">*</span>
                  </label>
                  <input type="email"required autocomplete="off"/>
                </div>
                
                <div class="field-wrap">
                  <label>
                    Password<span class="req">*</span>
                  </label>
                  <input type="password"required autocomplete="off"/>
                </div>
                
                <button class="button button-block">Log In</button>
                
                </form>
      
              </div>
              
            </div><!-- tab-content -->
            
      </div> <!-- /form -->
      <script src="{{ asset('jquery.js')}}"></script>
      <script src="{{ asset('script.js')}}"></script>
    </body>
</html>