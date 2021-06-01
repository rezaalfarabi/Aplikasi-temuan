<?php if($this->session->flashdata('pesan') == TRUE){ ?>
<script>
    alert('<?= $this->session->flashdata('pesan') ?>')
</script>
<?php } ?>
<div class="row">
	<div class="col s12 m7">
		<div class="card">
			<div class="card-header card-header-primary">
				<h4 class="card-title ">Tambah Genset</h4>
			</div>
			<div class="card-body">
                <form action="<?= base_url('simpan-genset') ?>" method="post">
                    <div class="form-group">
                        <label for="">Nama Genset</label>
                        <input type="text" class="form-control" placeholder="" name="nama_genset">
                    </div>          
                    <div class="input-field col s12">
                        <select name="nama_lokasi">
                            <option value="" disabled selected>Pilih Lokasi</option>
                            <?php foreach($lokasi as $lokasi): ?>
                            <option value="<?= $lokasi->id_lokasi ?>"><?= $lokasi->nama_lokasi ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>            
                    <button type="submit" class="waves-effect waves-light btn">Simpan</button>
                </form>
			</div>
		</div>
	</div>
</div>