<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  personObj = new Object();
  personObj.firstname = "John";
  personObj.lastname = "Doe";
  personObj.age = 50;
  personObj.eyecolor = "blue"; 
  $("button").click(function(){
    $("div").text($.param(personObj));
  });
});
</script>
</head>
<body>

<button>Serialize object</button>

<div></div>

</body>
</html>
