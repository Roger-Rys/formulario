'use strict'

$(document).ready(function(){
    var form = `
    <!--Formulario-->
    <div class="col-md-6">
        <form role="form">
            <div class="form-group padding-little">
                
                <label for="exampleInputEmail1">
                    Direccion Email
                </label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Escribir direccion email">
            </div>
            <div class="form-group">
                
                <label for="exampleInputPassword1">
                    solicitud
                </label><br>
                <textarea cols="45" rows="10" placeholder="Escribir solicitud"></textarea>
                
            </div>
            <div class="text-center">
                <button type="submit" class="language btn btn-outline-danger btn-lg">
                    Enviar solicitud
                </button>
            </div>
        </form>
    </div>`;
    $(".contact-info").append(form);
});