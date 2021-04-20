//////////// pop up delete

function delete_popup(id_user) {


    swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = `../controllerd/delete.php?id=${id_user}`;
            } else {
                swal("Your imaginary file is safe!");
            }
        });

}

////////// another popup

function success($message) {
    swal({
        title: "Congratulations",
        text: $message,
        icon: "success",
    });
}

function error($message) {
    swal({
        title: "Error",
        text: $message,
        icon: "error",
    });
}




////// model

$(document).ready(function() {
    // $(".update_icon").click(function() {
    //     $(".update_form").show(300);
    // });
    $(".back-btn").click(function() {
        $(".update_form").hide(300);
    });
});