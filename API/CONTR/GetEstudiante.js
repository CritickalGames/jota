function ALL(){
    xmlhttp.onload = function() {
        const myObj = JSON.parse(this.responseText);
        let table= document.getElementById("table");
        for (let i = 0; i < myObj.length; i++) {
            let fila = document.createElement("tr");
        
            let col1 = document.createElement("th");
            let col2 = document.createElement("th");
            let col3 = document.createElement("th");
            
            let node1 = document.createTextNode(myObj[i][0]);
            let node2 = document.createTextNode(myObj[i][1]);
            let node3 = document.createTextNode(myObj[i][2]);
    
            col1.appendChild(node1);
            col2.appendChild(node2);
            col3.appendChild(node3);
    
            fila.appendChild(col1);
            fila.appendChild(col2);
            fila.appendChild(col3);
    
            table.appendChild(fila);
        }
        table.setAttribute("border", "3");
    
        }
    
    xmlhttp.open("GET", "../API/CONTR/GetALLEstudiante.php");
    xmlhttp.send();
}

function ONE(){
    xmlhttp.onload = function() {
        
        if (false) {
            const myObj = JSON.parse(this.responseText);
            alert(myObj.ide);
            let table= document.getElementById("table1");
        
            let fila = document.createElement("tr");
            
            let col1 = document.createElement("th");
            let col2 = document.createElement("th");
            let col3 = document.createElement("th");
            
            let node1 = document.createTextNode(myObj.ide);
            let node2 = document.createTextNode(myObj.idu);
            let node3 = document.createTextNode(myObj.idg);
        
            col1.appendChild(node1);
            col2.appendChild(node2);
            col3.appendChild(node3);
        
            fila.appendChild(col1);
            fila.appendChild(col2);
            fila.appendChild(col3);
        
            table.appendChild(fila);
        
            table.setAttribute("border", "3");
        }else{
            alert(this.responseText);
        }
    }
    
    xmlhttp.open("GET", "../API/CONTR/GetEstudiante.php");
    xmlhttp.send();
}

function getInput(){
    let xmlhttp = new XMLHttpRequest();
    let ci = document.getElementById("CI").value;
    let contra = document.getElementById("contra").value;
    console.log(ci+"-"+contra);


    xmlhttp.onload = function() {
        }
    
    xmlhttp.open("GET", "API/CONTR/GetEstudiante.php?ci="+ci+"&contra="+contra);
    xmlhttp.send();
}