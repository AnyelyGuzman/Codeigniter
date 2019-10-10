<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome to CodeIgniter</title>

		<style type="text/css">
			::selection { background-color: #E13300; color: white; }
			::-moz-selection { background-color: #E13300; color: white; }
			body {
				background-color: #fff; margin: 40px; color: #4F5155;
				font: 13px/20px normal Helvetica, Arial, sans-serif;
			}
			a {
				color: #003399; font-weight: normal;
				background-color: transparent;
			}
			h1 {
				color: #444; font-size: 19px; margin: 0 0 14px 0;
				background-color: transparent; padding: 14px 15px 10px 15px;
				border-bottom: 1px solid #D0D0D0; font-weight: normal;
			}
			code {
				font-family: Consolas, Monaco, Courier New, Courier, monospace;
				font-size: 12px; display: block; margin: 14px 0 14px 0;
				background-color: #f9f9f9; border: 1px solid #D0D0D0;
				color: #002166; padding: 12px 10px 12px 10px;
			}
			#body { margin: 0 15px 0 15px; }
			p.footer {
				text-align: right; font-size: 11px;
				border-top: 1px solid #D0D0D0; margin: 20px 0 0 0;
				line-height: 32px; padding: 0 10px 0 10px;
			}
			#container { margin: 10px; border: 1px solid #D0D0D0; box-shadow: 0 0 8px #D0D0D0; }
		</style>
	</head>
	<body>
		<div id="container">
			<h1>Bienvenido a nuestra pagina</h1>
			<div id="body">
				<p>Inicie session para que disfrute</p>
				<a href="http://localhost/Codeigniter/index.php/principal/login"><code>Iniciar session</code>
			</div>
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		</div>
	</body>
</html>