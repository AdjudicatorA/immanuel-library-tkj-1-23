<?php

if (isset($_POST['name'], $_POST['description'])) {
  echo '<h2>Category added.</h2>';
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
} else {
  echo '<p>
  Error: incomplete data received.</p>';
}

echo '<p>
<a href="../../pages/categories/index.php">&larr; Back to list</a>
</p>';