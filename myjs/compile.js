$(document).ready(function(){
	TLN.append_line_numbers('codearea-php');
	TLN.append_line_numbers('codearea-js');
	TLN.append_line_numbers('codearea-hjp');
	//Php Code
	$(".compilecode-php").click(function(){
	    //$(".output").html($("#codearea").val());
	    //$(".output").load("backend.php");
	    $.get("php/backend.php", {val: $("#codearea-php").val()}, function(data){
	    	$(".output").html(data);
	   	});
	});
	//Js Code
	$(".compilecode-js").click(function(){
	    //$(".output").html($("#codearea").val());
	    //$(".output").load("backend.php");
	    $.get("php/backend-js.php", {val: $("#codearea-js").val()}, function(data){
	    	$(".output").html(data);
	   	});
	});
	$(".compilecode-hjp").click(function(){
	    //$(".output").html($("#codearea").val());
	    //$(".output").load("backend.php");
	    $.get("php/backend-hjp.php", {val: $("#codearea-hjp").val()}, function(data){
	    	$(".output").html(data);
	   	});
	});
});