list =  document.querySelector(".home .chatroom-list");

setInterval(() => {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "chatrooms.php", true);
    xmlhttp.onload = ()=>{
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                let data = xmlhttp.response;
                list.innerHTML = data;
            }    
        }
    xmlhttp.send();
}, 700);