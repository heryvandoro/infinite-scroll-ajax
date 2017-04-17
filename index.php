<!DOCTYPE html>
<html>
<head>
	<title>Tweet</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</head>
<style>
.tweet{
	height: auto;
	border: 1px dashed #000;
	padding: 10px;
	margin: 10px auto;
	max-width: 30%;
}
@keyframes spin{
	100%{
		transform: rotate(360deg);
	}
}
#loading{
	max-width: 30%;
	margin: 0 auto;
	display:none;
} 
#loading img{
	animation: spin 1s linear infinite;
}
</style>
<body>
	<div id="tweet_container"></div>
	<div id="loading">
		<center><img src="img/loading.png" width="100"></center>
	</div>
</body>
</html>