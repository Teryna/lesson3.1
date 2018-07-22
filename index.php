<?php 
//error_reporting(E_ALL);
class Car 
{
    public $name;
    public $color;
    public $price;
    public $year;
    public $transmission;
  
    public function __construct($name, $color, $price, $year, $transmission)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->year = $year;
        $this->transmission = $transmission;
    }
}

$audi = new Car('AUDI', 'metalic', '17 640 EUR', '2015', 'automatic');
$volvo = new Car('VOLVO', 'black', '24 300 EUR', '2016', 'manual');
        
$cars = [];
array_push($cars, $audi, $volvo);

//print_r ($cars);

class Tv 
{
    public $brand;
    public $color;
    public $size;
    public $price;
    public $wifi;
    
    public function __construct($brand, $color, $size, $price)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->size = $size;
        $this->price = $price;
    }
}

$lg = new Tv('LG', 'metalic', '55"', '529.99 EUR');
$samsung = new Tv('samsung', 'black', '32"', '219.99 EUR');
        
$lg->wifi = '+';
$samsung->wifi = '-';
$tvs = [];
array_push($tvs, $lg, $samsung);

class Pen
{
    public $color;
    public $quality;
    public $quantity;
    public $price;
  
    public function __construct($color, $quality, $quantity, $price)
    {
        $this->color = $color;
        $this->quality = $quality;
        $this->quantity = $quantity;
        $this->price = $price;
    }
}

$pen1 = new Pen('blue', 'gel', '4', '6.00 EUR');
$pen2 = new Pen('black', 'ball', '2', '1.50 EUR');
        
$pens = [];
array_push($pens, $pen1, $pen2);

class Duck
{
    public $name;
    public $color;
    public $weight;
    public $eagsInYear;
  
    public function __construct($name, $color, $weight, $eagsInYear)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
        $this->eagsInYear = $eagsInYear;
    }
}

$duck1 = new Duck('Пекинская', 'белый', '4 кг', '~ 100 шт');
$duck2 = new Duck('Украинская', 'глинистый', '3,5 кг', '~ 160 шт');
        
$ducks = [];
array_push($ducks, $duck1, $duck2);

class Product 
{
    public $name;
    public $category;
    public $price;
    public $quantity;
    public $isAvailable = 1;
  
    public function __construct($name, $category, $price, $quantity, $isAvailable)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->isAvailable = $isAvailable;
    }
    
    public function getInfo() 
    {
        if ($this->isAvailable) {
            echo 'yes';
        } else {
            echo 'no';
        }
    }
}

$product1 = new Product('shampoo', ' for hair', '2.75 EUR', '3', '1');
$product2 = new Product('cream', 'for body', '5.50 EUR', '0', '0');
        
$products = [];
array_push($products, $product1, $product2);
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Классы и объекты</title>
</head>
<body>
<div>
    <h3>Машины</h3>
    <table>
        <thead>
            <th>Brand</th>
            <th>Color</th>
            <th>Price</th>
            <th>Year</th>
            <th>Transmission</th>
        </thead>
        <tbody>
            <?php foreach ($cars as $car): ?>
            <tr>
                <td><?php echo $car->name; ?></td>
                <td><?php echo $car->color; ?></td>
                <td><?php echo $car->price; ?></td>
                <td><?php echo $car->year; ?></td>
                <td><?php echo $car->transmission; ?></td>
            </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>   
    <h3>Телевизоры</h3>
    <table>
        <thead>
            <th>Brand</th>
            <th>Color</th>
            <th>Size</th>
            <th>Price</th>
            <th>WiFi</th>
        </thead>
        <tbody>
            <?php foreach ($tvs as $tv): ?>
            <tr>
                <td><?php echo $tv->brand; ?></td>
                <td><?php echo $tv->color; ?></td>
                <td><?php echo $tv->size; ?></td>
                <td><?php echo $tv->price; ?></td>
                <td><?php echo $tv->wifi; ?></td>
            </tr>
            <?php endforeach; ?>    
        </tbody>
    </table> 
    <h3>Ручки</h3>  
    <table>
        <thead>
            <th>Color</th>
            <th>Quality</th>
            <th>Quantity</th>
            <th>Price</th>        
        </thead>
        <tbody>
            <?php foreach ($pens as $pen): ?>
            <tr>
                <td><?php echo $pen->color; ?></td>
                <td><?php echo $pen->quality; ?></td>
                <td><?php echo $pen->quantity; ?></td>
                <td><?php echo $pen->price; ?></td>
            </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>   
      <h3>Утки</h3>  
    <table>
        <thead>
            <th>Название</th>
            <th>Окрас</th>
            <th>Вес</th>
            <th>Яиц в год</th>         
        </thead>
        <tbody>
            <?php foreach ($ducks as $duck): ?>
            <tr>
                <td><?php echo $duck->name; ?></td>
                <td><?php echo $duck->color; ?></td>
                <td><?php echo $duck->weight; ?></td>
                <td><?php echo $duck->eagsInYear; ?></td>
            </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>  
    <h3>Товары</h3>
    <table>
        <thead>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Is available</th>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product->name; ?></td>
                <td><?php echo $product->category; ?></td>
                <td><?php echo $product->price; ?></td>
                <td><?php echo $product->quantity; ?></td>
                <td><?php echo $product->getInfo(); ?></td>
            </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>    
</div>
</body>
</html>

					