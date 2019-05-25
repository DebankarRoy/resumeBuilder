/*document.getElementById('grad').onClick=function(){
	document.querySelector('.graduation-modal').style.display = "flex";
};*/

/*$(function(){
	$('#grad').click(function(){
		$('#pop-grad').style.display="flex";
	});
})*/

$(document).ready(function(){
	$('#pop-grad').click(function(){
		(this).style.display("flex");
	});
})