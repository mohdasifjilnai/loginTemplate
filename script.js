$(document).ready(function(){
$("#userId1 li").click(function(){
	alert(this.id); // id of clicked li by directly accessing DOMElement property
    alert($(this).attr('id')); // jQuery's .attr() method, same but more verbose
    alert($(this).html()); // gets innerHTML of clicked li
    alert($(this).text()); // gets text contents of clicked li
});

	$('.submitButton').click(function(){
		var name=$('#myInput').val();
		var email=$('#email').val();
		var mobile=$('#mobile').val();
		var password=$('#password').val();
		if(password==""||name==""||email==""||mobile=="")
		{
			alert("please fill all column");
			return;
		}
		else
		{
		$.post("datainsert.php",
			{name:name,
			email:email,
			mobile:mobile,
			password:password
		  },function(data,status)
		  	{
		  		if(true)
		  		{
		  			alert("New record created successfully");
		  		}
		  	  else
		  	  {
		  	  	alert("data base error");
		  	  }

		  		/*console.log(status);
		  		console.log(data);*/
		 	 }
		  );
		}
	});

});

