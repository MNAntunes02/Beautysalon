// Função para rolar suavemente para uma seção
function scrollToSection(elementId) {
    const section = document.getElementById(elementId);
    if (section) {
      section.scrollIntoView({ behavior: 'smooth' });
    }
  }
  
  // Adicionando um event listener para cada link do menu
  const links = document.querySelectorAll('nav a');
  links.forEach(link => {
    link.addEventListener('click', (event) => {
      event.preventDefault();   
   // Impede o comportamento padrão do link
      const targetId = link.getAttribute('href').substring(1);   
   // Obtém o ID da seção
      scrollToSection(targetId);
    });
  });
//-----------------------------------------------------------------------------------

document.addEventListener("DOMContentLoaded",()=>{
    const abrirConfig = document.getElementById("abrirConfig");
    const body =  document.getElementById("body");

    abrirConfig.addEventListener("click",()=>{
        const nav = document.getElementById("nav");

        nav.classList.toggle('active');

        if(nav.classList.contains('active')){
            abrirConfig.style.backgroundImage = "url('images/Icons/close.svg')";
            abrirConfig.style.position = "fixed";
            body.style.overflowY = "hidden";
        }else{
            abrirConfig.style.backgroundImage = "url('images/Icons/menu.svg')";
            abrirConfig.style.position = "";
            body.style.overflowY = "scroll";
        }
    });

    const targetElement = document.querySelector('target');

    if(targetElement){
        const elemento = "#" + targetElement.getAttribute('target');
        const targetDiv = document.querySelector(elemento);

        if(targetDiv){
            const divScroll = targetDiv.offsetTop;

            window.scrollTo({
                top: divScroll,
                behavior: 'smooth'
            });
        }
    }

    let cont = 1;
    let maxDP = document.querySelectorAll('.DP').length;

    const radio1 = document.getElementById('radio1');
    const radio2 = document.getElementById('radio2');
    const radio3 = document.getElementById('radio3');

    function proximoDp(){
        cont++;

        if(cont > maxDP){
            cont = 1;
        }

        document.getElementById(`radio${cont}`).checked = true;
    }

    function verificarIndice(){
        radio1.addEventListener('click',()=>{
            cont = 1;
        });

        radio2.addEventListener('click',()=>{
            cont = 2;
        });
        
        radio3.addEventListener('click',()=>{
            cont = 3;
        });
    }

    let auto_btns = document.querySelectorAll('.auto-btns');

    function trocarCorBtn(){
        auto_btns.forEach((element,index)=>{

            element.style.backgroundColor = "";

            if(radio1.checked && index === 0){
                element.style.backgroundColor = "var(--color-secondary)";
            }else if(radio2.checked && index === 1){
                element.style.backgroundColor = "var(--color-secondary)";
            }else if(radio3.checked && index === 2){
                element.style.backgroundColor = "var(--color-secondary)";
            }
        });
    }


    setInterval(()=>{
        trocarCorBtn();
        verificarIndice();
    },100);

    setInterval(()=>{
        proximoDp();
    },5000);
});
