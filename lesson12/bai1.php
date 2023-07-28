<!DOCTYPE html>
<html>
<body>

<?php
//Kiểm tra thư mục tồn tại chưa có thì tạo mới
if(file_exists('data.txt'))
echo 'file tồn tại';
else
echo 'file không tồn tại';
?>

 <?php
$file = "data.txt";
if(is_writable($file)) {
  echo ("$file is writable");
} else {
  echo ("$file is not writable");
}
?>


<?php
$file = fopen("data.txt","w");
echo fwrite($file,"Xin chào");
//đóng file
fclose($file);
//xóa file
unlink("data.txt");
?>
</body>
</html>