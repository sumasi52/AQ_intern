function doReloadNoCache() {

    // キャッシュを無視してサーバーからリロード
    window.location.reload(true);

}

window.addEventListener('load', function () {

    // ページ表示完了した5秒後にリロード
    setTimeout(doReloadNoCache, 5000);

});