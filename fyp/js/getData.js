$(document).ready(function(){  
	
	//for value to enter
$("#houseqtychose").change(function() {    
var new123 = $(this).val();

	var first=$("#annualSub").val();
			var sec=$("#waterBill").val();
				var third=$("#Gbill").val();
					var forth=$("#Mbill").val();
                    var fifth=$("#gargBill").val();	
                    var six=$("#swerBill").val();
var seven=	$("#houseqty").val();

var newval =parseInt(seven)*parseInt(new123);
var mytotal =parseInt(first)+parseInt(sec)+parseInt(third)+parseInt(forth)+parseInt(fifth)+parseInt(six)
+newval;
$("#totalbill").val(mytotal);
});

//for number of house

$("#houseqty").change(function() {    

	var new123 = $(this).val();
	
		var first=$("#annualSub").val();
				var sec=$("#waterBill").val();
					var third=	$("#Gbill").val();
						var forth=$("#Mbill").val();
						var fifth=$("#gargBill").val();	
						var six=$("#swerBill").val();
	var seven=	$("#houseqtychose").val();
	
	var newval =parseInt(seven)*parseInt(new123);
	var mytotal =parseInt(first)+parseInt(sec)+parseInt(third)+parseInt(forth)+parseInt(fifth)+parseInt(six)
	+newval;
	$("#totalbill").val(mytotal);
	
	});


	$("#bill_cats").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = 'empid='+ id;    
		$.ajax({
			url: 'fetchRecord.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(empData) {
			   if(empData) {
				   console.log(empData);
				   console.log('hamza');
				//	$("#errorMassage").addClass('hidden').text("");
				//	$("#recordListing").removeClass('hidden');							
					$("#annualSub").val(empData.annual_sub);
					$("#waterBill").val(empData.water_bill);
					$("#Gbill").val(empData.garbage_bill);
					$("#Mbill").val(empData.musjid_bill);
                    $("#gargBill").val(empData.aquifer_bill);	
                    $("#swerBill").val(empData.sewerage_bill);
					$("#totalbill").val(empData.total);
					
				} else {
				//	$("#recordListing").addClass('hidden');	
				//	$("#errorMassage").removeClass('hidden').text("No record found!");
				}   	
			} 
		});
 	}) 
});
