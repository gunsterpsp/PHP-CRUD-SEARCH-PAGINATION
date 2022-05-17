<script>

    $(document).on("click", "#submit", function(e){
        e.preventDefault();

        const name = $("#name").val();
        const email = $("#email").val();
        const mobile = $("#mobile").val();
        const submit = $("#submit").val();
        
        $.ajax({
            url: "insert.php",
            type: "post",
            data: {
                name: name,
                email: email,
                mobile, mobile,
                submit: submit
            },
            success: function(data){
                fetch();
                $("#result").html(data);
                
            }



        });


        $("#form")[0].reset();


    });

    // FETCH


    function fetch(){
        
        $.ajax({
            url: "fetch.php",
            type: "post",
            success: function(data){
                $("#fetch").html(data);
                
            }

        });



    }
    fetch();


    // SEARCH TABLE


    $(document).ready(function () {
    $('#datatableid').DataTable();

    });

    // DELELTE

    $(document).on("click", "#del", function(e){
        e.preventDefault();

        const del_id = $(this).attr("value");


        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this record!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
        .then((willDelete) => {
        if (willDelete) {
            swal("Record has been deleted!", {
            icon: "success",
            });

            $.ajax({
            url: "delete.php",
            type: "post",
            data: {
                del_id, del_id
            },
            success: function(data){
                $("#show").html(data);
            }
        });
        
        } else {
            swal("Record failed to delete!");
        }

        });

    });

    // READ DATA

    $(document).on("click", "#read", function(e){
        e.preventDefault();

        var read_id = $(this).attr("value");

        $.ajax({
            url: "read.php",
            type: "post",
            data: {
                read_id: read_id
            },
            success: function(data){
                $("#read_data").html(data);
            }
        });
    });

    // EDIT 

    $(document).on("click", "#edit", function(e){
        e.preventDefault();

        var edit_id = $(this).attr("value");

        $.ajax({
            url: "edit.php",
            type: "post",
            data: {
                edit_id: edit_id
            },
            success: function(data){
                $("#edit_data").html(data);
            }
        });

    });

    // UPDATE

    $(document).on("click", "#update", function(e){
        e.preventDefault();

        var edit_name = $("#edit_name").val();
        var edit_email = $("#edit_email").val();
        var edit_mobile = $("#edit_mobile").val();
        var update = $("#update").val();
        var edit_id = $("#edit_id").val();

        $.ajax({
            url: "update.php",
            type: "post",
            data: {
                edit_id: edit_id,
                edit_name: edit_name,
                edit_email: edit_email,
                edit_mobile: edit_mobile,
                update: update
            },
            success: function(data){
                $("#show").html(data);
            }

        });
        

    });


</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
