

	//window.alert("xxxx");
chrome.tabs.getSelected(null,function(tab){
var y=tab.url;
$.ajax({
	url:"http://localhost/CMS/bookmarkext/addurl.php?url="+y,
	success:function(data){
document.getElementById("d1").innerHTML=data;

alert("your webpage has been bookmarked!!!");
},
	error:function(xhr){
		window.alert(xhr.status);
	}

	


	
	
});

});