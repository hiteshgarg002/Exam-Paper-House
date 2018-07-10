$(document).ready(
	function(){
$.getJSON('/citest/index.php/UniBranchController/getAllUniversity',{ajax:true},function(data){
   $('#university').empty();
   $('#university').append($('<option>').text('-University-'));
   $('#branch').append($('<option>').text('-Branch-'));
   $('#sem').append($('<option>').text('-Semester-'));
   $('#sid').append($('<option>').text('-Subjects-'));

   $.each(data,function(i,item){
	      $('#university').append($('<option>').text(item.uname).val(item.uid));
	   });

	});

$('#university').change(function(){
	$.getJSON('/citest/index.php/UniBranchController/getAllBranch',{ajax:true,University:$('#university').val()},function(data){

	   $('#branch').empty();
	   $('#branch').append($('<option>').text('-Branch-'));

	   $.each(data,function(i,item){
		      $('#branch').append($('<option>').text(item.bname).val(item.bid));
		   });

	});





	});
	$('#branch').change(function()
			{
				$.getJSON('/citest/index.php/branchController/displayByBidForSem',{ajax:true,bid:$('#branch').val()}, function(data)

				{
				$('#sem').empty();
				$('#sem').append($('<option>').text('-Semester-'));
	             for(i=1;i<=data.totalsem;i++)
	             {$('#sem').append($('<option>').text(i+""));
					 }



				});



			});





		});