'use strict'

$(document).ready(function(){
    var links = `
    <!--Links-->
    <div id="content-contact" class="col-md-6">
        <a href="#contact">
            <h3 id="title-secondary" class="text-center padding-little">
                Contactame
            </h3>
        </a>
    </div>`;

    $(".contact-info").append(links);

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
});