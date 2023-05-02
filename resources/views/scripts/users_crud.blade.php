<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    $("button#addUser").click(function(e) {
        e.preventDefault();
        $('.modal-title').html($(this).data("title"));

        // var role_id = $("input[name=role_id]").val();
        // var name = $("input[name=name]").val();
        // var email = $("input[name=email]").val();
        // var username = $("input[name=username]").val();
        // var role_id = $("#role_id").val();
        // var division_id = $("#division_id").val();


        var email = $("#usersAddModal input[name=email]").val();
        var name = $("#usersAddModal input[name=name]").val();
        var designation = $("#usersAddModal input[name=designation]").val();
        var username = $("#usersAddModal input[name=username]").val();
        var role_id = $("#usersAddModal select[name=role_id]").val();

        var id = $("#usersAddModal #id").val();
        var office_id = $("#usersAddModal #office_id").val();
        var division_id = $("#usersAddModal #division_id").val();

        $(this).text('Adding...');

        $.ajax({
            type: 'POST',
            url: "{{ route('store.user') }}",
            data: {

                email: email,
                name: name,
                designation: designation,
                username: username,
                role_id: role_id,
                id: id,
                office_id: office_id,
                division_id: division_id

            },
            success: function(data) {


                if (data.status == 200) {
                    Swal.fire(
                        'Added!',
                        data.msg,
                        'success'
                    )
                    fetchAllUsers();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: data.msg,
                        text: 'Something went wrong!',
                    })
                }

                $("button#addUser").text('Add User');
                $("#addUserForm")[0].reset();
                $("#usersAddModal .close").click()
            }
        });
    });



    // edit employee ajax request
    $(document).on('click', '.editIcon.editUser', function(e) {
        e.preventDefault();
        $('.modal-title').html($(this).data("title"));

        let id = $(this).attr('id');
        $('#editEmployeeForm #id').val(id);

        let str = '{{ route('users.user.edit', ['id' => ':id']) }}';
        let url = str.replace(/:id/g, id);

        // $('#division_id.selectpicker').selectpicker('val', response.recepients);
        
        $.ajax({
            url: url,
            method: 'get',
            data: {
                id: id,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                $('#role_id.selectpicker').selectpicker('val', response.roles);

                for (let x in response.user) {

                    var el = document.querySelector('#updateUser');
                    // el.setAttribute('id', id);

                    if (x.search("_id") < 0){
                        
                        
                        $("#editUserModal #" + x).val(response.user[x]);

                    }
                    else {
                        name = x.replace('_id', '');
                        console.log(x);

                        if(x === "division_id") $('#editUserModal #division_id option[value='+response.user[x]+']').prop('selected', 'selected').change();
                        else if(x === "office_id") $('#editUserModal #office_id option[value='+response.user[x]+']').prop('selected', 'selected').change();
                        else {
                            $("#editUserModal input[name='" + x + "'").val(response.user[x]);
                            $("#editUserModal #" + x).val(response[name]);
                        }

                    }
                }
            }
        });
    });

    // update employee ajax request

    $("button#updateUser").click(function(e) {
        e.preventDefault();

        var email = $("#editUserModal input[name=email]").val();
        var name = $("#editUserModal input[name=name]").val();
        var designation = $("#editUserModal input[name=designation]").val();
        var username = $("#editUserModal input[name=username]").val();
        var role_id = $("#editUserModal select[name=role_id]").val();

        // var el = document.querySelector("button#updateUser");
        var id = $("#editUserModal #id").val();
        var office_id = $("#editUserModal #office_id").val();
        var division_id = $("#editUserModal #division_id").val();

        $(this).text('Updating...');

        $.ajax({
            type: 'POST',
            url: "{{ route('update.user') }}",
            data: {

                email: email,
                name: name,
                designation: designation,
                username: username,
                role_id: role_id,
                id: id,
                office_id: office_id,
                division_id: division_id

            },
            method: 'put',
            success: function(data) {
                if (data.status == 200) {
                    Swal.fire(
                        'Updated!',
                        data.smg,
                        'success'
                    )
                    fetchAllUsers();
                }
                // $("#editUserModal").modal('hide');
                $("button#updateUser").text('Update User');
                $("#editUserModal .close").click()

            }
        });
    });

    // delete employee ajax request
    $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id').replace('del_','');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('delete.user') }}",
                    method: 'delete',
                    data: {
                        id: id,
                        _token: csrf
                    },
                    success: function(response) {
                        Swal.fire(
                            'Deleted!',
                            'User Has been deleted.',
                            'success'
                        )
                        fetchAllUsers();
                    }
                });
            }
        })
    });

    // fetch all employees ajax request
    fetchAllUsers();

    function fetchAllUsers() {
        
        $.ajax({
            url: "{{ route('fetchAll.users') }}",
            method: 'get',
            success: function(response) {
                $("#show_all_users").html(response);
                var table = $('#all_divisions').DataTable({
                    "order": [
                        [0, "desc"]
                    ],
                    // columnDefs: [{
                    //         "targets": [0],
                    //         "visible": false,
                    //         "searchable": false
                    //     },
                    //     {
                    //         orderable: false,
                    //         targets: [2]
                    //     }
                    // ]
                });

                table.columns().iterator('column', function(ctx, idx) {
                    $(table.column(idx).header()).prepend('<span class="sort-icon"/>');
                });
            }
        });
    }
    // -----------------------------------------------------------------
    fetchRoles();

    function fetchRoles() {
        $.ajax({
            url: "{{ route('fetcRoles') }}",
            method: 'get',
            success: function(response) {
                $.each(response.roles, function(index, value) {
                    isselected = $('.roles').append($('<option/>', {
                        value: value.id,
                        text: value.name
                    }));
                });

            }
        });
    }
    
    fetchDivision();

    function fetchDivision() {
       
        $.ajax({
            url: "{{ route('fetch.divisionSelect') }}",
            method: 'get',
            success: function(response) {
                // $('#RouteUser.selectpicker').selectpicker('val', response.recepients);


                // $.each(response.division, function(index, value) {
                //     isselected = $('#division_id').append($('<option/>', {
                //         value: value.id,
                //         text: value.name
                //     }));
                // });

            }
        });
    }
</script>
