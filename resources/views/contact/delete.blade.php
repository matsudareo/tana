@include('common.head')
@include('common.function')
<?php
if(!isset($_SESSION)) session_start();
// アクセス制限
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : NULL;
if (!(strpos($referer, 'contact.php') !== false || strpos($referer, 'delete.php') !== false)) {
    header("Location: contact.php");
    exit;
}
?>
    
        @include('layouts.header')
   
    <main class="contact-main">
        <section class="dai">
         <div class="otoiawase">
         <h2>編集完了</h2>
         </div>     
           <p class="hen">
              削除が完了いたしました。
           </p> 
         <a href="contact.php" class="topp">お問い合わせへ戻る</a>
        </section>
    </main>
@include('layouts.footer')