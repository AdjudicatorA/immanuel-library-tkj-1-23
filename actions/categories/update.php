<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
  echo '<h2>Category updated.</h2>';
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
} 
else 
{
  echo '<p>
  Error: invalid request.</p>';
}

echo '<p>
<a href="../../pages/categories/index.php">&larr; Back</a>
</p>';