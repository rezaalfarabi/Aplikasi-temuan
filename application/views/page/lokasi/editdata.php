<?php if($this->session->flashdata('pesan') == TRUE){ ?>
<script>
    alert('<?= $this->session->flashdata('pesan') ?>')
</script>
<?php } ?>
<div class="row">
	<div class="col s12 m7">
		<div class="card">
			<div class="card-header card-header-primary">
				<h4 class="card-title ">Edit Lokasi</h4>
			</div>
			<div class="card-body">
                <form action="<?= base_url('simpan-lokasi-edit') ?>" method="post">
                    <div class="form-group">
                        <label for="">Lokasi</label>
                        <input type="hidden" name="id_lokasi" value="<?= $lokasi['id_lokasi'] ?>">
                        <input type="text" class="form-control" placeholder="......" name="lokasi" value="<?= $lokasi['nama_lokasi'] ?>">
                    </div>
                    <button type="submit" class="waves-effect waves-light btn">Simpan</button>
                </form>
			</div>
		</div>
	</div>
</div>