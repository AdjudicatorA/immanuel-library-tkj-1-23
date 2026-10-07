<?php

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo '<h2>Book deleted (simulation)</h2>';
  echo '<p>Book with ID <p>' . htmlspecialchars($id) . '</p> was deleted successfully.</p>';
} else {
  echo '<p>
  Error: no book ID received.</p>';
}

echo '<p>
<a href="../../pages/books/index.php">&larr; Back to list</a>
</p>';