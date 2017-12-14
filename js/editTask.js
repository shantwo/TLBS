$(document).ready(function(){

    let modal = $('#Modal-addTask');

    $('[data-name="editTask"]').click(function () {
        $('#validate-task').hide();
        $('#edit-task').show();
        console.log('click');

        let taskId = $(this).data('id');
        console.log('task identifier : ' + taskId);
        let taskTitle = $(this).data('title');
        console.log('task title : ' + taskTitle);
        $.ajax({
            method: 'POST',
            url: 'ajax/editTask.php',
            dataType : 'json',
            data: {
                title : taskTitle,
                id : taskId
            },

            // complete:function(result){
            //     console.log(result);
            // }
        })
        .done(function(response){
            console.log(response);
            responseId=response[0].tsk_id;
            responseTitle = response[0].tsk_title;
            responseDescription = response[0].tsk_description;
            responseDate = response[0].tsk_date;
            responsePriorityId = response[0].pri_id;

            modal.css( "display", "block" );
            $('#modalTitle').text(responseTitle);
            $('#taskTitle').val(responseTitle);
            $('#taskDescription').val(responseDescription);
            $('#taskDate').val(responseDate);
            $('#prioritySelect > option:nth-child(' + responsePriorityId +')').attr('selected','selected');

        })
        .fail(function(){
            console.log('fail');
        });

        $('#edit-task').on('click', function() {


            let taskEditedTitle = $('#taskTitle').val();
            let taskEditedDescription = $('#taskDescription').val();
            let taskEditedDate = $('#taskDate').val();
            let taskEditedPriority = $('#prioritySelect option:selected').val();

            $.ajax({
                method: 'POST',
                url: 'ajax/saveTaskIntoDb.php',
                dataType: 'json',
                data: {
                    id: taskId,
                    title: taskEditedTitle,
                    description: taskEditedDescription,
                    date: taskEditedDate,
                    priority: taskEditedPriority
                },
                complete: function () {
                }


            });
            location.reload()
        })


    });

});