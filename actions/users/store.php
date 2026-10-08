<?php

if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role'])) {
  echo '<h2>User added.</h2>';
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
} else {
  echo '<p>
  Error: incomplete data received.</p>';
}

echo '<p>
<a href="../../pages/users/index.php">&larr; Back to list</a>
</p>';