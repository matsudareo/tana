<body>


  <div class ="korona"><a>新型コロナウイルスに対する取り組みの最新情報をご案内</a> </div>
  <header>
   
   <h1 class="daimei">あなたの<br>好きな空間を作る。</h1>
     
   @component('head.head')
   @endcomponent
 </header>
  <main>
   
  
    <div class="access" id="fast">
      <div class="jikanbox">
        <div class="box">
          <div class="photo">
            <div class="gazou">
              <img src ="{{asset('img/cafe1.jpg') }}" alt="東京 カフェ">
            </div>
            <div class="jikan">
              <a class="area">東京</a>
              <a class="norimono">車で15分</a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="photo">
            <div class="gazou">
              <img src ="img/cafe2.jpg">
            </div>
            <div class="jikan">
              <a class="area">神奈川</a>
              <a class="norimono">車で30分</a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="photo">
            <div class="gazou">
              <img src ="img/cafe3.jpg">
            </div>
            <div class="jikan">
              <a class="area">愛知</a>
              <a class="norimono">車で1時間</a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="photo">
            <div class="gazou">
              <img src ="img/cafe4.jpg">
            </div>
            <div class="jikan">
              <a class="area">京都</a>
              <a class="norimono">車で40分</a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="photo">
            <div class="gazou">
              <img src ="img/cafe5.jpg">
            </div>
            <div class="jikan">
              <a class="area">岡山</a>
              <a class="norimono">車で1.5時間</a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="photo">
            <div class="gazou">
              <img src ="img/cafe6.jpg">
            </div>
            <div class="jikan">
              <a class="area">鹿児島</a>
              <a class="norimono">車で50分</a>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="photo">
            <div class="gazou">
              <img src ="img/cafe7.jpg">
            </div>
            <div class="jikan">
              <a class="area">沖縄</a>
              <a class="norimono">車で2時間</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="roke">
      <div class="hukudai">
        <h2>好きなロケーションを選ぼう</h2>
      </div>
     
      <div class="matomebox">
      <div class="rokebox">
         <div class="rokesyasin">
          <img src ="img/intro1.jpg">
         </div>
         <div class="keitou">クラッシック
         </div>
      </div>

      <div class="rokebox">
        <div class="rokesyasin">
         <img src ="img/intro2.jpg">
        </div>
        <div class="keitou">バー
        </div>
     </div>

     <div class="rokebox">
      <div class="rokesyasin">
       <img src ="img/intro3.jpg">
      </div>
      <div class="keitou">キャンプ
      </div>
   </div>

   <div class="rokebox">
      <div class="rokesyasin">
      <img src ="img/intro4.jpg">
      </div>
      <div class="keitou">リゾート
      </div>
    </div>

      </div>

    </div>


    <div class="pagetop"><a href="#">Juno To Top</a></div>

<div class="goto">
  <div class="gotoeat">
    <h2>Go To Eats</h2>
    <p>キャンペーンを利用して、全国で食事しよう。<br>いつもと違う景色に囲まれてカラダもココロもリフレッシュ。</p>
  </div>
    <div class="gotophoto">
      <img src ="img/goto.jpg">
    </div>
  
</div>


<div class="cafedukuri" id="experience">
 <h2>カフェ作りを体験しよう</h2>
 <p>お店のエキスパートが案内するユニークな体験(直接対面型またはオンライン)。</p>

  <div class="ryouri">
    <div class="ryouribox">
      <img src="img/exp1.jpg">
      <div class="text">ジョブ体験</div>
      <p>カフェカウンターを体験しよう。</p>
    </div>
  
    <div class="ryouribox">
      <img src="img/exp2.jpg">
      <div class="text">レシピ体験</div>
      <p>美味しいレシピを考えてみよう。</p>
    </div>
  
    <div class="ryouribox">
      <img src="img/exp3.jpg">
      <div class="text">プロモーション体験</div>
      <p>お店の宣伝を手伝ってみよう。</p>
    </div>
  </div>

</div>

<div class="host">
  <h2>全国のホストに仲間入りしよう</h2>
  
  <div class="nakama">
    <div class="nakamabox">
      <img src ="img/host1.jpg">
      <div class="text2">ビジネス</div>
    </div>

    <div class="nakamabox">
      <img src ="img/host2.jpg">
      <div class="text2">コミュニティ</div>
    </div>

    <div class="nakamabox">
      <img src ="img/host3.jpg">
      <div class="text2">食べ歩き</div>
    </div>
  </div>

</div>

  </main>


  
</body>
@component('layouts.footer')
 @endcomponent