$(document).ready(function(){


    
    //Table
    var table = $('#grades').DataTable({
        autoWidth: false,
        scrollX: true,
        "processing": true,
        "deferRender": true,
        "ajax": {
            "url": "/students-grades/data",
            "dataSrc": ""
        },

        "columns": [
            { "data": "id" },
            { "data": "section" },
            { "data": "student.name"  },
            { "data": "grade.name"  },
            {   "defaultContent" : '<button type="button" class="btn btn-primary editBtn" data-toggle="modal" data-target="#modalUpdate"><span class="fas fa-edit" aria-hidden="true"></span> Editar</button>'+
                                '<button type="button" class="btn btn-danger deleteBtn" data-toggle="modal" data-target="#modalDelete"><span class="fas fa-trash-alt" aria-hidden="true"></span></button>'
            },
        ],

        "order": [[ 0, "desc" ]],
        "language": {
            processing: '<i class="fas fa-spinner fa-pulse fa-3x fa-fw" style="margin:30px;"></i><span class="sr-only">Cargando...</span> ',
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No se han encontrado registros",
            "info": "Mostrando la página _PAGE_  de  _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search" : "Buscar en los registros",
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
                }
        }
    });    

    //Editar
    $('#grades tbody').on( 'click', '.editBtn', function () {
        var data = table.row( $(this).parents('tr') ).data(); //Obtenemos los datos del registro de la fila actual

        $("#modalUpdate").trigger("reset");

        $("#sectionUpdate").val(data["section"]);
        $("#studentUpdate").val(data["student"]["id"]);
        $("#gradeUpdate").val(data["grade"]["id"]);
        $("#hidden").val(data["id"]);
    });

    $('#grades tbody').on( 'click', '.deleteBtn', function () {
        var data = table.row( $(this).parents('tr') ).data(); //Obtenemos los datos del registro de la fila actual
    
        $("#modalDelete").trigger("reset");
    
        $("#hiddenDelete").val(data["id"]);
    });
    

    
    
    
    
    
    
    
    
    
    
    
    })