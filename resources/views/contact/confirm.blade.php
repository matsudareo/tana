@include('common.head')
@include('common.function')
<?php
 
if(!isset($_SESSION))
  session_start(); 
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : NULL;
$referer_check = (strpos($referer, 'contact.php') !== false || strpos($referer, 'confirm.php') !== false);
$access_check = ( isset($_SESSION['access']) && $_SESSION['access'] == 'from_contact' );
if (!($referer_check) || !($access_check)) {
    header("Location: contact.php");
    exit;
}

// 二重送信防止、送信ボタンが押されたときのみ実行
if(isset($submit) && $submit == "送信") {
  if(!isset($_SESSION)) session_start();
  // 変数へ代入
  $name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
  $kana = isset($_SESSION['kana']) ? $_SESSION['kana'] : '';
  $tel = isset($_SESSION['tel']) ? $_SESSION['tel'] : '';
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
  $message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
  
  // 値のやり取り
  $name = e($name);
  $kana = e($kana);
  $tel = e($tel);
  $email = e($email);
  $message = e($message);
  
  // id
  $id = isset($_SESSION['id']) ? $_SESSION['id'] : '';
    header("Location: confirm.php");
    exit;
}

//var_dump($_SESSION);
 
  ?>
<body>
@include('layouts.header')

<section class="kakunin">
  <div class="kaku">
    <div class="otoiawase">
    <h2>お問い合わせ</h2>
    </div>

  
     <p class = 'setu'>下記の内容をご確認の上送信ボタンを押してください。<br>内容を訂正する場合は戻るボタンを押してください。</p>
     <dl class="naiyou">
     <form method="post" action="confirm.php">
      <dt>氏名</dt>
      <dd><?php if(isset ($_SESSION["name"])){echo $_SESSION["name"];} ?></dd>
      <dt>フリガナ</dt>
      <dd><?php if(isset ($_SESSION["kana"])){echo $_SESSION["kana"];} ?></dd>
      <dt>電話番号</dt>
      <dd><?php if(isset ($_SESSION["name"])){echo $_SESSION["tel"];} ?></dd>
      <dt>メールアドレス</dt>
      <dd><?php if(isset ($_SESSION["name"])){echo $_SESSION["email"];} ?></dd>
      <dt>お問い合わせ内容</dt>
      <dd><?php if(isset ($_SESSION["name"])){echo nl2br($_SESSION["message"]);} ?>
      </dd>

    
      
      
      
      <!-- <form action="complete.php" method="post"> -->
      @csrf
        <!-- <button type="submit" value="送信"
          class="sousin">送信</button> -->
        <!-- </form> -->
        <!-- <a href="contact.php"class="modoru" formaction= "contact.php">戻る</a> -->
        <!-- </form>
        <form method="get" action=""> -->
        <!-- <a href="contact.php?action=edit" class="modoru">戻る</a> -->
        </form>
        <dd class="kakuninbotan">
        <form action="complete.php" method="post">
                        {{ csrf_field() }}
                        <input type="submit" name="submit" value="送信" class="sousin">
                    </form>
        <form action="contact.php" method="post">
                        {{ csrf_field() }}
                        <input type="submit" name="submit" value="戻る" class="modoru">
                    </form>
        
        </dd>
     </dl>
    
  </div>

</section>

@include('layouts.footer')
</body>