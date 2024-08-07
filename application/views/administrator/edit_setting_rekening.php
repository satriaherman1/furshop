<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800 mb-4">Pengaturan</h1>

	<div class="row">
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body">
                <div class="list-group">
                    <a href="<?= base_url(); ?>administrator/setting/banner" class="list-group-item list-group-item-action">Banner Slider</a>
                    <a href="<?= base_url(); ?>administrator/setting/description" class="list-group-item list-group-item-action">Deskripsi Singkat</a>
                    <a href="<?= base_url(); ?>administrator/setting/rekening" class="list-group-item list-group-item-action">Rekening</a>
                    <a href="<?= base_url(); ?>administrator/setting/sosmed" class="list-group-item list-group-item-action">Sosial Media</a>
                    <a href="<?= base_url(); ?>administrator/setting/address" class="list-group-item list-group-item-action">Alamat</a>
                    <a href="<?= base_url(); ?>administrator/setting/delivery" class="list-group-item list-group-item-action">Biaya Antar</a>
                    <a href="<?= base_url(); ?>administrator/setting/cod" class="list-group-item list-group-item-action">Cash On Delivery</a>
                    <a href="<?= base_url(); ?>administrator/setting/footer" class="list-group-item list-group-item-action">Footer</a>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="lead text-dark mb-0">Edit Rekening</h2>
                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>administrator/setting/rekening/<?= $rekening['id']; ?>" method="post">
                        <div class="form-group">
                            <label for="rekening">Nama Bank</label>
                            <input type="text" class="form-control" id="rekening" name="rekening" required autocomplete="off" value="<?= $rekening['rekening']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Atas Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required autocomplete="off" value="<?= $rekening['name']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="number">Nomor Rekening</label>
                            <input type="text" class="form-control" id="number" name="number" required autocomplete="off" value="<?= $rekening['number']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
