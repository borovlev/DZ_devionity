

<?php	// 18 Использование print_r

$myArray = array('Ukraine', 'USA' , 'England' , 'France', 'Canada');
print_r($myArray);

echo '<br>';


echo '<pre>';
print_r($myArray);
echo '</pre>';
?>

<?php	// 19 Ассоциативные массивы
$myArray2 = array('Ukraine' => 'Kiev', 'USA' => 'Washington' , 'England' => 'London' , 'France' => 'Paris', 'Canada' =>'Ottawa');
print_r($myArray);

echo '<br>';


echo '<pre>';
print_r($myArray2);
echo '</pre>';
?>

<?php // 20 многомерный массив
$book_1 = array( 'phantastik', 'author' , '20$', 'name');
$book_2 = array( 'detective', 'author 2' , '30$', 'name 2');
$book_3 = array( 'travel', 'author 3' , '50$', 'name 3');
$books = array($book_1, $book_2, $book_3);

// output
echo '<pre>';
print_r($books);
echo '</pre>';
?>

<?php	// 22 Константы

define('USA', 'USA');
define('Ukraine', 'Ukraine');

$myArray = array(USA, Ukraine );
print_r($myArray);

echo '<br>';


echo '<pre>';
print_r($myArray);
echo '</pre>';
echo '<hr>';
?>

<?php // 23 Переменные переменных

$Hello = 'Hi';
$Hi = 'myVar';
$myVar = 'hey';
$hey = 'bro';
$bro = 'Hello ';



echo $$hey;
echo '<br>';
echo $$$myVar; 
echo '<br>';
echo $$$$Hi;
echo '<br>';
echo $$$$$Hello;
echo '<br>';
?>
 // 28 Предопределенные переменные 
<form action="index.php" method="post">
    <input type="text" name="email"/> 
	<input type="text" name="name"/>
	<input type="text" name="Number"/>
    <input type="submit"/>
</form>
<?php
    print_r($_POST);
?>
