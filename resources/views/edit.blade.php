<?php

?>
        <!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1>編集画面</h1>
<p>

</p>

<form class="edit_form" action="../dices" method="post">
    <input type="text" name="dice_name" value= <?php echo $dice ->dice_name; ?> >
    <input type="hidden" name="dice_id" value= <?php echo $dice ->dice_id; ?> >
    <input type="hidden" name="angle" value= <?php echo $dice ->angle; ?> >
    <input type="submit" value = "編集">
</form>
<form class="delete_form" action="../dices" method="post">
    <input type="hidden" name="id" value= <?php echo $dice ->id; ?> >
    <input type="hidden" name="delete_flag" value= 1 >
    <input type="submit" value = "削除">
</form>

</body>
</html>


