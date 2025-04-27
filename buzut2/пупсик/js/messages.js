function Show_messages(){

    let formData = new FormData(document.forms.messages_form);

    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/send_message.php");
    xhr.send(formData);

    xhr.onload = function(){

        if(xhr.status == 200){                        
            document.getElementById('chat').innerHTML = xhr.responseText;
        }else{
            console.log('Error');        
        }
    }
}