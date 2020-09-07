var Student={
    name:"saba",
    id:20,
    year:4,
    constructor(){
        this.name=null;
        this.year=0;
        this.id=0;
        
        },
    hello(){
        return "hello my name is "+name+"my id is"+id+"and I am in the "+year+"year";
    }

};
console.log(Student);
console.log(Student.name);
student.year=5;
console.log(student.year);
console.log(student.hello());

S1=new Student();
console.log(S1.name);
console.log(S1.year);