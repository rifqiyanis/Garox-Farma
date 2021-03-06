<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <a href="<?= site_url().'admin'?>" class="logo">
        <span class="logo-lg"><b>Garox </b>FARMA</span>
      </a>
    </header>
    <aside class="main-sidebar">
      <section class="sidebar">
        <ul class="sidebar-menu">
          <li class="active">
            <a href="<?= site_url().'admin'?>">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url().'user/logout'?>">
              <i class="fa fa-power-off"></i> <span>Logout</span>
            </a>
          </li>
      </section>
    </aside>

    <div class="content-wrapper">
      <section class="content-header">
        <h1 class = "text-center">Form Tambah Barang</h1>
        <div class = "container">
            <form action="<?= site_url().'admin/processAdd'?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                    <small class="form-text text-danger"><?= form_error('nama_barang') ?></small>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga">
                    <small class="form-text text-danger"><?= form_error('harga') ?></small>
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock">
                    <small class="form-text text-danger"><?= form_error('stock') ?></small>
                </div>
                <div class="form-group">
                    <label for="spesifikasi">Spesifkasi</label>
                    <textarea name= "spesifikasi" cols="60" rows="3" ></textarea>
                    <small class="form-text text-danger"><?= form_error('spesifikasi') ?></small>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="file" id="gambar" name="gambar">
                    <?php if(isset($error_message)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error_message ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <button class = "btn btn-success" name = "add">Tambah</button>
                </div>

            </form>
        </div>   
      </section>
    </div>
</div>