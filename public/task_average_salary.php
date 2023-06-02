<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

class Worker
{
    private $name, $salary;
    private static $count = 0, $allSalary = 0;

    public function __construct($name, $salary) {

        $this->name = $name;
        $this->salary = $salary;

        self::$allSalary += $salary;
        self::$count ++;
    }

    public static function averageSalary() {

        return self::$allSalary / self::$count;

    }

    public function setSalary($salary) {

        self::$allSalary = (self::$allSalary - $this->salary) + $salary;

        $this->salary = $salary;
    }

}

$petya = new Worker('Петя', 500);
$vasya = new Worker('Вася', 1000);

echo 'Средняя зарплата когда Петя 500: </br>';
print_r(Worker::averageSalary());

echo '</br> Средняя зарплата когда Петя 2000: </br>';

$petya->setSalary(2000);

print_r(Worker::averageSalary());
