<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pizza Page</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

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
                            Pizza Ordering
                        </h3>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
                    <div class="greenBox">
                        <h5>Place Your Order</h5>
                        <form action ="{{url('/summary')}}" method = 'post'>
                            {{csrf_field()}}
                            <fieldset>
                                <p>Size:</p>
                                <input type='radio' name='size' value='small'>Small ($5)<br>
                                <input type='radio' name='size' value='medium'>Medium ($10)<br>
                                <input type='radio' name='size' value='Large'>Large ($15)<br><br>
                                <p>Please Select your toppings ($1 for each topping):</p>
                                <input type='checkbox' name='topping1' value='pepperoni'> Pepperoni<br>
                                <input type='checkbox' name='topping2' value='mushrooms'> Mushrooms<br>
                                <input type='checkbox' name='topping3' value='capsicum'> Capsicum<br>
                                <input type='checkbox' name='topping4' value='olives'> Olives<br>
                                <input type='checkbox' name='topping5' value='anchovies'> Anchovies<br><br>
                                <p><label>Delivery Address:<input type='text' name='address' required></label><br>
                                <input type='submit' name='submit' value='submit' class='center'>
                            </fieldset>
                        </form> 
                    </div>
                </div>
            </div>
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