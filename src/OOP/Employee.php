<?php 

namespace App\OOP;

class Employee
{

    public function sayHello(){
        return 'Hello World';
    }
}


$employee = new Employee();

echo $employee->sayHello();