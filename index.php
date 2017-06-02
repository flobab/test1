<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<!--formulaire d'envoi de fichier, rajouter enctype="multipart/form-data" method="POST" obligatoire-->
<form method="POST" action="traitement_upload.php" enctype="multipart/form-data">
	<input type="file" name="fichier">
	<button type ="submit">ENVOYER</button>
	</form>
</body>
</html>