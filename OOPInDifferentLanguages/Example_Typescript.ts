
class Example_Typescript {
    public variable!: string;

    constructor(name: string) {
        this.variable = name;
    }

    public example(name: string) {
        this.variable = `${name}_lol`
    }
}