const form = document.querySelector(".singup form"),
errorText =  form.querySelector(".error"),
submission =  form.querySelector(".button input");

form.onsubmit = (e)=>{
    e.preventDefault(); 
}

submission.onclick = ()=>{
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "singup.php", true);
    xmlhttp.onload = ()=>{
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                var data = xmlhttp.response;
                if(data > 0){
                    location.href = "ChatroomList.php";
                }   
                else{
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }    
        }
    let formData = new FormData(form); 
    xmlhttp.send(formData);
}