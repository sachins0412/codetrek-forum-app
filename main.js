
function clickAlert(){
	alert("are you sure post?");
}
function validate_form ( )
{
    valid = true;

    if ( document.form.Title.value == ""&& document.form.Description.value == "")
    {
        alert ( "Please fill Title and Description" );
        valid = false;
    }
    else if ( document.form.Title.value == "" )
    {
        alert ( "Please fill Title." );
        valid = false;
    }
    else if ( document.form.Description.value == "" )
    {
        alert ( "Please fill Description." );
        valid = false;
    }



    return valid;
}
function thumbL(){
	var element = document.getElementById("like");
    
    var count=element.innerHTML;
    var element2 = document.getElementById("dlike");
    var count2=element2.innerHTML;
    
   	if(element.classList.contains("text-success"))
   	{
   		element.classList.remove("text-success");
   		element.innerHTML= parseInt(count,10)-1;
   	}
   	else{
   		element.classList.add("text-success");
   		element.innerHTML= parseInt(count,10)+1;
   }
    if(element2.classList.contains("text-danger")){
      element2.classList.remove("text-danger");
      element2.innerHTML= parseInt(count2,10)-1;
        }
    }
function thumbD(){
	var element = document.getElementById("dlike");
    
    var count=element.innerHTML;
    var element2 = document.getElementById("like");
    var count2=element2.innerHTML;
    if(element.classList.contains("text-danger"))
   	{
   		element.classList.remove("text-danger");
   		element.innerHTML= parseInt(count,10)-1;
   	}
   	else{
   		element.classList.add("text-danger");
   		element.innerHTML= parseInt(count,10)+1;
   }
    if(element2.classList.contains("text-success")){
      element2.classList.remove("text-success");
      element2.innerHTML= parseInt(count2,10)-1;
        }
}