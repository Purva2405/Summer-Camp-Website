<html>
<head>
	<style type="text/css">
		body{
  background-image: url("bw.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
.container{
	
	color: white;
	position: absolute;
	top: 1%;
	left: 27%;
}
.overlay{
	height: 100%;
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	background: #078277;
	opacity: 0.55;
}
.btn{
	background: #77C845;
	left: 50%;
    color: white;
	border: none;
	width: 150px;
	height: 40px;
	font-size: 15px;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 2px;
	border-radius: 5px;
	transition: 0.3s;
	transition-property: background;
	cursor: pointer;
}

 .btn:hover {
	background:  #B6E39A;

}


input[type=text], select {
  width: 85%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 4px solid #9FE2BF;
  border-radius: 10px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 85%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 4px solid #9FE2BF;
  border-radius: 10px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 85%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 4px solid #9FE2BF;
  border-radius: 10px;
  box-sizing: border-box;
}

/*input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
*/
input[type=submit]:hover {
  background-color: #45a049;
}

	</style>

</head>
<body><form action="received.php" method="post">
	<div class="overlay"></div>
	<div class="container">
	<h1 align="center">PAYEMNT</h1>
	<h2 align="center"><font color="#ECBA12">Enter Your First Name:
		<input type="text" name="t1" maxlength="20" size="15" placeholder="John"><br>
	Enter Your Last Name:
	 	<input type="text" name="t2" maxlength="20" size="15" placeholder="Smith"><br>
	 Enter Email-Id:
	 	<input type="email" name="email" placeholder="Someone@example.com"><br>
	 How Many Person:
	 	<input type="text" name="t3" placeholder="1"><br>
	 Camp which your childeren or you want to go:
	 	<input type="text" name="campname" placeholder="Acting/Cooking/Basketball, etc..."><br>
	 Card Number:
	 	<input type="password" name="cardno" placeholder="0000 0000 0000 0000"><br><br><br>
	 	
	 <input type="submit" name="bn" value="Done Payment" class="btn"> 
	</font>
</h2>
</div>
</form>
</body>
</html>