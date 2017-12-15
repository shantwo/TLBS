$(document).ready(function() {

    $('[data-name="killTask"]').click(function () {
        let element = $(this);
        let title = element.attr('data-title');
        let id = element.attr('data-id');

        $.ajax({
            method: 'POST',
            url: 'ajax/killTask.php',
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