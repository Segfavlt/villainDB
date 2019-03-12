<?php

function hash_pass($pass) {
  return password_hash($pass, PASSWORD_ARGON2I,
    ['memory_cost' => 2048, 'time_cost' => 4, 'threads' => 3]);
}
?>
