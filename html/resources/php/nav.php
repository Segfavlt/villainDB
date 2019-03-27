<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap (check for updates) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<?php
$globals = array(
  'Home' => '/',
  'Logout' => '/resources/php/logout.php'
  );

$b_links = array(
  'Profile' => '/profile.php',
  'Minions' => '/boss/minions.php',
  'Missions' => '/boss/missions.php',
  'Base'    => '/boss/base.php',
  'Threats' => '/boss/threats.php'
);

$v_links = array(
  'Bases'   => '/villain/base.php',
  'Minions' => '/boss/minions.php',
  'Missions' => '/boss/missions.php',
  'Threats' => '/villain/threats.php'
);

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
  <a class="navbar-brand" href="/"><img src="/resources/svg/villainDB.svg" alt="VillainDB" /></a>
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
        <a class="nav-link" href="/">Home<span class="sr-only">(home)</span></a>
      </li>
      <?php if ($_SESSION['access'] == 'boss') {
      echo '<li class="nav-item">';
        echo '<a class="nav-link" href="/profile.php">Profile</a>';
      echo '</li>';
} ?>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Menu
        </a>
        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
        <?php
          echo "<a class=\"bg-dark text-light dropdown-item\" href=\"/\">Home</a>";
          switch($_SESSION['access']) {
            case 'boss':
              echo '<div class="dropdown-divider"></div>';
              foreach ($b_links as $name => $url) {
                echo "<a class=\"bg-dark text-light dropdown-item\" href=\"$url\">$name</a>";
              }
              break;
            case 'villain':
              echo '<div class="dropdown-divider"></div>';
              foreach ($v_links as $name => $url) {
                echo "<a class=\"bg-dark text-light dropdown-item\" href=\"$url\">$name</a>";
              }
              break;
            default:
              break;
          }
          echo '<div class="dropdown-divider"></div>';
          echo "<a class=\"bg-dark text-light dropdown-item\" href=\"/resources/php/logout.php\">Logout</a>";
        ?>
        </div>
      </li>
    </ul>
  </div>
</nav>
