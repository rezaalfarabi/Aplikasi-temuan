<?php if($this->session->flashdata('pesan') == TRUE){ ?>
<script>
    alert('<?= $this->session->flashdata('pesan') ?>')
</script>
<?php } ?>
<div class="row">
	<div class="col s12 m7">
		<div class="card">
			<div class="card-header card-header-primary">
				<h4 class="card-title ">Edit Panel</h4>
			</div>
			<div class="card-body">
                <form action="<?= base_url('simpan-panel-edit') ?>" method="post">
                    <div class="form-group">
                        <label for="">Nama Panel</label>
                        <input type="hidden" name="id_panel" value="<?= $panel['id_panel'] ?>">
                        <input type="text" class="form-control" placeholder="" value="<?= $panel['nama_panel'] ?>" name="nama_panel">
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Inputan</label>
                        <input type="text" class="form-control" placeholder="" value="<?= $panel['jumlah_inputan'] ?>" name="jumlah_inputan">
                    </div>
                    <div class="input-field col s12">
                        <select name="id_ruangan">
                            <option value="" disabled selected>Pilih Ruangan</option>
                            <?php foreach($ruangan as $ruangan): ?>
                            <option <?= $panel['id_ruangan'] == $ruangan->id_ruangan ? 'selected' : '' ?> value="<?= $ruangan->id_ruangan ?>"><?= $ruangan->nama_ruangan ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>            
                    <div class="input-field col s12">
                        <select name="id_lokasi">
                            <option value="" disabled selected>Pilih Lokasi</option>
                            <?php foreach($lokasi as $lokasi): ?>
                            <option <?= $panel['id_lokasi'] == $lokasi->id_lokasi ? 'selected' : '' ?> value="<?= $lokasi->id_lokasi ?>"><?= $lokasi->nama_lokasi ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>            
                    <button type="submit" class="waves-effect waves-light btn">Simpan</button>
                </form>
			</div>
		</div>
	</div>
</div>