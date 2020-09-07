var arr=["one", "two", "three"];
//console.log(arr);

num=arr.forEach(function(item,index){
    console.log("item at "+ index+"=" +item)
});
arr.forEach(num);

var item =arr.pop();
console.log("item"+ item +"isremoved");
arr.push("ten");
arr.forEach((item,index)=> {
    console.log("item at "+ index+"=" +item);

});