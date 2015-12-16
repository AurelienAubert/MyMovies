<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="microcms.css" rel="stylesheet" />
    <title>MyMovies - Accueil</title>
</head>
<body>
    <header>
        <h1>MyMovies</h1>
    </header>
    <?php foreach ($movies as $movie): ?>
    <article>
        <h2><?php echo $movie->getTitle() ?></h2>
        <p><?php echo $movie->getDescriptionCourtet() ?></p>
    </article>
    <?php endforeach ?>
    <footer class="footer">

       Construit par Aurélien Aubert ♥

    </footer>
</body>
</html>