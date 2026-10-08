<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo '<h2>Author deleted.</h2>';
  echo '<p>Author with ID <p>' . htmlspecialchars($id) . '</p> was deleted successfully.</p>';
} else {
  echo '<p>
  Error: no author ID received.</p>';
}

echo '<p>
<a href="../../pages/authors/index.php">&larr; Back to list</a>
</p>';