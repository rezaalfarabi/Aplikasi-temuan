<?php if($this->session->flashdata('pesan') == TRUE){ ?>
<script>
	alert('<?= $this->session->flashdata('pesan') ?>')
</script>
<?php } ?>
<div class="row py-1">
	<div class="col s12 m7">
		<div class="card">
			<div class="card-header card-header-primary">
				<h4 class="card-title ">Data Lokasi</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table">
						<thead class=" text-primary">
							<th width="5%">
								No
							</th>
							<th width="80%">
								Lokasi
							</th>
							<th width="20%">
								Opsi
							</th>
						</thead>
						<tbody>
							<?php foreach($lokasi as $i => $isi): ?>
							<tr>
								<td>
									<?= $i+1 ?>
								</td>
								<td>
									<?= $isi->nama_lokasi ?>
								</td>
								<td>
									<div class="fixed-action-btn">
										<a class="btn-floating btn-large red">
											<i class="large material-icons">mode_edit</i>
										</a>
										<ul>
											<li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
											<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
											<li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
											<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
										</ul>
									</div>
									<a href="<?= base_url('edit-lokasi/'.$isi->id_lokasi) ?>"
										class="btn-floating btn-sm"><i class="material-icons">edit</i></a>
									<a href="<?= base_url('hapus-lokasi/'.$isi->id_lokasi) ?>"
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
			<a href="<?= base_url('tambah-lokasi') ?>" class="btn-floating btn-large blue">
				<i class="large material-icons">add</i>
			</a>
		</div>
	</div>
</div>

