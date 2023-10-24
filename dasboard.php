<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="styleDasboards.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body>
    <nav class="navbar">
      <div class="left">
        <h1>home</h1>
      </div>
      
      <div class="right">
        <input type="checkbox" id="check" />
        <label for="check" class="checkBtn">
          <i class="fa fa-bars"></i>
        </label>
        
        <ul class="list">
          <li><a href="#">Pembelian Obat kecantikan</a></li>
          <li><a href="#">Pembayaran</a></li>
        </ul>
      </div>
    </nav>
    
    <div class="calendar">
      <iframe 
        src="kalender.php"
        style="border: 0" width="700" height="500" frameborder="0" scrolling="no">
      </iframe>
      <img src="klinik.png" alt="" />
    </div>
    
 
  </body>
</html>