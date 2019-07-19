function readRecordworksample(){
				var readRecordworksample = 'readRecordworksample';
				
				$.ajax({
					url: 'submit/work-sample-submit.php',
					type: 'POST',
					data: { readRecordworksample:readRecordworksample},
					success:function(data,status){
				 			$('#work-sample-fetching').html(data);
			 				
						 }
				})
			}


function DeleteRecordworksample(deleteidworksample){
				var conf = confirm("Are you sure?");
				if(conf == true) {
				$.ajax({
					url:"submit/work-sample-submit.php",
					type:'POST',
					data: {  deleteidworksample: deleteidworksample },
					success:function(data, status){
						readRecordworksample();	
					}
				});
				}
			}

$('document').ready(function(){
	readRecordworksample();
})