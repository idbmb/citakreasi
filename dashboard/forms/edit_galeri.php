<div class="row">
	<!-- BEGIN BASIC FORM -->
	<div class="col-md-12">
		<div class="grid">
			<div class="grid-header">
				<i class="fa fa-align-left"></i>
				<span class="grid-title">Gallery</span>
				<div class="pull-right grid-tools">
					<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
					<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
				</div>
			</div>
			<div class="grid-body">
				<form role="form" class="form-horizontal" method="post">
					<div class="form-group">
						<label class="col-sm-2 control-label">Judul</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="galeri_nama" value="<?php echo $row['galeri_nama']; ?>" placeholder="Enter Judul Gallery" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Keterangan</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="galeri_keterangan" value="<?php echo $row['galeri_keterangan']; ?>" placeholder="Enter Keterangan Gallery" required>
						</div>
					</div>
					<hr/>
					<div class="form-group">
						<div class="col-md-2"></div>
						<div class="col-md-4 btn-group">
							<button type="submit" class="btn btn-primary" name="galeri-update"><span class="fa fa-save"></span> Update</button>
							<button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
							<a href="?galeri=galeri" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END BASIC FORM -->
</div>