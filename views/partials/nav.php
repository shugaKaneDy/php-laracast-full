<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo BASE_URL; ?>">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= urlIs(BASE_APP . '/') ? "active" : "" ?>" href="<?php echo BASE_URL; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= urlIs(BASE_APP . '/about') ? "active" : "" ?>" href="<?php echo BASE_URL; ?>about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= urlIs(BASE_APP . '/notes') ? "active" : "" ?>" href="<?php echo BASE_URL; ?>notes">Notes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= urlIs(BASE_APP . '/contact') ? "active" : "" ?>" href="<?php echo BASE_URL; ?>contact">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
