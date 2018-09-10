<?php
use App\Models\Dice;

?>


<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta http-equiv="Refresh" content="5">
</head>
<body>
<h1>サイコロ画面</h1>
<p>

</p>

<div class="container">
    <?php foreach ($dices as $dice): ?>
    <div class="item">
        <div class="dice_id"><?php echo 'ID:'.$dice ->dice_id; ?></div>
        <div class="dice_number"><?php echo $dice ->number; ?></div>
    </div>
        <?php endforeach; ?>

</div>




</body>
</html>