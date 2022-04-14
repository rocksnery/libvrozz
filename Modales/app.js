console.log('esto es javaScript desde app.js');

$(document).ready(function(){

    console.log('estoy trabajando con jquery');
    let editar=false;
    leerTareas();
    $(document).on('click','.crear-modal',function(){
        editar=false;
        $('#idform').val(``);
        $('#nombre').val(``);
        $('#apaterno').val(``);
        $('#amaterno').val(``);
        $('#exampleModal').modal('show');
    });
    $('#buscar').keyup(function(e){
        let buscar= $('#buscar').val();
        //console.log(buscar);

        $.ajax({

            url: 'consulta.php',
            type: 'POST',
            data: {buscar},
            success: function(response){

                let respuesta = JSON.parse(response);
                let template='';
                respuesta.forEach(respuesta =>{
                    template+=` <li> ${respuesta.nombre} ${respuesta.ap} </li>`
                });

                $('#contenedor').html(template);
            }

        });

    });

    function leerTareas(){
        $.ajax({
            url:'lista-prov.php',
            type:'GET',
            success: function(response){

                let respuesta=JSON.parse(response);
                let template='';

                respuesta.forEach(resp => {

                    template+=`
                    <tr id_prov="${resp.id}">
                        <td>${resp.id}</td>
                        <td> <a href="#" class="nom-item"> ${resp.nombre} </a> </td>
                        <td> ${resp.ap}</td>
                        <td> ${resp.am}</td>
                        <td> <button class="borra-prov btn btn-danger"> Eliminar </button>  <button class="nom-item btn btn-danger"> Modificar </button> </td>
                    </tr>`
                });
                $('#id-tabla').html(template);
            }

        });
    }

    $(document).on('click','.borra-prov',function(){
        if(confirm('estas seguro que deseas eliminar el Usuario?')){
            console.log('boton presionado');
            console.log($(this));
            let elemento=$(this)[0].parentElement.parentElement;
            console.log(elemento);
            let id=$(elemento).attr('id_prov');
            console.log(id);

            $.post('borra-prov.php',{id},function(response){
                console.log(response);
                leerTareas();
            });
        }
    });

    $('#id-form-prov').submit(function(e){
        const postDatos={
            nombre: $('#nombre').val(),
            apaterno: $('#apaterno').val(),
            amaterno: $('#amaterno').val(),
            id: $('#idform').val()
        };

       
        let url= editar===false ? 'agregar-prov.php' : 'modificar-prov.php';
        console.log(url);
        editar=false;

        console.log(postDatos);        
        $.post(url,postDatos,function(response){
            console.log(response);
            leerTareas();
            $('#id-form-prov').trigger('reset');
        });
        e.preventDefault();

    });

    $(document).on('click','.nom-item',function(){
        let elemento=$(this)[0 ].parentElement.parentElement;
        console.log(elemento);

        let id=$(elemento).attr('id_prov');

        $.post('filtra-prov.php',{id},function(response){

            let respuesta=JSON.parse(response);
            $('#idform').val(respuesta.id);
            $('#nombre').val(respuesta.nombre);
            $('#apaterno').val(respuesta.ap);
            $('#amaterno').val(respuesta.am);
            

            editar=true;
            $('#exampleModalLabel').html(`Modificar`);
            $('#exampleModal').modal('show');
            
        });
    });

    $('#btnbuscar').on('click',function(e){

        let buscar = $('#buscar').val();
        console.log(buscar);
        $.ajax({
            url:'consulta.php',
            type:'POST',
            data: {buscar},
            success: function(response){ 
                let respuesta = JSON.parse(response);
                //console.log(respuesta);
                let template='';
                respuesta.forEach(respuesta => {
                    template+=`
                        <tr id_prov="${respuesta.id}">
                            <td> ${respuesta.id} </td>
                            <td> <a href='#' class="nom-item">${respuesta.nombre} </a></td>
                            <td> ${respuesta.ap} </td>
                            <td> ${respuesta.am} </td>
                            <td> <button class="borra-prov btn btn-danger"> Eliminar </button>  <button class="modificar-prov btn btn-danger"> Modificar </button> </td>
                            
                        </tr>`
                });
                $('#id-tabla').html(template);
            }
        });
    });
});