<div class="row">
<!-- BEGIN BASIC DATATABLES -->
	<div class="col-md-12">
		<div class="grid no-border">
			<div class="grid-header">
				<i class="fa fa-table"></i>
				<span class="grid-title">Daftar Request Lagu</span>
				<div class="pull-right grid-tools">
					<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
					<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
					<a data-widget="remove" title="Remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="grid-body">
				<table id="dataTables1" class="table table-hover display" cellspacing="0" width="100%">
					<thead>
						<tr>
                            <th width="3%">No</th>
                            <th width="15%">Nama</th>
                            <th width="25%">Judul Lagu</th>
                            <th>Pesan</th>
                            <th width="10%">Waktu</th>
                            <th width="10%">Action</th>
                        </tr>
					</thead>
					<tbody>
						<?php 
							$no 		=	1;
							$alat 		=	mysql_query("SELECT * FROM request ");

							while ($data=mysql_fetch_array($alat)) {
						?>
						<tr>
							<td><center><?php echo $no; ?></center></td>
							<td><?php echo $data['name']; ?></td>
							<td><?php echo $data['lagu']; ?></td>
							<td><?php echo $data['pesan']; ?></td>
							<td><?php echo $data['waktu']; ?></td>
							<td>
                            <?php 
                                if (isset($_SESSION['access'])) {
                                    if ($_SESSION['access'] == 'admin') {
                            ?>
                                    <a href="?request-delete=<?php echo $data['id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
                            <?php
                                    }elseif ($_SESSION['access'] == 'guru') {
                            ?>
                                    <a href="?request-delete=<?php echo $data['id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
                            <?php
                                    }elseif ($_SESSION['access'] == 'penyiar') {
                            ?>
                                    <a href="?request-delete=<?php echo $data['id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
                            <?php
                                    }
                                }
                            ?>                                                            
                            </td>
						</tr>
						<?php
							$no++;
							}
						?>						
					</tbody>
				</table>
				<?php 
					if (isset($_SESSION['access'])) {
						if ($_SESSION['access'] == 'admin' OR 'guru' AND 'penyiar') {
				?>
				<a href="?request-kosong" class="btn btn-danger"><span class="fa fa-trash-o"></span> Hapus Semua Data Request</a>
				<?php
						}
					}
				?>
			</div>
		</div>
	</div>
	<!-- END BASIC DATATABLES -->
</div>