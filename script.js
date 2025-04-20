let divElem=document.createElement("div");
let pElem=document.createElement("p");
let textNode=document.createTextNode("Ceci est un paragraphe.");
pElem.appendChild(textNode);
divElem.appendChild(pElem);
document.body.appendChild(divElem);
let textNode2=document.createTextNode("La text a ete modifier.");
// pElem.innerText=textNode2.nodeValue;
pElem.textContent=textNode2.nodeValue;
let oop=document.getElementsByTagName("p");
// console.log(oop)

let compt_click=0;
pElem.style.color="lightblue";
pElem.style.textAlign="center"
// divElem.style.backgroundColor="red";
divElem.addEventListener("click",function(){
    compt_click++;
    pElem.textContent=compt_click+" clic a ete detecte .";
});

