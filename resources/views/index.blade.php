<?php
use App\Models\Dice;

?>


<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script>
        $(function() {
            function ajax() {
                setTimeout(function() {ajax()},3000);
                $.ajax({
                    url: '../dices/ajax',
                    dataType: 'html',
                    success: function(data) {
                        $('#text').html(data);
                    },
                    error: function(data) {
                    }
                });
            }
            ajax();
        });
    </script>

</head>
<body>
<h1>ダイヤル画面</h1>
<p>

</p>
<div id="text"></div>

</body>
</html>

