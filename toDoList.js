let boton = document.querySelector(".boton")
let maham=document.getElementById("maham");
boton.setAttribute("onclick","AddTask()");
 function AddTask(){
    if(maham.value!=""){
        let list= document.getElementsByTagName("ul")[0];
        let task1 = document.createTextNode(maham.value);
        let item1 = document.createElement("li");
        item1.appendChild(task1);
        list.appendChild(item1);
        document.body.appendChild(list);
        maham.value="";
    } 
    else{
        alert("Please enter a task");
    } 

    
}

