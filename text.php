<html>
	<head>
		<title>文檔編輯</title>
		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="keyboard.js"></script>
		<link href="keyboard.css" rel="stylesheet" type="text/css">
		<style>
			textarea {
				width: 100%;
				height: 85%;
			}
		</style>
	</head>
	<body>

		<form action="" method="post" accept-charset="utf-8">
			<textarea name="pcont" style="font-family: Times New Roman;font-size: 1.25em;" rows="22" cols="118" id="pcont"></textarea><br>
			<input type="hidden" name="fn">
			<input type="hidden" name="action" value="wp">
			<input type="submit" style="margin-left: 96%;" value="寫入">
		</form>

		<div align="center">
			<?php include 'keys.html'; ?>
		</div>

	</body>
</html>