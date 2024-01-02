<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
</head>

<body>
    <div id="container">
        <h1>Welcome to CodeIgniter!</h1>
        <div id="body">
        <?php foreach ($maoni as $item) : ?>
            <?= $item->payment_method ?>
        <?php endforeach ?>
    </div>
</body>

</html>