/* 
 * Professor: Cheryllynn Walsh
 * Date: 10/6/2017
 * Descriptions: Assignment 3 10/08/17
 * 
 * Create an Inventory class from https://github.com/ml1150258/LehrMark_CIS_CSC_17b_Fall2017/tree/master/lab
 * I have separate pages that create-add-display inventory.
 * 
 * So, make a class that creates, adds, deletes, displays inventory from local storage 
 * in a Javascript class. We are going to use this later on till fill a cookie and pass this to a PHP class.
 * 
 * Submit here and send an email in the usual way.
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//your inventory class
//there are two ways to do a class

//the function way
var InventClass = function ()
{
    //constructor
    //so what if there is nothing in local storage
    //have to make an empty array then
    var array = [];
    var str= localStorage.getItem("InventClass");
    if( str === null ){
        localStorage.setItem("InventClass", JSON.stringify( array ) );
    }
};

InventClass.prototype.add = function ()
{
    //elements so it gets an array thats why have the index of 0 at the end
    var product = document.getElementsByName( 'Product' )[0].value;
    var invent = document.getElementsByName( 'Inventory' )[0].value;
    var price = document.getElementsByName( 'Price' )[0].value;
    
    //get localstorage items if you they are set
    var str= localStorage.getItem("InventClass");
    var inventStorage=JSON.parse(str); //name it different so its not confusing
    
    var object = {
        'product' : product,
        'inventory' : invent,
        'price' : price
    };
    //push it into the array
    inventStorage.push( object );
    
    //then want to store it back into local storage
    localStorage.setItem( 'InventClass', JSON.stringify( inventStorage ) );
    this.display();
};

InventClass.prototype.delete = function ()
{
//have to write your own code for these
var array = [];
    localStorage.setItem("InventClass", JSON.stringify( array ) );
};

InventClass.prototype.display = function ()
{
    //have to write your own code for these ******
    var person = {fname:"John", lname:"Doe", age:25}; 
    
    var text = "";
    var x;
    for (x in person) {
        text += x + " : " + person[x] + "<br>";
    }
    document.getElementById("demo").innerHTML = text;
};

var inventory = new InventClass(); //init the class into a var


//document.getElementById("inventory").innerHTML = inventory;


//[{"product":"dog","inventory":"5","price":"30.00"},{"product":"dog","inventory":"5","price":"30.00"}]