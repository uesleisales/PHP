//const animal = document.getElementById('animals');
//console.log(animal);

// --- Activity about "site"

//catching all img of site ( .html)
/*const img = document.querySelectorAll('img');
console.log(img); 

//catching all "img" wich begining with word "imagem"
const img2 = document.querySelectorAll('img[src^="img/imagem"]');
console.log(img2);

//catching all internal links wich begining with "#"
const href = document.querySelectorAll('a[href^="#"]');
console.log(href);

// select the first h2 inside of "animal-description"
const h2InAnimal = document.querySelector('.animal-description h2'); // use '.' because is a class
console.log(h2InAnimal);

//select the last 'p' of site
const pLast = document.querySelectorAll('p');
console.log(pLast[pLast.length-1]);

*/


/*
// --- Beginning with "foreach" and "arrow function"

const imgs = document.querySelectorAll('img');

let i = 0;
imgs.forEach(function(item, index, array){ //passing for all itens, "index" is the position of item in array
    //console.log(index, item );            // array is the real array(the node list)
});

//if the method  return a html collection, u need to make a conversion to node list
// using the method " array.from"

const title = document.getElementsByClassName('titulo');
const titleArray = Array.from(title);

titleArray.forEach(function(item){
    console.log(item);
});

// talking a litthe bit about arrow function, 
//that function become smaller the default functions

console.log("Different");
titleArray.forEach((item)=>{  
    console.log(item);
});

*/


/*
// --- Class and attributes 

menu.className; // return a string with class name
menu.classList; // return a list of classes
menu.classList.add('thing'); // add one class
menu.classList.add('thing', 'car'); // this method can add one ou more things
menu.classList.remove('thing');
menu.classList.toggle('thing'); // this method remove 'thing', if it not is in class list, it add 'thing'
menu.classList.contains('thing'); //return true or flase, if the class exist
menu.classList.replace('thing', 'thing2'); // recplace the class 'thing' by 'thing2'

const menu = document.querySelector('.menu');
menu.classList.add('thing');
menu.classList.replace('thing', 'thing2');
// can use all exemple up here
*/


// --- Events 
/*
 add one function to element to capture some event, one 'click' for exemple.
 addEventListener, the function will be activated when event happens
*/

const img = document.querySelector('img');

//here the function run in moment of click 
img.addEventListener('click', ()=>{ // or ('click', function(){code}) 
    console.log('Clicou');
})
//---------------
function callback(event) {
    console.log(event);
}
img.addEventListener('click', callback); // show all event of click
 
//stopped in "this" 