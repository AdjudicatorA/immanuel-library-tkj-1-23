<?php 

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo '<h2>User deleted.</h2>';
  echo '<p>User with ID <p>' . htmlspecialchars($id) . '</p> was deleted successfully.</p>';
} else {
  echo '<p>
  Error: no user ID received.</p>';
}

echo '<p>
<a href="../../pages/users/index.php">&larr; Back to list</a>
</p>';