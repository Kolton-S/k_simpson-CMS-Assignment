<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Movie Database</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./admin/admin_login.php">DB Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style='text-transform: uppercase;'><?php
        if(!empty($_GET['filter'])){echo "{$_GET['filter']}";}
        ?></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filters
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?filter=action">Action</a>
          <a class="dropdown-item" href="index.php?filter=comedy">Comedy</a>
          <a class="dropdown-item" href="index.php?filter=family">Family</a>
          <a class="dropdown-item" href="index.php">All</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
