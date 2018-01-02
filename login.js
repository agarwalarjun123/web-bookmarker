
	

var x=document.getElementById("f1");
x.addEventListener("click",function(){
var y=document.getElementById("user").value;
var z=document.getElementById("pass").value;

$.ajax({
	url:"http://localhost/CMS/bookmarkext/login.php?user="+y+"&pass="+z,
	success:function(data){
document.getElementById("d1").innerHTML=data;

},
	error:function(xhr){
		window.alert(xhr.status);
	}

});


});