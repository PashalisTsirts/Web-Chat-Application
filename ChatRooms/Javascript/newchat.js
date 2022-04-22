const form = document.querySelector(".new form"),
submission =  form.querySelector(".button input");

form.onsubmit = (e)=>{
    e.preventDefault(); 
}

submission.onclick = ()=>{
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "newchat.php", true);
    xmlhttp.onload = ()=>{
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                var data = xmlhttp.response;
                console.log(data);
                if(data > 0){
                    location.href = "ChatroomList.php";
                }   
            }    
        }
    let formData = new FormData(form); 
    xmlhttp.send(formData);
}