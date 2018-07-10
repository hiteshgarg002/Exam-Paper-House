$(document).ready(
function()
	{
		$("#udialog").dialog({
			modal:true,
			autoOpen: false,
			title: "University Information",
			width:375,
		});

	$('#pat').keyup(function()
		{
			$.getJSON('/citest/index.php/UserViewController/displayAllUniversitiesByName',{ajax:true,pat:$('#pat').val()}, function(data)
			{ htm="<link href='/citest/user/js/mainmenu/bootstrap.min.css' rel='stylesheet'><table class='table table-bordered' border='1' cellspacing=10 cellpadding=7>";
			  c=1;
			$.each(data,function(i,item){

				if(c==1)
				{htm+="<tr>";}


				htm+="<td align='center'><img class='img-thumbnail' src='/citest/images/university/"+item.logo+"' width=120 height=120><br><b>"+item.uname+"<br>"+item.ustate+","+item.ucity+"</b><br><input type='button'   class='btnv btn btn-info' ur='"+JSON.stringify(item)+"' value='View More'>&nbsp;&nbsp;<input type='button' class='btnbranch btn btn-success' ub='"+JSON.stringify(item)+"' value='View Branches' ></td>";
				c++;
				if(c==5)
				{htm+="</tr>";
				  c=1;}

				});
				htm+="</table>";
				$('#ul').html(htm);

				});
		});


$('#ul').on('click','.btnv',function()
{
	//alert($(this).attr('uname')+","+$(this).attr('contact'));
	rec=$.parseJSON($(this).attr('ur'));
	//alert(rec.uname);
	htm="<table cellspacing=3 cellpadding=2 width=100%>";
	htm+="<tr><td><img src='/citest/images/university/"+rec.logo+"'width=70 height=70></td><td>"+rec.desc+"</td></tr></table><br>";
	htm+="<table cellspacing=3 cellpadding=2 width=100%>";
	htm+="<tr><td><b><i>University Name:</i></b></td><td>"+rec.uname+"</td></tr>";
	htm+="<tr><td><b><i>Address:</i></b></td><td>"+rec.addr+"</td></tr>";
	htm+="<tr><td><b><i>Contact Person:</i></b></td><td>"+rec.contact+"</td></tr>";
	htm+="<tr><td><b><i>Email ID:</i></b></td><td>"+rec.email+"</td></tr>";
	htm+="<tr><td><b><i>Mobile:</i></b></td><td>"+rec.mobile+"</td></tr>";
	htm+="</table>";

	$('#udialog').html(htm);
	$('#udialog').dialog('open');


});
$('#ul').on('click','.btnbranch',function(){
	item=$.parseJSON($(this).attr('ub'));
	window.location='/citest/index.php/userViewController/displayAllBranchesByUniversityId?uid='+item.uid+"&uname="+item.uname+"&ucity="+item.ucity+"&ustate="+item.ustate+"&logo="+item.logo;


});
	});