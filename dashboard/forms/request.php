<div class="row">
	<!-- BEGIN BASIC FORM -->
	<div class="col-md-12">
		<div class="grid">
			<div class="grid-header">
				<i class="fa fa-align-left"></i>
				<span class="grid-title">Request Lagu</span>
				<div class="pull-right grid-tools">
					<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
					<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
				</div>
			</div>
			<div class="grid-body">
				<form role="form" class="form-horizontal" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="name" placeholder="Masukkan Nama Anda" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Judul Lagu</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="lagu" placeholder="Judul lagu/Artist/Nama band" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Pesan</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="pesan" placeholder="Sampaikan pesan/salam anda ke pendengar" required>
						</div>
					</div>
					
					</div><hr/>
					<div class="form-group">
						<div class="col-md-2"></div>
						<div class="col-md-4 btn-group">
							<button type="submit" class="btn btn-primary" name="request"><span class="fa fa-upload"></span> Request</button>
							<button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
							<a href="/dashboard" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END BASIC FORM -->
</div>