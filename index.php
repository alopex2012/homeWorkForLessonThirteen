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

$newUser = new User(); //create an instance of the class
$newUser->setName("Ahmet");
$newUser->setAge(28);
//display $newUser information
echo("Name: " . $newUser->getName() . " " . "Age: " . $newUser->getAge());
echo "<br />";

$newStudent = new Student(); //create an instance of the class
$newStudent->setName("Ahmad");
$newStudent->setAge(22);
//display $newStudent information
echo("Name: " . $newStudent->getName() . " " . "Age: " . $newStudent->getAge());

echo "<hr />";

echo "<pre>",
"
    4.	Зробіть клас User, у якому будуть такі властивості лише читання: name і surname. Початкові значення 
    цих властивостей повинні встановлюватись у конструкторі. Зробіть також гетери цих властивостей.
    5.	Модифікуйте попереднє завдання так, щоб третім параметром конструктор передавалась дата 
    народження працівника у форматі рік-місяць-день. Запишіть її у властивість birthday. 
    Зробіть геттер для цієї властивості.
    6.	Модифікуйте попереднє завдання так, щоб був приватний метод calculateAge, який параметром 
    прийматиме дату народження, а повертатиме вік з урахуванням того, чи був уже день народження цього року, чи ні.
    7.	Модифікуйте попереднє завдання так, щоб метод calculateAge викликався в конструкторі об'єкта, 
    розраховував вік користувача та записував його в приватну властивість age. 
    Зробіть геттер для цієї властивості.
",
"</pre>";

//create an instance of the class
$newSuperuser = new Superuser("Ibrahim", "Sherhani", "1973-07-03");
//display $newSuperuser information
echo("Name: " . $newSuperuser->getName() . " " . "Birthday: " . $newSuperuser->getBirthday() . " " . "Age: " . $newSuperuser->getAge());
echo "<br />";
$newSuperuser1 = new Superuser("Ilhan", "Chambek", "1988-12-22");
//display $newSuperuser1 information
echo "Name: " . $newSuperuser1->getName() . " " . "Birthday: " . $newSuperuser1->getBirthday() . " " . "Age: " . $newSuperuser1->getAge();
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
$newEmployee = new Employee("Mirza", "Immadulo", "1990-09-11", 3500);
//display $newEmployee information
echo("Name: " . $newEmployee->getName() . " " . "Birthday: " . $newEmployee->getBirthday() . " " . "Salary: " . $newEmployee->getSalary());

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

$product1 = new Product("Car", 20000); //create an instance of the class
echo("Name product1: " . $product1->getName() . " " . "Price product1: " . $product1->getPrice());
echo "<br />";
$product2 = $product1;
echo("Name product2: " . $product2->getName() . " " . "Price product2: " . $product2->getPrice());

echo "<hr />";

?>
</body>
</html>