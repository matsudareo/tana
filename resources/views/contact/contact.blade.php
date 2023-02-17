@include('common.head')
@include('common.function')
<?php 
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : NULL;
// 外部からアクセスがあった場合セッションの初期化
if (!(isset($submit) && $submit == "戻る") && !strpos($referer, 'contact.php') !== false) {
  if(!isset($_SESSION)) session_start(); 
// require_once(ROOT_PATH.'resources/views/layouts/session_delete.blade.php');
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
}

if(!isset($_SESSION)){ 
  session_start(); 
  session_regenerate_id(TRUE);
}
//var_dump($_SESSION);

 if (isset($submit) && $submit == "送信"){
  $submit = NULL;
  // 変数へ代入
  $name       = isset($name) ? $name : '';
  $kana       = isset($kana) ? $kana : '';
  $tel        = isset($tel) ? $tel : '';
  $email      = isset($email) ? $email : '';
  $message    = isset($message) ? $message : '';
  $name = e($name);
    $kana = e($kana);
    $tel = e($tel);
    $email = e($email);
    $message = e($message);
//   $errors = [];
$error = 0;
$name_er = NULL;
$kana_er = NULL;
$tel_er = NULL;
$email_er = NULL;
$message_er = NULL;
if ($name == '') {
  $name_er = '氏名は必須入力です。';
  $_SESSION['name_er'] = $name_er;
  $error++;
  unset($_SESSION['name']);
} else if (mb_strlen($name) > 10) {
  $name_er = '氏名は10文字以内でご入力ください。';
  $_SESSION['name_er'] = $name_er;
  $error++;
  unset($_SESSION['name']);
} else {
  $_SESSION['name'] = $name;
  unset($_SESSION['name_er']);
}
// フリガナ
if ($kana == '') {
  $kana_er = 'フリガナは必須入力です。';
  $_SESSION['kana_er'] = $kana_er;
  $error++;
  unset($_SESSION['kana']);
} elseif (mb_strlen($kana) > 10) {
  $kana_er = 'フリガナは10文字以内でご入力ください。';
  $_SESSION['kana_er'] = $kana_er;
  $error++;
  unset($_SESSION['kana']);
} else {
  $_SESSION['kana'] = $kana;
  unset($_SESSION['kana_er']);
}
// 電話番号（数値エラー）
if (preg_match("/[^0-9]/", $tel)) {
  $tel_er = '<span class="required">電話番号は0-9の数字のみでご入力ください。</span>';
  $_SESSION['tel_er'] = $tel_er;
  $error++;
  unset($_SESSION['tel']);
} else {
  $_SESSION['tel'] = $tel;
  unset($_SESSION['tel_er']);
}
// email
if ($email == '') {
  $email_er= '<span class="required">メールアドレスは必須入力です。</span>';
  $_SESSION['email_er'] = $email_er;
  $error++;
  unset($_SESSION['email']);
} elseif (!preg_match('/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $email)) {
  $email_er= '<span class="required">メールアドレスは正しくご入力ください。</span>';
  $_SESSION['email_er'] = $email_er;
  $error++;
  unset($_SESSION['email']);
} else {
  $_SESSION['email'] = $email;
  unset($_SESSION['email_er']);
}
// message（未入力エラー）
if ($message == '') {
  $message_er = '<span class="required">お問合わせ内容は必須入力です。</span>';
  $_SESSION['message_er'] = $message_er;
  $error++;
  unset($_SESSION['message']);
} else {
  $_SESSION['message'] = $message;
  unset($_SESSION['message_er']);
}


if ($error == 0) {
  $_SESSION['access'] = 'from_contact';
  header("Location: confirm.php");
  exit;
}

header("Location: contact.php");
exit;
}

// 削除ボタンが押されたとき
if (isset($submit) && $submit == "削除") {
  header("Location: delete.php");
  exit;
}

if (isset($submit) && $submit == "編集") {
  $_SESSION['id']     = $id;
  $_SESSION['edit']   = $submit;
  header("Location: edit.php");
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

    <div class="toiform">
    <form method="post" action="contact.php" >
      @csrf
      <div class="formtitle">
        <h3>下記の項目をご記入の上送信ボタンを押してください</h3>
      </div>
      <div class="text-form">
        <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。<br>なお、ご連絡までに、お時間頂く場合もございますので予めご了承ください。<br>
      <span class="kome" >*</span>は必須項目となります。</p>
      </div>

      <dl>
      <div class="formbox">
        <dt>
        <label>氏名<span class="kome" >*</span></label>
        <br>
        <span>
        <?php if (isset($_SESSION['name_er'])) { echo '<p class="error">'.$_SESSION['name_er'].'</p>'; } ?>
        </span>
        </dt>
        <dd>
         <input type="text" name="name" placeholder="山田太郎" id="name" value="<?php if(isset ($_SESSION["name"])){echo $_SESSION["name"];} ?>"  required>
        </dd>
      </div>

      <div class="formbox">
        <dt>
        <label>フリガナ<span class="kome" >*</span></label><br>
        <span>
        <?php if (isset($_SESSION['kana_er'])) { echo '<p class="error">'.$_SESSION['kana_er'].'</p>'; } ?>
        </span>
        </dt>
        <dd>
        <input type="text" name="kana" id ="kana" placeholder="ヤマダタロウ" value="<?php if(isset($_SESSION["kana"])){echo $_SESSION["kana"];} ?>" required>
        </dd>
      </div>

      <div class="formbox">
      <dt>  
      <label>電話番号</label><br>
      <span>
      <?php if (isset($_SESSION['tel_er'])) { echo '<p class="error">'.$_SESSION['tel_er'].'</p>'; } ?>
      </span>
      </dt>
      <dd>
        <input type="text" name="tel" id ="tel" placeholder="00012345678" value="<?php if(isset($_SESSION["tel"])){echo $_SESSION["tel"];} ?>" >
      </dd>
      </div>

      <div class="formbox">
        <dt>
        <label>メールアドレス<span class="kome" >*</span></label><br>
        <span>
        <?php if (isset($_SESSION['email_er'])) { echo '<p class="error">'.$_SESSION['email_er'].'</p>'; } ?>
        </span>
        </dt>
        <dd>
        <input type="email" name="email" id ="email"    
        placeholder="test@test.co.jp" value="<?php if(isset($_SESSION["email"])){echo $_SESSION["email"];} ?>" required>
        </dd>
      </div>
     
      <div class="formtitle">
        <h3>お問い合わせ内容をご記入ください<span class="kome" >*</span></h3>
        <span>
        <?php if (isset($_SESSION['message_er'])) { echo '<p class="error">'.$_SESSION['message_er'].'</p>'; } ?>
        </span>
            <div class="nai">
           <textarea  type="text"
            name="message" id="message" prequired cols="30" rows="10"><?php if(isset($_SESSION["message"])){echo $_SESSION["message"];} ?></textarea>
            </div> 
      </div>

      </dl>

      <div class="sousin">
        <button type="submit" name="submit" id="send" value="送信">送信</button>
      </div>

    </div>
    

  
    
    <div class="datehyou">
            <table>
              <tr>
              <th class="koumoku">ID</th>
                    <th class="koumoku">名前</th>
                    <th class="koumoku">カナ</th>
                    <th class="koumoku">電話番号</th>
                    <th class="koumoku">メール</th>
                    <th class="koumoku">内容</th>
                    <th class="koumoku">編集</th>
                    <th class="koumoku">削除</th>
               </tr>
               <?php foreach ($contacts as $mark); ?>
        <?php if(!isset($mark['id'])) echo ' style="display:none;"'; ?>

               <?=data_list($contacts)?>
                </table>
            </div>
            </form> 
           
  </section>
</body>
@include('layouts.footer')