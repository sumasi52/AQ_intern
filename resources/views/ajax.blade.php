<?php
use App\Models\Dice;

?>


<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php foreach ($dices as $dice): ?>
        <div class="item">
            <div class="dice_name"><?php echo 'Name:'.$dice ->dice_name; ?></div>
                <div class="dice_number"><?php echo $dice ->number; ?></div>
            <form class="edit_button" action="dices/edit" method="post">
                <input type="hidden" name="id" value= <?php echo $dice ->id; ?> >
                <input type="submit" value="&#xf044;" class="fas">
            </form>
        </div>
    <?php endforeach; ?>

</div>

</body>
</html>