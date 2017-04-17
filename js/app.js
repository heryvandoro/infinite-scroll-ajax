$(document).ready(function(){

	var offset = 0;
	var keyword = "";

	//first data
	loadData(5);

	//scroll function
	$(window).scroll(function() {
		if($(window).scrollTop() + $(window).height() == $(document).height()) {
			$("#loading").show();
			$(window).scrollTop($(window).scrollTop()+100);
		   	setTimeout(function(){ loadData(5) }, 1500);
		};
	});

	function loadData(limit){
		$.get({
			url : "rest/tweet.php",
			data : {mode:"getAll", limit:limit, offset:offset},
			success : function(data){
				offset += limit;
				var dataObj = JSON.parse(data);
				var breakLine = "<br>";
				//random RGB color value
				var r = Math.floor((Math.random()*255)+1);
				var g = Math.floor((Math.random()*255)+1);
				var b = Math.floor((Math.random()*255)+1);
				
				for(x in dataObj){
					var divTweet = document.createElement("div");
					$(divTweet).addClass("tweet");
					$(divTweet).css("background-color","rgb("+r+","+g+","+b+")");
					$(divTweet).append(dataObj[x].DisplayName);
					$(divTweet).append(breakLine);
					$(divTweet).append(dataObj[x].Content);
					$("#tweet_container").append(divTweet);
				}
			}
		}).done(function(){
			$("#loading").hide();
			//make sure that data showed at first time more than window height
			if($(document).height()<=$(window).height()){
				loadData(5);
			}
		});
	};
});