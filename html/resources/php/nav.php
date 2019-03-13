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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">VillainDB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
<?php
foreach ($globals as $name => $url) {
  echo "<a class=\"dropdown-item\" href=\"$url\">$name</a>";
}
?>
        </div>
      </li>
    </ul>
  </div>
</nav>
