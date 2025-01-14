<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>

<main>
  <div class="container-xxl px-5 py-2">
    <p class="mb-4">
      <a href="<?= BASE_URL . "notes" ?>">go back ...</a>
    </p>
    <p><?= $note['body'] ?></p>
  </div>
</main>

<?php require "partials/footer.php" ?>