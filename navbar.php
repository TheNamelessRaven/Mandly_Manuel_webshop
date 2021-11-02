<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?menu=home">Webshop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo $menu=='home' ?> active" aria-current="page" href="index.php?menu=home">Webshop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $menu=='register' ?>" href="index.php?menu=register">Regisztrálása</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $menu=='login' ?>"href="index.php?menu=login">Belépés</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $menu=='termek' ?>" href="index.php?menu=termek">Termék regisztrálása</a>
        </li>
        
    </div>
  </div>
</nav>
