function submitgrad(){
    var frm = $('#graduation_details');
    alert(frm);
    console.log(frm);
    $('#graduation_details').validate({
    rules: {
      /*degree_completion_status_grad: 'required',*/ 
      college: 'required', 
      start_year_clg: 'required',
      end_year_clg: 'required',
      degree: 'required'
    }
  });

    if($('#graduation_details').valid())
    {
     $.ajax({
        type: "POST",
        url: "submit/graduation-submit.php",
        data: frm.serialize(),
        success: function(data,status) {
          readRecordsGrad();
          document.getElementById('graduation_details').reset();
            }
        });
    }
     
}

function submitss(){
    var frm = $('#senior-secondary_details');

    $('#senior-secondary_details').validate({
    rules:{
        school: 'required',
        end_year_ss: 'required',  
        board_ss:'required'
        }
    });


    if($('#senior-secondary_details').valid())
    {
     $.ajax({
        type: "POST",
        url: "submit/ss-submit.php",
        data: frm.serialize(),
        success: function(data,status) {
            
            readRecordss();
            document.getElementById('senior-secondary_details').reset();
            }       
        });
    }
    
}

function submitsecondary(){
    var frm = $('#secondary_details');

    $('#secondary_details').validate({
    rules:{
        school_s: 'required',
        end_year_s: 'required',  
        board_s:'required'
        }
    });

    if($('#secondary_details').valid())
    {
     $.ajax({
        type: "POST",
        url: "submit/secondary-submit.php",
        data: frm.serialize(),
        success: function(data,status) {
          
          readRecordsecondary();
          document.getElementById('secondary_details').reset();
            }        
        }); 
    } 
}

function submitpostgrad(){
    var frm = $('#post-grad');

    $('#post-grad').validate({
    rules: {
      college_pg: 'required', 
      start_year_pg: 'required',
      end_year_pg: 'required',
      degree_pg: 'required'
        }
    });

    if($('#post-grad').valid())
    {
     $.ajax({
        type: "POST",
        url: "submit/post-grad-submit.php",
        data: frm.serialize(),
        success: function(data,status) {
          readRecordspostgrad();
          document.getElementById('post-grad').reset();
            }
        });
    }
}

function submitdiploma(){
    var frm = $('#diploma_details');

    $('#diploma_details').validate({
    rules: {
      college_dp: 'required', 
      start_year_dp: 'required',
      end_year_dp: 'required'
        }
    });

    if($('#diploma_details').valid())
    {
     $.ajax({
        type: "POST",
        url: "submit/diploma-submit.php",
       data: frm.serialize(),
       success: function(data,status) {
          readRecordsdiploma();
          document.getElementById('diploma_details').reset();
            }
        });
    }
}

function submitphd(){
    var frm = $('#phd_details');

    $('#phd_details').validate({
    rules: {
      college_phd: 'required', 
      start_year_ph: 'required',
      end_year_ph: 'required'
        }
    });

    if($('#phd_details').valid())
    {
     $.ajax({
        type: "POST",
        url: "submit/phd-submit.php",
       data: frm.serialize(),
       success: function() {
          readRecordsphd();
          document.getElementById('phd_details').reset();
            } 
        });
    }
}


