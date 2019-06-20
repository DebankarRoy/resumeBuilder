function submitgrad(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#college').val();
    
    if(name.trim() == '' ){
        alert('Please enter your name.');
        $('#inputName').focus();
        return false;
    }
    else{
        $.ajax({
            type:'POST',
            url:'graduation-submit.php'
           // data:'contactFrmSubmit=1&name='+name+'&email='+email+'&message='+message,
           
        });
    }
}