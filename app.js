const express = require('express');
const app = express();

app.get('/', (req,res) => {
    res.end('Hey welcome to my API first application'); 
});

app.get('/welcome/:name', (req, res)=>{
    let myname = req.params.name;
    res.send(  `Hey ${myname}, thanks for calling a parameterized route in my API first application ` );
});

app.listen(8080);
console.log('Server is running on port 8080');
