function readRecordworksample(){
				var readRecordworksample = 'readRecordworksample';
				
				$.ajax({
					url: 'submit/work-sample-submit2.php',
					type: 'POST',
					data: { readRecordworksample:readRecordworksample},
					success:function(data,status){
				 			$('#work-sample-fetching').html(data);
			 				
						 }
				})
			}


function DeleteRecordblog(deleteidblog){
				console.log('id='+deleteidblog);
				alert('deleteidblog');
				var conf = confirm("Are you sure?");
				if(conf == true) {
				$.ajax({
					url:"submit/work-sample-submit2.php",
					type:'POST',
					data: {  deleteidblog: deleteidblog },
					success:function(data, status){
						readRecordworksample();	
					}
				});
				}
			}

function DeleteRecordgithub(deleteidgithub){
				var conf = confirm("Are you sure?");
				if(conf == true) {
				$.ajax({
					url:"submit/work-sample-submit2.php",
					type:'POST',
					data: {  deleteidgithub: deleteidgithub },
					success:function(data, status){
						readRecordworksample();	
					}
				});
				}
			}	

function DeleteRecordplaystore(deleteidplaystore){
				var conf = confirm("Are you sure?");
				if(conf == true) {
				$.ajax({
					url:"submit/work-sample-submit2.php",
					type:'POST',
					data: {  deleteidplaystore: deleteidplaystore },
					success:function(data, status){
						readRecordworksample();	
					}
				});
				}
			}

function DeleteRecordbehance(deleteidbehance){
				var conf = confirm("Are you sure?");
				if(conf == true) {
				$.ajax({
					url:"submit/work-sample-submit2.php",
					type:'POST',
					data: {  deleteidbehance: deleteidbehance },
					success:function(data, status){
						readRecordworksample();	
					}
				});
				}
			}

function DeleteRecordothersample(deleteidothersample){
				var conf = confirm("Are you sure?");
				if(conf == true) {
				$.ajax({
					url:"submit/work-sample-submit2.php",
					type:'POST',
					data: {  deleteidothersample: deleteidothersample },
					success:function(data, status){
						readRecordworksample();	
					}
				});
				}
			}

$('document').ready(function(){
	readRecordworksample();
})