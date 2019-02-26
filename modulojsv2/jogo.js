function gerar_cor(){
	var hexa = '0123456789ABCDEF';
	var cor = '#';

	//gerando cores
	for(i = 0; i < 6; i++){
		cor += hexa[Math.floor(Math.random() * 16 )];
	}
	return cor;
}

 var contador_pontos = 0;

function addBola(){
	//criando uma div
	var bola = document.createElement("div");
	//add a class bola na div criada
	bola.setAttribute("class","bola");

	var p1 = Math.floor(Math.random() * 500 );
	var p2= Math.floor(Math.random() * 400);
	var cor_bola = "background-color:"+gerar_cor();

	bola.setAttribute("style","left:"+p1+"px;top:"+p2+"px;"+cor_bola);

	bola.setAttribute("onclick","estourar(this)");

	document.body.appendChild(bola);

}

function estourar(elemento){
	//removendo os baloes
	document.body.removeChild(elemento);
	//fazendo o contador
	contador_pontos++;
	document.getElementById('contador').innerHTML = "Pontos: "+contador_pontos;

}

function iniciar(){
	iniciar = setInterval(addBola ,1000);
}

function parar(){
	clearInterval(iniciar);
	pontos_finais = document.getElementById('contador').innerHTML;
	console.log(pontos_finais);
	document.write("Sua pontuação final de pontos foi:  ( "+contador_pontos+" )"+"<br/>");
	document.write("Aperte F5 para iniciar o jogo novamente!");
}