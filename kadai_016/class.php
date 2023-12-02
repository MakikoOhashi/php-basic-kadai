<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php

        class Food {
            private $name;
            public $price;

            public function __construct($name,$price){
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price(){
            echo $this->price . '<br>';
        }
        }

        class Animal {
            private $name;
            public $height;
            private $weight;

        public function __construct($name,$height,$weight){
            $this->name=$name;
            $this->height=$height;
            $this->weight=$weight;
        }
        
        public function show_height(){
            echo $this->height . '<br>';
        }
        }

        $food = new Food ('potato',250);
        $animal = new Animal ('dog',60,5000);

        print_r($food);
        echo "<br>";
        print_r($animal);
        echo "<br>";
        
        
        $food->show_price();
        $animal->show_height();
        

        ?>
    </p>
    
</body>
</html>