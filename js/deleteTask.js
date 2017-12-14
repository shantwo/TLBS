$(document).ready(function() {

    $('[data-name="deleteTask"]').click(function () {
        let element = $(this);
        let title = element.attr('data-title');
        let id = element.attr('data-id');

        $.ajax({
            method: 'POST',
            url: 'ajax/deleteTask.php',
            data: {
                title : title,
                id : id
            },
            complete:function(){
                console.log('OK');
                location.reload();
            },
            fail:function(){
                console.log('fail');
            }
        })


    });
});