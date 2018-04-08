<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="js/jquery.js"></script>
 	
		<script type="text/javascript" src="dist/js/highcharts.js"></script>
		
				
		<script>
		var chart; // global
		
		/**
		 * Request data from the server, add it to the graph and set a timeout to request again
		 */
		function requestData() {
			$.ajax({
				url: 'live-server-data.php', 
				success: function(point) {
					var series = chart.series[0],
						shift = series.data.length > 20; // shift if the series is longer than 20
					// add the point
					chart.series[0].addPoint(eval(point), true, shift);
					
					// call it again after one second
					setTimeout(requestData, 1000);	
				},
				cache: false
			});
		}
			
		$(document).ready(function() {

			chart = new Highcharts.Chart({
				chart: {
					renderTo: 'container',
					defaultSeriesType: 'spline',
					events: {
						load: requestData
					}
				},
				title: {
					text: 'Live random data'
				},
				xAxis: {
					type: 'datetime',
					tickPixelInterval: 150,
					maxZoom: 20 * 1000
				},
				yAxis: {
					minPadding: 0.2,
					maxPadding: 0.2,
					title: {
						text: 'Value',
						margin: 80
					}
				},
				series: [{
					name: 'Random data',
					data: []
				}]
			});		
		});
		</script>
	</head>
	<body>
	
		<div id="container" style="width: 800px; height: 400px; margin: 0 auto"></div>

</body>
</html>