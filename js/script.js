

$(document).ready(function() {
alert('teste');
  $(".li-pai").click(function(){
    $(this).find('ul').slideToggle();
    $(this).addClass('active');
    $('.li-pai').not(this).find('ul').slideUp();
    $('li').not(this).removeClass('active');
  });

  $("#btn-send").click(function(){
    fluxo();
  });

  $(".contact-online").click(function(){
    $(this).hide();
    $(".box-message").fadeIn();
  });

  $(".ven-truck").hide();
  $(".none-truck").hide();
  $('.none-car').hide();

  $("#li-truck").click(function(){
    $(".none-car").slideUp();
    $('.none-truck').slideDown();
  });
  $("#li-car").click(function(){
    $('.none-truck').slideUp();
    $('.none-car').slideDown();
  })
  $("#add-truck").click(function(){
    $(".ven-car").hide();
    $(".ven-truck").fadeIn();
  });
  $("#add-car").click(function(){
    $(".ven-truck").hide();
    $(".ven-car").fadeIn();
  });

  $(".toggle-button").click(function(){
    $(".menu-mobile").addClass('active');
  });
  $(".close").click(function(){
    $('.menu-mobile').removeClass('active');
  });
 
  $("#celular").mask('(99)99999-9999');
});

const buttons = document.querySelectorAll('.button');

// Adiciona o evento de clique a cada botão
buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove a classe "active" de todos os botões
    buttons.forEach(b => b.classList.remove('active'));

    // Adiciona a classe "active" ao botão clicado
    button.classList.add('active');
  });
});

//nav fixed quando der scroll
const nav = document.getElementById('nav');

window.addEventListener('scroll', () => {
  if (window.scrollY > 0) {
    nav.classList.add('nav-fixed');
  }else{
    nav.classList.remove('nav-fixed');
  }
 
});

function clicar(id){
  alert(id);
}

var i = 0;
var txt = 'Consultar os débitos do seu veículo nunca foi tão fácil! Agora, tudo está na palma da sua mão!';
var txt2 = 'Eu posso te ajudar com isso!';

var speed = 40;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("anim-typewriter").innerHTML += txt.charAt(i);
    document.getElementById("anim-typewriter2").innerHTML += txt2.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

window.onload = function() {
  typeWriter();
}

function ocutar(){
  $('.menu-mobile').removeClass('active');
}

function focu(){
  document.getElementById('placa').focus();
}

function fecharmsg(){
  $('.msg').fadeOut();
}

function fecharmessage(){
  $(".box-message").hide();
  $(".contact-online").fadeIn();
  $(".banner").hide();
}

function eupreciso(){
  $("#preciso").hide();
  additen('Eu preciso','resposta');
  $("#message").focus();
  setTimeout(function(){
    additen('Ótimo, é um prazer lhe ajudar. Qual é o seu nome?', 'pergunta');
    $(".footer").addClass('footer-ative');
  }, 1500);
}

function additen(message, classe){
  lista = $("#lista-message");
  lista.append("<li class="+classe+">"+message+"</li>");
}

// seleciona o input
const messageinput = document.getElementById("message");

// adiciona um ouvinte de evento keydown
messageinput.addEventListener("keydown", function(event) {
  // verifica se a tecla pressionada foi a tecla "Enter" (código 13)
  if (event.keyCode === 13) {
    // chama a função que você quer quando a tecla Enter for pressionada
    fluxo();
  }
});

cont = 1;
nome = '';
telefone = '';
texto = '';

function fluxo(){
    let txt = $("#message").val();
    $("#message").val('');
    additen(txt,'resposta');
    $("#message").focus();
    let div = $("#body-message");
    div.scrollTop(div.prop("scrollHeight"));
    setTimeout(function(){
    if(cont == 1){
      nome = txt;
      additen('Ok, agora me passa o número do seu whatsapp.', 'pergunta');
      $("#message").mask('(99)99999-9999');
    }else if(cont == 2){ 
      telefone = txt;
      additen('Certo, obrigado pelas informações, em que posso ajudar?');
      $("#message").unmask();
    }else if(cont > 2){
      texto = txt;
      additen('Ótimo, estou encaminhando sua mensagem agora para um de nossos consultores, e ele irá te atender! Se preferir, você pode encaminhar esses dados pro nosso whatsapp agora.');
      $("#body-message").append("<button class='enviaragora' onclick='enviarwhats();'>Enviar Whats</button>");
    }
    cont++;
    let div2 = $("#body-message");
    div2.scrollTop(div2.prop("scrollHeight"));
    
    }, 1000);
      
}

function enviarwhats(){
    txtwhats = 'Olá, sou '+ nome + ', Pode me ajudar com essa dúvida? ' + texto;
    txtwhats = txtwhats.trim();
    txtwhats = txtwhats.replace(/ /g, "%20");

    // Cria o link com o número do telefone e a mensagem
    var link = "https://wa.me/5511964477746?text=" + txtwhats;

    // Abre uma nova guia no navegador com o link
    window.open(link);
}