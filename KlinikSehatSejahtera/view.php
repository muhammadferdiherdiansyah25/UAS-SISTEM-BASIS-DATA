<div class="card" style="margin-top:2rem;">
				<div class="card-body">
					<h4>Data Berobat Laki-Laki</h4>
					<div class="container mt-4">
						<table class="table" style="margin-top:1rem;">
							<thead>
								<tr>
									<td>No.</td>
									<td>Nama Pasien</td>
									<td>Jenis Kelamin</td>
									<td>Umur</td>
									<td>Keluhan</td>
									<td>Hasil Diagnosa</td>
									<td>Nama Dokter</td>
								</tr>
							</thead>
							<?php
								$no = 1;
								$query = mysqli_query($con, 'SELECT * FROM viewPenyakit');
								while ($data = mysqli_fetch_array($query)) {
							?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $data['nama_pasien'] ?></td>
								<td><?= $data['jenis_kelamin'] ?></td>
								<td><?= $data['umur'] ?></td>
								<td><?= $data['keluhan_pasien'] ?></td>
								<td><?= $data['hasil_diagnosa'] ?></td>
								<td><?= $data['nama_dokter'] ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
	
	<?php require "footer.php";?>
</div>
</body>
</html>