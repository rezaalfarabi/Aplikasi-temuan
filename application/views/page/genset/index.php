<?php if($this->session->flashdata('pesan') == TRUE){ ?>
<script>
	alert('<?= $this->session->flashdata('pesan') ?>')
</script>
<?php } ?>
<div class="row py-1">
	<div class="col s12 m7">
		<div class="card">
			<div class="card-header card-header-primary">
				<h4 class="card-title ">Data Genset</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table">
						<thead class=" text-primary">
							<th width="5%">
								No
							</th>
							<th width="30%">
								Nama Genset
							</th>
							<th width="50%">
								Lokasi
							</th>
							<th width="20%">
								Opsi
							</th>
						</thead>
						<tbody>
							<?php foreach($genset as $i => $isi): 
                                ?>
							<tr>
								<td>
									<?= $i+1 ?>
								</td>
								<td>
									<?= $isi->nama_genset ?>
								</td>
								<td>
									<?= $isi->nama_lokasi ?>
								</td>
								<td>
									<a href="<?= base_url('edit-genset/'.$isi->id_genset) ?>"
										class="btn-floating btn-sm"><i class="material-icons">edit</i></a>
									<a href="<?= base_url('hapus-genset/'.$isi->id_genset) ?>"
										class="btn-floating btn-sm"><i class="material-icons red darken-1">delete</i></a>
								</td>

							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="fixed-action-btn">
			<a href="<?= base_url('tambah-genset') ?>" class="btn-floating btn-large blue">
				<i class="large material-icons">add</i>
			</a>
		</div>
	</div>
</div>

