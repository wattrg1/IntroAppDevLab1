<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
    <div style="width:1200px; margin:0 auto;">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/arms.png" width="150" height="150">
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-center">
                            New Zealand Election Quiz
                        </h3>
                    </div>
                    <div class="col-md-4">
                        <img src="images/nz.png" width="150" height="100">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <p>1. How many seats are there in Parliament</p>
                        <input type='text' name='numSeats' id = 'numSeats' onfocus="this.value=''" value='Enter a number' size='30'>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <p>2. The election is in which month?</p>
                        <input type='radio' name='month' value='august'>August<br>
                        <input type='radio' name='month' value='september'>September<br>
                        <input type='radio' name='month' value='october'>October<br>
                        <input type='radio' name='month' value='november'>November<br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <p>3. Who is not the current leader of a political party?</p>
                        <input type='radio' name='leader' value='collins'><img src="images/collins.jpg" width="150" height="150">
                        <input type='radio' name='leader' value='ardern'><img src="images/ardern.jpg" width="150" height="150">
                        <input type='radio' name='leader' value='fitzsimons'><img src="images/fitzsimons.jpg" width="150" height="150">
                        <input type='radio' name='leader' value='seymour'><img src="images/seymour.jpg" width="150" height="150">
                        <input type='radio' name='leader' value='peters'><img src="images/peters.jpg" width="150" height="150">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <p>4. Which parties are currently in Parliament?</p>
                        <input type='checkbox' name='party1' value='Act'>Act<br>
                        <input type='checkbox' name='party2' value='Greens'>Greens<br>
                        <input type='checkbox' name='party3' value='Labour'>Labour<br>
                        <input type='checkbox' name='party4' value='Mana'>Mana<br>
                        <input type='checkbox' name='party5' value='Maori'>Maori<br>
                        <input type='checkbox' name='party6' value='National'>National<br>
                        <input type='checkbox' name='party7' value='NZ First'>NZ First<br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>5. New Zealand once postponed an election for two years, when was this?</p>
                        <select name='answer'>
                            <option value='noSelection'>Choose your answer here</option>
                            <option value='fluPandemic'>1918 flu pandemic</option>
                            <option value='WW1'>WW1</option>
                            <option value='WW2'>WW2</option>
                            <option value='GlobalFinancialCrisis'>Global financial crisis</option>
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