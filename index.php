<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/moment-with-locales.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-table.min.js"></script>
		<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="js/dataTables.select.min.js"></script>
		<script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
		<script type="text/javascript" src="js/buttons.bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>

<!-- 	
		<script type="text/javascript" src="dist/js/highcharts.js"></script>
		<script type="text/javascript" src="dist/js/jquery.highchartTable-min.js"></script> */
-->		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-table.min.css" />
		<link rel="stylesheet" href="css/jquery.dataTables.min.css" />
		<link rel="stylesheet" href="css/select.bootstrap.min.css" />
		<link rel="stylesheet" href="css/buttons.dataTables.min.css" />
		<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />
		
				
<script type="text/javascript" language="javascript" class="init">

 		$(document).ready(function() {
				
				var data;
				
				$('#btnsumit').click(function(){
				var fdate = $('#fdate').val();
				var sdate = $('#sdate').val();
					$.ajax({
					type: 'POST',
					url: 'process.php',
					data: { 'fdate': fdate, 'sdate': sdate, 'usid': data[0][1] },
					success: function(response) {
						$('#response').html(response);
						}
					});
				}); 
			  	
				var table = $('#usertable').DataTable({
				"bServerSide": true,
				"paging": false,
				"destroy" : true,
				"ajax": "serverinit.php"
				});
				
 
				$('#usertable tbody').on( 'click', 'tr', function () {
					if ( $(this).hasClass('selected') ) {
					$(this).removeClass('selected');
					}
					else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
					}
					data= table.rows('.selected').data();					
				});
 
 				$('#whrsumit').click(function(){
				data= table.rows('.selected').data();
				$('#whourstable').dataTable({
				"bServerSide" : true,
				"searching" : false,
				"destroy" : true,
				"ajax" : {
					"url" :'server-response.php',
					"type" : "POST",
					"data" : { 'usid': data[0][1] }
				}
				}); 
				// se button sto chart otan init
				$('table.highchart').highchartTable();
				});
		});
			
</script>
	</head>
	<body>
	
 	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Attendance System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Statistics</a></li>
            <li><a href="#">Help</a></li>
          </ul>		  
        </div>
      </div>
    </nav>
	<br>
	<br> 
	<br>	
	<div class="container">
	<div class="panel panel-default"> 
	
	<div class="panel-heading">Employee working hours
	    <table id="usertable" class="table table-striped table-bordered" >
        <thead>
            <tr>
                <th data-field="name">Name</th>
                <th data-field="user_id">User ID</th>
            </tr>
        </thead>
			<tbody>
			</tbody>
    </table>
	<br>
	<button type="button" id='whrsumit' class="btn btn-primary">Show selected user work dates and time</button>
	</div>	
	<div class="alert alert-success" id="response">
		<strong>Info!</strong> Select working time period.
	</div>
	
	<div class="panel-body">Datetime working period</div>
    <div class='col-md-5'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker6'>
                <input type='text' placeholder="From" class="form-control" id="fdate" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-md-5'>
        <div class="form-group">
            <div class='input-group date' id='datetimepicker7'>
                <input type='text' placeholder="To" class="form-control" id="sdate"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
	<button type="button" id='btnsumit' class="btn btn-primary">Show user data</button>
	<br>
	<br>
	</div>	
        <table id="whourstable" class="table table-hover" data-graph-container-before="1" data-graph-type="column" >
            <thead>
            <tr>
                <th data-field="date">Date</th>
                <th data-field="whours">Work Time</th>
            </tr>
            </thead>
			 <tbody>
			</tbody>
        </table>
	</div>	

<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker({
			format : 'YYYY/MM/DD HH:mm'
		});
        $('#datetimepicker7').datetimepicker({
            useCurrent: false,
			format : 'YYYY/MM/DD HH:mm'
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
<br>
    <div class="panel-footer">
        <p class="text-muted">NIT</p>
	</div>
</body>
</html>