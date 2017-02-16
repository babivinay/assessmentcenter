<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google" content="notranslate" />
<link href="css/riasec.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/learn-icon.png" type="image/png">
<script type="text/javascript" src="js/jquery-1.7.2.js"></script>

<title>RAISEC (Multi-Language)</title>


<script type="text/javascript">

jQuery(document).ready(function() {
	jQuery('#results').css('visibility', 'hidden');
	
	
	jQuery('.infoBox_btn').bind('click', function(){
		
		var myRaisecCode = jQuery('#myCode_1').text() + jQuery('#myCode_2').text() + jQuery('#myCode_3').text();
		
		//location.href = '../programs/pathways.php?raisec=' + myRaisecCode;
		
		window.open('../programs/raisec_results.php?raisec=' + myRaisecCode, '_blank');
		
	});
	
	
	
}); //END jQuery(document).ready


var gLeftTotal_R = 0;
var gLeftTotal_I = 0;
var gLeftTotal_A = 0;
var gLeftTotal_S = 0;
var gLeftTotal_E = 0;
var gLeftTotal_C = 0;

var gRightTotal_R = 0;
var gRightTotal_I = 0;
var gRightTotal_A = 0;
var gRightTotal_S = 0;
var gRightTotal_E = 0;
var gRightTotal_C = 0;

function evalCheckboxes(strQuestionNum, strChar){

	//alert(strQuestionNum + ", " + strChar);
	var tmpChkID = strQuestionNum;
	
	//alert(parseInt(tmpChkID.substr(4)));
	
	if(parseInt(tmpChkID.substr(4)) <= 21){	
		//------------ Left side questions -----------------
		if(jQuery('#chk_'+parseInt(tmpChkID.substr(4))).is(':checked')){
			switch(strChar){
				case "R":
					gLeftTotal_R = gLeftTotal_R + 1;
					break;
				case "I":
					gLeftTotal_I = gLeftTotal_I + 1;
					break;
				case "A":
					gLeftTotal_A = gLeftTotal_A + 1;
					break;
				case "S":
					gLeftTotal_S = gLeftTotal_S + 1;
					break;
				case "E":
					gLeftTotal_E = gLeftTotal_E + 1;
					break;
				case "C":
					gLeftTotal_C = gLeftTotal_C + 1;
					break;
			}	
		}else{
			switch(strChar){
				case "R":
					gLeftTotal_R = gLeftTotal_R - 1;
					break;
				case "I":
					gLeftTotal_I = gLeftTotal_I - 1;
					break;
				case "A":
					gLeftTotal_A = gLeftTotal_A - 1;
					break;
				case "S":
					gLeftTotal_S = gLeftTotal_S - 1;
					break;
				case "E":
					gLeftTotal_E = gLeftTotal_E - 1;
					break;
				case "C":
					gLeftTotal_C = gLeftTotal_C - 1;
					break;
			}
		}
		
		if(eval('gLeftTotal_'+strChar) < 1){
			jQuery('#leftTotal_'+strChar).html("");
			//jQuery('#leftTotal_'+strChar).html(eval('gLeftTotal_'+strChar));
		}else{
			jQuery('#leftTotal_'+strChar).html(eval('gLeftTotal_'+strChar));
		}
		
	}else{
		//------------ Right side questions -----------------
		//alert(parseInt(tmpChkID.substr(4)));
		
		if(jQuery('#chk_'+parseInt(tmpChkID.substr(4))).is(':checked')){
			switch(strChar){
				case "R":
					gRightTotal_R = gRightTotal_R + 1;
					break;
				case "I":
					gRightTotal_I = gRightTotal_I + 1;
					break;
				case "A":
					gRightTotal_A = gRightTotal_A + 1;
					break;
				case "S":
					gRightTotal_S = gRightTotal_S + 1;
					break;
				case "E":
					gRightTotal_E = gRightTotal_E + 1;
					break;
				case "C":
					gRightTotal_C = gRightTotal_C + 1;
					break;
			}	
		}else{
			switch(strChar){
				case "R":
					gRightTotal_R = gRightTotal_R - 1;
					break;
				case "I":
					gRightTotal_I = gRightTotal_I - 1;
					break;
				case "A":
					gRightTotal_A = gRightTotal_A - 1;
					break;
				case "S":
					gRightTotal_S = gRightTotal_S - 1;
					break;
				case "E":
					gRightTotal_E = gRightTotal_E - 1;
					break;
				case "C":
					gRightTotal_C = gRightTotal_C - 1;
					break;
			}
		}
		
		if(eval('gRightTotal_'+strChar) < 1){
			jQuery('#rightTotal_'+strChar).html("");
			//jQuery('#rightTotal_'+strChar).html(eval('gRightTotal_'+strChar));
		}else{
			jQuery('#rightTotal_'+strChar).html(eval('gRightTotal_'+strChar));
		}
		
	}
	
	
	var grandtotal = eval('gLeftTotal_'+strChar) + eval('gRightTotal_'+strChar);
	if(grandtotal < 1){
		//jQuery('#grandTotal_'+strChar).html("");
		jQuery('#grandTotal_'+strChar).html(grandtotal);
	}else{
		jQuery('#grandTotal_'+strChar).html(grandtotal);
	}

}

