function showHint(str, table, record, list) {
    if (str.length === 0) { 
        document.getElementById(list).innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById(list).innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "deviceHints.php?q=" + str + "&table=" + table + "&record=" + record, true);
        xmlhttp.send();
    }
}