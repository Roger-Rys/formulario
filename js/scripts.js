$(document).ready(function(){
    var root = window.location.href;

    var widthScreen = $(window).width();
    $(":root").css("--width",(widthScreen));

    var height = $(window).height();
    $(":root").css('--height', height);

    console.log("width: "+widthScreen+"\nheight: "+height);


    if(window.location.href.indexOf("index")>-1){
        //Skill
        var skills = [
            {
                title:"Lenguajes de Marcado",
                desc:"CSS Grid / Flex, HTML"
            },
            {
                title:"Lenguajes de programación",
                desc:"PHP, JavaScript, Python, C#"
            },
            {
                title:"Base de datos",
                desc:"SQL / MySQL, Mongoos"
            },
            {
                title:"Librerias",
                desc:"Bootstrap, jQuery"
            },
            {
                title:"Framework",
                desc:"node JS, Express, Laravel, Angular"
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



        //Projects
        var post = [
            {
                title:"Tienda online",
                desc:"Uso de CSS, HTML, PHP (POO y MVC) y SQL",
                img:"tiendaOnline.png",
                url:"https://proyectojsjquery.rogerryes.repl.co/index.html",
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
        ]
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

        //Contact
        var contact = [
            {
                username:"/Roger-Rys",
                img:"github.png",  
                url:"https://github.com/Roger-Rys"
            },
            {
                username:"/roger-rys",
                img:"linkedIn.png",  
                url:"https://www.linkedin.com/in/roger-rys/"
            },
            {
                username:"roger.reyesm97",
                img:"gmail.png",  
                url:'#'
            },
            {
                username:"/Roger_Ryes",
                img:"twitter.png",  
                url:"https://twitter.com/Roger_Ryes"
            }
        ];
        
        var html = "";
        contact.forEach((item, index) => {
            if( (index%2)==0 || index == 0 ){ html+='<div class="row">';}
                html += `<div class="col-md-6 text-center">
                            <img class="contact-img" alt="Bootstrap Image Preview" src="assets/img/${item.img}">
                            <p class="text-center">
                                <a id="contact${index}" target=_blank href="${item.url}">${item.username}</a>
                            </p>
                        </div>`;
            if( index%2==1 ){ html+='</div>';}
        });
        $("#content-contact").append(html); 
        
        $("#contact2").click(()=>{
            $("#contact2").attr("target","").attr("href","index.html#contact");
            alert("Send me a email");
        });
        
    }
});