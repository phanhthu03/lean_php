<?php
//Bài 1: Tạo một interface "Resizable" (Có thể điều chỉnh kích thước) với một phương thức là "resize". Tạo một lớp "Rectangle" (Hình chữ nhật) và triển khai interface Resizable để thay đổi kích thước của hình chữ nhật.
interface Resizable {
    public function resize($scale);
}

class Rectangle implements Resizable {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function resize($scale) {
        $this->width *= $scale;
        $this->height *= $scale;
    }

    public function getDimensions() {
        echo "Width: {$this->width}, Height: {$this->height} <br>";
    }
}
echo "Bài 1:<br>";
$rectangle = new Rectangle(10, 20);
echo "Original dimensions: ";
$rectangle->getDimensions(); // Output: Width: 10, Height: 20
$rectangle->resize(2);
echo "New dimensions: ";
$rectangle->getDimensions(); // Output: Width: 20, Height: 40

//Bài 2: Tạo một interface "Logger" với các phương thức "logInfo", "logWarning" và "logError". Tạo một lớp "FileLogger" (Ghi log vào file) và một lớp "DatabaseLogger" (Ghi log vào cơ sở dữ liệu) và triển khai interface Logger cho cả hai lớp.
interface Logger {
    public function logInfo();
    public function logWarning();
    public function logError();
  }
  class FileLogger implements Logger {
    public function logInfo() {
  
    }
    public function logWarning() {
        
    }
    public function logError() {
        
    }
    protected $log;
    public function __construct($log) {
        $this->log = $log;
        $this->logInfo();
        $this->logWarning();
        $this->logError();
    }
    public function getLog() {
        return $this->log;
    }
  }
  class DatabaseLogger implements Logger {
    public function logInfo() {
  
    }
    public function logWarning() {
        
    }
    public function logError() {
        
    }
    protected $log;
    public function __construct($log) {
        $this->log = $log;
        $this->logInfo();
        $this->logWarning();
        $this->logError();
    }
    public function getLog() {
        return $this->log;
    }
  }
  echo "<br><br>Bài 2:<br>";
  $FileLogger = new FileLogger("bug...1");
  $DatabaseLogger = new DatabaseLogger("bug...2");
  echo $FileLogger->getLog(). "<br>";
  echo $DatabaseLogger->getLog(). "<br>";
  
//Bài 3: Tạo một interface "Drawable" (Có thể vẽ) với phương thức "draw". Tạo một lớp "Circle" (Hình tròn) và một lớp "Square" (Hình vuông) kế thừa từ interface Drawable và triển khai phương thức draw cho mỗi hình.
interface Drawable {
    public function draw();
}

class Circle implements Drawable {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function draw() {
        echo "Drawing a circle with radius {$this->radius} <br>";
    }
}

class Square implements Drawable {
    protected $length;

    public function __construct($length) {
        $this->length = $length;
    }

    public function draw() {
        echo "Drawing a square with length {$this->length} <br>";
    }
}
echo "<br><br>Bài 3:<br>";
$circle = new Circle(5);
$circle->draw(); // Output: Drawing a circle with radius 5
$square = new Square(10);
$square->draw(); // Output: Drawing a square with length 10

//Bài 4: Tạo một interface "Sortable" với phương thức "sort". Tạo một lớp "ArraySorter" (Sắp xếp mảng) và một lớp "LinkedListSorter" (Sắp xếp danh sách liên kết) và triển khai interface Sortable cho cả hai lớp.
interface Sortable {
    public function sort();
}

class ArraySorter implements Sortable {
    protected $array;

    public function __construct($array) {
        $this->array = $array;
    }

    public function sort() {
        sort($this->array);
    }

    public function getArray() {
        return $this->array;
    }
}

class LinkedListSorter implements Sortable {
    protected $head;

    public function __construct($head) {
        $this->head = $head;
    }

    public function sort() {
        sort($this->array);
    }

    public function getArray() {
        return $this->array;
    }
}
echo "<br><br>Bài 4:<br>";
$arraySorter = new ArraySorter([3, 1, 4, 1, 5, 9, 2, 6, 5, 3]);
$arraySorter->sort();
echo "Sorted array: " . implode(" ", $arraySorter->getArray()) . "<br>";
$linkedListSorter = new LinkedListSorter($head);
$linkedListSorter->sort();
echo "Sorted linked list: " . $linkedListSorter->getLinkedList() . "<br>";

//Bài 5: Tạo một interface "Encryptable" (Có thể mã hóa) với phương thức "encrypt" và "decrypt". Tạo một lớp "AES" và một lớp "DES" kế thừa từ interface Encryptable và triển khai các phương thức theo thuật toán mã hóa tương ứng.
interface Encryptable {
    public function encrypt($data);
    public function decrypt($encryptedData);
}

class AES implements Encryptable {
    private $key;
    
    public function __construct($key) {
        $this->key = $key;
    }
    
    public function encrypt($data) {
        $encryptedData = openssl_encrypt($data, 'AES-128-CBC', $this->key, 0, '1234567890123456');
        return $encryptedData;
    }
    
    public function decrypt($encryptedData) {
        $decryptedData = openssl_decrypt($encryptedData, 'AES-128-CBC', $this->key, 0, '1234567890123456');
        return $decryptedData;
    }
}

class DES implements Encryptable {
    private $key;
    
    public function __construct($key) {
        $this->key = $key;
    }
    
    public function encrypt($data) {
        $encryptedData = openssl_encrypt($data, 'DES-CBC', $this->key, 0, '12345678');
        return $encryptedData;
    }
    
    public function decrypt($encryptedData) {
        $decryptedData = openssl_decrypt($encryptedData, 'DES-CBC', $this->key, 0, '12345678');
        return $decryptedData;
    }
}

echo "<br><br>Bài 5:<br>";
$aes = new AES('my_aes_key');
$des = new DES('my_des_key');

$data = 'Hello, World!';
$encryptedAES = $aes->encrypt($data);
$decryptedAES = $aes->decrypt($encryptedAES);

$encryptedDES = $des->encrypt($data);
$decryptedDES = $des->decrypt($encryptedDES);

echo 'Data: ' . $data . "\n";
echo 'AES Encrypted: ' . $encryptedAES . "<br>";
echo 'AES Decrypted: ' . $decryptedAES . "<br>";
echo 'DES Encrypted: ' . $encryptedDES . "<br>";
echo 'DES Decrypted: ' . $decryptedDES . "<br>";
