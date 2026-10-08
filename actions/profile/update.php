<?php

if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['bio'])) {
  echo '<h2>Profile updated.</h2>';
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
} else {
  echo '<p>
  Error: incomplete data received.</p>';
}

echo '<p>
<a href="../../pages/profile/edit.php">&larr; Back to profile</a>
</p>';