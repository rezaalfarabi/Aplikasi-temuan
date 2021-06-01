<?php if($this->session->flashdata('pesan') == TRUE){ ?>
<script>
    alert('<?= $this->session->flashdata('pesan') ?>')
</script>
<?php } ?>
<div class="row">
	<div class="col s12 m7">
		<div class="card">
			<div class="card-header card-header-primary">
				<h4 class="card-title ">Edit PAC</h4>
			</div>
			<div class="card-body">
                <form action="<?= base_url('simpan-pac-edit') ?>" method="post">
                    <div class="form-group">
                        <label for="">Nama PAC</label>
                        <input type="hidden" name="id_pac" value="<?= $pac['id_pac'] ?>">
                        <input type="text" class="form-control" placeholder="" value="<?= $pac['nama_pac'] ?>" name="nama_pac">
                    </div>
                    <div class="input-field col s12">
                        <select name="id_ruangan">
                            <option value="" disabled selected>Pilih Ruangan</option>
                            <?php foreach($ruangan as $ruangan): ?>
                            <option <?= $pac['id_ruangan'] == $ruangan->id_ruangan ? 'selected' : '' ?> value="<?= $ruangan->id_ruangan ?>"><?= $ruangan->nama_ruangan ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>            
                    <div class="input-field col s12">
                        <select name="id_lokasi">
                            <option value="" disabled selected>Pilih Lokasi</option>
                            <?php foreach($lokasi as $lokasi): ?>
                            <option <?= $pac['id_lokasi'] == $lokasi->id_lokasi ? 'selected' : '' ?> value="<?= $lokasi->id_lokasi ?>"><?= $lokasi->nama_lokasi ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>            
                    <button type="submit" class="waves-effect waves-light btn">Simpan</button>
                </form>
			</div>
		</div>
	</div>
</div>