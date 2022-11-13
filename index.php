<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Work for Lesson 13</title>
    <style>
        body {
            color: darkblue;
        }

        pre {
            color: black;
        }
    </style>
</head>
<body>
<h5>Заняття 13. Використання класів усередині інших класів. Передача об'єктів параметрами </h5>
<hr>

<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Arr, App\AvgHelper, App\Product, App\SumHelper, App\Cart;

echo "<pre>",
"
    1.	Самостійно повторіть описані мною класи Arr та SumHelper.
    2.	Створіть клас AvgHelper з методом getAvg, який параметром прийматиме масив і повертатиме середнє 
    арифметичне цього масиву (сума елементів ділитиме на кількість).
    3.	Додайте до класу AvgHelper ще й метод getMeanSquare, який параметром прийматиме масив і 
    повертатиме середнє квадратичне цього масиву (квадратний корінь, витягнутий із суми квадратів елементів, поділеної на кількість).
    4.	Додайте до класу Arr метод getAvgMeanSum, який знаходитиме суму середнього арифметичного та 
    середнього квадратичного з масиву $ this->nums.
    ",
"</pre>";

//create an instance of the class
$arr = new Arr();
$arr->add(3); // додаємо в масив число 1
$arr->add(4); // додаємо в масив число 2
$arr->add(5); // Додаємо в масив число 3

//get the sum of squares and cubes of array elements
echo("The sum of squares and cubes of (3,4,5): " . $arr->getSum23() );


echo "<hr />";

echo "<pre>",
"
    5.	Зробіть клас Product, у якому будуть приватні властивості name, price та quantity. 
    Нехай всі ці властивості будуть доступні лише читання.
    6.	Додайте в клас Product метод getCost, який знаходитиме повну вартість продукту 
    (сума помножити на кількість).
",
"</pre>";

//create an instance of the class
$newproduct = new Product("Car", 10000,  5);
//display $newproduct information
echo("  NAME: " . $newproduct->getName() . " " . "PRICE: " . $newproduct->getPrice() . " " . "COAST: " . $newproduct->getCost());

echo "<hr />";

echo "<pre>",
"
    7.	Зробіть клас Cart. Цей клас зберігатиме список продуктів (об'єктів класу Product) у вигляді масиву. 
    Нехай продукти зберігаються як products.
    8.	Реалізуйте в класі Cart метод add для додавання продуктів.
    9.	Реалізуйте у класі Cart метод remove для видалення продуктів. Метод повинен приймати параметром
    назву продукту, що видаляється.
    10.	Реалізуйте у класі Cart метод getTotalCost, який знаходитиме сумарну вартість продуктів.
    11.	Реалізуйте у класі Cart метод getTotalQuantity, який знаходитиме сумарну кількість продуктів 
    (тобто суму властивостей quantity всіх продуктів).
    12.	Реалізуйте в класі Cart метод getAvgPrice, який знаходитиме середню вартість продуктів (сумарна 
    вартість ділитиме на кількість всіх продуктів).
",
"</pre>";

$newCart =new Cart();
$product1 = new Product("Cake", 2, 1000); //create an instance of the class
echo("Name product1: " . $product1->getName() . " " . "Price product1: " . $product1->getPrice());
echo "<br />";

$product2 =  new Product("Bread", 3, 500);
echo("Name product2: " . $product2->getName() . " " . "Price product2: " . $product2->getPrice());
echo "<br />";

$newCart->add($product1);
echo "Cart after added product1 : ";
$newCart->getInfo();
echo "<br />";

$newCart->add($product2);
echo "Cart after added product2 : ";
$newCart->getInfo();
echo "<br />";

$newCart->remove("Cake");
echo "Cart after removed product1 : ";
$newCart->getInfo();



echo "<hr />";

?>
</body>
</html>