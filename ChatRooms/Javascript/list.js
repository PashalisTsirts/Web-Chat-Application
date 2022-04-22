list =  document.querySelector(".users");

setInterval(() => {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "listmembers.php", true);
    xmlhttp.onload = ()=>{
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                let data = xmlhttp.response;
                list.innerHTML = data;
            }    
        }
    xmlhttp.send();
}, 700);