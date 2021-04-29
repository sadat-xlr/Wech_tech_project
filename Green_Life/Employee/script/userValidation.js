function get_element(id){
		return document.getElementById(id);
	}

function validateUser(){
    
     clenup();
     if(get_element("username").value==""){
     	
     	err_uname="username Empty";
     	get_element("err_uname").innerHTML="Please Give username";
     	get_element("err_uname").style.color="red";
     	return false ;
       	
     }
	
	return true;
	}
	

function clenup(){
		get_element("err_uname").innerHTML="";
	}
