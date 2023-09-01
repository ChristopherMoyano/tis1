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
    for (let index = 0; index < 5; index++) {
        document.getElementsByClassName("rojo")[index].style.backgroundColor = 'green';
        
    }
    //document.getElementsByClassName("rojo")[0].style.backgroundColor = 'green';   
}
function rojo(){
    for (let index = 0; index < 5; index++) {
        document.getElementsByClassName("rojo")[index].style.backgroundColor = 'red';
        
    }
}
function mostrar(){
    var primero =$("#primero").val();
    var segundo = $("#segundo").val();
    console.log("los numeros son: "+primero+" y "+segundo);
}
function sumar() {
    var primero =parseInt($("#primero").val());
    var segundo = parseInt($("#segundo").val());
    console.log("la suma de los numeros es: "+ parseInt(primero+segundo) )
}
