<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Demo</title>
</head>

<body>








  <ul>
    <?php foreach ($filteredBooks as $book): ?>
      <?php # if ($book['author'] == "Gabriel García Márquez"): ?>
        <li>
          <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name'] ?> (<?= $book['releaseYear'] ?>)-by <?= $book['author'] ?>
          </a>
        </li>
      <?php # endif; ?>
    <?php endforeach; ?>
  </ul>








</body>

</html>