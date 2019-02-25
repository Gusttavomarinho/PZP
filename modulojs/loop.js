//aula de loop
//WHILE
document.write("Iniciando o loop...<br/>");
var x = 0;
while(x < 10){

	document.write("Numero é: "+x+"<br/>")

	x++;

}
document.write("Finalizando o loop...<br/>");

//FOR

/*for precisa de 3 condições para funcionar
 01 - primeiro definie um variavel
 02 - depois e uma condição para entrar dentro do for
 03 - depois e a condição para parar o for tipo neste exemplo abaixo ele esta 
incrementando a variavel de 01 em 01
*/

for(y = 0; y < 10; y++){

	document.write("{{FOR}} . Numero é: "+y+"<br/>")
}

//exemplo for vamos ver se eu aprendi


var lista_nomes = ["Gustavo","Joao","Maria","Rafael","Luis","Jessica","Larissa","Bruna","Joaquina","Heroncio"];
var texto = "Meu nome é: ";

document.write("<br/>"+"O tamanho da lista de nomes é: "+lista_nomes.length+"<br/>");

for(i = 0;i < lista_nomes.length;i++){
	document.write("<br/>"+texto+lista_nomes[i]+"<br/>");
}