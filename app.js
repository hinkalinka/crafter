const  http = require('http');
const fs = require('fs');
const path = require('path');

const PORT = 3000;

const server = http.createServer((req, res) => {
console.log('Server requeste');

res.setHeader('Content-Type','text/php');

const createPath = (page) => path.resolve(__dirname, '', `${page}.php`);

let basePath = '';

switch(req.url){
	case'/': 
		basePath = createPath('index');
		res.statusCode = 200;
		break;
	case'/': 
		basePath = createPath('error');
		res.statusCode = 404;
		break;
}

	fs.readFile(basePath, (err, data) =>{
		if(err){
			console.log(err);
			res.statusCode = 500;
			res.end();
		}
		else{
			res.write(data);
			res.end();
		}
	});
});

server.listen(PORT, 'localhost', (error) =>{
error ? console.log(error) : console.log(`listening port ${PORT}`);
});