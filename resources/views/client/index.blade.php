{{--<!DOCTYPE html>
<html lang="en">
    

    <head>
        <title>Laravel 8 Datatables Tutorial - ItSolutionStuff.com</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    </head>

    <body>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <div class="container">
            <table id="example" class="table table-striped" style="width:100%">
                
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Adress</th>
                        <th>Created at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        <div>
    </body>

    <script type="text/javascript">
        $(document).ready(function(){ 
            // $.ajaxSetup({
            //     headers: {
            //         'X-CRSF_TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
        
            var table = $('#example').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('clientView')}}",
                columns: [
                    {data: 'id',name: 'id'},
                    {data: 'name',name: 'name'},
                    {data: 'email',name: 'email'},
                    {data: 'adress',name: 'adress'},
                    {data: 'created_at',name: 'created_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
            });

            // $('body').on('click', '.delete', function(){
            //     if(confirm("Delete Record?") == true){
            //         var id = $(this).data('id');
            //         //ajax
            //         $.ajax({
            //             type: "POST",
            //             url: "{{ url('')}}",
            //             data: {
            //                 id: id
            //             },
            //             dataType: 'json',
            //             success: function(res){
            //                 var oTable = $('#datatable-crud').dataTable();
            //                 oTable.fnDraw(false);
            //             }
            //         })
            //     }
            // });
        });
    <script>
</html>--}}

<!DOCTYPE html>
    <html>
        <head>
            <title>project</title>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
            <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
            <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
            <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        </head>

        <body>
            <div class="container-fluid">
                <h1> Mon projet</h1>
                <hr>

                <h3 class="mt-5 text-primary">Ajouter client</h3>
                <form id="addClient">
                    @csrf
                    <label>Name</label>
                    <input type="text" name="name">

                    <label>Email</label>
                    <input type="email" name="email">

                    <label>Adresse</label>
                    <input type="text" name="address">

                    <button type="submit" class="btn btn-primary mb-3">add client</button>
                </form>
                <hr>
                <h3 class="mt-3">Liste des clients</h3>
                <table class="table table-bordered data-table mb-3" id="ex">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Adress</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <div id="editForm">
                    <hr>
                    <h3 class="mt-5 text-warning">Modifier client</h3>
                    <form id="editClient">
                        @csrf

                        <label>Id</label>
                        <input type="text" name="id" id="id">

                        <label>Name</label>
                        <input type="text" name="name" id="name">
    
                        {{-- <label>Email</label>
                        <input type="email" name="email" id="email">
    
                        <label>Adresse</label>
                        <input type="text" name="address" id="address"> --}}
    
                        <button type="submit" class="btn btn-warning mb-3">update client</button>
                    </form>
                </div>
            </div>
        </body>
   
        <script type="text/javascript">
            $(function(){
                $('#editForm').hide();
                var table = $('#ex').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('clientView')}}",
                    columns: [
                        {data: 'id',name: 'id'},
                        {data: 'name',name: 'name'},
                        {data: 'email',name: 'email'},
                        {data: 'address',name: 'address'},
                        {data: 'created_at',name: 'created_at'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ],
                });
            
                //$('#loader').hide();
                $('#addClient').submit(function(){
                    event.preventDefault();
                    //$('#loader').fadeIn();
                    $.ajax({
                        type: 'POST',
                        url: 'create',
                        //enctype: 'multipart/form-data',
                        data: $('#addClient').serialize(),
                        datatype: 'json',
                        success: function (data){
                            console.log(data)
                            if (data.status)
                            {
                                Swal.fire({
                                    icon: "success",
                                    title: data.title,
                                    text: data.msg,
                                }).then(() => {
                                    // if (data.redirect_to != null){
                                    //     window.location.assign(data.redirect_to)
                                    // } else{
                                    // }
                                    $('#addClient').trigger("reset");
                                    table.draw();
                                })
                            }else{
                            //   $('#loader').hide();
                            Swal.fire({
                                title: data.title,
                                text:data.msg,
                                icon: 'error',
                                confirmButtonText: "Ok",
                                confirmButtonColor: 'blue',
                            })
                            }
                        },
                        error: function (data){
                            console.log(data)
                            // $('#loader').hide();
                            Swal.fire({
                                icon: "error",
                                title: "error",
                                text: "server error",
                                timer: 3000,
                            })
                        }
                    });
                    return false;
                });

                $('body').on('click', '.editProduct', function () {

                    var id = $(this).data('id');
                    $('#id').val(id);
                    $('#editForm').show();
                });

                $('#editClient').submit(function(){
                    event.preventDefault();
                    //$('#loader').fadeIn();
                    $.ajax({
                        type: 'POST',
                        url: 'update',
                        //enctype: 'multipart/form-data',
                        data: $('#editClient').serialize(),
                        datatype: 'json',
                        success: function (data){
                            console.log(data)
                            if (data.status)
                            {
                                Swal.fire({
                                    icon: "success",
                                    title: data.title,
                                    text: data.msg,
                                }).then(() => {
                                    // if (data.redirect_to != null){
                                    //     window.location.assign(data.redirect_to)
                                    // } else{
                                    // }
                                    $('#editForm').hide();
                                    table.draw();
                                })
                            }else{
                                //$('#loader').hide();
                                Swal.fire({
                                    title: data.title,
                                    text:data.msg,
                                    icon: 'error',
                                    confirmButtonText: "Ok",
                                    confirmButtonColor: 'blue',
                                })
                            }
                        },
                        error: function (data){
                            console.log(data)
                            // $('#loader').hide();
                            Swal.fire({
                                icon: "error",
                                title: "error",
                                text: "server error",
                                timer: 3000,
                            })
                        }
                    });
                    return false;
                });

                $('body').on('click', '.deleteProduct', function () {
                    var id = $(this).data("id");
                    // confirm("Are You sure want to delete !");

                    Swal.fire({
                        icon: "question",
                        confirmButtonText: "yes",
                        confirmButtonColor: 'red',
                        CancelButtonText: "no",
                        CancelButtonColor: 'blue',
                        title: "DELETE",
                        text: "Are You sure want to delete?",
                    }).then(() => {
                        $.ajax({
                            type: "post",
                            url: "delete",
                            data: {id: id , _token:"z9MXdRBNx9cxPVIOoXdzgFqKqjnmHib1IxunHmrI"},
                            datatype: 'json',
                            success: function (data) {
                                Swal.fire({
                                    icon: "success",
                                    title: data.title,
                                    text: data.msg,
                                }).then(() => {
                                    table.draw();
                                })
                            },
                            error: function (data) {
                                console.log('Error:', data);
                            }
                        });
                    })
                });
            });
        </script>
    </html>