function getRiasecResults(){
	
	jQuery('#cpInfo_R').removeClass('cp_highlighted');
	jQuery('#cpInfo_I').removeClass('cp_highlighted');
	jQuery('#cpInfo_A').removeClass('cp_highlighted');
	jQuery('#cpInfo_S').removeClass('cp_highlighted');
	jQuery('#cpInfo_E').removeClass('cp_highlighted');
	jQuery('#cpInfo_C').removeClass('cp_highlighted');
	
	//hide "Discover Your Options" buttons
	jQuery('.infoBox_btn').css('visibility','hidden');
	
	
	//jQuery('#riasec_wrapper').animate({
	//		height: '425px'
	//}, 3000, function() {
			// Animation complete.
			//jQuery('#riasec_wrapper').css('overflow-y', 'scroll');
			//jQuery('#riasec_wrapper').css('overflow-x', 'hidden');
			
			////jQuery("#riasec_wrapper").scrollTop(jQuery("#riasec_wrapper")[0].scrollHeight);
			jQuery('html, body').animate({ scrollTop: jQuery("#riasec_wrapper")[0].scrollHeight-200 }, 3000, function() {
			
					jQuery('#results').css('visibility', 'visible');
					
					var riasecArray = [
										["R", jQuery('#grandTotal_R').text()], 
										["I", jQuery('#grandTotal_I').text()],
										["A", jQuery('#grandTotal_A').text()],
										["S", jQuery('#grandTotal_S').text()],
										["E", jQuery('#grandTotal_E').text()],
										["C", jQuery('#grandTotal_C').text()]
									  ];
									  
					////riasecArray.sort();
					////riasecArray.reverse();
					
					riasecArray.sort( function( a, b )
					{
					  // Sort by the 2nd value in each array
					  if ( a[1] == b[1] ) return 0;
					  return a[1] < b[1] ? -1 : 1;
					});
					
					riasecArray.reverse( function( a, b )
					{
					  // Sort by the 2nd value in each array
					  if ( a[1] == b[1] ) return 0;
					  return a[1] < b[1] ? -1 : 1;
					});
					
					jQuery('#myCode_1').html(riasecArray[0][0]);
					jQuery('#myCode_2').html(riasecArray[1][0]);
					jQuery('#myCode_3').html(riasecArray[2][0]);
					
					for (var i=0;i<riasecArray.length; i++) {
						//alert(riasecArray[i][0] + ' - ' + riasecArray[i][1]);
						if(riasecArray[i][0] == "R"){ jQuery('#realistic').html(riasecArray[i][1]); };
						if(riasecArray[i][0] == "I"){ jQuery('#investigative').html(riasecArray[i][1]); };
						if(riasecArray[i][0] == "A"){ jQuery('#artistic').html(riasecArray[i][1]); };
						if(riasecArray[i][0] == "S"){ jQuery('#social').html(riasecArray[i][1]); };
						if(riasecArray[i][0] == "E"){ jQuery('#enterprising').html(riasecArray[i][1]); };
						if(riasecArray[i][0] == "C"){ jQuery('#conventional').html(riasecArray[i][1]); };
					}
					
					
					var longNameArray = new Array()
						longNameArray["R"] = "Realistic";
						longNameArray["I"] = "Investigative";
						longNameArray["A"] = "Artistic";
						longNameArray["S"] = "Social";
						longNameArray["E"] = "Enterprising";
						longNameArray["C"] = "Conventional";
					
					
					var analysisString = "<img src='imgs/number_5.jpg' width='22' height='22' align='left' style='margin:0px 10px 0px 0px; padding:0px;' />" +
										 "Based on your selections, you are <b>" + longNameArray[riasecArray[0][0]] + 
										 "</b> (<span style='color:#1CC2F2; font-size:14px; font-weight: bold;'>"+riasecArray[0][0]+"</span>), <b>" + longNameArray[riasecArray[1][0]] + 
										 "</b> (<span style='color:#1CC2F2; font-size:14px; font-weight: bold;'>"+riasecArray[1][0]+"</span>), and <b>" + longNameArray[riasecArray[2][0]] + 
										 "</b> (<span style='color:#1CC2F2; font-size:14px; font-weight: bold;'>"+riasecArray[2][0]+"</span>).";
										 
					jQuery('#text_analysis').html(analysisString);
					
					
					jQuery('#cpInfo_' + riasecArray[0][0]).addClass('cp_highlighted');
					jQuery('#cpInfo_' + riasecArray[1][0]).addClass('cp_highlighted');
					jQuery('#cpInfo_' + riasecArray[2][0]).addClass('cp_highlighted');
					
					
					jQuery('#cpInfo_' + riasecArray[0][0] + '_btn').css('visibility', 'visible');
					jQuery('#cpInfo_' + riasecArray[1][0] + '_btn').css('visibility', 'visible');
					jQuery('#cpInfo_' + riasecArray[2][0] + '_btn').css('visibility', 'visible');
					
					
					
			});// END jQuery("#riasec_wrapper").animate
	//});// END jQuery('#riasec_wrapper').animate({
}

