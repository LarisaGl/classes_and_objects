<?php

    echo "1. Инкапсуляция- это объединение в один класс необходимых свойств и методов, связанных одним контекстом, необходимых для решения определенной задачи, для последующей возможности использования их как единого целого. Также инкапсуляцию понимают как скрытие переменных в классе от других людей, программистов и т.д., когда все свойства класса являются private, а методы public. Это обеспечивает взаимодействие со свойствами класса только через методы. Это необходимо для невозможности изменения критичных для работы класса свойств." . "<br>";

    echo "2. При процедурном программировании для написания большого кода требуется большое число процедур, что, в итоге, приводит к путанице, ошибкам, утяжелению конструкции, повторению каких-то кусков кода и т.д. Также, все данные процедуры доступны только внутри её. Этих недостатков нет в ООП. Использование объектов делает код лаконичнее, короче, проще. Тяжелее ошибиться или забыть о наличии какой-нибудь функции. В ОПП каждое свойство разложено по своим ячейкам вместе с методами, которые для них же необходимы. Однако, если код небольшой, гораздо проще использовать несколько процедур или функций, чем заморачиваться с целым классом. Также очевидна удобность ООП когда возникает необходимость создать похожий модуль/блок, с некоторыми отличиями, например немного иными входными данными, или другим порядком расчета цены. При процедурном методе пришлось бы писать и копировать много кода, а при использовании объектов-отнаследовать и добавить пару нужных функций. Также плюсом можно считать возможность сокрытия свойств и методов через private и protected. В массивах и функциях такой возможности нет. Массивы - это чисто хранение данных. Объекты тоже могут выполнять эту функцию. Однако, попытка обновить данные в объекте окончится неудачей, тогда как данные в массиве затираются легко. Объекты включают помимо данных методы - функции, характерные исключительно для них." . "<br>";

    class Car
    {
        public $model;
        public $color;
        public $speed;
        public $price;
        public $discount = 10;

        public function __construct($model, $color, $speed, $price)
        {
            $this->model = $model;
            $this->color = $color;
            $this->speed = $speed;
            $this->price = $price;
        }

        public function getPrice()
        {
            return round ($this->price - ($this->price * $this->discount / 100));
        }
    }

    $bmw = new Car ('BMW M3', 'blue', 350, 7000000);
    echo "<pre>";
    print_r($bmw);
    echo "</pre>";
    echo "Ваша цена:" . $bmw->getPrice();

    $mazda = new Car ('Mazda 3', 'white', 220, 1500000);
    echo "<pre>";
    print_r($mazda);
    echo "</pre>";
    echo "Ваша цена:" . $mazda->getPrice();

    class TV
    {
        public $model;
        public $size;
        public $price;
        public $discount = 15;

        public function __construct($model, $size, $price)
        {
            $this->model = $model;
            $this->size = $size;
            $this->price = $price;
        }

        public function getPrice()
        {
        return round ($this->price - ($this->price * $this->discount / 100));
        }

        public function description()
        {
        return $this->model . ' размером ' . $this->size . ' дюймов без учета скидки стоит ' . $this->price . ' рублей, с учетом скидки ' . $this->getPrice();
        }
    }

    $lg = new TV ('LG', 40, 35000);
    echo "<pre>";
    print_r($lg);
    echo "</pre>";
    echo "Описание товара: " . $lg->description() . "<br>";

    $samsung = new TV ('Samsung', 45, 50000);
    echo "<pre>";
    print_r($samsung);
    echo "</pre>";
    echo "Описание товара: " . $samsung->description() . "<br>";

    class Pen
    {
        public $model;
        public $color;
        public $price;
        public $discount = 3;

        public function setModel($model)
        {
            $this->model = $model;
            return $this;
        }

        public function setColor($color)
        {
            $this->color = $color;
            return $this;
        }

        public function setPrice($price)
        {
            $this->price = $price;
            return $this;
        }

        public function getPrice()
        {
            return round ($this->price - ($this->price * $this->discount / 100));
        }
    }

    $colop = new Pen ();
    $colop->setModel('Colop')->setColor('white')->setPrice(30);
    echo "<pre>";
    print_r($colop);
    echo "</pre>";
    echo "Ваша цена с учетом скидки: " . $colop->getPrice();

    $parker = new Pen ();
    $parker->setModel('Parker')->setColor('black')->setPrice(1000);
    echo "<pre>";
    print_r($parker);
    echo "</pre>";
    echo "Ваша цена с учетом скидки: " . $parker->getPrice();

    class Duck
    {
        public $color;
        public $price;
        public $weight;
        public $discount = 5;

        public function __construct($color, $price, $weight)
        {
            $this->color = $color;
            $this->price = $price;
            $this->weight = $weight;
        }

        public function getDiscount()
        {

            if ($this->weight > 1000) {
                return $this->discount = 5;
            }
            else {
                return $this->discount = 10;
            }
        }

        public function getPrice()
        {
            return  round ($this->price - ($this->price * $this->discount / 100));
        }
    }

    $one = new Duck ('white', 450, 1500);
    echo "<pre>";
    print_r($one);
    echo "</pre>";
    echo "Ваша скидка:" . $one->getDiscount() . "<br>"; 
    echo "Ваша цена:" . $one->getPrice();

    $two = new Duck ('black', 300, 800);
    echo "<pre>";
    print_r($two);
    echo "</pre>";
    echo "Ваша скидка:" . $two->getDiscount() . "<br>"; 
    echo "Ваша цена:" . $two->getPrice();

    class Product
    {
        public $name;
        public $color;
        private $price;
        public $discount;

        public function __construct($name, $color, $discount)
        {
            $this->name = $name;
            $this->color = $color;
            $this->discount = $discount;
        }

        public function setPrice($price)
        {
        	$this->price = $price;
        	return $this;
        }

        public function getPrice()
        {
            return round ($this->price - ($this->price * $this->discount / 100));
        }
    }

    $guess = new Product ('Guess', 'blue', 5);
    $guess-> setPrice(15000);
    echo "<pre>";
    print_r($guess);
    echo "</pre>";
    echo "Ваша цена:" . $guess->getPrice();

    $dkny = new Product ('DKNY', 'red', 10);
    $dkny-> setPrice(22000);
    echo "<pre>";
    print_r($dkny);
    echo "</pre>";
    echo "Ваша цена:" . $dkny->getPrice();