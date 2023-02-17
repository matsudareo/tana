<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/style.css') }}">
  <link rel="stylesheet" href="{{asset('css/sp.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="./js/main.js"></script>
  <script src="./js/sign.js"></script>
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inview/1.0.0/jquery.inview.min.js"></script>
 
  <title>サインイン</title>
</head>
<body>

<div class ="wrap">
<style>.wrap {
   background-color: black;
}
  </style>
     <div class ="logo">
      <a href="./index.php.">
     <img src="img/logo.png">
      </a>
     </div>
     
     <nav class="nav1">
       <ul class="list">

         <li class="link"><a class="hajimetobi" href="index.php#fast">はじめに</a></li>
         <li class="link"><a class="taikentobi" href="index.php#experience">体験</a></li>
         <li class="link" ><a href="./contact.php">お問い合わせ</a></li>
       </ul>
     </nav>
 
      <div class="listmatome">
       <div class="sain">サインイン</div>
       <div class="sainmark">
         <img src="img/menu.png">
       </div>
      

      <div class="kakusi">
       <div class="sp_sain"><p>サインイン</p></div>
       <div class="sp_link"><a class="hajimetobi" href="index.php#fast">はじめに</a></div>
       <div class="sp_link"><a class="taikentobi" href="index.php#experience">体験</a></div>
       <div class="sp_link"><a href="./contact.php">お問い合わせ</a></div>
      </div>
     
      </div>
   </div>

   <div class="all-round"></div>
  <div class="signinpage">
    <div class="signinr">

      <div class="sign-tittle">
        <h2>ログイン</h2>
      </div>

      <form class="input" method="post" action="">
      <div class="mail">  
      <input type="text" name="mailadress" id="mailadress" placeholder="メールアドレス"></div>
      <div class="pas">
        <input type="text" name="pass" id="pass" placeholder="パスワード"></div>
        <div class="sent">
          <button type="submit">送 信</button>
        </div>
      </form>

      <div class="ikon">
        <div class="ikong">
        <button><img src="img/twitter.png"></button></div>
        <div class="ikong">
        <button><img src="img/fb.png"></button></div>
        <div class="ikong">
        <button><img src="img/google.png"></button></div>
        <div class="ikong">
        <button><img src="img/apple.png"></button></div>
      </div>

    </div>
  </div>
</body>
</html>