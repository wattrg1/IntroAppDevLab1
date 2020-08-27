<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Order Summary</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
<?php
//var_dump($formData);
//echo $formData['topping1'];
?>
    <div class="background">
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<img alt="Pizza" src="images/pizza.png" class="center">
		</div>
	</div>
    <table border-width="1px" width="100%">
                            <tr>
                                <td>Topping 1</td>
                                <td><?=$formData['topping1']?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        <p>Total cost is $</p>