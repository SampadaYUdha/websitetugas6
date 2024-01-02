<?php 
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) { 
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Dashboard - Warisan Budaya Subak Jatilwuih</title>

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
	<div class="pd-ltr-20">
		<div class="card-box pd-20 height-100-p mb-30">
			<div class="row align-items-center">
				<div class="col-md-4">
					<img src="./assets/vendor/images/banner-img.png" alt="" />
				</div>
				<div class="col-md-8">
					<h4 class="font-20 weight-500 mb-10 text-capitalize">
						Welcome back
						<div class="weight-600 font-30 text-blue"><?=$_SESSION['user_full_name']?></div>
					</h4>
					<p class="font-18 max-width-600">
						Selamat datang kembali Admin <?=$_SESSION['user_full_name']?> di halaman Sistem Informasi Warisan Budaya Subak Jatiluwih. Mari kita mulai hari ini dengan semangat penuh dalam mengelola situs ini!
					</p>
				</div>
			</div>
		</div>
		<?php
		include 'db_conn.php';

		$sql = "SELECT COUNT(*) FROM users";
		$res = $conn->query($sql);
		$count = $res->fetchColumn();

		?>

		<?php
		include 'db_conn.php';

		$sql = "SELECT COUNT(*) FROM supervisor";
		$res = $conn->query($sql);
		$countsupervisor = $res->fetchColumn();

		?>

		<?php
		include 'db_conn.php';

		$sql = "SELECT COUNT(*) FROM berita";
		$res = $conn->query($sql);
		$countberita = $res->fetchColumn();

		?>
		<div class="row">
			<div class="col-xl-3 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class="d-flex flex-wrap align-items-center">
						<i class="bi bi-people fa-2x ml-3"></i>
						<div class="widget-data">
							<div class="h5 mb-0 "> <?php echo $count ?> Data Admin</div>
							<div class="weight-600 font-14"><a href="data_admin.php"><i class="bi bi-arrow-right mr-1"></i> Lihat Data</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class="d-flex flex-wrap align-items-center">
						<i class="bi bi-people fa-2x ml-3"></i>
						<div class="widget-data">
							<div class="h5 mb-0"><?php echo $countsupervisor ?> Data Pemilik</div>
							<div class="weight-600 font-14"><a href="data_supervisor.php"><i class="bi bi-arrow-right mr-1"></i> Lihat Data</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class="d-flex flex-wrap align-items-center">
						<i class="bi bi-clipboard-data fa-2x ml-3"></i>
						<div class="widget-data">
							<div class="h5 mb-0"><?php echo $countberita ?> Data Artikel</div>
							<div class="weight-600 font-14"><a href="data_berita.php"><i class="bi bi-arrow-right mr-1"></i> Lihat Data</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 mb-30">
				<div class="card-box height-100-p widget-style1">
					<div class="d-flex flex-wrap align-items-center">
						<i class="bi bi-columns-gap fa-2x ml-3"></i>
						<div class="widget-data">
							<div class="h5 mb-0">Halaman Situs</div>
							<div class="weight-600 font-14"><a href="index.php"><i class="bi bi-arrow-right mr-1"></i> Lihat Halaman</a></div>
						</div>
					</div>
				</div>
			</div>

		</div>
		

		<!-- Export Datatable start -->
		<div class="card-box mb-30">
			<div class="pd-20">
				<h4 class="text-blue h4">Data Keseluruhan Artikel dan Berita</h4>
			</div>
			<div class="pb-20">
				<table
				class="table hover multiple-select-row nowrap ">
				<thead class="text-center">
					<tr>
						<th class="table-plus">Tanggal</th>
						<th>Kategori</th>
						<th>Judul</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					<?php
					include "db_conn.php";
					$sql = "SELECT * FROM berita";
					$row = $conn->prepare($sql);
					$row->execute();
					$hasil = $row->fetchAll();
					foreach($hasil as $data){
						?>

						<tr>
							<td class="table-plus"><?php echo $data['tanggal'] ?></td>
							<td><?php echo $data['kategori'] ?></td>
							<td><?php echo $data['judul'] ?></td>
							<td>
								<a href="detail_berita.php?id=<?php echo $data['id']; ?>">Detail</a> |
								<a href="update_berita.php?id=<?php echo $data['id']; ?>">Update</a> |
								<a href="delete_berita.php?id=<?php echo $data['id']; ?>">Delete</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- Export Datatable End -->
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
<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="./assets/vendor/scripts/dashboard.js"></script>

</body>
</html>

<?php 
}else {
	header("Location: login.php");
}
?>
