// JavaScript Document
$(function(){
	var inTxt = $("textarea.texto").hide();
    $(".msg_evaluer").hide();
	var n =0;
	$("#comments,#msgHELP,#msg_reactivite,#msg_capacite,#msg_constance,#msg_disponibilite,#msg_qualite").focus(function(){$(this).val('')});
     //----------
	// event sur precision
	$("#precisions").live('click',function(){
		($(this).val()==0)?$("textarea#msg_precisions").hide():$("textarea#msg_precisions").fadeIn("slow");
		});
		//---------------------
    $("input[name=evaluer]").live('click',function(){
		($(this).val()=='N')?$(".msg_evaluer").hide():$(".msg_evaluer").fadeIn("slow");
		}); 
		//--------------------------
	   $("input[name=pc]").live('click',function(){
		($(this).val()=='D')?$("textarea#besoins").fadeIn("slow").addClass("validate[required]"):$("textarea#besoins").hide().removeClass("validate[required]");
		($(this).val()=='C')?$("textarea#partiel").fadeIn("slow").addClass("validate[required]"):$("textarea#partiel").hide().removeClass("validate[required]");
		}); 
		//------------------		
	// Submit
	$("input#button").click(function(){
	 if($("#enquete").validationEngine({returnIsValid:true})){
	     $.post("query.php", { data: $("form").serialize()},function(data){
		 $('html, body').animate({ scrollTop: 0 }, 500);
          $(".sep").text(data).addClass("err");
         });
	  }
	});
	//------------
});

$("input[name=couverture]").live('click',function(){
	if ($(this).val() == 2){
		$("textarea#q13").parent().fadeIn("slow")
		$("textarea#q13").addClass("validate[required]");
	}else{
		$("textarea#q13").parent().hide();
		$("textarea#q13").removeClass("validate[required]");
	}
}); 

$("input[name=satisfactioncouverture]").live('click',function(){
	if ($(this).val() == 2){
		$("textarea#q23").parent().fadeIn("slow")
		$("textarea#q23").addClass("validate[required]");
	}else{
		$("textarea#q23").parent().hide();
		$("textarea#q23").removeClass("validate[required]");
	}
}); 

$("input[name=plafondsremboursement]").live('click',function(){
	if ($(this).val() == 2){
		$("textarea#q54").parent().fadeIn("slow")
		$("textarea#q54").addClass("validate[required]");
	}else{
		$("textarea#q54").parent().hide();
		$("textarea#q54").removeClass("validate[required]");
	}
}); 

$("input[name=reclamationcomplementaire]").live('click',function(){
	if ($(this).val() == 1){
		$("textarea#q11_3").parent().fadeIn("slow")
		$("textarea#q11_3").addClass("validate[required]");
	}else{
		$("textarea#q11_3").parent().hide();
		$("textarea#q11_3").removeClass("validate[required]");
	}
}); 

$("input[name=augmentercontribution]").live('click',function(){
	if ($(this).val() == 1){
		$("textarea#q14_3").parent().fadeIn("slow")
		$("textarea#q14_3").addClass("validate[required]");
	}else{
		$("textarea#q14_3").parent().hide();
		$("textarea#q14_3").removeClass("validate[required]");
	}
}); 

$("input[name=planassistanceinteressant]").live('click',function(){
	if ($(this).val() == 2){
		$("textarea#q17_3").parent().fadeIn("slow")
		$("textarea#q17_3").addClass("validate[required]");
	}else{
		$("textarea#q17_3").parent().hide();
		$("textarea#q17_3").removeClass("validate[required]");
	}
}); 
