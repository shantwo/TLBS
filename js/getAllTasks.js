$(document).ready(function() {

    let user = localStorage.getItem('User');

    $.ajax({
        method:'POST',
        url: 'ajax/getAllTasks.php',
        dataType:'json',
        data: {
            email: user
        }
    }).done(function(response){
        console.log(response);
        let $taskContainer = $('#taskContainer');
        for(let i = 0; i < response.length; i++){

            let color='';

            switch(response[i].priority){
                case 'Lowest':
                    color = 'green-txt';
                    break;
                case 'Low':
                    color = 'dark-green-txt';
                    break;
                case 'Middle':
                    color = 'yellow-txt';
                    break;
                case 'High':
                    color = 'orange-txt';
                    break;
                case 'Highest':
                    color = 'darkred-txt';
                    break;
                case 'Extreme':
                    color = 'red-txt';
                    break;
            }

            let html = '<article' +
                ' class="task-container"' +
                ' data-title="'+response[i].title+'"' +
                ' data-id="'+response[i].id+'">' +
                '<span class="task-title">' +
                '<i class="fa fa-tasks '+color+'" aria-hidden="true"></i>' +
                '<span data-title="title-container" class="bold">' +
                response[i].title +
                '</span>' +
                '<span class="task-date grey-txt">' +
                ' | Created : '+response[i].date+'' +
                '</span>' +
                '<span class="task-description grey-txt">' +
                response[i].description +
                '</span>' +
                '</span>' +
                '<span class="f-right pointer"' +
                ' data-name="editTask"' +
                ' data-title="'+response[i].title+'"' +
                ' data-id="'+response[i].id+'">' +
                '<i class="fa fa-cog black-txt" aria-hidden="true"></i>' +
                '</span>' +
                '<span class="f-right pointer"' +
                ' data-name="deleteTask"' +
                ' data-title="'+response[i].title+'"' +
                ' data-id="'+response[i].id+'">' +
                '<i class="fa fa-file-archive-o black-txt" aria-hidden="true"></i>' +
                '</span>' +
                '</article>';

            $taskContainer.append(html);
        }
    })

});