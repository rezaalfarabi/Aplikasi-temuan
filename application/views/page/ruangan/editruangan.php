<?php if($this->session->flashdata('pesan') == TRUE){ ?>
<script>
    alert('<?= $this->session->flashdata('pesan') ?>')
</script>
<?php } ?>
<div class="row">
	<div class="col s12 m7">
		<div class="card">
			<div class="card-header card-header-primary">
				<h4 class="card-title ">Edit Ruangan</h4>
			</div>
			<div class="card-body">
                <form action="<?= base_url('simpan-ruangan-edit') ?>" method="post">
                    <div class="form-group">
                        <label for="">Ruangan</label>
                        <input type="hidden" name="id_ruangan" value="<?= $ruangan['id_ruangan'] ?>">
                        <input type="text" class="form-control" placeholder="......" name="ruangan" value="<?= $ruangan['nama_ruangan'] ?>">
                    </div>
                    <button type="submit" class="waves-effect waves-light btn">Simpan</button>
                </form>
			</div>
		</div>
	</div>
</div>