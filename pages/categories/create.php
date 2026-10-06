<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Kategori - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/categories/create.css">
</head>
<body>
  <div class="app-shell">
  <?php 
  require_once __DIR__ . '/../../components/admin/sidebar.php'; 
  ?>

    <main class="app-main">
    <header class="app-topbar">
      <div class="page-title">
        <h1>Tambah Kategori</h1>
        <p>Buat kategori baru untuk mengelompokkan buku</p>
      </div>
      <div class="topbar-user">
        <span class="avatar">BS</span>
        <div>
          Budi Santoso<br>
          <span class="badge badge-member" style="margin-top:2px;">Member</span>
        </div>
      </div>
    </header>

      <div class="app-content">
        <form method="" action="">
          <div class="form-card">
            <div class="form-section-title">Data Kategori</div>
            <div class="form-group">
              <label for="name">Nama Kategori</label>
              <input type="text" id="name" name="name" placeholder="Contoh: Fiksi">
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3" placeholder="Deskripsi singkat kategori"></textarea>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" class="btn btn-primary">Simpan Kategori</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
