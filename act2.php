<!DOCTYPE html>
<head>  
    <title>Activity #1</title>
</head> 
<style>

.submit-style, .clear {
  background-color: #c2fbd7;
  border-radius: 100px;
  box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
  color: green;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.submit-style:hover, .clear:hover {
  box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
}
.input-text {
  padding:10px;
  border-radius:10px;
  margin: 5px;
}
.pyra{
    height: 20px;
    width: 30px;
    border: 2px solid black;
    text-size-adjust: 20;
    text-align: center;
    display: inline-block;
    margin: 2px;
}
.container{
    float: left;
    height: 650px;
    width: 300px;
    padding: 5px;
    margin: auto;
   
}

.input_area{
    height: 120px;
    width: 250px;
    padding: 5px;
    margin: auto;
    background-color: aliceblue;
}

.result{
    height: 120px;
    width: 250px;
    padding: 5px;
    margin: auto;
    background-color: aliceblue;
}
label{
    color: darkslateblue;
    font-size: 20px;
}
p{
    font-size: 17px;
    color: darkslateblue
}
body{        
    padding: 0px;
    background: black;
    background-size: cover;
    background-image: url('https://wallpaperaccess.com/full/3567970.jpg');
}
br{
    background: transparent;
}
footer{
    color: white;
    text-align: left;
    
}
</style>


<body>
<div class="container">
    <div class="input_area">
        <form action="" method="post">
        <label for="layers"> Number of Layer(s): <br></label>
        <input type="text" name="layers" class="input-text"> <br> </input> 
        <button name="submit" value="submit" type="submit" class="submit-style">Submit</button>  
        <button name="clear" value="clear" class="clear">Clear</button>
        </form>
    </div>
    <br>
    
    
    <?php
    if  (isset($_POST['submit']))  
    {   
        $m = $_POST['layers'];
        $even = 0;
        $odd = 0;
        $total = 0;
        for ($i = 1; $i <= $m; $i++)
        {
            for($j = 1; $j <= $i; $j++ )
            {
                if ($i % 2 == 0)
                {
                    $even++;
                }
                else
                {
                    $odd++;
                }
            }
        }
        echo "<div class = 'result'>";
        echo "<p>Total Bricks: ".$total = $odd + $even." </p>";
        echo "<p>Total Bricks (Odd Number): ".$odd." </p>";
        echo "<p>Total Bricks (Even Number): ".$even." </p>";
        echo "</div>";
    }
    ?>
    
    
</div>
    <div style = "text-align: center; height: 750px  ; width: 1190px;; float: right;">
    <?php
        if (isset($_POST['submit']))  //when submit button is pressed
        {
           $num = $_POST['layers'];
           print_pattern($num); 
        }
        elseif (isset($_POST['clear']))     //if clear button is pressed
        {
            echo "&nbsp;";
        }
        function print_pattern($num)
        {
            // Outer loop handles number of rows
            for ($i = 1; $i <= $num; $i++)  
                {
                    for($j = 1; $j <= $i; $j++ )
                    {
                        if ($j == 1 || $i == $j )
                        {
                            if ($i % 2 == 0)
                            {
                                echo "<div class = 'pyra' style = 'background-color: blue; color: white'>".$i."</div>";
                            }
                            else
                            {
                                echo "<div class = 'pyra' style = 'background-color: red; color: white'>".$i."</div>";
                            }
                        }
                        elseif ( $i == $num)
                        {
                            echo "<div class = 'pyra' style = 'background-color: green ;color: white'>".$i."</div>";
                        }
                        else
                        {
                            echo "<div class = 'pyra' style = 'background-color: yellow'>".$i."</div>";
                        }
                      
                    }
                
                echo "<br>"; // go to new line after each row pattern is printed
                }
        }
    ?>
    </div>
</body>

<footer>
    Copyright &copy 2022 by Mel Ivan M. Abolencia <br>
    BSIT EVSU
</footer>