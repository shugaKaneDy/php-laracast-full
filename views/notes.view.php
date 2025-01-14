<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>

<main>
  <div class="container-xxl px-5 py-2">
    <?php foreach($notes as $note): ?>
      <li>
        <a href="<?= BASE_URL . 'note?id=' . $note['id'] ?>">
          <?= $note['body'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </div>
</main>

<?php require "partials/footer.php" ?>