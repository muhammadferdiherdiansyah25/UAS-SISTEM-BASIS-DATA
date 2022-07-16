<!DOCTYPE html>
<html>
  <head>
    <title>Login - Klinik</title>
    <style>
      body {
        font-family: sans-serif;
        background: #FFD700 ;
        background-image: url("klinik1.jpg");
      }
      h1 {
        text-align: center;
        /*ketebalan font*/
        font-weight: 300;
      }
      .tulisan_login {
        text-align: center;
        /*membuat semua huruf menjadi kapital*/
        text-transform: uppercase;
      }
      .kotak_login {
        width: 350px;
        background: blue;
		background-image: url("803.jpg");
        /*meletakkan form ke tengah*/
        margin: 80px auto;
        padding: 30px 20px;
      }
      label {
        font-size: 11pt;
      }
      .form_login {
        /*membuat lebar form penuh*/
        box-sizing: border-box;
        width: 100%;
        padding: 10px;
        font-size: 11pt;
        margin-bottom: 20px;
      }
      .tombol_login {
        background: #00FFFF;
        color: white;
        font-size: 11pt;
        width: 100%;
        border: none;
        border-radius: 3px;
        padding: 10px 20px;
		
      }
      .link {
        color: #AFEEEE;
        text-decoration: none;
        font-size: 10pt;
      }
    </style>
  </head>
  <body>
    <h1>Login Klinik<br /></h1>
    <div class="kotak_login">
      <p class="tulisan_login">Mangga Tiasa login</p>
      <form method="POST" action="login-proses.php">
        <label>Username</label>
        <input type="text" name="username" class="form_login" placeholder="Username" />
        <label>Password</label>
        <input type="password" name="password" class="form_login" placeholder="Password .." />
        <input type="submit" class="tombol_login" value="LOGIN" style="cursor:pointer;" />
        <br />
      </form>
    </div>
  </body>
</html>