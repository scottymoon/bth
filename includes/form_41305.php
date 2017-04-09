<?php	
	if(empty($_POST['name_field']) && strlen($_POST['name_field']) == 0 || empty($_POST['street_address_field']) && strlen($_POST['street_address_field']) == 0 || empty($_POST['city_field']) && strlen($_POST['city_field']) == 0 || empty($_POST['state_field']) && strlen($_POST['state_field']) == 0 || empty($_POST['zipcode_field']) && strlen($_POST['zipcode_field']) == 0 || empty($_POST['phone_field']) && strlen($_POST['phone_field']) == 0 || empty($_POST['email_field']) && strlen($_POST['email_field']) == 0 || empty($_POST['three_year_commitment_field']) && strlen($_POST['three_year_commitment_field']) == 0)
	{
		return false;
	}
	
	$name_field = $_POST['name_field'];
	$street_address_field = $_POST['street_address_field'];
	$city_field = $_POST['city_field'];
	$state_field = $_POST['state_field'];
	$zipcode_field = $_POST['zipcode_field'];
	$phone_field = $_POST['phone_field'];
	$email_field = $_POST['email_field'];
	$input_871 = $_POST['input_871'];
	$input_1208 = $_POST['input_1208'];
	$input_2563 = $_POST['input_2563'];
	$input_2766 = $_POST['input_2766'];
	$normal_give_field = $_POST['normal_give_field'];
	$expanded_generosity_field = $_POST['expanded_generosity_field'];
	$stored_resources_field = $_POST['stored_resources_field'];
	$three_year_commitment_field = $_POST['three_year_commitment_field'];
	
	$to = 'info@cotfc.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from BuildThisHouse.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name_field \nAddress: $street_address_field \nCity: $city_field \nState: $state_field \nZipcode: $zipcode_field \nPhone: $phone_field \nEmail: $email_field \n\n $input_871 \n $input_1208 \n $input_2563 \n $input_2766 \n\n What I normally give in a year: $normal_give_field \nMy expanded annual generosity for build this house: $expanded_generosity_field \nGift from my stored resources: $stored_resources_field \nMy three year commitment total: $three_year_commitment_field \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: commitment@buildthishouse.church\n";
	$headers .= "Reply-To: $email_field";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>