<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--begin::Third Party Plugin(Bootstrap Icons)-->
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
  integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
  crossorigin="anonymous"
  />
  <!--end::Third Party Plugin(Bootstrap Icons)-->
  <!--begin::Required Plugin(AdminLTE)-->
  <link rel="stylesheet" href="almasaeed2010/adminlte/dist/css/adminlte.css" />
  <!--end::Required Plugin(AdminLTE)-->
</head>
<body>
  <?php

    

    $books = [
      [
        'name' => "The Author",
        'author' => "Ryan Ballero",
        'releaseYear' => 1998,
        'purchaseUrl' => "example.php"
      ],
      [
        'name' => "The Egoist",
        'author' => "Kane Tagay",
        'releaseYear' => 2001,
        'purchaseUrl' => "example.php"
      ],
      [
        'name' => "The Lithorgy",
        'author' => "Sherwin Eguna",
        'releaseYear' => 2000,
        'purchaseUrl' => "example.php"
      ],
      [
        'name' => "The Kupal",
        'author' => "Ryan Ballero",
        'releaseYear' => 1998,
        'purchaseUrl' => "example.php"
      ],
    ];

    // Lambda functions
    // $filterByAuthor =  function ($books, $author) {
    //   $filteredBooks = [];

    //   foreach ($books as $book) {
    //     if($book['author'] === $author) {
    //       $filteredBooks[] = $book;
    //     }
    //   }

    //   return $filteredBooks;
    // };

    // $filteredBooks = $filterByAuthor($books, "Ryan Ballero");
    //../ Lambda functions

    // function filter($items, $key, $value) {
    //   $filteredItems = [];

    //   foreach ($items as $item) {
    //     if($item[$key] === $value) {
    //       $filteredItems[] = $item;
    //     }
    //   }

    //   return $filteredItems;
    // }

    // $filteredBooks = filter($books, 'releaseYear', 1998);

    // Lambda Function
    // function filter($items, $fn) {
    //   $filteredItems = [];

    //   foreach ($items as $item) {
    //     if($fn($item)) {
    //       $filteredItems[] = $item;
    //     }
    //   }

    //   return $filteredItems;
    // }
    // $filteredBooks = filter($books, function($book) {
    //   return $book['releaseYear'] < 2000;
    // });
    // ../Lambda Function

    $filteredBooks = array_filter($books, function($book) {
      return $book['author'] === "Ryan Ballero";
    });
  ?>

  <ul>
    <?php foreach($filteredBooks as $book): ?>
      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
          <?= $book['name'] ?>(<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
  <p>
  </p>
</body>
</html>