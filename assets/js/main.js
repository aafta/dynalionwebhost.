
new WOW().init();

var preloader=document.getElementById("loading");

function myFunction(){
	preloader.style.display="none";

};


$(document).ready(function(){
	setTimeout(function(){
		$('#popUpMain').css('display','block');},5000);
	});
	$('.submitId').click(function(){
		$('#popUpMain').css('display','none');
	});

