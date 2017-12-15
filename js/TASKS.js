class TASKS{
    public id:number;
    public title:string;
    public description:string;
    public is_deleted:number;
    public priority:string;
    public date:string;
    public creation_date:string;
    public closure_date:string;
    public user_id:number;


    constructor(id: number = null,
                title: string = null,
                description: string = null,
                is_deleted: number = null,
                priority: string = null,
                date: string = null,
                creation_date: string = null,
                closure_date: string = null,
                user_id: number = null) {
        this.id = id;
        this.title = title;
        this.description = description;
        this.is_deleted = is_deleted;
        this.priority = priority;
        this.date = date;
        this.creation_date = creation_date;
        this.closure_date = closure_date;
        this.user_id = user_id;
    }
}