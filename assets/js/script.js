$(document).ready(function(){

/*
* Raiz
*
* @raiz é a raiz do site
*/
var environment = "development";
if (environment == "development") {
	var raiz = 'http://localhost/itv/';
} else {
	var raiz = 'http://localhost/itv/';
}

/*
* Hide
* 
* Esconde elementos ao carregar o site
*/
$('.menu-lateral--submenu').hide();
$(".mensagem").hide();

/*
* Variáveis gerais
*
* @dados são os dados do formulários
*/
let dados;

/*
* Scroll suave
* 
* @e trava o link
* @id é para onde o scroll será levado
* @targetOffset seta a posição do smoothScroll
*/
let id = '';
$('.rodape-bottom--right a[href^="#"]:last-child').on('click', function(e){

	e.preventDefault();
	id = $(this).attr('href'),
	targetOffset = $(id).offset().top;

	$('html, body').animate({
		scrollTop: targetOffset - 100
	}, 500);	

});
$('.desce img').on('click', function(){

	id = '#cards',
	targetOffset = $(id).offset().top;

	$('html, body').animate({
		scrollTop: targetOffset - 100
	}, 500);	

});	

/*
* Eventos do menu lateral
*
* Função de abrir e fechar o menu lateral 
*/
$('.open-menu--mobile img').on('click', function(){

	$('.menu-lateral').css('opacity', 0);
	$('.menu-lateral').css('display', 'flex');
	setTimeout(()=>{
		$('.menu-lateral').css('opacity', 1);
	}, 200);

});
$('.menu-lateral--top-close img').on('click', function(){

	$('.menu-lateral').css('opacity', 0);
	setTimeout(()=>{
		$('.menu-lateral').css('display', 'none');
	}, 200);

});

/*
* Alterar imagem do rodapé com hover
* 
* @img1 é o diretório da imagem antes
* @img2 é o diretório da imagem depois
*/
let img1 = '';
let img2 = '';
$('.rodape-bottom--right img').mouseover(function(){

	img1 = $(this).attr('src');
	img2 = $(this).data('img');

	$(this).attr('src', img2);

});
$('.rodape-bottom--right img').mouseout(function(){

	$(this).attr('src', img1);

});

/*
* Submenu
* 
* @submenu é a classe do submenu, usado para abrir o menu correto
*/
let submenu = '';
$('.menu-lateral--menu-item img').on('click', function(){

	submenu = '.'+$(this).data('submenu');

	$(submenu).slideToggle('fast');

});	

/*
* Menu da rolagem
* 
* Desce o menu ao rolar a página
*/
function rolScroll(){
	if (window.scrollY === 0) {
		$('.menu-rolagem').css('opacity', 0);
		setTimeout(()=>{
			$('.menu-rolagem').css('display', 'none');
		}, 200);
	} else {
		$('.menu-rolagem').css('opacity', 0);
		$('.menu-rolagem').css('display', 'flex');
		$('.menu-rolagem').css('opacity', 1);
	}
}
window.addEventListener('scroll', rolScroll);

});

/*
* Validar formulário da newsletter
* 
* @dados recebe o e-mail do usuário
*/
$('#newsletter').submit(function(e){

	e.preventDefault();

	dados = $(this).serialize();

	$.ajax({
		type: 'POST',
		url:'http://localhost/itv/ajax',
		data: dados,
		success:function(result){
			$('#newsletter input').val('');
			$('.mensagem p').html(result);
			$('.mensagem').show();	
		}
	});

});