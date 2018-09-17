function ajaxUpdate(url, element) {

    // urlを加工し、キャッシュされないurlにする。
    //url = url + '?ver=' + new Date().getTime();

    // ajaxオブジェクト生成
    var ajax = new XMLHttpRequest;

    // ajax通信open
    ajax.open('GET', url, true);

    // ajax返信時の処理
    ajax.onload = function () {

        // ajax返信から得たHTMLでDOM要素を更新
        element.innerHTML = ajax.responseText;
    };

    // ajax開始
    ajax.send(null);
}

window.addEventListener('load', function () {

    //var url = "dices?dice_id=a3&angle=3";

    var div = document.getElementById('ajaxreload');

    setTimeout(function () {
        ajaxUpdate(url, div);
    }, 5000);

});