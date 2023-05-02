<script>


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    // delete employee ajax request
    $(document).on('click', '.deleteEmp', function(e) {
        e.preventDefault();
        let id = $(this).attr('id').replace('del_', '');
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
                    url: "{{ route('delete.employee') }}",
                    method: 'delete',
                    data: {
                        id: id,
                        _token: csrf
                    },
                    success: function(response) {
                        Swal.fire(
                            'Deleted!',
                            'Employee Has been deleted.',
                            'success'
                        )
                        fetchAllUsers();
                    }
                });
            }
        })
    });
    // delete employee ajax request

</script>
