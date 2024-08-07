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
                    <h2 class="lead text-dark mb-0">Tambah Biaya Antar</h2>
                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>administrator/setting/delivery/add" method="post">
                    <div class="form-group">
                        <label for="settingSelectRegency">Kabupaten atau Kota Tujuan</label>
                        <select name="destination" id="settingSelectRegency" class="form-control" required>
                            <option></option>
                            <?php foreach($regency as $r): ?>
                                <option value="<?= $r['city_id']; ?>"><?= $r['type']; ?> <?= $r['city_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="price">Biaya</label>
							<input
								type="number"
								class="form-control"
								id="price"
								name="price"
								autocomplete="off"
                                required
                                value=<?php echo set_value('price'); ?>
							/>
							<small id="priceHelp" class="form-text text-muted"
								>Isikan tanpa tanda pemisah. Contoh pengisian 30000</small
							>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
