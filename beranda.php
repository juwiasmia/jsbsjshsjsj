<?php
ob_start();
session_start();
include 'asset/css/config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'base/schema.php'; ?>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="asset/css/bootstrap/bootstrap.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    
<!-- Base Styling  -->
<link rel="stylesheet" href="asset/css/app/theme.css" /> 

<!-- Title  -->
<title>Dashboard VPN Premium</title>
</head>

<body>

	<?php include 'base/menu.php'; ?>
    
    <section class="content">
    	
        <?php include 'base/header.php'; ?>
        
        
        <div class="warper container-fluid">
            <div class="page-header"><center><h3><i class="fa fa-fw fa-home"></i> Dashboard</h3></center></div>
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>Total Server</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-database fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
										    $num_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `server`"));
											$num_rows2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `serverv2rayvmessws`"));
											$num_rows3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `serverv2rayvmessgrpc`"));
											$num_rows4 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `serverv2rayvlessws`"));
											$num_rows5 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `servertrojangfw`"));
											$num_rows6 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `servertrojango`"));
											$num_rows7 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `serverwireguard`"));
											$num_rows8 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `servershadowsocks`"));
											$num_rows9 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `servershadowsocksr`"));
											$num_rows10 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `serverxrayvlessws`"));
											$num_rows11 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `serverxrayvlesstcp`"));
											$num_rows12 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `serverxrayvlessgrpc`"));
											$num_rows13 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `servervpnserver`"));
											$jumhitung = $num_rows+$num_rows2+$num_rows3+$num_rows4+$num_rows5+$num_rows6+$num_rows7+$num_rows8+$num_rows9+$num_rows10+$num_rows11+$num_rows12+$num_rows13;
											echo $jumhitung;
										?> Server" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>SSH & OpenVPN</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-server fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
									        $kode = "1";
											$servnum_rows = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `akun` WHERE `kode`='$kode'"));
											echo $servnum_rows;
											?> Accounts Created" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>V2ray Vmess WS</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-server fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
									        $kode = "1";
											$servnum_rows2 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `akunv2rayvmessws` WHERE `kode`='$kode'"));
											echo $servnum_rows2;
											?> Accounts Created" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>V2ray Vmess GRPC</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-server fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
									        $kode = "1";
											$servnum_rows3 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `akunv2rayvmessgrpc` WHERE `kode`='$kode'"));
											echo $servnum_rows3;
											?> Accounts Created" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>V2ray Vless WS</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-server fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
									        $kode = "1";
											$servnum_rows4 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `akunv2rayvlessws` WHERE `kode`='$kode'"));
											echo $servnum_rows4;
											?> Accounts Created" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>Trojan GFW</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-server fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
									        $kode = "1";
											$servnum_rows5 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `akuntrojangfw` WHERE `kode`='$kode'"));
											echo $servnum_rows5;
											?> Accounts Created" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>Trojan GO</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-server fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
									        $kode = "1";
											$servnum_rows6 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `akuntrojango` WHERE `kode`='$kode'"));
											echo $servnum_rows6;
											?> Accounts Created" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>Wireguard</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-server fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
									        $kode = "1";
											$servnum_rows7 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `akunwireguard` WHERE `kode`='$kode'"));
											echo $servnum_rows7;
											?> Accounts Created" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>Shadowsocks</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-server fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
									        $kode = "1";
											$servnum_rows8 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `akunshadowsocks` WHERE `kode`='$kode'"));
											echo $servnum_rows8;
											?> Accounts Created" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>ShadowsocksR</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-server fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
									        $kode = "1";
											$servnum_rows9 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `akunshadowsocksr` WHERE `kode`='$kode'"));
											echo $servnum_rows9;
											?> Accounts Created" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>Xray Vless WS</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-server fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
									        $kode = "1";
											$servnum_rows10 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `akunxrayvlessws` WHERE `kode`='$kode'"));
											echo $servnum_rows10;
											?> Accounts Created" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>Xray Vless TCP</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-server fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
									        $kode = "1";
											$servnum_rows11 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `akunxrayvlesstcp` WHERE `kode`='$kode'"));
											echo $servnum_rows11;
											?> Accounts Created" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>Xray Vless GRPC</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-server fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
									        $kode = "1";
											$servnum_rows12 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `akunxrayvlessgrpc` WHERE `kode`='$kode'"));
											echo $servnum_rows12;
											?> Accounts Created" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>L2TP/Ipsec & SSTP</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-server fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
									        $kode = "1";
											$servnum_rows13 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `akunvpnserver` WHERE `kode`='$kode'"));
											echo $servnum_rows13;
											?> Accounts Created" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading"><center>Config Available</center></div>
						<div class="panel-body">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-download fa-fw"></i></span>
									<input type="text" class="form-control" value="<?php
											$horder = $databaseConnection->prepare("SELECT COUNT(*) FROM config");
											$horder->execute();
											$ordernum_rows = $horder->fetchColumn();
											echo $ordernum_rows;
											?> Config" disabled />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Lain-lain -->
			<div class="row">
				<?php
					$qtinformasi = "SELECT * FROM informasi";
					$tinformasi = $databaseConnection->prepare($qtinformasi);
					$tinformasi->execute();
					$informasi = $tinformasi->fetchAll();
					foreach ($informasi as $info)
						
				?>
				<div class="col-lg-6">
                	<div class="panel panel-default">
                        <div class="panel-heading"><center>Announcement</center></div>
                        <div class="panel-body" style="min-height:18.3pc">
							<textarea style="resize: none;width:100%;min-height:268px;border:none;background:transparent;" disabled ><?php
							if($info['pengumuman'] == '') {
							 echo '';
							} else {
							echo $info['pengumuman'];
							}
							?></textarea>
                        </div>
                    </div>
                </div>
				<div class="col-lg-6">
                	<div class="panel panel-default">
                        <div class="panel-heading"><center>Server Rules</center></div>
                        <div class="panel-body" style="min-height:18.3pc">
							<textarea style="resize: none;width:100%;min-height:268px;border:none;background:transparent;" disabled ><?php
							if($info['peraturan'] == '') {
							 echo '';
							} else {
							echo $info['peraturan'];
							}
							?></textarea>
                        </div>
                    </div>
                </div>
			</div>

		</div>
		
		<!-- Footer -->
        <?php include 'base/footer.php'; ?>
        
    
    </section>

    <!-- JQuery v1.9.1 -->
	<script src="asset/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="asset/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
    <script src="asset/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- Globalize -->
    <script src="asset/js/globalize/globalize.min.js"></script>
    
    <!-- NanoScroll -->
    <script src="asset/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    
    <!-- Chart JS -->
    <script src="asset/js/plugins/DevExpressChartJS/dx.chartjs.js"></script>
    <script src="asset/js/plugins/DevExpressChartJS/world.js"></script>
   	<!-- For Demo Charts -->
    <script src="asset/js/plugins/DevExpressChartJS/demo-charts.js"></script>
    <script src="asset/js/plugins/DevExpressChartJS/demo-vectorMap.js"></script>
    
    <!-- Sparkline JS -->
    <script src="asset/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- For Demo Sparkline -->
    <script src="asset/js/plugins/sparkline/jquery.sparkline.demo.js"></script>
    
    <!-- Angular JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js"></script>
	
    <!-- ToDo List Plugin -->
    <script src="asset/js/angular/todo.js"></script>    
    
    <!-- Custom JQuery -->
	<script src="asset/js/app/custom.js" type="text/javascript"></script>
 
</body>

</html>