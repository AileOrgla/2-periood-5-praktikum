<?php
	$isSubmitted = isset($_POST["submit"]);
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
	}

	if (!isset($username) || $username == "") {
		$usernameMessage = '<div class="formfield">Palun sisesta kasutajanimi</div>';
	} else {
		$usernameMessage = '<div class="formfield">Kasutajanimi sobis</div>';
	}
?>