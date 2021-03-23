var express = require('express');
var app = express();

app.get('/',function(req,res){

 res.send('i love pei yin');

});

app.get('/user',(req,res)=>{
    
    res.send('測試這個很狂');
    

});


app.listen(3000, ()=>{
console.log("I am listening on port 3000")
});