function getDevice(value, id1, id2, id3, id4, id5){
            
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            dvObj = JSON.parse(this.responseText);
            document.getElementById(id1).value = dvObj.room;
            document.getElementById(id2).value = dvObj.wardrobe;
            document.getElementById(id3).value = dvObj.u;
            document.getElementById(id4).value = dvObj.model;
            document.getElementById(id5).value = dvObj.ip;
        }
    };

    xmlhttp.open("GET", "gettingdevices.php?signature=" + value, true);
    xmlhttp.send();
        
}
