<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <style>
        
        * {
            margin: 5px;
            padding: 5px;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #aaffde;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100;
        }

        .form1 {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            max-width: 400px;
            text-align: center;
        }

        h1, h2 {
            color: gray;
            margin-bottom: 20px;
            text-align: center;
        }

        
        label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
            color: #38a205;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #38a205;
            border-radius: 4px;
            font-size: 18px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #38a205;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background-color: #94fa64;
        }

        
    </style>
</head>
<body>
<div class="form1">
    <h1>BMI Calculator</h1>
    <form action="" method="POST">
        <label>Height:</label> <input type="text" name="height" placeholder="Enter your height in meters" required><br>
        <label>Weight:</label> <input type="text" name="weight" placeholder="Enter your weight in kilograms" required>
        <input type="submit" name="submit" value="Calculate">
        <h2>BMI RESULT</h2>
    </form>

    <?php 
    if (isset($_POST['submit'])) {
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $bmi = $weight / (($height / 100) ** 2);

        echo '<p> Your BMI value is: '. number_format ($bmi, 2) .' kg/m </p>';

    if ($bmi <= 18.5) {
            echo "Underweight";
            echo "Low (but risk of other clinical problems increased)";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            echo "Normal";
            echo "Average";
        } elseif ($bmi >= 25.0 && $bmi < 29.9) {
            echo "Overweight";
            echo "Mildly Increased";
        } elseif ($bmi <= 30.0) {
            echo "Obese";
        } elseif ($bmi >= 30.0 && $bmi < 34.9) {
            echo "Class I <br>";
            echo "Moderate";
        } elseif ($bmi >= 35.0 && $bmi < 39.9) {
            echo "Class II <br>";
            echo " Severe";
        } elseif ($bmi >= 40.0) {
            echo "Class III <br>";
            echo "Very Severe";
        }
    }
            
        ?>
        </div>
        </body>
        </html>
