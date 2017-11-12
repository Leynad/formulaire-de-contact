<?php

	$array = array("firstname" => "", "name" => "", "email" => "", "phone" => "", "message" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "messageError" => "", "isSuccess" => false);

//	$firstname = $name = $email = $phone = $message = "";
//	$firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
//	$isSuccess = false;

	$emailTo = "chupakd@gmail.com";

	if ($_SERVER["REQUEST_METHOD"] == "POST") //Quand j'aurais posté les infos dans le formulaire
	{
		$array["firstname"] = verifyInput($_POST["firstname"]);
		$array["name"] = verifyInput($_POST["name"]);
		$array["email"] = verifyInput($_POST["email"]);
		$array["phone"] = verifyInput($_POST["phone"]);
		$array["message"] = verifyInput($_POST["message"]);
		$array["isSuccess"] = true;
		$emailText = "";//init email existant à vide
		
		if(empty($array["firstname"]))
		{
			$array["firstnameError"] = "Je veux connaitre votre prénom !";
			$array["isSuccess"] = false;
		}
		else
		{	//{} permet de spécifier que c'est une variable
			$emailText .= "FirstName : {$array["firstname"]}\n";//remplir l'email
		}
		
		if(empty($array["name"]))
		{
			$array["nameError"] = "Je veux connaitre votre nom !";
			$array["isSuccess"] = false;
		}
		else
		{
			$emailText .= "Name : {array["name"]}\n";//remplir l'email
		}
		
		if(!isEmail($array["email"]))
		{
			$array["emailError"] = "email non valide";
			$array["isSuccess"] = false;
		}
		else
		{
			$emailText .= "Email : {array["email"]}\n";//remplir l'email
		}
		
		if(!isPhone($array["phone"]))
		{
			$array["phoneError"] = "Ce n'est pas un numéro de téléphone :(";
			$array["isSuccess"] = false;
		}
		else
		{
			$emailText .= "Phone : {array["phone"]}\n";//remplir l'email
		}
		
		if(empty($array["message"]))
		{
			$array["messageError"] = "Vous devez insérer un message !";
			$array["isSuccess"] = false;
		}
		else
		{
			$emailText .= "Message : {$array["message"]}\n";//remplir l'email
		}
		
		if($array["isSuccess"])
		{
			$headers = "From : {$array["firstname"]} {array["name"]} <{array["email"]}>\r\nReply-To : {array["email"]}";
			mail($emailTo, "Un message de votre site", $emailText, $headers);
			
			//$firstname = $name = $email = $phone = $message = "";//Tout se passe bien, on remet à 0 le formulaire
		}
		
		echo json_encode($array);//Encode moi l'objet json de $array. 
		//Poure rendre le résultat du php au json.
	}

	function isPhone($var)
	{
		return preg_match("/^[0-9 ]*$/", $var);
	}
	
	function isEmail($var)
	{
		return filter_var($var, FILTER_VALIDATE_EMAIL);//true si email valide, faulse sinon
	}
	
	function verifyInput($var)
	{
		$var = trim($var);
		$var = stripslashes($var);
		$var = htmlspecialchars($var);
		return $var;
	}
?>