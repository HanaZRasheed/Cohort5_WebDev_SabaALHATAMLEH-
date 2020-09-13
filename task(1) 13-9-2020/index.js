const Student = require("./Student.js");
std = require("./std.js");


var x1 = 10;
var x2 = 30;

console.log(x1 + x2);

console.log(std);

console.log(std.name);


var std = new Student();
std.id = 25;
std.name = "Roaa";
std.avg = 80;

console.log(std)
console.log(std.name)
console.log(std.hello())

function pr() {
    console.log("Hi from pr function");
}
pr();

var c = (name) => console.log("Function in a variable " + name);
c("Roaa")