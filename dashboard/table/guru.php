<div class="row">
<!-- BEGIN BASIC DATATABLES -->
	<div class="col-md-12">
		<div class="grid no-border">
			<div class="grid-header">
				<i class="fa fa-table"></i>
				<span class="grid-title">Guru</span>
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
							<th width="3%" align="center">#</th>
							<th>No. Induk</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Telepon</th>
							<th>Status</th>
							<th>Gender</th>
							<th width="20%"><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no 		=	1;
							$guru 		=	mysql_query("SELECT * FROM users WHERE access='guru'");

							while ($data=mysql_fetch_array($guru)) {
						?>
						<tr>
							<td><center><?php echo $no; ?></center></td>
							<td><?php echo $data['nomor_induk']; ?></td>
							<td><?php echo $data['name']; ?></td>
							<td><?php echo $data['username']; ?></td>
							<td><?php echo $data['telp']; ?></td>
							<td><?php echo $data['status']; ?></td>
							<td><?php echo $data['gender']; ?></td>
							<td>
								<center>
									<a href="?guru-edit=<?php echo $data['id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
									<a href="?guru-delete=<?php echo $data['id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
								</center>
							</td>
						</tr>
						<?php
							$no++;
							}
						?>						
					</tbody>
				</table>
				<a href="?users=guru-create" class="btn btn-primary"><span class="fa fa-plus"></span> Create</a>				
			</div>
		</div>
	</div>
	<!-- END BASIC DATATABLES -->
</div>