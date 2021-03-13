var fs = require('fs');
const { setInterval } = require('timers');
//var data = fs.readFileSync('input.txt');

fs.readFile('input.txt',  (error,data)=>{

   if(error) return console.log("input file error");
   //error可以變更程想要的名字，data也是，可變的變數名稱
    console.log(data.toString());

});
console.log(__dirname);
console.log(__filename);
//console.log(data.toString());
console.log("Program Ended");

/*setTimeout(() => {
    console.log("web class testing");
}, 2000);//2000隨便取
*/

setInterval(() => {
    console.log(new Date().toTimeString());
}, 1000);
