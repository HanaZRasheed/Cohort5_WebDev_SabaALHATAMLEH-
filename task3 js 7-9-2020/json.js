var Student={
    name:"Saba",
    id:":20",
    year:"5",
    hello(){
        return "hello my name is"+this.name;
    }
}
var jsontxt=JSON.stringify(Student)
console.log(jsontxt);
var obj=Json.parse(jsontxt);
console.log(obj);