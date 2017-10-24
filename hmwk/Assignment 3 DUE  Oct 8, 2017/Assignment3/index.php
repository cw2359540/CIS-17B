<!DOCTYPE html>
<!--
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
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="inventClass.js"></script>
    </head>
    <body>
        <form>
            <input name="Product" type="text" />Product</br>
            <input name="Inventory" type="text" />Inventory</br>
            <input name="Price" type="text" />Price</br>
            <input onclick="inventory.add()" value="Submit" type="button" />
        </form>
        
        <div id="demo">
            
</div>
    </body>
</html>
