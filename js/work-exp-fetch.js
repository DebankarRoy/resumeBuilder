
function readRecordjob(){
	var readRecordjob = 'readRecordjob';
	$.ajax({
		url: 'submit/job-submit.php',
		type: 'POST',
		data: { readRecordjob:readRecordjob },
		success:function(data,status){
	 			$('#job-fetching').html(data);
	 			
			 }
	})
}


function DeleteRecordjob(deleteidjob){
	var conf = confirm("Are you sure?");
	if(conf == true) {
	$.ajax({
		url:"submit/job-submit.php",
		type:'POST',
		data: {  deleteidjob : deleteidjob },
		success:function(data, status){
			readRecordjob ();
			
		}
	});
	}
}

function readRecordintern(){
	var readRecordintern = 'readRecordintern';
	$.ajax({
		url: 'submit/intern-submit.php',
		type: 'POST',
		data: { readRecordintern:readRecordintern },
		success:function(data,status){
	 			$('#intern-fetching').html(data);
	 			
			 }
	})
}


function DeleteRecordintern(deleteidintern){
	var conf = confirm("Are you sure?");
	if(conf == true) {
	$.ajax({
		url:"submit/intern-submit.php",
		type:'POST',
		data: {  deleteidintern : deleteidintern },
		success:function(data, status){
			readRecordintern ();
			
		}
	});
	}
}

function readRecordtraining(){
	var readRecordtraining = 'readRecordtraining';
	$.ajax({
		url: 'submit/training-submit.php',
		type: 'POST',
		data: { readRecordtraining:readRecordtraining },
		success:function(data,status){
	 			$('#training-fetching').html(data);
	 			
			 }
	})
}


function DeleteRecordtraining(deleteidtraining){
	var conf = confirm("Are you sure?");
	if(conf == true) {
	$.ajax({
		url:"submit/training-submit.php",
		type:'POST',
		data: {  deleteidtraining: deleteidtraining },
		success:function(data, status){
			readRecordtraining ();
			
		}
	});
	}
}

function readRecordproject(){
	var readRecordproject = 'readRecordproject';
	$.ajax({
		url: 'submit/project-submit.php',
		type: 'POST',
		data: { readRecordproject:readRecordproject },
		success:function(data,status){
	 			$('#project-fetching').html(data);
	 			
			 }
	})
}


function DeleteRecordproject(deleteidproject){
	var conf = confirm("Are you sure?");
	if(conf == true) {
	$.ajax({
		url:"submit/project-submit.php",
		type:'POST',
		data: {  deleteidproject: deleteidproject },
		success:function(data, status){
			readRecordproject();
			
		}
	});
	}
}

function readRecordother(){
	var readRecordother = 'readRecordother';
	$.ajax({
		url: 'submit/other-achv-submit.php',
		type: 'POST',
		data: { readRecordother:readRecordother },
		success:function(data,status){
	 			$('#others-fetching').html(data);
	 			
			 }
	})
}


function DeleteRecordother(deleteidother){
	var conf = confirm("Are you sure?");
	if(conf == true) {
	$.ajax({
		url:"submit/other-achv-submit.php",
		type:'POST',
		data: {  deleteidother: deleteidother },
		success:function(data, status){
			readRecordother();
			
		}
	});
	}
}


$('document').ready(function() {
	readRecordjob();
	readRecordintern();
	readRecordtraining();
	readRecordproject();
	readRecordother();
	
});