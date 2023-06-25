const express = require('express');
const path = require('path');
const mongoose = require('mongoose');
const Beer = require('./models/beer');
const { error } = require('console');

const app = express();

app.set('view engine', 'ejs');

const PORT = 3000;
const db = 'mongodb+srv://dima:Mothe123+@cluster0.mcmxt5g.mongodb.net/crafter?retryWrites=true&w=majority';

mongoose
  .connect(db, { useNewUrlParser: true, useUnifiedTopology: true })
  .then((res) => console.log('Connected to DB'))
  .catch((error) => console.log(error));

const createPath = (page) => path.resolve(__dirname, 'ejs', `${page}.ejs`);

app.listen(PORT, (error) => {
  error ? console.log(error) : console.log(`listening port ${PORT}`);
});

app.use(express.urlencoded({ extended: false}));

app.use(express.static('css'));

app.use(express.static('fonts'));

app.use(express.static('image'));

app.get('/', (req, res) =>{
	Beer
	.find()
	.then((beer) =>res.render(createPath('index'), { beer }))
	.catch((error) =>{
		console.log(error);
		res.render(createPath('error'), {title: 'Error'});
	})
	
});

app.post('/edit-beer', (req, res) => {
	const {title, degree, price, price_two} = req.body;
	const beer = new Beer({ title, degree, price, price_two});
	beer
		.save()
		.then((result) => res.redirect('/beer'))
		.catch((error) =>{
			console.log(error);
			res.render(createPath('error'), {title: 'Error'});
		})
});

app.get('/admin', (req, res) =>{
	res.render(createPath('admin'));
});

app.get('/beer', (req, res) =>{

res.render(createPath('beer'));
});

app.use((req, res) =>{
	res
	.status(404)
	.render(createPath('error'));
});

