'use strict'
$(document).ready(function(){
    // About me
    var aboutMe = `
        <!--Acerca de-->

        <a href="#aboutMe">			
            <h3 id="title-secondary" class="text-left padding-little">
                Sobre Mi
            </h3>
        </a>
        <p class="text-justify">
            Hola!!! Me llamo Roger Reyes y soy un desarrollador web full-stack, en constante aprendizaje y con el deseo de desarrollar grandes proyectos para solucionar problemas.
            Dispuesto a trabajar en grupo para lograr objetivos mutuos. 
        </p>
        
        <div class="row">
            <div class="col-md-12 text-center">
                <img id="my-picture" alt="Bootstrap Image Preview" src="assets/img/perfil.png" class="rounded-circle">
            </div>
        </div>`;
    $('.aboutMe').append(aboutMe);


    var skill = `
        <a href="#aboutMe">
            <h3 id="title-secondary" class="text-center text-white padding-little">
                Habilidades
            </h3>
        </a>
        <div class="skill-desc"></div>
        `;
    $(".skill").append(skill);


    //Skill
    var skills = [
        {
            title:"Lenguajes de Marcado",
            desc:"CSS Grid / Flex, HTML"
        },
        {
            title:"Lenguajes de programación",
            desc:"PHP, JavaScript, Python, C#, Java EE"
        },
        {
            title:"Base de datos",
            desc:"SQL / MySQL server, Mongoos"
        },
        {
            title:"Librerias",
            desc:"Bootstrap, jQuery"
        },
        {
            title:"Framework",
            desc:"node JS, Express, Laravel, Angular"
        },
        {
            title:"Sistemas Operativos",
            desc:"Windows Server, CentOS, Ubuntu"
        },
        
    ];
    
    var html = "";
    skills.forEach((item, index) => {
        if( (index%2)==0 || index == 0 ){ html+='<div class="row">';}
            html += `<div class="col-md-6 text-center">
                        <h3>${item.title}</h3>
                        <p class="text-center">
                            ${item.desc}
                        </p>
                    </div>`;
        if( index%2==1 ){ html+='</div><br><br>';}
    });
    $(".skill-desc").append(html);

});