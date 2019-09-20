<template>
        <div class="container-fluid">
        <div class="card card-primary card-outline">
              <div class="card-header">
                    
               <div class="row">   
                        <div class="col-md-11"><h3>LISTA <b>USUARIOS</b></h3></div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-block btn-primary btn-sm" data-toggle="modal" data-target="#adduser"><i class="fas fa-user-plus"></i> Agregar</button>
                        </div>
                    </div>
              </div>
              <div class="card-body">
         <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Tipo</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John </td>
                            <td>Doe</td>
                            <td>emial@emial.com</td>
                            <td>User</td>
                            <td>activo</td>
                            <td>
                                <a class="add" title="" data-toggle="tooltip" data-original-title="Add"><i class="fas  fa-info moradoviva"></i></a> |
                                <a class="edit" title="" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-edit verdeviva"></i></a> |
                                <a class="delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="fas fa-trash red"></i></a>
                            </td>
                        </tr>  
                    </tbody>
                </table>
              </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="adduserLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adduserLabel">NUEVO </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Agregar</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
