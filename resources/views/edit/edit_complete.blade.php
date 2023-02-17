@include('common.head')
@include('common.function')
<?php
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : NULL;
//外部から直接アクセスがあった場合リダイレクト
if (!(strpos($referer, 'edit_confirm.php') !== false || strpos($referer, 'edit_complete.php') !== false)) {
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
  header("Location: edit_complete.php");
  exit;
}

 ?>
 <body>
@include('layouts.header')
 <section class="dai">
    <div class="otoiawase">
    <h2>編集完了</h2>
    </div>     
  <p class="hen">
      変更が完了いたしました。
  </p> 
  <a href="index.php" class="topp">トップへ戻る</a>
  </section>

  @include('layouts.footer')
</body>