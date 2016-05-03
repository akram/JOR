//check if the location is in france or not

function verifMail(champs){
	if(champs.value == document.getElementById('user_id').value){
	
	document.getElementById('user_id').style.borderColor = "green";
		document.getElementById('user_id2').style.borderColor = "green";
	  return true;
	}
	else{	
document.getElementById('user_id').style.borderColor = "red";
		document.getElementById('user_id2').style.borderColor = "red";
	  return false;	
	 
	}
	
}

function verifPassword(champs){
	if(champs.value == document.getElementById('password').value){
			document.getElementById('password').style.borderColor = "green";
		document.getElementById('password2').style.borderColor = "green";
	
	  return true;
	}
	else{	
		document.getElementById('password').style.borderColor = "red";
		document.getElementById('password2').style.borderColor = "red";
	  return false;	
	 
	}
	
}


function verif(f){
	
	var mailOK = verifMail(f.user_id2);
	var passOK = verifPassword(f.password2);
	
	if(!mailOK){
		alert('Mails are not the same !');
	
		return false;
	}
	else if (!passOK){
		alert('Passwords are not the same !');

	
		return false;
	}
	else{
		return true;
	}
	
}

