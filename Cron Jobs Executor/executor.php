<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<div id="log"></div>
		<script>


   
   
    		
    		var isPulse=true;
    
		    function heartbeat()
		    {
		        if(isPulse)
		        {
		            var hb = setTimeout(heartbeat, 1000); 
		            
		            $(document).ready(function()
					{
					  sendRequest();
					  function sendRequest()
					  {
					      $.ajax({
					        url: "index.php",
					        type: 'POST',
					        success: 
					          function(data)
					          {
					          	console.log(data);
					           	$('#log').html(data);
					           
					        },
					        complete: function()
					        {
					       // Schedule the next request when the current one's complete
					       		//setInterval(sendRequest, 5000);
					     	}
					    });
					  };
						});
		            
		        }
		    }

		    var hb = setTimeout(heartbeat, 1000);
			



			

		</script>
</head>
<body>



</body>
</html>