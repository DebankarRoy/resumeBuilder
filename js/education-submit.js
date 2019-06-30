function submitgrad(){
    var frm = $('#graduation_details');
     $.ajax({
        type: "POST",
        url: "submit/graduation-submit.php",
        data: frm.serialize(),
    });
     frm.reset();
}

function submitss(){
    var frm = $('#senior-secondary_details');
     $.ajax({
        type: "POST",
        url: "submit/ss-submit.php",
        data: frm.serialize(),
        
    });
}

function submitsecondary(){
    var frm = $('#secondary_details');
     $.ajax({
        type: "POST",
        url: "submit/secondary-submit.php",
       data: frm.serialize(),
        
    });
}

function submitpostgrad(){
    var frm = $('#post-grad');
     $.ajax({
        type: "POST",
        url: "submit/post-grad-submit.php",
       data: frm.serialize(),
       
    });
}

function submitdiploma(){
    var frm = $('#diploma_details');
     $.ajax({
        type: "POST",
        url: "submit/diploma-submit.php",
       data: frm.serialize(),
     
    });
}

function submitphd(){
    var frm = $('#phd_details');
     $.ajax({
        type: "POST",
        url: "submit/phd-submit.php",
       data: frm.serialize(),
     
    });
}


