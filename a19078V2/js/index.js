/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function init(){
    
    document.getElementById("button").addEventListener("click",alerta,false);
    var form = document.getElementById("form");
    form.addEventListener("submit", informar, false);
    document.getElementById("button2").addEventListener("click", changeCSS, false);
}
function alerta(){
    document.getElementById("result1").innerHTML = "Sucesso!";
    
}
function sobemeter(e){
e.preventDefault(e);
    var nome = document.getElementById("name");
    var cm = document.getElementById("comment");
    var email = document.getElementById("email");
    
    var result1 = document.getElementById("result1");
    var result2 = document.getElementById("result2");
    var result3 = document.getElementById("result3");
    
     result1.innerHTML = nome.value;
    result2.innerHTML = cm.value;
    result3.innerHTML = email.value;

}
function changeCSS() {
    var alert = document.getElementById("id");

    alert.style.visibility = "visible";
}