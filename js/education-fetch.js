

function readRecordsGrad(){
	var readRecordGrad = 'readRecordGrad';
	$.ajax({
		url: 'submit/graduation-submit.php',
		type: 'POST',
		data: { readRecordGrad:readRecordGrad },
		success:function(data,status){
	 			$('#grad-fetching').html(data);
	 			
			 }
	})
}


function DeleteRecordgrad(deleteid){
	var conf = confirm("Are you sure?");
	console.log(deleteid);
	if(conf == true) {
	$.ajax({
		url:"submit/graduation-submit.php",
		type:'POST',
		data: {  deleteid : deleteid },
		success:function(data, status){
			readRecordsGrad ();
			
		}
	});
	}
}

function readRecordss(){
	var readRecordss = 'readRecordss';
	$.ajax({
		url: 'submit/ss-submit.php',
		type: 'POST',
		data: { readRecordss:readRecordss },
		success:function(data,status){
				if(data!=''){
					$('#seniorsecondary').hide();
				}
	 			$('#ss-fetching').html(data);
	 			
			 }
	})
}

function DeleteRecordss(deleteidss){
	var conf = confirm("Are you sure?");
	console.log(deleteidss);
	if(conf == true) {
	$.ajax({
		url:"submit/ss-submit.php",
		type:'POST',
		data: {  deleteidss : deleteidss },
		success:function(data, status){
			if(data!=''){
				$('#seniorsecondary').show();
			}
			readRecordss ();
			
		}
	});
	}
}


function readRecordsecondary(){
	var readRecordsecondary = 'readRecordsecondary';
	$.ajax({
		url: 'submit/secondary-submit.php',
		type: 'POST',
		data: { readRecordsecondary:readRecordsecondary },
		success:function(data,status){
				if(data!=''){
					$('#secondary').hide();
				}
	 			$('#secondary-fetching').html(data);
	 			
			 }
	})
}

function DeleteRecordsecondary(deleteids){
	var conf = confirm("Are you sure?");
	console.log(deleteids);
	if(conf == true) {
	$.ajax({
		url:"submit/secondary-submit.php",
		type:'POST',
		data: {  deleteids : deleteids },
		success:function(data, status){
			if(data!=''){
				$('#secondary').show();
			}
			readRecordsecondary ();
			
		}
	});
	}
}


function readRecordspostgrad(){
	var readRecordspostgrad = 'readRecordspostgrad';
	$.ajax({
		url: 'submit/post-grad-submit.php',
		type: 'POST',
		data: { readRecordspostgrad:readRecordspostgrad },
		success:function(data,status){
	 			$('#postgrad-fetching').html(data);
	 			
			 }
	})
}

function DeleteRecordpostgrad(deleteidpg){
	var conf = confirm("Are you sure?");
	if(conf == true) {
	$.ajax({
		url:"submit/post-grad-submit.php",
		type:'POST',
		data: {  deleteidpg : deleteidpg },
		success:function(data, status){
			readRecordspostgrad ();
			
		}
	});
	}
}

function readRecordsdiploma(){
	var readRecorddiploma = 'readRecorddiploma';
	$.ajax({
		url: 'submit/diploma-submit.php',
		type: 'POST',
		data: { readRecorddiploma:readRecorddiploma },
		success:function(data,status){
	 			$('#diploma-fetching').html(data);
	 			
			 }
	})
}

function DeleteRecorddiploma(deleteiddp){
	var conf = confirm("Are you sure?");
	if(conf == true) {
	$.ajax({
		url:"submit/diploma-submit.php",
		type:'POST',
		data: {  deleteiddp : deleteiddp },
		success:function(data, status){
			readRecordsdiploma ();
			
		}
	});
	}
}

function readRecordsphd(){
	var readRecordphd = 'readRecordphd';
	$.ajax({
		url: 'submit/phd-submit.php',
		type: 'POST',
		data: { readRecordphd:readRecordphd },
		success:function(data,status){
	 			$('#phd-fetching').html(data);
	 			
			 }
	})
}

function DeleteRecordphd(deleteidphd){
	var conf = confirm("Are you sure?");
	if(conf == true) {
	$.ajax({
		url:"submit/phd-submit.php",
		type:'POST',
		data: {  deleteidphd : deleteidphd },
		success:function(data, status){
			readRecordsphd ();
			
		}
	});
	}
}
$('document').ready(function() {
	readRecordsGrad();
	readRecordss();
	readRecordsecondary();
	readRecordspostgrad();
	readRecordsdiploma();
	readRecordsphd();
	
    $('.add-little').hide();

});
