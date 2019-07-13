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

$('document').ready(function(){
	readRecordworksample();
})