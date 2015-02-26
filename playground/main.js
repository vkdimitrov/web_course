$( document ).ready(function() {

	$(".picture").click(function() {
		
		$("#koala").toggle();
		$("#text").toggle();

	})
	loggedin()
	
	var x = 4
	if (x == 1)
	{
		alert("x == 1");
	}
	else if ( x == 2)
	{
			alert("x == 2");
	}
	else if ( x == 3 )
	{
		alert("x == 3");
	}
	else
	{
		alert("x != 1,2,3");
	}

	console.log( "readyasdsad!" );

});