<?php

if (isset($_POST['name'], $_POST['bio'])) {
  echo '<h2>Author added.</h2>';
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
} else {
  echo '<p>
  Error: incomplete data received.</p>';
}

echo '<p>
<a href="../../pages/authors/index.php">&larr; Back to list</a>
</p>';