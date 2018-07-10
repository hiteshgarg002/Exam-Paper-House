$(document).ready(
function()
	{

		$.getJSON('/citest/index.php/UniBranchController/getAllUniversity', {ajax:true}, function(data)
		{
			$('#university').empty();
			$('#university').append($('<option>').text('-UniversityId-'));
			$('#branch').append($('<option>').text('-Branchid-'));
			$('#sem').append($('<option>').text('-Semester-'));
			$('#subject').append($('<option>').text('-Subjects-'));


			$.each(data,function(i,item)
			{
				$('#university').append($('<option>').text(item.uname).val(item.uid));


			});


		});


		$('#university').change(function()
		{
			$.getJSON('/citest/index.php/UniBranchController/getAllBranch',{ajax:true,University:$('#university').val()}, function(data)

			{
			$('#branch').empty();
			$('#branch').append($('<option>').text('-BranchId-'));

			$.each(data,function(i,item)
				{
					$('#branch').append($('<option>').text(item.bname).val(item.bid));

			});


			});



		});


$('#branch').change(function()
		{
			$.getJSON('/citest/index.php/branchController/displayByBidForSem',{ajax:true,bid:$('#branch').val()}, function(data)

			{

			$('#sem').append($('<option>').text('-Semester-'));
             for(i=1;i<=data.totalsem;i++)
             {$('#sem').append($('<option>').text(i+""));
				 }



			});



		});




$('#sem').change(function()
		{

			$.getJSON('/citest/index.php/subjectController/getSubject',{ajax:true,sem:$('#sem').val(),bid:$('#branch').val()}, function(data)

			{
			$('#subject').empty();
			$('#subject').append($('<option>').text('-Subjects-'));
			$.each(data,function(i,item)
				{
					$('#subject').append($('<option>').text(item.sname).val(item.sid));

			});




			});




		});





});