<?php

if (isset($_POST['id'], $_POST['title'], $_POST['isbn'], $_POST['year'], $_POST['stock'], $_POST['category_id'], $_POST['description'])) {
  echo '<h2>Book updated (simulation)</h2>';
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
} else {
  echo '<p>
  Error: incomplete data received.</p>';
}

echo '<p>
<a href="../../pages/books/index.php">&larr; Back to list</a>
</p>';