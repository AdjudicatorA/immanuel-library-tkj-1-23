<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo '<h2>Category deleted.</h2>';
  echo '<p>Category with ID <p>' . htmlspecialchars($id) . '</p> was deleted successfully.</p>';
} else {
  echo '<p>
  Error: no category ID received.</p>';
}

echo '<p>
<a href="../../pages/categories/index.php">&larr; Back to list</a>
</p>';