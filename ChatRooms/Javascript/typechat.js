type =  document.querySelector(".chat .chatname");

    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "typechat.php", true);
    xmlhttp.onload = ()=>{
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                let data = xmlhttp.response;
                type.innerHTML = data;
            }    
        }
    xmlhttp.send();
