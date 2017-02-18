<?php	
	if(empty($_POST['name_field']) && strlen($_POST['name_field']) == 0 || empty($_POST['address_field']) && strlen($_POST['address_field']) == 0 || empty($_POST['city_field']) && strlen($_POST['city_field']) == 0 || empty($_POST['state_field']) && strlen($_POST['state_field']) == 0 || empty($_POST['zipcode_field']) && strlen($_POST['zipcode_field']) == 0 || empty($_POST['phone_field']) && strlen($_POST['phone_field']) == 0 || empty($_POST['email_field']) && strlen($_POST['email_field']) == 0 || empty($_POST['commitment_field']) && strlen($_POST['commitment_field']) == 0)
	{
		return false;
	}
	
	$name_field = $_POST['name_field'];
	$address_field = $_POST['address_field'];
	$city_field = $_POST['city_field'];
	$state_field = $_POST['state_field'];
	$zipcode_field = $_POST['zipcode_field'];
	$phone_field = $_POST['phone_field'];
	$email_field = $_POST['email_field'];
	$step_field = $_POST['step_field'];
	$commitment_field = $_POST['commitment_field'];
	
	$to = 'scotty.moon@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from BuildThisHouse.";
	$email_body = "You have received a new message. \n\n".
				  "Name_Field: $name_field \nAddress_Field: $address_field \nCity_Field: $city_field \nState_Field: $state_field \nZipcode_Field: $zipcode_field \nPhone_Field: $phone_field \nEmail_Field: $email_field \nStep_Field: $step_field \nCommitment_Field: $commitment_field \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: commitment@buildthishouse.church\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>