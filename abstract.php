<?php
//Bài 1: Tạo một class trừu tượng "Shape" (Hình dạng) có một phương thức trừu tượng là "calculateArea". Tạo các lớp con "Circle" (Hình tròn) và "Rectangle" (Hình chữ nhật) kế thừa từ lớp Shape và triển khai phương thức calculateArea cho từng hình.
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14 * pow ($this->radius, 2);
    }
}

class Rectangle extends Shape {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Example usage:
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);
echo "Bài 1:<br>";
echo "The area of the circle is: " . $circle->calculateArea() . "\n";
echo "The area of the rectangle is: " . $rectangle->calculateArea() . "\n";

//Bài 2: Tạo một abstract class "Animal" (Động vật) với một phương thức trừu tượng là "makeSound". Tạo các lớp con "Dog" (Chó) và "Cat" (Mèo) kế thừa từ lớp Animal và triển khai phương thức makeSound theo cách riêng của từng loại động vật.
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

$dog = new Dog();
$cat = new Cat();
echo "<br><br>Bài 2:<br>";
echo "The dog says: " . $dog->makeSound() . "\n";
echo "The cat says: " . $cat->makeSound() . "\n";

//Bài 3: Tạo một abstract class "Employee" (Nhân viên) với các thuộc tính trừu tượng như "name" (tên) và "salary" (mức lương). Tạo các lớp con "Manager" (Quản lý) và "Staff" (Nhân viên) kế thừa từ lớp Employee và triển khai các thuộc tính và phương thức theo cách riêng của từng lớp.
abstract class Employee {
    abstract public function setName($name);
    abstract public function setSalary($salary);
    abstract public function getInfo();
}

class Manager extends Employee {
    protected $name;
    protected $salary;

    public function setName($name) {
        $this->name = "Manager " . $name;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getInfo() {
        return "Name: " . $this->name . " | Salary: " . $this->salary ;
    }
}

class Staff extends Employee {

    public function setName($name) {
        $this->name = "Staff " . $name;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }
    public function getInfo() {
        return "Name: " . $this->name . " | Salary: " . $this->salary ;
    }
}
echo "<br><br>Bài 3:<br>";
$manager = new Manager();
$manager->setName("John");
$manager->setSalary(5000);

$staff = new Staff();
$staff->setName("Jane");
$staff->setSalary(2000);

echo $manager->getInfo() . "\n";
echo $staff->getInfo() . "\n";

//Bài 4: Tạo một abstract class "Vehicle" (Phương tiện) với một phương thức trừu tượng là "start". Tạo các lớp con "Car" (Xe hơi) và "Motorcycle" (Xe máy) kế thừa từ lớp Vehicle và triển khai phương thức start theo cách riêng của từng loại phương tiện.
abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        return "Starting the car...";
    }
}

class Motorcycle extends Vehicle {
    public function start() {
        return "Starting the motorcycle...";
    }
}
$car = new Car();
$motorcycle = new Motorcycle();
echo "<br><br>Bài 4:<br>";
echo $car->start() . "\n";
echo $motorcycle->start() . "\n";

//Bài 5: Tạo một abstract class "Database" (Cơ sở dữ liệu) với các phương thức trừu tượng như "connect", "query" và "disconnect". Tạo các lớp con "MySQLDatabase" và "PostgreSQLDatabase" kế thừa từ lớp Database và triển khai các phương thức theo cách riêng của từng loại cơ sở dữ liệu.
abstract class Database {
    abstract public function connect();
    abstract public function query($sql);
    abstract public function disconnect();
}

class MySQLDatabase extends Database {
    public function connect() {
        return "Connecting to MySQL database...";
    }

    public function query($sql) {
        return "Executing query on MySQL database: " . $sql;
    }

    public function disconnect() {
        return "Disconnecting from MySQL database...";
    }
}

class PostgreSQLDatabase extends Database {
    public function connect() {
        return "Connecting to PostgreSQL database...";
    }

    public function query($sql) {
        return "Executing query on PostgreSQL database: " . $sql;
    }

    public function disconnect() {
        return "Disconnecting from PostgreSQL database...";
    }
}
echo "<br><br>Bài 5:<br>";
// Example usage:
$mysql = new MySQLDatabase();
$postgres = new PostgreSQLDatabase();

echo $mysql->connect() . "\n";
echo $mysql->query("SELECT * FROM users") . "\n";
echo $mysql->disconnect() . "\n";

echo $postgres->connect() . "\n";
echo $postgres->query("SELECT * FROM employees") . "\n";
echo $postgres->disconnect() . "\n";


