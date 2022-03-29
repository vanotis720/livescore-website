require('./bootstrap');


let matchs = [];

matchs.forEach(function (match) {
    match.date = new Date(match.date);
});