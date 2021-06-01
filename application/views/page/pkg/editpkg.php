<?php if($this->session->flashdata('pesan') == TRUE){ ?>
<script>
    alert('<?= $this->session->flashdata('pesan') ?>')
</script>
<?php } ?>
<div class="row">
	<div class="col s12 m7">
		<div class="card">
			<div class="card-header card-header-primary">
				<h4 class="card-title ">Edit PKG</h4>
			</div>
			<div class="card-body">
                <form action="<?= base_url('simpan-pkg-edit') ?>" method="post">
                    <div class="form-group">
                        <label for="">Nama PKG</label>
                        <input type="hidden" name="id_pkg" value="<?= $pkg['id_pkg'] ?>">
                        <input type="text" class="form-control" placeholder="" value="<?= $pkg['nama_pkg'] ?>" name="nama_pkg">
                    </div>         
                    <div class="input-field col s12">
                        <select name="id_lokasi">
                            <option value="" disabled selected>Pilih Lokasi</option>
                            <?php foreach($lokasi as $lokasi): ?>
                            <option <?= $pkg['id_lokasi'] == $lokasi->id_lokasi ? 'selected' : '' ?> value="<?= $lokasi->id_lokasi ?>"><?= $lokasi->nama_lokasi ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>            
                    <button type="submit" class="waves-effect waves-light btn">Simpan</button>
                </form>
			</div>
		</div>
	</div>
</div>