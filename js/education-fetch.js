var counter=0;

function readRecordsGrad(){
	var readRecordGrad = 'readRecordGrad';
	$.ajax({
		url: 'submit/graduation-submit.php',
		type: 'POST',
		data: { readRecordGrad:readRecordGrad },
		success:function(data,status){
	 			$('#grad-fetching').html(data);
	 			counter++;
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
			counter--;
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
	 			$('#ss-fetching').html(data);
	 			counter++;
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
			readRecordss ();
			counter--;
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
	 			$('#secondary-fetching').html(data);
	 			counter++;
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
			readRecordsecondary ();
			counter--;
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
	 			counter++;
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
			counter--;
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
	 			counter++;
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
			counter--;
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
	 			counter++;
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
			counter--;
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
	/*if(counter>=1){
	    $('.tell-us').hide();
	    $('.add-little').show();
	}else{
	$('.add-little').hide();
    }
    console.log("val"+counter);*/
    $('.add-little').hide();

});
