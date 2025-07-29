
  <?php
  ini_set("display_errors", 1);
  ini_set("display_startup_errors", 1);
  error_reporting(E_ALL);


  $books = [
    // J.R.R. Tolkien
    ['name' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'purchaseUrl' => 'https://example.com/hobbit', 'releaseYear' => 1937],
    ['name' => 'The Lord of the Rings', 'author' => 'J.R.R. Tolkien', 'purchaseUrl' => 'https://example.com/lotr', 'releaseYear' => 1954],
    ['name' => 'The Silmarillion', 'author' => 'J.R.R. Tolkien', 'purchaseUrl' => 'https://example.com/silmarillion', 'releaseYear' => 1977],

    // George Orwell
    ['name' => '1984', 'author' => 'George Orwell', 'purchaseUrl' => 'https://example.com/1984', 'releaseYear' => 1949],
    ['name' => 'Animal Farm', 'author' => 'George Orwell', 'purchaseUrl' => 'https://example.com/animal-farm', 'releaseYear' => 1945],
    ['name' => 'Homage to Catalonia', 'author' => 'George Orwell', 'purchaseUrl' => 'https://example.com/homage-catalonia', 'releaseYear' => 1938],

    // Jane Austen
    ['name' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'purchaseUrl' => 'https://example.com/pride-prejudice', 'releaseYear' => 1813],
    ['name' => 'Sense and Sensibility', 'author' => 'Jane Austen', 'purchaseUrl' => 'https://example.com/sense-sensibility', 'releaseYear' => 1811],
    ['name' => 'Emma', 'author' => 'Jane Austen', 'purchaseUrl' => 'https://example.com/emma', 'releaseYear' => 1815],

    // Charles Dickens
    ['name' => 'Great Expectations', 'author' => 'Charles Dickens', 'purchaseUrl' => 'https://example.com/great-expectations', 'releaseYear' => 1861],
    ['name' => 'A Tale of Two Cities', 'author' => 'Charles Dickens', 'purchaseUrl' => 'https://example.com/tale-two-cities', 'releaseYear' => 1859],
    ['name' => 'Oliver Twist', 'author' => 'Charles Dickens', 'purchaseUrl' => 'https://example.com/oliver-twist', 'releaseYear' => 1839],

    // Fyodor Dostoevsky
    ['name' => 'Crime and Punishment', 'author' => 'Fyodor Dostoevsky', 'purchaseUrl' => 'https://example.com/crime-punishment', 'releaseYear' => 1866],
    ['name' => 'The Brothers Karamazov', 'author' => 'Fyodor Dostoevsky', 'purchaseUrl' => 'https://example.com/brothers-karamazov', 'releaseYear' => 1880],
    ['name' => 'The Idiot', 'author' => 'Fyodor Dostoevsky', 'purchaseUrl' => 'https://example.com/the-idiot', 'releaseYear' => 1869],

    // Leo Tolstoy
    ['name' => 'War and Peace', 'author' => 'Leo Tolstoy', 'purchaseUrl' => 'https://example.com/war-peace', 'releaseYear' => 1869],
    ['name' => 'Anna Karenina', 'author' => 'Leo Tolstoy', 'purchaseUrl' => 'https://example.com/anna-karenina', 'releaseYear' => 1878],
    ['name' => 'The Death of Ivan Ilyich', 'author' => 'Leo Tolstoy', 'purchaseUrl' => 'https://example.com/ivan-ilyich', 'releaseYear' => 1886],

    // Ernest Hemingway
    ['name' => 'The Old Man and the Sea', 'author' => 'Ernest Hemingway', 'purchaseUrl' => 'https://example.com/old-man-sea', 'releaseYear' => 1952],
    ['name' => 'The Sun Also Rises', 'author' => 'Ernest Hemingway', 'purchaseUrl' => 'https://example.com/sun-also-rises', 'releaseYear' => 1926],
    ['name' => 'For Whom the Bell Tolls', 'author' => 'Ernest Hemingway', 'purchaseUrl' => 'https://example.com/for-whom-bell-tolls', 'releaseYear' => 1940],

    // William Faulkner
    ['name' => 'The Sound and the Fury', 'author' => 'William Faulkner', 'purchaseUrl' => 'https://example.com/sound-fury', 'releaseYear' => 1929],
    ['name' => 'As I Lay Dying', 'author' => 'William Faulkner', 'purchaseUrl' => 'https://example.com/as-i-lay-dying', 'releaseYear' => 1930],
    ['name' => 'Light in August', 'author' => 'William Faulkner', 'purchaseUrl' => 'https://example.com/light-in-august', 'releaseYear' => 1932],

    // Gabriel García Márquez
    ['name' => 'One Hundred Years of Solitude', 'author' => 'Gabriel García Márquez', 'purchaseUrl' => 'https://example.com/100-years-solitude', 'releaseYear' => 1967],
    ['name' => 'Love in the Time of Cholera', 'author' => 'Gabriel García Márquez', 'purchaseUrl' => 'https://example.com/love-cholera', 'releaseYear' => 1985],
    ['name' => 'Chronicle of a Death Foretold', 'author' => 'Gabriel García Márquez', 'purchaseUrl' => 'https://example.com/chronicle-death', 'releaseYear' => 1981],
  ];


  // function filter($books, $author) {
  // $filterByAuthor = function($books,$author){
  // function filter($items, $author) {
  // function filter($items,$key,$value) {

 /*
  #php has a function array_filter now I will use it to skip this code
  function filter($items, $fn) {
    $filterItems = [];
    
    foreach ($items as $item) {
      // if($item[$key] == $value) {
      if($fn($item)) {
        $filterItems[] = $item;
      }
    }
    return $filterItems;
  }
  // }; #should end when it stored in a variable

*/

  //  $filteredBooks = filter($books, "William Faulkner");
  // $filteredBooks = $filterByAuthor($books, "William Faulkner");
  // $filteredBooks = filter($books,'author', 'Ernest Hemingway');
  // $filteredBooks = filter($books,function ($book) {
  $filteredBooks = array_filter($books, function ($book) {
    return $book['releaseYear'] >=  1930;
  });



  ?>




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