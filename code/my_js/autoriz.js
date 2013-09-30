// JavaScript Document
$(document).ready(function(e) {
	$("#go").click(function(e) {
		var login=$("#fLogin").val();
		var passw=$("#fPassw").val();
		if (login!='' || passw!='') {
			$.ajax({
				url:"/standard/admin/loginProcess.php",
				type:"POST",
				data:{login:login,password:passw},
				success: function(data){
					if (data==0){
						$("#warning").text("Неправильное имя пользователя или пароль!").fadeIn().delay(3000).fadeOut();
					}
					else {
						$("#wrapper").hide();
						//$("body").html("<span style='font-size:14px; margin:10px;'>"+data+"</span>");
						location.reload(true);					
					}
				}});
		}
		else {
			$("#warning").text("Не все поля заполнены!").fadeIn().delay(3000).fadeOut();	
		}
		});
});