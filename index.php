<?php

function sayHello(){
    var_dump('Hello');
}

sayHello();
sayHello();
sayHello();
sayHello();
sayHello();
sayHello();
sayHello();

function sayHelloToMe($name='Nameless'){
    var_dump("Hello $name!");
}

sayHelloToMe('Tristan');

function sayNameAndAge($name, $age){
    var_dump("Your name is $name and you are $age years old!" );
}

sayNameAndAge('Tristan', 18);


function recursion($i){
    if($i<10){
        var_dump($i);
        recursion($i+1);
    }
}

recursion(0);