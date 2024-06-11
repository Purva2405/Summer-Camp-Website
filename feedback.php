<html>
<head>
	<style type="text/css">
		
		input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 4px solid #EDD8ED;
  border-radius: 10px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 4px solid #EDD8ED;
  border-radius: 10px;
  box-sizing: border-box;
}
.btn{
	background: #E230A4;
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
	background:  #804E6F;

}

	</style>
<script type="text/javascript">
	Banners = new Array('banner2.gif','banner1.png');
	CurrentBanner = 0;
	function DisplayBanners(){
		if (document.images) {
			CurrentBanner++;
			if (CurrentBanner == Banners.length) {
				CurrentBanner = 0
			}
			document.RotateBanner.src=Banners[CurrentBanner]
			setTimeout("DisplayBanners()",5000)
		}
	}
	function email()  
{  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  
}
</script>	
</head>
<body bgcolor="pink" onload="DisplayBanners()">
	<form name="myform" method="post" action="FeeConn.php" onsubmit="return email();">
	<img src="banner1.png" width="1520" height="400" name="RotateBanner">
	<h1 align="center"><font color="">Feedback</h1>
	<h3 align="right">Enter Your Name:<input type="text" name="name" maxlength="20" placeholder="abc xyz pqr." onchange="fname()"/><br>
	Enter Your Email-Id: <input type="email" name="email" placeholder="someone@gmail.com"><br>
	How was Your Experience in Our Website:<input type="text" name="experience" maxlength="40" placeholder="Your Message"><br>
	Any Trouble occur in handling website:<input type="text" name="trouble" maxlength="40" placeholder="Your Message"><br>
	What you think, whay we improve in our Site:<input type="text" name="improvement" maxlength="40" placeholder="Your Message"><br>
	<input type="submit" name="b" class="btn" value="Done!" onclick="fname()"></h3>
</font>
</h1></form>
</body>
</html>