//Trabalhando com eventos de mouse
function apertouMouse() {
	console.log("APERTOU O MOUSE AAAAE!");
}

function soltouMouse(){
	console.log("SOLTOU O MOUSE :( ");
}

function mouseEmCima(){
	console.log("PASSOU O MOUSE EM CIMA DO BOTAO!!!");
}

function mouseSaioDeCima(){
	console.log("MOUSE SAIO DE  CIMA DO BOTAO!!!");
}

function MoveMouse(){
	console.log("MOUSE FOI MOVIDO");
}

function clicou(){
	console.log("CLICOU NO BOTAO");
}

function botaoDireito(){
	console.log("BOTAO DIREITO");

	return false;
}

function cliqueDuplo(){
	console.log("Clicou duas vezes");
}

function mudarCor(){
	document.getElementById('body').style.backgroundColor = 'black';
}

//Trabalhando com eventos do teclado

function apertouTecla(event){
	console.log("Apertou alguma tecla: "+event.keyCode);

	if(event.shiftKey == true){
		console.log("Apertou alguma tecla com Shift...");
	}

	if(event.shiftKey == true && event.keyCode == 69){
		console.log("Apertou  tecla Shift+E  ...");
	}
}

//Trabalhando com eventos de pagina

function carregou(){
	document.getElementById('body').style.backgroundColor = 'grey';
	
}

//http://keycode.info/ -< site que mostra codigos das teclas


//Trabalhando com evento de formulario

function mudouOpcao(objeto){

	console.log("Selecionou: "+objeto.value);

}

function focou(){
	console.log('Focou no campo 1');
}

function desfocou(){
	console.log('desfocou no campo 1');
}