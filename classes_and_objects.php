<?php

echo "1. Инкапсуляция- это объединение в один класс необходимых свойств и методов, связанных одним контекстом, необходимых для решения определенной задачи, для последующей возможности использования их как единого целого. Также инкапсуляцию понимают как скрытие переменных в классе от других людей, программистов и т.д., когда все свойства класса являются private, а методы public. Это обеспечивает взаимодействие со свойствами класса только через методы. Это необходимо для невозможности изменения критичных для работы класса свойств."."<br>";

echo "2. При процедурном программировании для написания большого кода требуется большое число процедур, что, в итоге, приводит к путанице, ошибкам, утяжелению конструкции, повторению каких-то кусков кода и т.д. Также, все данные процедуры доступны только внутри её. Этих недостатков нет в ООП. Использование объектов делает код лаконичнее, короче, проще. Тяжелее ошибиться или забыть о наличии какой-нибудь функции. В ОПП каждое свойство разложено по своим ячейкам вместе с методами, которые для них же необходимы. Однако, если код небольшой, гораздо проще использовать несколько процедур или функций, чем заморачиваться с целым классом. Также очевидна удобность ООП когда возникает необходимость создать похожий модуль/блок, с некоторыми отличиями, например немного иными входными данными, или другим порядком расчета цены. При процедурном методе пришлось бы писать и копировать много кода, а при использовании объектов-отнаследовать и добавить пару нужных функций. Также плюсом можно считать возможность сокрытия свойств и методов через private и protected. В массивах и функциях такой возможности нет. Массивы - это чисто хранение данных. Объекты тоже могут выполнять эту функцию. Однако, попытка обновить данные в объекте окончится неудачей, тогда как данные в массиве затираются легко. Объекты включают помимо данных методы - функции, характерные исключительно для них.";

class Car
{
	public $model;
	public $color;
	public $speed;
	public $price;

	public function __construct($model, $color, $speed, $price)
	{
		$this->model=$model;
		$this->color=$color;
		$this->speed=$speed;
		$this->price=$price;
	}
}

$bmw = new Car ('BMW M3', 'blue', 350, 7000000);
$mazda = new Car ('Mazda 3', 'white', 220, 1500000);

echo "<pre>";
print_r($bmw);
echo "</pre>";
echo "<pre>";
print_r($mazda);
echo "</pre>";

class TV
{
	public $model;
	public $size;
	public $price;

	public function __construct($model, $size, $price)
	{
		$this->model=$model;
		$this->size=$size;
		$this->price=$price;
	}
}

$lg = new TV ('LG', 40, 35000);
$samsung = new TV ('Samsung', 45, 50000);

echo "<pre>";
print_r($lg);
echo "</pre>";
echo "<pre>";
print_r($samsung);
echo "</pre>";

class Pen
{
	public $model;
	public $color;
	public $price;

	public function __construct($model, $color, $price)
	{
		$this->model=$model;
		$this->color=$color;
		$this->price=$price;
	}
}

$colop = new Pen ('Colop', 'white', 30);
$parker = new Pen ('Parker', 'black', 1000);

echo "<pre>";
print_r($colop);
echo "</pre>";
echo "<pre>";
print_r($parker);
echo "</pre>";

class Duck
{
	public $color;
	public $price;
	public $weight;

	public function __construct($color, $price, $weight)
	{
		$this->color=$color;
		$this->price=$price;
		$this->weight=$weight;
	}
}

$one = new Duck ('white', 450, 1500);
$two = new Duck ('black', 300, 1000);

echo "<pre>";
print_r($one);
echo "</pre>";
echo "<pre>";
print_r($two);
echo "</pre>";

class Product
{
	public $name;
	public $color;
	public $price;

	public function __construct($name, $color, $price)
	{
		$this->name=$name;
		$this->color=$color;
		$this->price=$price;
	}
}

$guess = new Product ('Guess', 'blue', 15000);
$dkny = new Product ('DKNY', 'red', 22000);

echo "<pre>";
print_r($guess);
echo "</pre>";
echo "<pre>";
print_r($dkny);
echo "</pre>";

?>