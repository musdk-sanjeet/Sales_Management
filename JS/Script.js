function validation()
{
var id =document.f1.user.value;
var ps=document.f1.password.value;


if(id.length == "" && ps.length="")
{
	alert(User name and password is empty);
}
return false;


else
{
	if(id.length=="")
	{
		alert("User name is empty");
		return false;
	}
	if(ps.length="")
	{
		alert("password is empty");
		return false;
	}
}

}
