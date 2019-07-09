function Submittraining(){
     var frm = $('#training_details');
     console.log(frm.serialize());
     $.ajax({
        type: "POST",
        url: "submit/training-submit.php",
       data: frm.serialize(),
       success: function(data,status) {
          readRecordtraining();
        }

        
    });
}

function Submitproject(){
     var frm = $('#project_details');
     $.ajax({
        type: "POST",
        url: "submit/project-submit.php",
       data: frm.serialize(),
       success: function(data,status) {
          readRecordproject();
        }

        
    });
}

function Submitintern(){
     var frm = $('#intern_details');
     $.ajax({
        type: "POST",
        url: "submit/intern-submit.php",
       data: frm.serialize(),
       success: function(data,status) {
          readRecordintern();
        }
  
    });
}

function Submitjob(){
     var frm = $('#job_details');
     $.ajax({
        type: "POST",
        url: "submit/job-submit.php",
       data: frm.serialize(),
       success: function(data,status) {
          readRecordjob();
        }

        
    });
}

function Submitachv(){
     var frm = $('#Achivements_details');
     $.ajax({
        type: "POST",
        url: "submit/other-achv-submit.php",
       data: frm.serialize(),
       success: function(data,status) {
          readRecordother();
        }
        
    });
}
