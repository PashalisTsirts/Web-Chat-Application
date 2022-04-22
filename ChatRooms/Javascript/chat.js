const form = document.querySelector(".typing form"),
message =  form.querySelector(".message"),
chat = document.querySelector(".chatarea"),
sendMsg =  form.querySelector("button");


form.onsubmit = (e)=>{
    e.preventDefault(); 
}

sendMsg.onclick = ()=>{
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "messages.php", true);
    xmlhttp.onload = ()=>{
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            message.value = "";
            }    
        }
    let formData = new FormData(form); 
    xmlhttp.send(formData);
}

setInterval(() => {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "printmsg.php", true);
    xmlhttp.onload = ()=>{
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                let data = xmlhttp.response;
                chat.innerHTML = data;
            }    
        }
    let formData = new FormData(form); 
    xmlhttp.send(formData);
}, 700);