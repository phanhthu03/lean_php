<?php
//Bài 1: Bài tập Tạo lớp Hình chữ nhật:
//Tạo một lớp HìnhChuNhat với các thuộc tính chiều dài và chiều rộng.
//Tạo các phương thức để tính diện tích và chu vi của hình chữ nhật.
class Rectangle {
    protected $length;
    protected $width;
    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }
    public function calArea() {
        return $this->length * $this->width;
    }
    public function calPerimeter() {
        return ($this->length + $this->width) * 2;
    }
}

$length = 13;
$width = 3;
$rectangle = new Rectangle($length, $width);
echo "Bài 1:<br>";
echo "Area of rectangle: ". $rectangle->calArea() . "\n";
echo "Perimeter of retangle: ". $rectangle->calPerimeter();

//Bài 2: Bài tập Tạo lớp Điểm 2D:
//Tạo một lớp Diem2D với các thuộc tính x và y.
//Tạo phương thức để tính khoảng cách từ điểm hiện tại tới một điểm khác.
class Point2D {
    protected $x;
    protected $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateDistance(Point2D $point) {
        $dx = $point->x - $this->x;
        $dy = $point->y - $this->y;
        return sqrt($dx * $dx + $dy * $dy);
    }
}

// Tạo hai đối tượng Point2D
$point1 = new Point2D(1, 2);
$point2 = new Point2D(4, 6);

// Tính khoảng cách từ point1 đến point2
$distance = $point1->calculateDistance($point2);
echo "<br><br>Bài 2:<br>";
echo "The distance between (1, 2) and (4, 6) is " . $distance . "<br>";

//Bài 3: Bài tập Tạo lớp Mảng số nguyên:
//Tạo một lớp MangSoNguyen với thuộc tính là một mảng các số nguyên.
//Tạo các phương thức để tính tổng, trung bình, và phần tử lớn nhất của mảng.
class IntArray {
    protected $array;

    public function __construct($array) {
        $this->array = $array;
    }

    public function calculateSum() {
        return array_sum($this->array);
    }

    public function calculateAverage() {
        $sum = $this->calculateSum();
        $count = count($this->array);
        return $sum / $count;
    }

    public function findMax() {
        return max($this->array);
    }
}

echo "<br><br>Bài 3:<br>";
// Tạo một đối tượng mảng số nguyên
$array = new IntArray([1, 2, 3, 4, 5]);

// Tính tổng, trung bình và phần tử lớn nhất
$sum = $array->calculateSum();
$average = $array->calculateAverage();
$max = $array->findMax();

echo "The sum of the array is " . $sum . "<br>";
echo "The average of the array is " . $average . "<br>";
echo "The maximum element of the array is " . $max . "<br>";

//Bài 4: Bài tập Tạo lớp Đồng hồ:
//Tạo một lớp DongHo với các thuộc tính giờ, phút và giây.
//Tạo phương thức để hiển thị thời gian dưới định dạng "HH:MM:SS" và diễn tả chức năng tăng giây.
class Clock {
    protected $hour;
    protected $minute;
    protected $second;

    public function __construct($hour, $minute, $second) {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    public function displayTime() {
        return sprintf("%02d:%02d:%02d", $this->hour, $this->minute, $this->second);
    }

    public function increaseSecond() {
        $this->second++;
        if ($this->second >= 60) {
            $this->second = 0;
            $this->minute++;
            if ($this->minute >= 60) {
                $this->minute = 0;
                $this->hour++;
                if ($this->hour >= 24) {
                    $this->hour = 0;
                }
            }
        }
    }
}

echo "<br><br>Bài 4:<br>";
// Tạo một đối tượng DongHo
$clock = new Clock(10, 30, 0);

// In thời gian ban đầu
echo "The initial time is " . $clock->displayTime() . "<br>";

// Tăng giây và in thời gian mới
$clock->increaseSecond();
echo "After increasing the second, the time is " . $clock->displayTime() . "<br>";

//Bài 5: Bài tập Tạo lớp Danh sách sinh viên:
//Tạo một lớp SinhVien với các thuộc tính mã số, họ và tên.
//Tạo lớp DanhSachSinhVien với các phương thức thêm sinh viên mới và hiển thị danh sách sinh viên.
class Student {
    protected $id;
    protected $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
}

class studentList {
    protected $students = [];

    public function addStudent($student) {
        $this->students[] = $student;
    }

