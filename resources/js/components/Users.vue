<template>
        <div class="container-fluid">
        <div class="card">
              <div class="card-header">
               <div class="row">
                                <div class="col-md-11"><h2>LISTA <b>USUARIOS</b></h2></div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-info verdeviva "><i class="fas fa-user-plus"></i></button>
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
