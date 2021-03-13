"use strict";

function sliderStart() {
  var slide = document.getElementById('slide_wrapper'); //スライダーのslide_wrapper情報取得

  var slideItem = slide.querySelectorAll('.slide_items'); //スライド要素を配列で取得

  var totalNum = slideItem.length - 1; //スライドの合計枚数取得、配列取得のため-1

  var FadeTime = 2000; //フェードインの時間設定

  var IntarvalTime = 5000; //クロスフェードさせるまでの間隔

  var nowNum = 0; //現在稼働しているスライド番号

  var nowSlide; //現在表示中のスライド

  var NextSlide; //次に表示するスライド

  slideItem[0].classList.add('show', 'zoom'); // スライドの1枚目を表示・フェードイン（まずは、表示させてから動きを付けていきます。）

  setInterval(function () {
    // 反復処理
    if (nowNum < totalNum) {
      //if文で条件分岐。現在表示されている画像が最後の画像でないかをチェック。
      var _nowSlide = slideItem[nowNum]; //現在表示されている画像を変数に格納。

      var _NextSlide = slideItem[++nowNum]; //現在表示されている画像に１を足し、次の画像の変数に格納。

      _nowSlide.classList.remove('show'); //.show_削除でフェードアウト。opacity:1を設定しているCSSを削除する事で画像を削除。


      _NextSlide.classList.add('show', 'zoom'); // と同時に、次の画像をにshowとzoomのCSSを設定することで、表示とズームアップ開始。


      setTimeout(function () {
        _nowSlide.classList.remove('zoom'); //2秒後に.zoomをズームアップを停止。

      }, FadeTime); //フェードアウトする秒数設定。
    } else {
      //elseで条件分岐。上記のnowNum < totalNum、つまり最後の画像になった場合の処理を以下に記述。
      var _nowSlide2 = slideItem[nowNum]; //現在表示されている最後の画像を格納

      var _NextSlide2 = slideItem[nowNum = 0]; //次の画像に0、つまり一番最初の画像を格納。
      //以下はif文がtrueの時と同じ処理。

      _nowSlide2.classList.remove('show'); // と同時に、次のスライドがズームしながらフェードインする


      _NextSlide2.classList.add('show', 'zoom'); //フェードアウト完了後、.zoom_削除


      setTimeout(function () {
        _nowSlide2.classList.remove('zoom');
      }, FadeTime);
    }

    ;
  }, IntarvalTime);
}

window.onload = sliderStart;