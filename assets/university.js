$(document).ready(
	function(){
$.getJSON('/citest/index.php/UniversityController/displayAllJSON',{ajax:true},function(data){
   $('#university').empty();
   $('#university').append($('<option>').text('-UniverSities-'));


   $.each(data,function(i,item){
	      $('#university').append($('<option>').text(item.uname).val(item.uid));
	   });







	});

		});