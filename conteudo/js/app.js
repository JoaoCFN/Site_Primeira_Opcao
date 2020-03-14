// FUNÇÃO QUE ANIMA A ROLAGEM DO SITE PARA BAIXO COM O CLIQUE DO BOTÃO
//FAZER TRANSIÇÃO SUAVE PELO SCROLL	
function anima_rolagem() {
    // FUNÇÃO QUE CAPTURA O CLICK DO LINK DO SPAN OU 'SPAN A'
    $('span a').click(function(e) {
        // E.PREVENT PREVINE ALGO. OU SEJA, QUANDO EU CLICAR NESSE BUTÃO A AÇÃO PADRÃO DELE NÃO ACONTECE
        e.preventDefault();
        // CAPTURO O ATRIBUTO HREF QUANDO O BUTÃO FOI CLICADO
        // THIS VAI SER O ITEM QUE EU CLIQUEI

        var id = $(this).attr('href'),
            // PEGA A DISTÂNCIA ENTRE O ELEMENTO CAPTURADO E O TOPO DA PÁGINA
            // OFFSET RETORNA O TOP E O LEFT DO ELEMENTO
            // A ALTURA DO MENU É FIXA APÓS A ROLAGEM DEVIDO A FUNÇÃO DIMINUIR NAVBAR
            targetOffset = $(id).offset().top,
            menuHeight = 100


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
function cor_navbar() {

    $(window).on('scroll', function() {

        if ($(window).scrollTop()) {
            $('nav').addClass('cor_menu');

        } else {
            $('nav').removeClass('cor_menu');
        }
    })


}

// MUDA A COR QUANDO O MENU ABRE
function icone_mudar_cor() {
    if ($('nav button').click(function(e) {
            $('nav').removeClass('small').addClass('cor_menu');
        }));

}

icone_mudar_cor();
cor_navbar()

// CARREGA CLASSE QUE DIMINUI O TAMANHO DO MENU
function diminur_navbar() {

    $(window).on('scroll', function() {

        if ($(window).scrollTop()) {
            $('nav').addClass('small');


        } else {
            $('nav').removeClass('small');
        }


    })

}
// FECHA O MENU APÓS ALGUM ITEM FOR CLICADO
function fecha_menu() {
    var menu = document.getElementsByClassName("navbar-collapse");
    var icone_menu = document.getElementsByClassName("navbar-toggler");
    var clica_body = document.getElementsByTagName("body");

    // SE ALGUMA OPÇÃO DO MENU FOR CLICADA, O MENU FECHA
    if ($(menu).click(function(e) {
            $(menu).removeClass('show');
            $(icone_menu).addClass('collapsed');
            $(icone_menu).attr("aria-expanded", "false")
        }));

    // SE A PÁGINA FOR ROLADA, O MENU FECHA
    if ($(window).scroll(function(e) {
            $(menu).removeClass('show');
            $(icone_menu).addClass('collapsed');
            $(icone_menu).attr("aria-expanded", "false")
        }));

}

diminur_navbar()
fecha_menu()




// DEBOUNCE DO LODASH
// FUNÇÃO USADA DENTRO DO FRAMEWORK LODASH
// ELA SEGURA A ANIMAÇÃO DA ANIMACAO_COMSCROLL POR ALGUNS SEGUNDOS PARA MELHORAR A PERFORMANCE DO SITE
debounce = function(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this,
            args = arguments;
        var later = function() {
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
function animacao_comscroll_left() {

    // CAPTURA A CLASSE SCROLL ANIMADO
    var $target = $('.scroll_animado'),
        // CAPTURA A CLASSE SCROLL ANIMADO START
        animationClass = 'scroll_animado_start',
        offset = $(window).height() * 3 / 4;

    // FUNÇÃO QUE FAZ A ANIMAÇÃO ACONTECER
    function animeScroll() {
        // FUNÇÃO SCROLLTOP RETORNA O VALOR DA DISTÂNCIA DA POSIÇÃO DO SCROLL ATÉ O TOPO DA PÁGINA
        var documentTop = $(document).scrollTop();

        // TARGET EACH PEGA A DISTÂNCIA DE CADA ITEM E O ANIMA
        $target.each(function() {
            // PEGA A DIST ENTRE O ITEM E O TOPO
            // THIS ESTÁ SENDO REFERENTE A SCROLL ANIMADO
            var itemTop = $(this).offset().top;
            // SE A DIST DO DOCUMENTO ATÉ O TOPO FOR MAIOR QUE A DIST DO ITEM ATÉ O TOPO ELE ADICIONA A ANIMAÇÃO
            if (documentTop > itemTop - offset) {
                $(this).addClass(animationClass);
            } else {
                $(this).removeClass(animationClass);
            }
        })

    }
    animeScroll();

    // FUNÇÃO QUE CAPTURA O SCROLL
    // ENCAPSULEI A FUNÇÃO COM O DEBOUNCE QUE DÁ O ATRASO DE 80 MS
    $(document).scroll(debounce(function() {
        animeScroll();
    }, 80));
};

animacao_comscroll_left();


// JD DO FORMULARIO

function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
    document.getElementById('estado').value = ("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value = (conteudo.logradouro);
        document.getElementById('bairro').value = (conteudo.bairro);
        document.getElementById('cidade').value = (conteudo.localidade);
        document.getElementById('estado').value = (conteudo.uf);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value = "...";
            document.getElementById('bairro').value = "...";
            document.getElementById('cidade').value = "...";
            document.getElementById('estado').value = "...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
};