<?php
$globals = array(
  'Home' => '/',
  'Profile' => '/profile.php',
  'Logout' => '/resources/php/logout.php'
  );

$b_links = array(
  'Minions' => '/boss/minions.php',
  'Missons' => '/boss/missions.php',
  'Base'    => '/boss/base.php',
  'Threats' => '/boss/threats.php'
);

$v_links = array(
  'Bases'   => '/villain/base.php',
  'Minions' => '/boss/minions.php',
  'Missons' => '/boss/missions.php',
  'Threats' => '/villain/threats.php'
);

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
  <a class="navbar-brand" href="#"><img src="/resources/svg/villainDB.svg" alt="VillainDB" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- left aligned items go here-->
    </ul>
    <ul class="navbar-nav">
      <!-- right aligned items go here-->
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(home)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/profile.php">Profile</a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Menu
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
        <?php
          foreach ($globals as $name => $url) {
          echo "<a class=\"bg-dark text-light dropdown-item\" href=\"$url\">$name</a>";
          }
        ?>
        </div>
      </li>
    </ul>
  </div>
</nav>
