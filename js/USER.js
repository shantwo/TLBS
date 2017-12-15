class USER{

    public id:number;
    public email:string;
    public password:string;
    public role:number;


    constructor(id: number = null,
                email: string = null,
                password: string = null,
                role: number = null) {
        this.id = id;
        this.email = email;
        this.password = password;
        this.role = role;
    }
}

