<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExpansionProject.php</title>
    <style>
      h1 {
    text-align: center;
    color: #5599ee;
    font-family: sans-serif;
  }
   
h3 {
  text-align: center;
    color: gray;
  font-family: sans-serif;
}

table {
  table-layout: fixed;
  width: 70%;
  border: 0px solid #FFFFFF;
  margin-left: auto; 
  margin-right: auto;
  height:40px;
  font-family: sans-serif;
 }
   
body {
  background-color: #e0c7fd;
  border: 1px solid;
  border-width: 5px;
}	
   
p {
  color: black;
  text-align: right;
  font-weight: bold;
  font-family: sans-serif;
}

.tb {
  width: 70%;
  margin-left: auto; 
  margin-right: auto;
  height: 40px;
  font-weight: bold;
  text-align: center;
  font-family: sans-serif;
}
        </style>
</head>
<body>
<?php
  $Increase1 = 0.1;
  $Increase2 = 0.15;
  $Increase3 = 0.20;
  $Lcost = 150000;
  $Ccost = 78000;
  $Dcost = 69000;
  $Pcost = 12000;
  $Mcost = 20000;

  $total_cost1 = $Lcost + $Lcost * 0.1;
  $total_cost2 = $Lcost + $Lcost * 0.15;
  $total_cost3 = $Lcost + $Lcost * 0.20;

  $Increase1 = 0.1;
  $Increase2 = 0.15;
  $Increase3 = 0.20;
  $Lcost = 150000;
  $Ccost = 78000;
  $Dcost = 69000;
  $Pcost = 12000;
  $Mcost = 20000;

  $total_cost4 = $Ccost + $Ccost * 0.1;
  $total_cost5 = $Ccost + $Ccost * 0.15;
  $total_cost6 = $Ccost + $Ccost * 0.20;

  $Increase1 = 0.1;
  $Increase2 = 0.15;
  $Increase3 = 0.20;
  $Lcost = 150000;
  $Cocost = 78000;
  $Dcost = 69000;
  $Pcost = 12000;
  $Mcost = 20000;

  $total_cost7 = $Dcost + $Dcost * 0.1;
  $total_cost8 = $Dcost + $Dcost * 0.15;
  $total_cost9 = $Dcost + $Dcost * 0.20;

  $Increase1 = 0.1;
  $Increase2 = 0.15;
  $Increase3 = 0.20;
  $Lcost = 150000;
  $Cocost = 78000;
  $Dcost = 69000;
  $Pcost = 12000;
  $Mcost = 20000;

  $total_cost10 = $Pcost + $Pcost * 0.1;
  $total_cost11 = $Pcost + $Pcost * 0.15;
  $total_cost12 = $Pcost + $Pcost * 0.20;

  $Increase1 = 0.1;
  $Increase2 = 0.15;
  $Increase3 = 0.20;
  $Lcost = 150000;
  $Cocost = 78000;
  $Dcost = 69000;
  $Pcost = 12000;
  $Mcost = 20000;

  $total_cost13 = $Mcost + $Mcost * 0.1;
  $total_cost14 = $Mcost + $Mcost * 0.15;
  $total_cost15 = $Mcost + $Mcost * 0.20;

  $Expendituresumcost = $Lcost + $Ccost + $Dcost + $Pcost + $Mcost;
  $Expendituresum10 = $total_cost1 + $total_cost4 + $total_cost7 + $total_cost10 + $total_cost13;
  $Expendituresum15 = $total_cost2 + $total_cost5 + $total_cost8 + $total_cost11 + $total_cost14;
  $Expendituresum20 = $total_cost3 + $total_cost6 + $total_cost9 + $total_cost12 + $total_cost15;		
  ?>

<h1>Public Library Expansion Project</h1>
  <h3>Cost Estimates</h3>
<table bgcolor= "#63759c">
  <tr>
    <th>Expenditures</th>
    <th>Estimated Cost</th>
    <th>10% Increase</th>
    <th>15% Increase</th>
    <th>20% Increase</th>
  </tr>
</table>

<table bgcolor="#84ecbc">
  <tr align="center">
    <td>Lumber</td>
    <td>$150,000,00</td>
    <td>$<?php echo number_format($total_cost1 ,2);?></td>
    <td>$<?php echo number_format($total_cost2 ,2);?></td>
    <td>$<?php echo number_format($total_cost3 ,2);?></td>
  </tr>
</table>			


<table bgcolor="#89c8f1">
  <tr align="center">
    <td>Concrete</td>
    <td>$78,000,00</td>
    <td>$<?php echo number_format($total_cost4 ,2);?></td>
    <td>$<?php echo number_format($total_cost5 ,2);?></td>
    <td>$<?php echo number_format($total_cost6 ,2);?></td>
  </tr>
</table>		
<table bgcolor="#84ecbc">
  <tr align="center">
    <td>Drywalll</td>
    <td>$69,000,00</td>
    <td>$<?php echo number_format($total_cost7 ,2);?></td>
    <td>$<?php echo number_format($total_cost8 ,2);?></td>
    <td>$<?php echo number_format($total_cost9 ,2);?></td>
  </tr>
</table>		
<table bgcolor="#89c8f1">
  <tr align="center">
    <td>Paint</td>
    <td>$12,000,00</td>
    <td>$<?php echo number_format($total_cost10 ,2);?></td>
    <td>$<?php echo number_format($total_cost11 ,2);?></td>
    <td>$<?php echo number_format($total_cost12 ,2);?></td>
  </tr>
</table>		
<table bgcolor="#84ecbc">	
  <tr align="center">
    <td>Miscellaneous</td>
    <td>$20,000,00</td>
    <td>$<?php echo number_format($total_cost13 ,2);?></td>
    <td>$<?php echo number_format($total_cost14 ,2);?></td>
    <td>$<?php echo number_format($total_cost15 ,2);?></td>
  </tr>
</table>
<br>
<table class="tb">
  <tr>
    <td> Total Expenditures:</td>
    <td>$<?php echo number_format($Expendituresumcost ,2);?></td>
    <td>$<?php echo number_format($Expendituresum10 ,2);?></td>
    <td>$<?php echo number_format($Expendituresum15 ,2);?></td>
    <td>$<?php echo number_format($Expendituresum20 ,2);?></td>
  </tr>
</table>
<p> Created by:</b> Ashley Jane S. Villamor </p>

    
</body>
</html>