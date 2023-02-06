<!DOCTYPE html>
<html>
    <head>
        <title> <?= $title; ?></title>
    </head>
    <body>
        <h1><?= $h1 ?></h1>

        <ul>
            <?php foreach($data as $d): ?>
                <li><?= $d['name'] ?></li>
            <?php endforeach; ?>
        </ul>


    </body>
</html>