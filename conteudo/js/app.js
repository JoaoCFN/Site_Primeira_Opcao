// FUNÇÃO QUE ANIMA A ROLAGEM DO SITE PARA BAIXO COM O CLIQUE DO BOTÃO
	//FAZER TRANSIÇÃO SUAVE PELO SCROLL	
function anima_rolagem(){
	// FUNÇÃO QUE CAPTURA O CLICK DO LINK DO SPAN OU 'SPAN A'
	$('span a').click(function(e) {
		// E.PREVENT PREVINE ALGO. OU SEJA, QUANDO EU CLICAR NESSE BUTÃO A AÇÃO PADRÃO DELE NÃO ACONTECE
		e.preventDefault();
		// CAPTURO O ATRIBUTO HREF QUANDO O BUTÃO FOI CLICADO
		// THIS VAI SER O ITEM QUE EU CLIQUEI
		var id = $(this).attr('href'),
			// PEGA A DISTÂNCIA ENTRE O ELEMENTO CAPTURADO E O TOPO DA PÁGINA
			// OFFSET RETORNA O TOP E O LEFT DO ELEMENTO
			// INNER HEIGHT PEGA A ALTURA DO MENU
			targetOffset = $(id).offset().top,
			menuHeight = $('nav').innerHeight();
		
		// SELECIONO O HTML E O BODY PARA ANIMAR
		$('html, body').animate({
			// SCROLLTOP ANIMA O DESLIZE
			// 500 É A QUANTIDADE DE TEMPO EM MS
			// É NECESSÁRIO SUBTRAIR O TAMANHO DO MENU PARA A DESCIDA SER AJUSTADA
			// +1 SERVE PARA FAZER O AJUESTE IDEAL DA LINHA
			
			scrollTop: (targetOffset - menuHeight) + 1
		}, 500)
	});
}

anima_rolagem()


// FUNÇÃO ATIVA A COR DO NAVBAR QUANDO A PÁGINA É ROLADA PARA BAIXO
	// PEGA A ATIVAÇÃO DO SCROLL E FAZ UMA ADIÇÃO DE CLASSE CASO ESTEJA ROLANDO E REMOVE QUANDO VOLTA AO TOPO 
function cor_navbar(){
	
	$(window).on('scroll', function(){

		if ($(window).scrollTop()){
			$('nav').addClass('cor_menu');

		}
		else {
			$('nav').removeClass('cor_menu');
		}
	})

	// MUDA A COR QUANDO O MENU ABRE
	function icone_mudar_cor(){
		if ($('nav button').click(function(e){
			$('nav').removeClass('small').addClass('cor_menu');	
		}));

	}
	icone_mudar_cor();
}

cor_navbar()

function diminur_navbar(){
	
	$(window).on('scroll', function(){

		if ($(window).scrollTop()){
			$('nav').addClass('small');

		}
		else {
			$('nav').removeClass('small');
		}

	})

}


// DEBOUNCE DO LODASH
// FUNÇÃO USADA DENTRO DO FRAMEWORK LODASH
// ELA SEGURA A ANIMAÇÃO DA ANIMACAO_COMSCROLL POR ALGUNS SEGUNDOS PARA MELHORAR A PERFORMANCE DO SITE
debounce = function(func, wait, immediate){
	var timeout;
	return function(){
		var context = this, args = arguments;
		var later = function(){
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};

// FUNÇÃO DA ANIMAÇÃO COM O SCROLL
function animacao_comscroll_left(){

	// CAPTURA A CLASSE SCROLL ANIMADO
	var $target = $('.scroll_animado'),
		// CAPTURA A CLASSE SCROLL ANIMADO START
		animationClass = 'scroll_animado_start',
		offset = $(window).height() * 3/4;

	// FUNÇÃO QUE FAZ A ANIMAÇÃO ACONTECER
	function animeScroll(){
		// FUNÇÃO SCROLLTOP RETORNA O VALOR DA DISTÂNCIA DA POSIÇÃO DO SCROLL ATÉ O TOPO DA PÁGINA
		var documentTop = $(document).scrollTop();
		
		// TARGET EACH PEGA A DISTÂNCIA DE CADA ITEM E O ANIMA
		$target.each(function(){
			// PEGA A DIST ENTRE O ITEM E O TOPO
			// THIS ESTÁ SENDO REFERENTE A SCROLL ANIMADO
			var itemTop = $(this).offset().top;
			// SE A DIST DO DOCUMENTO ATÉ O TOPO FOR MAIOR QUE A DIST DO ITEM ATÉ O TOPO ELE ADICIONA A ANIMAÇÃO
			if (documentTop > itemTop - offset){
				$(this).addClass(animationClass);	
			}
			else{
				$(this).removeClass(animationClass);
			}
		})

	}
	animeScroll();

	// FUNÇÃO QUE CAPTURA O SCROLL
	// ENCAPSULEI A FUNÇÃO COM O DEBOUNCE QUE DÁ O ATRASO DE 80 MS
	$(document).scroll(debounce(function(){
		animeScroll();
	}, 80));
};

animacao_comscroll_left();

function aaa(){
	// Ativa a função toda vez que o usuário utilizar o scroll
	// Usa o debounce da biblioteca lodash, para evitar excessivos disparos da função ao scroll. Assim a função só vai disparar a cada 200ms, o tempo é informado ao final da função.
	$(window).on('scroll', _.debounce(function() {
	    
	    // Seleciona a navegação
	    // Identifica o tamanho total do menu
	    // Verifica a distância entre o scroll e o topo
	    var $nav = $('nav'),
	            navHeight = $nav.outerHeight(),
	            windowTop = $(this).scrollTop();
	    
	    // Verifica quando a distância do scroll for maior que o tamanho total do menu
	    if (windowTop > navHeight) {
	        // Adiciona a classe small ao menu
	        $('nav').addClass('small');
	    } else {
	        // Remove a classe small do menu
	        $('nav').removeClass('small');
	    }
	}, 200));	
}
aaa()
