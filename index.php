<!DOCTYPE html>
<html>
<head>
	<title>孫的練習網頁</title>
	<style>
		body {
			 font-family: 微軟正黑體;
	</style>
</head>
<body>

<h1>歡迎光臨我的網站</h1>
<button><a href='/newexe1/'>HOME</a></button>
<button><a href='https://cla.nkust.edu.tw'>博雅中心</a></button>
<button><a href='http://tzukuan.nkust.org'>計畫網站</a></button>
<select onchange='location.href="/newexe1/"+this.value'>
	<option value="0323-1.php">請選擇要執行的練習</option>
	<option value="0323-1.php">0323-1</option>
	<option value="0323-2.php">0323-2</option>
</select>
<hr>

<p>有什麼問題歡迎連絡 0651101@nkust.edu.tw</p>

</body>
</html>