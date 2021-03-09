<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Практическая работа по веб-разработке, SH-3</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
<div class="container">
    <?php include 'header.inc.php' ?>
    <aside class="photo"><img src="/assets/img/avatar.jpg" alt="Автор"></aside>
    <main class="content">
        <h1><?= $h1 ?></h1>
        <?php include 'content-layout.inc.php' ?>
    </main>
    <?php include 'footer.inc.php' ?>
</div>
</body>
</html>