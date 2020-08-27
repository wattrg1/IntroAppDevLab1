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
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
                    <div class="rcorners1">
                        <h3 class="text-center">
                            Your Order
                        </h3>
                    </div>
				</div>
			</div>
            <form action ="{{url('/confirmation')}}" method = 'post'>
                            {{csrf_field()}}
                            <input type='hidden' name='topping1' value='<?=$formData['topping1']?>'>
                                <input type='hidden' name='topping2' value='<?=$formData['topping2']?>'>
                                <input type='hidden' name='topping3' value='<?=$formData['topping3']?>'>
			<div class="row">
				<div class="col-md-12">
                    <div class="greenBox">
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
                    </div>
                </div>
              
            </div>
            <input type='submit' name='submit' value='submit' class='center'>
            </form>
            <div class="row">
				<div class="col-md-12">
                    <div class="rcorners2">
</div>
</div>
</div>
		</div>
	</div>
</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>