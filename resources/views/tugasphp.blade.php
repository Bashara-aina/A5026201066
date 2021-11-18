<?php

//Celsius to Fahrenheit ° F = 9/5 ( ° C) + 32
//Fahrenheit to Celsius ° C = 5/9 (° F - 32)
//Celsius to Kelvin K = ° C + 273.15
//Kelvin to Celsius ° C = K - 273.15
//Fahrenheit to Kelvin K = 5/9 (° F - 32) + 273.15
//Kelvin to Fahrenheit 	° F = 9/5 (K - 273.15) + 32


//Fahrenheit to celsius
function fahrenheit_to_celsius($given_value)
{
	$celsius=5/9*($given_value-32);
	return $celsius ;
}
//Fahrenheit to kelvin
function fahrenheit_to_kelvin($given_value)
{
	$kelvin=fahrenheit_to_celsius($given_value) + 273.15;
	return $kelvin ;
}
//Celsius to fahrenheit
function celsius_to_fahrenheit($given_value)
{
	$fahrenheit=$given_value*9/5+32;
	return $fahrenheit ;
}
//Celsius to kelvin
function celsius_to_kelvin($given_value)
{
	$kelvin=$given_value+273.15;
	return $kelvin ;
}
//Kelvin to fahrenheit equation
function kelvin_to_fahrenheit($given_value)
{
	$fahrenheit=9/5*($given_value-273.15)+32;
	return $fahrenheit ;
}
//Kelvin to celsius equation
function kelvin_to_celsius($given_value)
{
	$celsius=$given_value-273.15;
	return $celsius ;
}
?>

<html>
<head>
	<title>Temperature Converter</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap');


* {
    margin: 0 auto;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto Mono', monospyace;
    font-size: 20px;
}

body{
    height: 100vh;
    background-color: #5e8b7e !important;
}


.container{
    width: 80%;
    margin-top: 50px;
    background-color: white;
    padding: 10% !important;
    box-shadow: 0 20px 25px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
}
    </style>

</head>
<body>
<form action="" method="post">
    @csrf
<div class="container" id="app">
    <div class="row">

    <div class="col-md-12 py-5">
        <h2 class="text-center">Konversi Suhu</h2>
        <hr>
        <div class="row justify-content-between">
        <div class="col-md-3">
        <select name="first_temp_type_name">
					<option value="fahrenheit">Fahrenheit</option>
					<option value="celsius">Celsius</option>
					<option value="kelvin"> Kelvin</option>
				</select>
        </div>

        <div class="col-md-4">
        <input type="text" name="given_value">
        </div>

        <div class="col-md-3">
        <select name="second_temp_type_name">
					<option value="fahrenheit">Fahrenheit</option>
					<option value="celsius">Celsius</option>
					<option value="kelvin">Kelvin</option>
				</select>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="">
        <input type="submit" name="btn" value="Convert">
        </div>

        <div class="col-md-12 mt-3">
		<div class="card">
		<div class="card-body">
			<?php
			print_celcius();
			?>
            </div>
		</div>
		</div>
    </div>


<?php
function print_celcius() {
if(isset($_POST['btn']))

{

    $first_temp_type_name=$_POST['first_temp_type_name'];
    $second_temp_type_name=$_POST['second_temp_type_name'];
    $given_value=$_POST['given_value'];

    //Fahrenheit to celsius and kelvin

    if ($first_temp_type_name=='fahrenheit')
    {
        if ($second_temp_type_name=='celsius')
        {
            $celsius=fahrenheit_to_celsius($given_value);
            echo "$given_value Fahrenheit = $celsius Celsius";
        }  elseif ($second_temp_type_name=='kelvin')
        {
            $kelvin=fahrenheit_to_kelvin($given_value);
            echo "$given_value Fahrenheit = $kelvin Kelvin";
        }  else
        {
            echo "$given_value Fahrenheit";
        }
    }

    //Celsius to fahrenheit and kelvin
    if ($first_temp_type_name=='celsius')
    {
        if ($second_temp_type_name=='fahrenheit')
        {
            $fahrenheit=celsius_to_fahrenheit($given_value);
	        echo "$given_value Celsius  = $fahrenheit Fahrenheit";
        }  elseif ($second_temp_type_name=='kelvin')
        {
            $kelvin=celsius_to_kelvin($given_value);
            echo "$given_value Celsius   = $kelvin Kelvin";
        }  else
        {
            echo "$given_value Celsius";
        }
    }
    //Kelvin to fahrenheit and celsius
    if ($first_temp_type_name=='kelvin')
    {
        if ($second_temp_type_name=='fahrenheit')
        {
            $fahrenheit=kelvin_to_fahrenheit($given_value);
            echo "$given_value Kelvin  = $fahrenheit Fahrenheit";
        }  elseif ($second_temp_type_name=='celsius')
        {
            $celsius=kelvin_to_celsius($given_value);
            echo "$given_value Kelvin  = $celsius Celsius";
        }  else
        {
            echo "$given_value Kelvin";
        }
    }
}
}

				?>
</div>
</div>
</div>
</div>
</form>
</body>
</html>
