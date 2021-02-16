function validation(){
	var name= document.getElementById("Name").value;
	var email= document.getElementById("Email").value;
	var mobile= document.getElementById("Mobile").value;
	var message= document.getElementById("Message").value;
    var count=0;
	if (name.length<=0){
		alert("Name Field must not be empty");
	}else{
        count=count+1;
    }

	function testEmail(){
	var emailTest = email.match(/^\S+@\S+\.\S+$/);
	if (emailTest == null){
	alert("Please enter a valid email");
	}else{
        count=count+1;
    }
	}

	function testMobile(){
	var mobileTest = mobile.match(/^[0]\d{9}$/);
	if (mobileTest == null){
	alert("Please enter a valid phone number");
	}else{
	    count=count+1;
    }
	}

	testEmail();
	testMobile();

	if (message.length<=0){
		alert("Message field must not be empty");
	}else{
        count=count+1;
    }

	if(count==4){
	    alert("Message has been submitted");
        window.location.replace("http://127.0.0.1:8000/");
    }else{
	    count=0;
    }

}
