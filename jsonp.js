<html>
	<head>
// define a callback function, which accepts the returned JSON data as its only argument
	function response(data) {
	    // JSON data in form of a JavaScript object
	    console.log(data);
	}
	
	// create a script tag with the external request URL
	// include "response" as value of the GET param "callback" in the URL
	var script = document.createElement('script');
	script.src = 'live-server-data.php?callback=response';
	document.body.appendChild(script);
	</head>
	<body>
	<h1> JSONP </h1>
	</body>
	</html>