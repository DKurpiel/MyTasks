
<!-- HTML -->

<section class="task03">
    <div class="box-container_task">
        
        <div class="box_task">
            <h1>01 - switch</h1> <br> <p>Kalkulator  </p> <br>
            
            <form action="" method="post">
            <?php include 'script/calculator_script.php'; ?>

            <input type="number" name="num1" placeholder="Pierwsza liczba:" />
            
            <select class = "select" name = "operator">
                <option>Wybierz</option>
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
            </select> <br>

            <input type="number" name="num2" placeholder="Druga liczba:" />

            <button type="submit" name = "submit" value ="Przeslij" > Oblicz </button>

            <br>

            <input type="number" value="<?php echo $result; ?>" placeholder="Wynik: ">

            </form>

        </div>

        <div class="box_task">           
            <h1>02 - if</h1> <br> <p> Jeśli wartość zmiennej będzie: mniejsza lub równa 10, większa od 10, mniejsza lub równa 25, większa od 25.</p> <br>

            <form action="" method="post">
            <input type="number" name="num" placeholder="Wpisz liczbę: ">
            <button type="submit" value="Przeslij"> Prześlij </button>
            </form>

            <?php
                if(isset($_POST['num']) && is_numeric($_POST['num']))
                {
                    $a = $_POST['num'];
                    if ($a <= 10)
                    {
                        echo ' Liczba jest mniejsza lub równa 10';
                    } elseif ($a > 10 && $a <= 25)
                    {
                        echo ' Liczba jest większa od 10 ale mniejsza lub równa od 25';
                    } else 
                    {
                        echo ' Liczba jest większa od 25';
                    }
                }
            ?>

        </div>

        <div class="box_task">           
            <h1>03 - function</h1> <br> <p>Napisz funkcję, która pobiera liczbę i zwraca tę liczbę podniesioną do kwadratu.</p> <br>
            
            <form action="" method="post">
            <input type="number" name="num3" placeholder="Liczba: ">
            <button type="submit" value="Przeslij" name="buttonFunction"> Prześlij </button> <br>
            </form>
            <?php
                
                if (isset($_POST['buttonFunction']))
                {
                    $num3 = $_POST['num3'];
                    $r = "";
                    function squared ($num3)
                    {
                        return $num3 ** 2;
                    }
                    
                    if ($num3 !="" && is_numeric($num3))
                    {
                        $r = squared ($num3);
                    }
                }
            ?>

            <input type="number" placeholder="Wynik: " 
            value="<?php echo $r; ?>"></p>

        </div>

        <div class="box_task">
            <h1>04 - while</h1> <br> <p>Wyświetli liczby od 5 do 15 </p> <br>
                
            <?php
            $num = 5;
            while ($num <= 15)
            {
                echo $num;
                echo ", ";

                $num++;
            }
            ?>
        </div>
        <div class="box_task">
            <h1>05 - for</h1> <br> <p> Wyświetl choinkę z *</p> <br>
            
            <div class="tree">
            <?php
            for ($row = 1; $row <=5; $row++)
            {
                for ($star = 1; $star <= $row; $star++)
                {
                    echo "*";
                }
                echo "<br>";
            }
            ?>
            </div>
          

        </div>

        <div class="box_task">           
            <h1>06 - foreach, range</h1> <br> <p>Wyswietl liczby od 0 do 10</p>
            <?php
                echo "<br> ";
                foreach (range (0, 10) as $number) 
                { 
                    echo $number;
                    echo ", ";
                }
            ?>
        </div>

        <div class="box_task">           
            <h1>07 - __construct</h1> <br> <p>class Person</p>
            <?php
            
            echo "<br>";
            class Person
                {
                public $name;
                public $age;
                public $hobby;

            public function __construct($name, $age, $hobby)
            {
                $this->name = $name;
                $this->age = $age;
                $this->hobby = $hobby;

            }
            public function info()
                {
                    echo $this->name . " -  wiek: " . $this->age . ", hobby: " .  $this->hobby;
                }

                }

                $p1 = new Person("Darek", 25, "filmy");
                $p1->info();
                echo '<br>';

                $p2 = new Person("Tomek", 24, "sport");
                $p2->info();
                echo '<br>';

                $p2 = new Person("Kamil", 23, "książki");
                $p2->info();
                echo '<br>';

            ?>
        </div>
    </div>

</section>
