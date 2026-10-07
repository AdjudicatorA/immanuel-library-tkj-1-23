<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Kategori - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/categories/index.css">
</head>
<body>
  <?php
  require_once __DIR__ . '/../../repositories/category-repository.php';
  $categories = getCategories();
  ?>
  <div class="app-shell">
  <?php 
  require_once __DIR__ . '/../../components/admin/sidebar.php'; 
  ?>

    <main class="app-main">
    <?php
    $pageTitle = 'Manajemen Kategori';
    $pageSubtitle = 'Kelola kategori untuk mengelompokkan buku.';
    require_once __DIR__ . '/../../components/admin/topbar.php';
    ?>

      <div class="app-content">
        <div class="toolbar">
          <form method="" action="" class="toolbar-filters">
            <div class="search-box">
              <svg class="icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.3-4.3"/></svg>
              <input type="text" name="search" class="search-input" placeholder="Cari nama kategori...">
            </div>
            <button type="submit" class="btn btn-outline btn-sm">Cari</button>
          </form>
          <a href="create.php" class="btn btn-primary">+ Tambah Kategori</a>
        </div>

        <div class="data-card">
          <table class="data-table">
            <thead>
              <tr>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Jumlah Buku</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($categories as $category): ?>
              <tr>
                <td><?= $category['name'] ?></td>
                <td><?= $category['description'] ?></td>
                <td>
                  <div class="cell-actions">
                    <a href="edit.php?id=<?= $category['id'] ?>" class="btn btn-outline btn-sm">Edit</a>
                    <a href="../../actions/categories/destroy.php?id=<?= $category['id'] ?>"
                      class="btn btn-danger btn-sm"
                      onclick="return confirm('Yakin ingin menghapus kategori ini?')">Hapus</a>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <div class="pagination">
        <span class="pagination-btn is-disabled">&lt;</span>
        <span class="pagination-btn is-disabled">&gt;</span>
      </div>
    </div>
  </main>
</div>
</body>
</html>
