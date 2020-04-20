<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP/Ajax Dischi</title>
        <link rel="stylesheet" href="dist/app.css">
        <link href="https://fonts.googleapis.com/css?family=Rosario&display=swap" rel="stylesheet">
    </head>
    <body>
            <header>
                <nav>
                    <div id="logo">
                        <img src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/256/disc-vinyl-icon.png" alt="icona-vinile">
                    </div>
                    <div id="raccolta-dischi">
                        <h1>Raccolta Discografica</h1>
                    </div>
                </nav>
            </header>
            <main>
                <div class="container">
                    <?php include 'data.php'; ?>
                    <?php foreach ($dischi as $key => $disco) { ?>
                        <div class="card">
                            <img src="<?php echo $disco[cover]?>" alt="">
                            <h3><?php echo $disco[album]?></h3>
                            <h4><?php echo $disco[autore]?></h4>
                            <h5><?php echo $disco[anno]?></h5>
                        </div>
                    <?php } ?>
                </div>
            </main>

    </body>
</html>
