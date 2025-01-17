<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>

<main>
  <div class="container-xxl px-5 py-2">
    <div class="p-3 bg-white shadow-sm rounded w-50 mt-3">
      <form method="POST">
        <div class="mb-3">
          <label for="body" class="form-label fw-bold">Body:</label>
          <textarea class="form-control" id="body" name="body" placeholder="Here's an idea for a note..."></textarea>
        </div>
        <div class="mb-3 text-end">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</main>

<?php require "partials/footer.php" ?>