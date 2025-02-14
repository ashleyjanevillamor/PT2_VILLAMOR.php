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

    
</body>
</html>