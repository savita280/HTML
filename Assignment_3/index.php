<?php
require'connection.php';
if(isset($_POST["submit"])){
$profile = $_POST['profile'];
$color = $_POST['color'];
$sug = $_POST['sug'];
$rate = $_POST['rate'];


$query="INSERT INTO `feedback`(`id`, `profile`, `color`, `sug`, `rate`)
 VALUES ('','$profile','$color','$sug','$rate')";
 mysqli_query($conn,$query);
 echo"
 <script>alert('Data inserted Successfully')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>feedback form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .container{
      padding-top: 10px;
      padding-bottom: 10px;
      font-family: monospace;
      margin: 20px;
    }
.col-md-6{
  background-color: whitesmoke;
  height: 100%;

}
p{
  font-size: 15px;
}
.head1{
  background-color: lightpink;
  height: 50px;;
}
.head1 h2{
  color: black;
  font-family: monospace;
  line-height: 45px;
  text-align: center;
}
#select1 h4, #select2 h4, #select3 h4{
  background-color: aliceblue;
  color: black;
  height: 40px;
  text-align: center;
  line-height: 38px;
  cursor: pointer;
  border: 1px solid #ccc;
}
btn btn-info{
    background-color: aliceblue;
    color: black;
    transition: 0.4s ease-in-out;
    font-size: 17px;
    font-family: monospace;
  }
  .rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}

.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
  </style>
  <script>
    $(document).ready(function(){
	$("#container").hover(function(){
		$(this).css("background-color" , "lightgray");}, function(){
		$(this).css("background-color" , "lightpink")
	});
});
$(document).ready(function(){
  $("#btn").click(function(){
    alert("Thank You for your response.");
  });
});
$(document).ready(function(){
  $("#rate").click(function(){

  });
});
$(document).ready(function(){
  $("#select1").click(function(){
    $("#select1 h4").css("background-color","lightpink");
    $("#select1 h4").css("color","black");
    $("#select3 h4").css("background-color","white");
    $("#select3 h4").css("color","red");
    $("#select2 h4").css("background-color","white"),
    $("#select2 h4").css("color","red")
  });
  $("#select2").click(function(){
    $("#select2 h4").css("background-color","lightpink");
    $("#select2 h4").css("color","black");
    $("#select1 h4").css("background-color","white");
    $("#select1 h4").css("color","red");
    $("#select3 h4").css("background-color","white"),
    $("#select3 h4").css("color","red")
  });
  $("#select3").click(function(){
    $("#select3 h4").css("background-color","lightpink");
    $("#select3 h4").css("color","black");
    $("#select1 h4").css("background-color","white");
    $("#select1 h4").css("color","red");
    $("#select2 h4").css("background-color","white"),
    $("#select2 h4").css("color","red")
  });
});
$(document).ready(function(){
  $(".check-design").click(function(){
    // Check #x
$( "#design" ).prop( "checked", true );
 
 // Uncheck #x
 $( "#design" ).prop( "checked", false );
  });
  $(".check-content").click(function(){
    $("#content").prop("checked",true);
  });
})
let output = document.getElementById("output");
   $('#btn').click(function () {
      
      // clear all radio buttons
      $("input[type=radio][name=color]").prop('checked', false);
      output.innerHTML = "All radio buttons are unchecked!"
   })
  </script>
</head>
<body>
  <div class="container" id="container">
    <form method="post">
      <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="head1">
            <h2>Give Feedback</h2>
          </div>
          <br><br>
          <br>
          <p>Did you Like My Profile?</p>
          <div class="row">
            
            <div class="col-md-4" id="select1" name="profile"><h4>Yes</h4></div>
            <div class="col-md-4" id="select2"  name="profile"><h4>Partially</h4></div>
            <div class="col-md-4" id="select3"  name="profile"><h4>No</h4></div>
          </div>
         <br>
         <p>what was the reason you like it?</p>
         <div class="row">
          <div class="col-md-12">
            <label for = "color"></label>
   <input type = "radio" id = "color" name = "color" value = "Blue">
   <label for = "color"> Design </label>
   <input type = "radio" id = "color" name = "color" value = "Black">
   <label for = "color"> content </label>
   <div id = "output"></div>
         </div>
         <br>
         <br>
         &nbsp;&nbsp; <p>&nbsp;&nbsp;Do you have any suggestion to make my profile better?</p>
        &nbsp;&nbsp;<textarea name="sug" rows="5" cols="40" placeholder="your suggestion..."></textarea>
         <br>
         <div class="rate" id="rate">
          <p>Give Rating:</p>
          <input type="radio" id="star5" name="rate" value="5" />
          <label for="star5" title="text">5 stars</label>
          <input type="radio" id="star4" name="rate" value="4" />
          <label for="star4" title="text">4 stars</label>
          <input type="radio" id="star3" name="rate" value="3" />
          <label for="star3" title="text">3 stars</label>
          <input type="radio" id="star2" name="rate" value="2" />
          <label for="star2" title="text">2 stars</label>
          <input type="radio" id="star1" name="rate" value="1" />
          <label for="star1" title="text">1 star</label>
        </div>
         <br><br>
         <br>
         <br><br>
        <centre>
          <button class="btn btn-info" id="btn" name="submit">Submit</button>
       </centre>
     </div>
    </form>
    
  </div>

</body>
</html>