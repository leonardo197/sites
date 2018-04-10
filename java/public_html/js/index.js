/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function init(){
    
    document.getElementById("button1").addEventListener("click",showCurrentDate,false);
    document.getElementById("button2").addEventListener("click",changeCSS,false);
    document.getElementById("form1").addEventListener("submit",convertCurrency,false);
}
function showCurrentDate(){
    var result1 = document.getElementById("resul1");
    result1.innerHTML=Date();
}
function changeCSS(){
var paragraph=document.getElementById("p2");

paragraph.style.color="blue";
paragraph.style.fontSize="35px";
paragraph.style.fontweight="bold";
}
function convertCurrency(e){
    e.preventDefault();
    
    var result2 = document.getElementById("result1_contacts");
    
    result2.innerHTML=(dolar.value*ratio).toFixed()+"€";
}