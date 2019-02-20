//Definindo a variavel com nome do usuario

/*
comentario
com
varias
linhas
*/

var nome = "Gustavo";
//criando uma função no JS
function fazerAcao(nome,idade){
	var area = document.getElementById("area");
	var texto = prompt("Qual o seu sobrenome?");

	area.innerHTML = nome+" "+texto+" Tem "+idade+" Anos ";
}

function addIngrediente() {
	var ing = document.getElementById("ingrediente").value;

	var listahtml = document.getElementById("lista").innerHTML;

	listahtml = listahtml + "<li>"+ing+"</li>";

	document.getElementById("lista").innerHTML = listahtml;
}

function somar(){
	var campo1 = parseFloat(document.getElementById("campo1").value);
	var campo2 = parseFloat(document.getElementById("campo2").value);
	var resultado = campo1 + campo2;
	alert("O resultado da operação é: "+resultado);
}

function subtrair(){
	var campo1 = parseFloat(document.getElementById("campo1").value);
	var campo2 = parseFloat(document.getElementById("campo2").value);
	var resultado = campo1 - campo2;
	alert("O resultado da operação é: "+resultado);
}

function multiplicar(){
	var campo1 = parseFloat(document.getElementById("campo1").value);
	var campo2 = parseFloat(document.getElementById("campo2").value);
	var resultado = campo1 * campo2;
	alert("O resultado da operação é: "+resultado);
}

function dividir(){
	var campo1 = parseFloat(document.getElementById("campo1").value);
	var campo2 = parseFloat(document.getElementById("campo2").value);
	var resultado = campo1 / campo2;
	alert("O resultado da operação é: "+resultado);
}