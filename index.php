<!doctype html>
<!-- 
	NOTICE:

	PART 1 - I can't access the url provided. There is an issue at my local environment.
	PART 2 - I can't manage to create an API. So instead, I created a PHP Server Request that will server as my API. The logic is the same. I just make a work around.
	PART 3 - Almost same on part 2. But the additional condition which is an API is giving me an error locally.

	I did my best to present this as logically the same with your question. Thank you for the opportunity.
-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

	<style type="text/css">
		.part-containers {
			border-style: dotted;
			border-color: black;
		}
	</style>
</head>
<body>
	<div class="part-containers">
		<div><b>Part 1</b></div>
		<span><b>Solution:</b> add a ajax request for the link provided on document ready or onload to display on the webpage.</span></br>
		<label>Hello: </label><input type="text" id="aDiv" disabled>
		<label>Time: </label><input type="text" id="bDiv" disabled>
		<label>Uptime: </label><input type="text" id="cDiv" disabled>
	</div>

	<div class="part-containers">
		<div><b>Part 2</b></div>
		<span><b>Solution:</b> create another php file that will return the result for the value inputed on the textbox. then fetch the result from ajax request as a json format and display on the webpage</span></br>
		
			<label>Number: </label><input type="number" id="valuePart2">
			<button id="btnPart2">Submit</button>
			<label>Result: </label><span id="resultPart2"></span>	
		
	</div>

	<script type="text/javascript">
		$(document).ready(function() {		
			// Link issue - can't access the link at my local environment
			/* $.ajax({
	            type: "GET",
	            url: "http://dev-test.madebywiser.com/part1",
	            success: function (response) {
	            	// Assigning from response
			        var arr = $.parseJSON(jsonVal);
			        console.log(arr);
			        $("#aDiv").val(arr['hello']);
			        $("#bDiv").val(arr['time']);
			        $("#cDiv").val(arr['uptime']);
	            }
	        }); */

	        // Temp test
	        var a = {};
	        a.hello = "world";
	        a.time = "2017-11-16T09:12:08.038Z";
	        a.uptime = "1485977.75s";
	       
			var jsonVal = JSON.stringify(a);
			// console.log(jsonVal);

			// Assigning from response
	        var arr = $.parseJSON(jsonVal);
	        // console.log(arr);
	        $("#aDiv").val(arr['hello']);
	        $("#bDiv").val(arr['time']);
	        $("#cDiv").val(arr['uptime']);	        

	        // $().click(function() {});
		});

		// Workaround: I created a PHP Server that will serve as an API
		$("#btnPart2").click(function() {        		    
			$.ajax({
				type: "POST",
				url: "./part2_request.php",
				dataType: "json",
				data: { numVal: document.getElementById("valuePart2").value },
				success: function (response) {
					console.log(response.result);
					document.getElementById("resultPart2").innerHTML = response.result;
				}
			});
		});
	</script>
</body>
</html>