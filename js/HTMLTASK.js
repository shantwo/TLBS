class HTMLTASK extends TASKS{

    public displayTask(task:TASKS,color){

        return '<article' +
            ' class="task-container" data-title="'+task.title+'" data-id="'+task.id+'">' +
            '<span class="task-title">' +
            '<i class="fa fa-tasks '+color+'"></i>' +
            '<span data-title="title-container" class="bold">' + task.title + '</span>' +
            '<span class="task-date grey-txt"> | Created : '+task.date+'</span>' +
            '<span class="task-description grey-txt">' + task.description + '</span>' +
            '</span>' +
            '<span class="f-right pointer" data-name="editTask" data-title="'+task.title+'" data-id="'+task.id+'">' +
            '<i class="fa fa-cog black-txt"></i>' +
            '</span>' +
            '<span class="f-right pointer" data-name="deleteTask" data-title="'+task.title+'" data-id="'+task.id+'">' +
            '<i class="fa fa-file-archive-o black-txt"></i>' +
            '</span>' +
            '</article>';

    }
}