    public function displayStudents() {
        echo "<ul>";
        foreach ($this->students as $student) {
            echo "<li>" . $student->getId() . " - " . $student->getName() . "</li>";
        }
        echo "</ul>";
    }
}

echo "<br><br>Bài 5:<br>";
$studentList = new studentList();
$student1 = new Student("SV001", "Nguyen Van A");
$student2 = new Student("SV002", "Tran Thi B");
$studentList->addStudent($student1);
$studentList->addStudent($student2);
$studentList->displayStudents();

//Bài 6: Bài tập Tạo lớp Xe hơi:
//Tạo một lớp XeHoi với các thuộc tính là hãng xe, màu sắc và năm sản xuất.
//Tạo phương thức để hiển thị thông tin đầy đủ của xe.
class Car {
    protected $brand;
    protected $color;
    protected $year;

    public function __construct($brand, $color, $year) {
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;
    }

    public function displayInfo() {
        echo "Brand: " . $this->brand . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}
echo "<br>Bài 6:<br>";
$car = new Car("Toyota", "Red", 2022);
echo $car->displayInfo();

//Bài 7: Bài tập Tạo lớp Phân số:
//Tạo một lớp PhanSo với các thuộc tính tử số và mẫu số.
//Tạo các phương thức để thực hiện các phép toán cộng, trừ, nhân và chia giữa các phân số.
class Fraction {
    protected $numerator;
    protected $denominator;

    public function __construct($numerator, $denominator) {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function add($fraction) {
        $resultNumerator = $this->numerator * $fraction->denominator + $fraction->numerator * $this->denominator;
        $resultDenominator = $this->denominator * $fraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function subtract($fraction) {
        $resultNumerator = $this->numerator * $fraction->denominator - $fraction->numerator * $this->denominator;
        $resultDenominator = $this->denominator * $fraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function multiply($fraction) {
        $resultNumerator = $this->numerator * $fraction->numerator;
        $resultDenominator = $this->denominator * $fraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function divide($fraction) {
        $resultNumerator = $this->numerator * $fraction->denominator;
        $resultDenominator = $this->denominator * $fraction->numerator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function display() {
        return $this->numerator . "/" . $this->denominator;
    }
}
echo "<br><br>Bài 7:<br>";
$fraction1 = new Fraction(3, 4);
$fraction2 = new Fraction(2, 3);

$addResult = $fraction1->add($fraction2);
echo "Add is: ". $fraction1->display() . " + " . $fraction2->display() . " = " . $addResult->display() . "<br>";

$subResult = $fraction1->subtract($fraction2);
echo "Subtract is: ". $fraction1->display() . " - " . $fraction2->display() . " = " . $subResult->display() . "<br>";

$mulResult = $fraction1->multiply($fraction2);
echo "Multiply is: ". $fraction1->display() . " x " . $fraction2->display() . " = " . $mulResult->display() . "<br>";

$divResult = $fraction1->divide($fraction2);
echo "Divide is: ". $fraction1->display() . " / " . $fraction2->display() . " = " . $divResult->display() . "<br>";

//Bài 8: Bài tập Tạo lớp Người:
//Tạo một lớp Nguoi với các thuộc tính tên, tuổi và địa chỉ.
//Tạo phương thức để hiển thị thông tin người.
class Person {
    protected $name;
    protected $age;
    protected $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Address: " . $this->address . "<br>";
    }
}
echo "<br><br>Bài 8:<br>";
$person = new Person("Pham Thi Anh Thu", 21, "Ha Noi");
echo $person->displayInfo();

//Bài 9: Bài tập Tạo lớp Sản phẩm:
//Tạo một lớp SanPham với các thuộc tính tên, giá và mô tả.
//Tạo phương thức để hiển thị thông tin chi tiết của sản phẩm.
class Product {
    protected $name;
    protected $price;
    protected $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function displayDetails() {
        echo "Product Name: " . $this->name . "<br>";
        echo "Price: " . $this->price . "<br>";
        echo "Description: " . $this->description . "<br>";
    }
}
echo "<br><br>Bài 9:<br>";
$product = new Product("Smartphone", 10000000, "This is a high-end smartphone with the latest features.");
echo $product->displayDetails();

//Bài 10: Bài tập Tạo lớp Đặt phòng khách sạn:
//Tạo một lớp DatPhong voi các thuộc tính tên, ngày đến và số đêm ở lại.
//Tạo phương thức để tính tổng số tiền cần thanh toán dựa trên giá phòng.
class HotelReservation {
    protected $name;
    protected $checkInDate;
    protected $numOfNights;

    public function __construct($name, $checkInDate, $numOfNights) {
        $this->name = $name;
        $this->checkInDate = $checkInDate;
        $this->numOfNights = $numOfNights;
    }

    public function calculateTotalPayment($roomPrice) {
        $totalPayment = $roomPrice * $this->numOfNights;
        return $totalPayment;
    }
}
echo "<br><br>Bài 10:<br>";
$reservation = new HotelReservation("Room 405", "2023-07-10", 5);
echo "Total payment for = ". $reservation->calculateTotalPayment(100);
?>