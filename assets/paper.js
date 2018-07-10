$(document).ready(
function()
	{

	$('#year').change(function()
		{
			var dteNow= new Date();
			var Year= dteNow.getFullYear();
			if(Year!=$('#year').val() && ('#loginstatus').val()=='lf')
			{
			window.location='/citest/index.php/clientcontroller/clientlogin';

			}
			else{
			$.getJSON('/citest/index.php/userViewController/getPaperBySemAndBranch',{ajax:true,sname:$('#subject').val(),year:$('#year').val()}, function(data)
			{ htm="<link href='/citest/user/js/mainmenu/bootstrap.min.css' rel='stylesheet'><table class='table table-bordered' width=80% border='1' cellspacing=7 cellpadding=7>";

			$.each(data,function(i,item){
				 htm+="<tr>";

				htm+="<td valign=top>"+item.qno+"<td valign=top>"+item.q1+"<br>Or<br>"+item.q2+"</td>";


				htm+="</tr>";


				});
				htm+="</table>";
				$('#result').html(htm);

				});
			}
		});

	});