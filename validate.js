$(document).ready(function(){
	
   $("#login").click(function(){
		username=$("#user_name").val();
        password=$("#password").val();
       if($.trim(username).length>0 && $.trim(password).length>0)
	 {
         $.ajax({
            type: "POST",
           url: "login.php",
            data: "username="+username+"&password="+password,
      

            success: function(html){
			
			  if(html=='true')
              {
                $("#login_form").fadeOut("normal");
				$("#shadow").fadeOut();
				$("#profile").html("<a href='logout.php' class='red' id='logout'>Logout</a>");
				$("body").load("home.php").hide().fadeIn(1500).delay(6000);
				//or
				window.location.href = "home.php";
				// You can redirect to other page here....
              }
              else
              {
                    $("#add_err").html("Wrong username or password");
					$('#content').shake();
			        $("#login").val('Login')
              }
            },
            beforeSend:function() { $("#login").val('Connecting...');},
			{
                 $("#add_err").html("Loading...")
            }
        });
	 }
         return false;
    });
});
