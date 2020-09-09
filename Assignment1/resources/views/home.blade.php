<!-- resources/views/home.blade.php -->
<!-- Specify that we want to extend the index file -->
@extends('index')
<!-- Set the title content to "Home" -->
@section('title', 'Home')
<!-- Set the "content" section, which will replace "@yield('content')" in the index file we're extending -->
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<div style="

overflow: hidden;
padding: 30px 0 25px;
margin-bottom: 33px;background-image:url('https://vote.nz/css/img/og-768.webp'), linear-gradient(90deg,#ff8901 0,#ffb911 24%,#f8d260 50%,#ddddfa 75%,#d4d4fd 100%);/* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
background-position: center;height:700px;  background-size: contain;"
>
<div class="navbar-nav w-100">
    <a style='padding-left:50px;color:white' class="navbar-brand " href="/">Election 2020</a>
    <a style='padding-left:50px;color:white' class="nav-item nav-link" href="/parties">Browse Parties</a>
</div>
    <div class="container">

        <span style='color:white'>Politician Search</span> &nbsp;
        <input id='politician_name' type="text" placeholder="Politician Name" style="border-top-style: hidden;
        border-right-style: hidden;
        border-left-style: hidden;
        border-bottom-style: groove;
        background-color: #eee;
        outline: none;"> <span class='ui-icon ui-icon-circle-close' id='clearme'></span>
    </div>
    <br/>
    <div id='res' style='display:none;'>
<table style='width:500px;margin-left:50px;'><tr><td style='color:white;text-align:right;'>Name</td><td  style='color:white;padding-left:40px;' id='name'></td></tr>
  <tr><td style='color:white;text-align:right;'>Rank</td><td  style='color:white;padding-left:40px;' id='rank'></td></tr>
  <tr><td style='color:white;text-align:right;'>Gender</td><td  style='color:white;padding-left:40px;' id='gender'></td></tr>
  <tr><td style='color:white;text-align:right;'>Electorate</td><td style='color:white;padding-left:40px;' id='electorate'></td></tr>
  <tr><td style='color:white;text-align:right;'></td><td style='padding-left:40px;' id='pic'></td></tr>
</table>
</div>
    <script>
         $(function () {
$("#clearme").click(function(){
  console.log('clearing');
  $('#pic').html('');
   $("#name").html('');
   $("#gender").html('');
   $("#electorate").html('');
   $("#rank").html('');
   $("#politician_name").val('');
        $("#res").toggle();
});
           $( "#politician_name" ).autocomplete({
             minLength: 2,
                 source: function( request, response ) {
                   $.ajax( {
                     url: "admin/api/politician",
                     data: {
                       term: request.term
                     },
                     success: function( data ) {
                         console.log('sd');
                         response($.map(data, function (el) {
                             return {
                                 label: el.name,
                                 value: el.name,
                                 image: el.image,
                                 rank: el.rank,
                                 gender: el.gender,
                                 electorate: el.electorate
                             };
                         }));
                     }
                   } );
                 },

                 select: function( event, ui ) {
                   console.log( "Selected: " + ui.item.value + " aka " + ui.item.id );
                   console.log(ui);
                   $('#pic').html('<img src="'+ui.item.image+'" width="300px" style="border:thin white solid">');
                    $("#name").html(ui.item.label);
                    $("#gender").html(ui.item.gender);
                    $("#electorate").html(ui.item.electorate);
                    $("#rank").html(ui.item.rank);

                   $("#res").toggle();
                 }
               } );


         });
     </script>
</div>

@endsection
