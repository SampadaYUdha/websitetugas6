	<?php 
	ob_start();
	session_start();

	if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) { 
		?>

		<!DOCTYPE html>
		<html>
		<head>
			<!-- Basic Page Info -->
			<meta charset="utf-8" />
			<title>Dashboard - Warisan Budaya Subak Jatilwuih</title>


			<!-- Mobile Specific Metas -->
			<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
			/>

			<!-- Google Font -->
			<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
			/>
			<!-- CSS -->
			<link rel="stylesheet" type="text/css" href="./assets/vendor/styles/core.css" />
			<link
			rel="stylesheet"
			type="text/css"
			href="./assets/vendor/styles/icon-font.min.css"
			/>
			<link
			rel="stylesheet"
			type="text/css"
			href="./src/plugins/datatables/css/dataTables.bootstrap4.min.css"
			/>
			<link
			rel="stylesheet"
			type="text/css"
			href="./src/plugins/datatables/css/responsive.bootstrap4.min.css"
			/>
			<link rel="stylesheet" type="text/css" href="./assets/vendor/styles/style.css" />

		</head>
		<body>
			<div class="header">
				<div class="header-left">
					<div class="menu-icon bi bi-list"></div>


				</div>
				<div class="header-right">
					
					<div class="user-info-dropdown">
						<div class="dropdown">
							<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
							>
							<span class="user-icon">
								<i class="bi bi-person-circle"></i>
							</span>
							<span class="user-name"><?=$_SESSION['user_full_name']?></span>
						</a>
						<div
						class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
						

						<a class="dropdown-item" href="logout.php"
						><i class="dw dw-logout"></i> Log Out</a
						>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index_admin.php">
				<img src="./assets/images/logo_jl.png" alt="" class="dark-logo" />
				<img
				src="./assets/images/logo_jl.png"
				alt=""
				class="light-logo ml-4"
				/>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">

					<li>
						<a href="index_admin.php" class="dropdown-toggle no-arrow">
							<span class="micon bi bi-house"></span
							>
							<span class="mtext">Home</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-textarea-resize"></span
							><span class="mtext">Konten</span>
						</a>
						<ul class="submenu">
							<li><a href="data_berita.php">Konten Artikel dan Berita</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon bi bi-receipt-cutoff"></span
							><span class="mtext">Data User</span>
						</a>
						<ul class="submenu">
							<li><a href="data_admin.php">Data Admin</a></li>
							<li>
								<a href="data_supervisor.php">Data Supervisor</a>
							</li>

						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Form Tambah Artikel dan Berita</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="index_admin.php">Home</a>
									</li>
									<li class="breadcrumb-item" aria-current="page">
										Konten
									</li>
									<li class="breadcrumb-item" aria-current="page">
										<a href="data_berita.php">Berita dan Artikel</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										Tambah Berita dan Artikel
									</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a
								class="btn btn-secondary"
								href="data_berita.php"
								role="button"
								>
								Kembali
							</a>
						</div>

					</div>
				</div>
			</div>
			
			<!-- horizontal Basic Forms Start -->
			<div class="pd-20 card-box mb-30">
				<div class="clearfix">
					<div class="pull-left">
						<h4 class="text-blue h4">Konten Artikel dan Berita</h4>
						<p class="mb-30">Tambahkan konten artikel dan berita terbaru warisan budaya Subak Jatiluwih</p>
					</div>
				</div>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Tanggal</label>
						<input
						class="form-control"
						type="date"
						name="tanggal"
						/>
					</div>

					<div class="form-group">
						<label>Judul Artikel dan Berita</label>
						<input
						class="form-control"
						type="text"
						placeholder="Masukan Judul Artikel dan Berita"
						name="judul"
						/>
					</div>
					
					<div class="form-group">
						<label>Kategori Artikel dan Berita</label>
						<input type="text" class="form-control" placeholder="Masukan Kategori Artikel dan Berita" name="kategori" />
					</div>
					
					
					<div class="form-group">
						<label>Ringkasan Artikel dan Berita</label>
						<textarea class="form-control" name="ringkasan"></textarea>
					</div>

					<div class="form-group">
						<label>Detail Artikel dan Berita</label>
						<textarea class="form-control" name="detail"></textarea>
					</div>
					

				<!-- <div class="form-group">
					<label>Gambar Artikel dan Berita</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input" name="gambar" />
						<label class="custom-file-label">Pilih File</label>
					</div>
				</div> -->

				<input type='file' name='image' multiple />
				<div class="text-right">
					<button
					class="btn btn-primary mt-4 mb-5"
					role="button"
					type="submit"
					name="tambah_konten"
					>
					Tambah Artikel dan Berita
				</button>

			</div>
		</form>


		<?php
		include "db_conn.php";

		if (isset($_POST['tambah_konten'])) {
			$tanggal         	= $_POST['tanggal'];
			$kategori        	= $_POST['kategori'];
			$judul        		= $_POST['judul'];
			$ringkasan       	= $_POST['ringkasan'];
			$detail        		= $_POST['detail'];
			$image_name   		= $_FILES['image']['name'];
			$image        		= $_FILES['image']['tmp_name'];

			$location     	= "uploads/".$image_name;

			move_uploaded_file($image, $location);


			$query = $conn->prepare("INSERT INTO berita(tanggal, kategori, judul, ringkasan, detail, gambar) VALUES('$tanggal', '$kategori','$judul','$ringkasan' ,'$detail', '$image_name')");


			if ($query->execute()) { 
				header("Location:all_konten.php");
			} else {
				echo "terjadi kesalahan query";
			}


		}
		?>
		
		


	</div>
</div>
</div>


<!-- horizontal Basic Forms End -->


<div class="footer-wrap pd-20 mb-20 card-box">
	Sistem Informasi Warisan Budaya Subak Jatiluwih

</div>
</div>
</div>


<!-- welcome modal end -->
<!-- js -->
<script src="./assets/vendor/scripts/core.js"></script>
<script src="./assets/vendor/scripts/script.min.js"></script>
<script src="./assets/vendor/scripts/process.js"></script>
<script src="./assets/vendor/scripts/layout-settings.js"></script>
<script src="./src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="./src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="./src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="./src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<!-- buttons for Export datatable -->
<script src="./src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="./src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="./src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="./src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="./src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="./src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="./src/plugins/datatables/js/vfs_fonts.js"></script>
<!-- Datatable Setting js -->
<script src="./assets/vendor/scripts/datatable-setting.js"></script>

</body>
</html>



<?php 
}else {
	header("Location: login.php");
}
?>