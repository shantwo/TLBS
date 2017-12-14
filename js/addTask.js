$(document).ready(function(){

    let modal = $('#Modal-addTask');


    //SHOW THE MODAL
    $('#button-addTask').click(function () {
        $('#edit-task').hide();


        //Erase values in the form field
        $('#taskTitle').val('');
        $('#taskDescription').val('');
        $('#taskDate').val('');

        modal.css( "display", "block" );
    });

    //CLOSE THE MODAL
    $('#button-close').click(function(){
        modal.css("display", "none");
    });
    //CLOSE THE MODAL
    modal.click(function(event){

        if(!$(event.target).closest('#modal').length && !$(event.target).is('#modal')){
            modal.css("display", "none");
        }
    });

    $('#validate-task').click(function () {
        let taskTitle = $('#taskTitle').val();
        let taskDescription = $('#taskDescription').val();
        let taskDate = $('#taskDate').val();
        let taskPriority = $('#prioritySelect option:selected').val();
        let user_email = localStorage.getItem('User');

        $.ajax({
            method: 'POST',
            url: 'ajax/getUserId.php',
            dataType:'json',
            data:{
                email: user_email
            }
        }).done(function(response){
            let userId = response.usr_id;

            $.ajax({
                method: 'POST',
                url: 'ajax/addTask.php',
                data: {
                    title : taskTitle,
                    description : taskDescription,
                    date : taskDate,
                    priority: taskPriority,
                    userId: userId
                },
                complete:function(){
                    let modal = $('#Modal-addTask');
                    modal.css("display", "none");
                    location.reload();
                }
            })
        })
            
    });

});