class PRIORITY{
    public id:number;
    public name:string;


    constructor(id = null,
                name = null) {
        this.id = id;
        this.name = name;
    }

    /**
     * Take a priority name and select the good color class for the css
     * @param priorityName:string
     * @returns {string}
     */
    public static getColorInfo(priorityName:string){

        let color:string = null;

        switch(priorityName){

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
            default:
                color = null;
        }

        return color;
    }
}