<!DOCTYPE html>
<html>
<head>
	<title>Your Click To Tweet is Ready!</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kognise/water.css@latest/dist/light.min.css">  
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>     
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150815704-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150815704-1');
</script>

   <link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		/* click to tweet widget css */
	.click-to-tweet{border:1px solid #ddd;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px;padding:26px;margin:15px 0;background-color:#fff}.click-to-tweet .click-to-tweet-text{text-align:left;font-family:museo-sans,sans-serif;font-weight:300;margin-bottom:10px}.click-to-tweet .click-to-tweet-text a{color:#585858;font-size:26px;line-height:140%;letter-spacing:.05em;font-weight:100;text-decoration:none;text-transform:none}.click-to-tweet a.click-to-tweet-btn{display:block;text-transform:uppercase;font-family:&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif;font-size:12px;font-weight:700;line-height:100%;color:#585858;float:right;padding-right:24px;text-decoration:none;background:url(https://lh3.googleusercontent.com/-Ki5b5kpTgEw/WKnUq50L54I/AAAAAAAAF9w/wVhrlGKuoNwZDKJ5tDaoLl9HxxC1-tpvQCLcB/h120/twitter-little-bird.png) right top no-repeat}
	/* click to tweet widget css */
	</style>
</head>
<body>
		<header>
		<div style="text-align: center;">
			<a href="/clicktotweet"><h1 style="text-align: center;color:rgb(31, 31, 255);" >Click To Tweet</h1></a>
			<P>Use It EveryWhere. Even on Blogger and Static Site.</P>
		</div>
		</header>	
<div class="divide"></div>
			<h3>Add this code in <code>style</code> of your webpage.</h3>
				<textarea class="output" onclick="this.focus();this.select()" readonly="readonly" >
		/* click to tweet widget css */
		.click-to-tweet{border:1px solid #ddd;-moz-border-radius:4px;-webkit-border-radius:4px;border-radius:4px;padding:26px;margin:15px 0;background-color:#fff}.click-to-tweet .click-to-tweet-text{text-align:left;font-family:museo-sans,sans-serif;font-weight:300;margin-bottom:10px}.click-to-tweet .click-to-tweet-text a{color:#585858;font-size:26px;line-height:140%;letter-spacing:.05em;font-weight:100;text-decoration:none;text-transform:none}.click-to-tweet a.click-to-tweet-btn{display:block;text-transform:uppercase;font-family:&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif;font-size:12px;font-weight:700;line-height:100%;color:#585858;float:right;padding-right:24px;text-decoration:none;background:url(https://lh3.googleusercontent.com/-Ki5b5kpTgEw/WKnUq50L54I/AAAAAAAAF9w/wVhrlGKuoNwZDKJ5tDaoLl9HxxC1-tpvQCLcB/h120/twitter-little-bird.png) right top no-repeat}
		/* click to tweet widget css */
			</textarea>
			
			<h3>Add this code where you want to show this.</h3>
				<textarea class="output" onclick="this.focus();this.select()" readonly="readonly">
				<div class="click-to-tweet"><div class="click-to-tweet-text"><a href="https://twitter.com/intent/tweet?text=<?php echo $_POST["Tweet"]; ?>&tw_p=tweetbutton&url=<?php echo $_POST["url"]; ?>&via=<?php echo $_POST["username"]; ?>" target="_blank"><?php echo $_POST["Tweet"]; ?></a></div><a class="click-to-tweet-btn" href="https://twitter.com/intent/tweet?text=<?php echo $_POST["Tweet"]; ?>&tw_p=tweetbutton&url=<?php echo $_POST["url"]; ?>&via=<?php echo $_POST["username"]; ?>" target="_blank">Click To Tweet</a></div>
			</textarea>
			<h3>Demo</h3>
			<div class="click-to-tweet"><div class="click-to-tweet-text"><a href="https://twitter.com/intent/tweet?text=<?php echo $_POST["Tweet"]; ?>&tw_p=tweetbutton&url=<?php echo $_POST["url"]; ?>&via=<?php echo $_POST["username"]; ?>" target="_blank"><?php echo $_POST["Tweet"]; ?></a></div><a class="click-to-tweet-btn" href="https://twitter.com/intent/tweet?text=<?php echo $_POST["Tweet"]; ?>&tw_p=tweetbutton&url=<?php echo $_POST["url"]; ?>&via=<?php echo $_POST["username"]; ?>" target="_blank">Click To Tweet</a></div></div>

		<footer style="text-align: center;">
			<p>Created with <i style="color:red;" class="material-icons">favorite</i> by <a href="https://piyushsuthar.online/" >Piyush Suthar</a></p>
			<p>Thanks to <a href="https://watercss.netlify.com/">Water.css</a> for css framework.</p>
			<br>
			<a href="https://github.com/piyushsuthar">View Source</a>
		</footer>
</body>
</html>
