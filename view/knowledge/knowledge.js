'use strict'

$(document).ready(function(){
    var knowledge = `
    <!--Experiencia-->
    <div id="styleWGB" class="col-md-12">
        <a  href="#experience">
            <h3 class="text-center padding-little-wrap">
                Proyectos
            </h3>
        </a>
        <div class="col-md-12">
            <!--Relation-->
            <div id="experiences_lists" class="row">

            </div>
        </div>
    </div>`;

    //Projects
    var post = [
        {
            title:"Tienda online",
            desc:"Uso de CSS, HTML, PHP (POO y MVC) y SQL",
            img:"tiendaOnline.png",
            url:"https://tiendaonliphppoomvc.rogerryes.repl.co/",
            urlGit:"https://github.com/Roger-Rys/proyecto_JS_jQuery"
        },
        {
            title:"Bloc",
            desc:"Uso de Bootstrap, jQuery, responsive design",
            img:"bloc.png",
            url:"https://proyectojsjquery.rogerryes.repl.co/index.html",
            urlGit:"https://github.com/Roger-Rys/proyecto_JS_jQuery"

        },
        {
            title:"Pagina Geolocalizador de dispositivoss",
            desc:"Uso de CSS, HTML, JS, PHP, JSON, Mapbox y SQL",
            img:"rastreador.png",
            url:"https://proyectojsjquery.rogerryes.repl.co/index.html",
            urlGit:"https://github.com/Roger-Rys/proyecto_JS_jQuery"
        }
    ];

    $("#experience").append(knowledge);

    post.forEach((item, index)=>{
        var experience=`
        <div class="col-md-4">
            <div id="styleWRB" class="card">
                <img class="card-img-top" alt="Bootstrap ${index}" src="assets/img/${item.img}">
                <div class="card-block">
                    <h3 class="card-title">
                        ${item.title}
                    </h3>
                    <p class="card-text">
                        ${item.desc}
                    </p>
                    <p>
                        <a class="btn" target=_blank href="${item.url}">Ver pagina</a>
                        <a class="btn" target=_blank href="${item.urlGit}">Repositorio Githube</a>
                    </p>
                </div>
            </div>
        </div>
        `;

        $("#experiences_lists").append(experience);
    });   
});