console.log("Hola mundo");
$(document).ready(function(){
    alert("Hello, world!");
});
function hola() {
    alert("Hello, world!");
}
function azul() {
    document.getElementById('azul').style.backgroundColor = 'blue';
}
function verde() {
    document.getElementsByClassName("rojo")[0].style.backgroundColor = 'green';   
}
function rojo(){
    document.getElementById('azul').style.backgroundColor = 'red';
}
