const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const beerSchema = new Schema({
    title:{
        type: String,
        required: true,
    },
    degree:{
        type: String,
        required: true,
    },
    price:{
        type: String,
        required: true,
    },
    price_two:{
        type: String,
        required: true,
    }
});

const Beer = mongoose.model('Beer', beerSchema);

module.exports = Beer;