function printResults(){
	window.print();
}

</script>

<style type="text/css">

.goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 
body {
    top: 0px !important; 
    }


.goog-tooltip { 
    /* display: none !important; */
} 
.goog-tooltip:hover { 
    /* display: none !important; */
} 
.goog-text-highlight { 
    background-color: transparent !important; 
    border: none !important;  
    box-shadow: none !important; 
}

#translateDIV{
	visibility:hidden !important;
	margin:0;
	padding:0;
	height: 0px !important;
	position:absolute;
	top:0px;
	left:0px;
}

#google_translate_element{
	margin:-45px 12px 0px 0px;
	padding:0;
	height:auto;
	float:right;
}

.infoBox_btn{ visibility:hidden; }

</style>
</head>
<body>
<div style="float:right">
<h3 ><a href="userpage.php"> home</a></h3>
</div>
<div id="riasec_pageTitle">

	<div id="pathway_title">Which Career Pathway is right for you?</div>
 	<hr class="riasec_hr" />
  	<div id="riasec_title">THE RIASEC TEST</div><div id="google_translate_element"></div>
</div>

<div id="riasec_wrapper">    
  <p>Follow these easy steps to see where your interests are. 
  	</p>
    
    <p><img src="imgs/number_1.jpg" width="22" height="22" align="left" />&nbsp;
    Read each statement. If you agree with the statement, select the checkbox. There are no wrong answers!</p>
    
	<div id="left_box">
	  <table width="420" border="1" cellspacing="0" cellpadding="3">
	    <tr>
	      <td height="25" width="200" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">1. I like to work on cars</span></td>
	      <td width="23" align="center"><input type="checkbox" id="chk_1" value="R" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td width="23">&nbsp;</td>
	      <td width="23">&nbsp;</td>
	      <td width="23">&nbsp;</td>
	      <td width="23">&nbsp;</td>
	      <td width="23">&nbsp;</td>
        </tr>
	    <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">2. I like to do puzzles</span></td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_2" value="I" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">3. I am good at working<br /></span>
          												 <span id="tbl_text2">independently</span></td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_3" value="A" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">4. I like to work in teams</span></td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_4" value="S" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">5. I am an ambitious person,<br /></span>
          												 			 <span id="tbl_text2">I set goals for myself</span></td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_5" value="E" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">6. I like to organize things,<br /></span>
          															 <span id="tbl_text2">(files, desks/offices)</span></td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_6" value="C" onclick="evalCheckboxes(this.id, this.value)" /></td>
        </tr>
	    <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">7. I like to build things</span></td>
	      <td align="center"><input type="checkbox" id="chk_7" value="R" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">8. I like to read about art<br /></span>
          															 <span id="tbl_text2">and music</span></td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_8" value="A" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">9. I like to have clear<br /></span>
          															 <span id="tbl_text2">instructions to follow</span></td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_9" value="C" onclick="evalCheckboxes(this.id, this.value)" /></td>
        </tr>
	    <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">10. I like to try to influence<br /></span>
          															 <span id="tbl_text2">&nbsp; or persuade people</span></td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_10" value="E" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
        </tr>
        
        
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">11. I like to do experiments</span></td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_11" value="I" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">12. I like to teach or train people</span></td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_12" value="S" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">13. I like trying to help people<br /></span>
          															 <span id="tbl_text2">&nbsp; solve their problems</span></td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_13" value="S" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">14. I like to take care of animals</span></td>
	      <td align="center"><input type="checkbox" id="chk_14" value="R" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">15. I wouldn't mind working 8<br />
	      </span>
          															 <span id="tbl_text2">&nbsp; hours per day in an office</span></td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_15" value="C" onclick="evalCheckboxes(this.id, this.value)" /></td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">16. I like selling things</span></td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td align="center"><input type="checkbox" id="chk_16" value="E" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">17. I enjoy creative writing</span></td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td align="center"><input type="checkbox" id="chk_17" value="A" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">18. I enjoy science</span></td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td align="center"><input type="checkbox" id="chk_18" value="I" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">19. I am quick to take on new<br /></span>
          															 <span id="tbl_text2">&nbsp; responsibilities</span></td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_19" value="E" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">20. I am interested in healing<br /></span>
          															 <span id="tbl_text2">&nbsp; people</span></td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_20" value="S" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">21. I enjoy trying to figure out<br /></span>
          															 <span id="tbl_text2">&nbsp; how things work</span></td>
	      <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_21" value="I" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
         <tr>
	      <td>&nbsp;</td>
          <td>&nbsp;</td>
	      <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
	      <td height="25" class="tbl_bottom_hideLines">&nbsp;</td>
	      <td class="tbl_bottom" id="leftTotal_R" align="center" class="notranslate">&nbsp;</td>
	      <td class="tbl_bottom" id="leftTotal_I" align="center" class="notranslate">&nbsp;</td>
	      <td class="tbl_bottom" id="leftTotal_A" align="center" class="notranslate">&nbsp;</td>
	      <td class="tbl_bottom" id="leftTotal_S" align="center" class="notranslate">&nbsp;</td>
	      <td class="tbl_bottom" id="leftTotal_E" align="center" class="notranslate">&nbsp;</td>
	      <td class="tbl_bottom" id="leftTotal_C" align="center" class="notranslate">&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" class="tbl_bottom_hideLines td_topLine_white">&nbsp;</td>
	      <td width="20" height="10" align="center" style="border:solid 2px #666;" class="riasec_chars notranslate">R</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">I</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">A</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">S</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">E</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">C</td>
        </tr>
      </table>
  	</div>




	<div id="right_box"  class="grandTotal_arrow">
    <table width="420" border="1" cellspacing="0" cellpadding="3">
	    <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">22. I like putting things together<br /></span>
          												 <span id="tbl_text2">&nbsp; or assembling things</span></td>
	      <td align="center"><input type="checkbox" id="chk_22" value="R" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">23. I am a creative person</span></td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_23" value="A" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">24. I pay attention to details</span></td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_24" value="C" onclick="evalCheckboxes(this.id, this.value)" /></td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">25. I like to do filing or typing</span></td>
	      <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_25" value="C" onclick="evalCheckboxes(this.id, this.value)" /></td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">26. I like to analyze things<br /></span>
          												 			 <span id="tbl_text2">&nbsp; (problems/situations)</span></td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_26" value="I" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">27. I like to play instruments<br /></span>
          												 			 <span id="tbl_text2">&nbsp; or sing</span></td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_27" value="A" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">28. I enjoy learning about<br /></span>
          												 			 <span id="tbl_text2">&nbsp; other cultures</span></td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_28" value="S" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">29. I would like to start my<br /></span>
          												 			 <span id="tbl_text2">&nbsp; own business</span></td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_29" value="E" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">30. I like to cook</span></td>
	      <td align="center"><input type="checkbox" id="chk_30" value="R" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">31. I like acting in plays</span></td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_31" value="A" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">32. I am a practical person</span></td>
	      <td align="center"><input type="checkbox" id="chk_32" value="R" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">33. I like working with numbers<br /></span>
          												 			 <span id="tbl_text2">&nbsp; or charts</span></td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_33" value="I" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">34. I like to get into discussions<br /></span>
          												 			 <span id="tbl_text2">&nbsp; about issues</span></td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_34" value="S" onclick="evalCheckboxes(this.id, this.value)" /></td>
	      <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">35. I am good at keeping records<br /></span>
          												 			 <span id="tbl_text2">&nbsp; of my work</span></td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_35" value="C" onclick="evalCheckboxes(this.id, this.value)" /></td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">36. I like to lead</span></td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_36" value="E" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">37. I like working outdoors</span></td>
	      <td align="center"><input type="checkbox" id="chk_37" value="R" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_double.jpg"><span id="tbl_text">38. I would like to work in<br /></span>
          												 			 <span id="tbl_text2">&nbsp; an office</span></td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_double.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_38" value="C" onclick="evalCheckboxes(this.id, this.value)" /></td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">39. I'm good at math</span></td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_39" value="I" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">40. I like helping people</span></td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_40" value="S" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">41. I like to draw</span></td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_41" value="A" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" background="imgs/riasec_tdLine_single.jpg"><span id="tbl_text">42. I like to give speeches</span></td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
          <td background="imgs/riasec_tdLine_single.jpg">&nbsp;</td>
	      <td align="center"><input type="checkbox" id="chk_42" value="E" onclick="evalCheckboxes(this.id, this.value)" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
	      <td>&nbsp;</td>
          <td>&nbsp;</td>
	      <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        <tr>
	      <td height="25" class="tbl_bottom_hideLines">&nbsp;</td>
	      <td class="tbl_bottom" id="rightTotal_R" align="center">&nbsp;</td>
	      <td class="tbl_bottom" id="rightTotal_I" align="center">&nbsp;</td>
	      <td class="tbl_bottom" id="rightTotal_A" align="center">&nbsp;</td>
	      <td class="tbl_bottom" id="rightTotal_S" align="center">&nbsp;</td>
	      <td class="tbl_bottom" id="rightTotal_E" align="center">&nbsp;</td>
	      <td class="tbl_bottom" id="rightTotal_C" align="center">&nbsp;</td>
        </tr>
        <tr>
	      <td height="25" style="border:none">&nbsp;</td>
	      <td width="20" height="10" align="center" style="border:solid 2px #666;" class="riasec_chars notranslate">R</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">I</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">A</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">S</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">E</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">C</td>
        </tr>
      </table>
    </div>

	<div id="grandTotal_row">
	  <table width="200" border="0" cellspacing="0" cellpadding="2" style="border: none;">
      <tr>
	      <td height="20" style="border:solid 1px #999" id="grandTotal_R" align="center" class="riasec_chars_bold">0</td>
	      <td style="border:solid 1px #999" id="grandTotal_I" align="center" class="riasec_chars_bold notranslate">0</td>
	      <td style="border:solid 1px #999" id="grandTotal_A" align="center" class="riasec_chars_bold notranslate">0</td>
	      <td style="border:solid 1px #999" id="grandTotal_S" align="center" class="riasec_chars_bold notranslate">0</td>
	      <td style="border:solid 1px #999" id="grandTotal_E" align="center" class="riasec_chars_bold notranslate">0</td>
	      <td style="border:solid 1px #999" id="grandTotal_C" align="center" class="riasec_chars_bold notranslate">0</td>
      </tr>
      <tr>
	      <td width="20" height="20" align="center" style="border:solid 2px #666;" class="riasec_chars notranslate">R</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">I</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">A</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">S</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">E</td>
	      <td width="20" align="center" style="border:solid 2px #666" class="riasec_chars notranslate">C</td>
      </tr>
      </table>
	</div>
    
    <p style="clear:both; margin-top:20px;">
    	<img src="imgs/number_2.jpg" width="22" height="22" align="left" />&nbsp;
        If you read all the questions and selected the checkboxes that you agree with, click the button to view your results.&nbsp; 
        <br /><input type="button" style="margin:10px 0px 0px 9px; width: 200px; height:40px;" id="riasec_submit" value="Submit RIASEC Test" onclick="getRiasecResults();"  /></p>
