@include('common.head')
@include('common.function')
<?php
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : NULL;
//外部から直接アクセスがあった場合リダイレクト
if (!(strpos($referer, 'confirm.php') !== false || strpos($referer, 'complete.php') !== false)) {
    header("Location: contact.php");
    exit;
}
 //var_dump($stmt);
 if(isset($submit) && $submit == "送信") {
  // セッションの削除
  unset($_SESSION['name']);
  unset($_SESSION['kana']);
  unset($_SESSION['tel']);
  unset($_SESSION['email']);
  unset($_SESSION['message']);
  
  unset($_SESSION['name_er']);
  unset($_SESSION['kana_er']);
  unset($_SESSION['tel_er']);
  unset($_SESSION['email_er']);
  unset($_SESSION['message_er']);
  
  unset($_SESSION['info']);
  unset($_SESSION['id']);
  unset($_SESSION['edit']);
  unset($_SESSION['delete']);
  
  $_SESSION = array();
  session_destroy();
  header("Location: complete.php");
  exit;
}

//var_dump($_SESSION);
 ?>
<body>
@include('layouts.header')

  <section class="dai">
    <div class="otoiawase">
    <h2>お問い合わせ</h2>
    </div>
    <div class="toi_text">
    <p>お問い合わせ頂きありがとうございます。<br>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。<br>なお、ご連絡までに、お時間頂く場合もございますので予めご了承ください。</p>
    </div>
  

  <div class="modorubotan"><p><a href="index.php">トップへ戻る</a></p>
  </div>

  </section>

  @include('layouts.footer')
</body>