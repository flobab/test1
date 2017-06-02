<pre>
<?php
print_r($_FILES['fichier']);
?>
</pre>

<?php
// Vérifier que:
// - il n'y a pas eu d'erreurs lors du transfert
// - que le fichier n'est pas trop volumineux (créer une variable $maxfilesize pour faire le test)

$maxfilesize = 1048576; // 1Mo

if ($_FILES['fichier']['error'] === 0 AND $_FILES['fichier']['size'] < $maxfilesize) {
echo 'taille ok';

}
else{
 echo 'taille  trop gros';
}

echo '<br>';

// pour tester l'extension du fichier 

$fileInfo = pathinfo($_FILES['fichier']['name']);
$fileExtension = $fileInfo['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

if (in_array($fileExtension, $extensions_autorisees)){

	echo 'extension acceptée';

	// transférer définitivement le fichier sur le servuer

	move_uploaded_file($_FILES['fichier']['tmp_name'], $_FILES['fichier'] ['name']);
}
else{
 echo 'extension non autorisée';
}



?>