</div>

<DIV style="page-break-after:always"></DIV>

<div id="results">
	<div id="pathway_title">Which Career Pathway is right for you?</div>
 	 <hr class="riasec_hr" />
  	<div id="riasec_title">RESULTS OF THE RIASEC TEST</div>

	<div id="result_3_block">
        <p><img src="imgs/number_3.jpg" width="22" height="22" align="left" style="margin:0px 10px 0px 0px; padding:0px;" />
        <div style="width:330px; height:30px; margin:-4px 0px 15px 0px; padding:0px 0px 0px 0px; line-height:16px; float:left;">
            Your grand total scores from above has been
            transfered into the appropriate columns below.</div><br />
            <table border="0" cellspacing="0" cellpadding="0" style="clear:both; margin:0px 0px 0px 46px; border: none;">
                <tr>
                    <td class="riasecResult_chars notranslate">R</td><td width="120">= Realistic</td><td width="50">Total:</td><td><b><span id="realistic"></span></b></td>
                </tr>
                <tr>
                    <td class="riasecResult_chars notranslate">I</td><td>= Investigative</td><td width="50">Total:</td><td><b><span id="investigative"></span></b></td>
                </tr>
                <tr>
                    <td class="riasecResult_chars notranslate">A</td><td>= Artistic</td><td width="50">Total:</td><td><b><span id="artistic"></span></b></td>
                </tr>
                <tr>
                    <td class="riasecResult_chars notranslate">S</td><td>= Social</td><td width="50">Total:</td><td><b><span id="social"></span></b></td>
                </tr>
                    <td class="riasecResult_chars notranslate">E</td><td>= Enterprising</td><td width="50">Total:</td><td><b><span id="enterprising"></span></b></td>
                <tr>
                    <td class="riasecResult_chars notranslate">C</td><td>= Conventional</td><td width="50">Total:</td><td><b><span id="conventional"></span></b></td>
                </tr>
            </table>
        </p>
	</div>

	<div id="result_4_block">
    	<p><img src="imgs/number_4.jpg" width="22" height="22" align="left" style="margin:0px 10px 0px 0px; padding:0px;" />
            <div id="myInterest_code">My Interest Code</div>
            <div id="myCodes">
            	<div id="myCode_1" class="myCode notranslate"></div><div id="myCode_2" class="myCode notranslate"></div><div id="myCode_3" class="myCode notranslate"></div>
            </div></p>
        <p style="margin:0px 0px 0px 43px; padding:0px;"><b>NOTE:</b> The letters with the highest<br />scores are your Interest Code.</p>
	</div>
    
    <div id="result_print"><img src="imgs/print.jpg" width="167" height="152" onclick="printResults()" /></div>
    
    <div id="text_analysis"></div>
    <div id="clearDIV"></div>
    
    <div id="cpInfo_R" class="careerPathwayInfo">
    	<h3>R = Realistic</h3>
        <p>These people are often good at mechanical or athletic
		  jobs. Good college majors for Realistic people are...</p>
        
        <ul>
        	<li>Agriculture</li>
            <li>Health Assistant</li>
            <li>Computers</li>
            <li>Construction</li>
            <li>Mechanic/Machinist</li>
            <li>Engineering</li>
            <li>Food and Hospitality</li>
		</ul>
        
        <div class="infoBox_wrapper">
            <div id="infoBox">
                <h4>Related Pathways</h4>
                <ul>
                    <li>Natural Resources</li>
                    <li>Health Services</li>
                    <li>Industrial and Engineering Technology</li>
                    <li>Arts and Communication</li>
                </ul>
            </div>
            <div id="cpInfo_R_btn" class="infoBox_btn"></div>
        </div>
    </div>

	<div id="cpInfo_S" class="careerPathwayInfo">
    	<h3>S = Social</h3>
        <p>These people like to work with other people,
          rather than things. Good college majors for
          Social people are...</p>
        
        <ul>
        	<li>Counseling</li>
            <li>Nursing</li>
            <li>Physical Therapy</li>
            <li>Travel</li>
            <li>Advertising</li>
            <li>Public Relations</li>
            <li>Education</li>
		</ul>
        
        <div class="infoBox_wrapper">
            <div id="infoBox">
                <h4>Related Pathways</h4>
                <ul>
                    <li>Health Services</li>
                    <li>Public and Human Services</li>
                </ul>
            </div>
            <div id="cpInfo_S_btn" class="infoBox_btn"></div>
        </div>
    </div>
    
    <div id="cpInfo_I" class="careerPathwayInfo">
    	<h3>I = Investigative</h3>
        <p>These people like to watch, learn, analyze and solve
          problems. Good college majors for Investigative
          people are...</p>
        
        <ul>
        	<li>Marine Biology</li>
            <li>Engineering</li>
            <li>Chemistry</li>
            <li>Zoology</li>
            <li>Medicine/Surgery</li>
            <li>Consumer Economics</li>
            <li>Psychology</li>
		</ul>
        <div class="infoBox_wrapper">
            <div id="infoBox">
                <h4>Related Pathways</h4>
                <ul>
                    <li>Health Services</li>
                    <li>Business</li>
                    <li>Public and Human Services</li>
                    <li>Industrial and Engineering Technology</li>
                </ul>
            </div>
            <div id="cpInfo_I_btn" class="infoBox_btn"></div>
        </div>
    </div>
    
    <div id="cpInfo_E" class="careerPathwayInfo">
    	<h3>E = Enterprising</h3>
        <p>These people like to work with others and enjoy
          persuading and performing. Good college majors
          for Enterprising people are...</p>
        
        <ul>
        	<li>Fashion Merchandising</li>
            <li>Real Estate</li>
            <li>Marketing/Sales</li>
            <li>Law</li>
            <li>Political Science</li>
            <li>International Trade</li>
            <li>Banking/Finance</li>
		</ul>
        
        <div class="infoBox_wrapper">
            <div id="infoBox">
                <h4>Related Pathways</h4>
                <ul>
                    <li>Business</li>
                    <li>Public and Human Services</li>
                    <li>Arts and Communication</li>
                </ul>
            </div>
            <div id="cpInfo_E_btn" class="infoBox_btn"></div>
        </div>
    </div>
    
    
    <div id="cpInfo_A" class="careerPathwayInfo">
    	<h3>A = Artistic</h3>
        <p>These people like to work in unstructured situations
          where they can use their creativity. Good majors for
          Artistic people are...</p>
        
        <ul>
        	<li>Communications</li>
            <li>Cosmetology</li>
            <li>Fine and Performing Arts</li>
            <li>Photography</li>
            <li>Radio and TV</li>
            <li>Interior Design</li>
            <li>Architecture</li>
		</ul>
        
        <div class="infoBox_wrapper">
            <div id="infoBox">
                <h4>Related Pathways</h4>
                <ul>
                    <li>Public and Human Services</li>
                    <li>Arts and Communication</li>
                </ul>
            </div>
            <div id="cpInfo_A_btn" class="infoBox_btn"></div>
        </div>
    </div>
    
    
    <div id="cpInfo_C" class="careerPathwayInfo">
    	<h3>C = Conventional</h3>
        <p>These people are very detail oriented,organized
          and like to work with data. Good college majors
          for Conventional people are...</p>
        
        <ul>
        	<li>Accounting</li>
            <li>Court Reporting</li>
            <li>Insurance</li>
            <li>Administration</li>
            <li>Medical Records</li>
            <li>Banking</li>
            <li>Data Processing</li>
		</ul>
        
        <div class="infoBox_wrapper">
            <div id="infoBox">
                <h4>Related Pathways</h4>
                <ul>
                    <li>Health Services</li>
                    <li>Business</li>
                    <li>Industrial and Engineering Technology</li>
                </ul>
            </div>
            <div id="cpInfo_C_btn" class="infoBox_btn"></div>
        </div>
    </div>
   
   
    
</div>
<div id="translateDIV">
    <div id="google_translate_element"></div><script>
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en',
		layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        autoDisplay: false
      }, 'google_translate_element');
    }
    </script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>

<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript" language="javascript">
	var sc_project=2586262; 
	var sc_invisible=1; 
	var sc_partition=25; 
	var sc_security="cd90c3e3"; 
var sc_text=2; 
</script>
<script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/counter.js"></script>
<noscript><div class="statcounter"><img class="statcounter"
src="http://c.statcounter.com/2586262/0/cd90c3e3/0/"
alt="web analytics"></div></noscript>
<!-- End of StatCounter Code for Default Guide -->


</body>
</html>