var open = true;


function toggleSide(){
	if( open ){
		minimise();
	}
	else{
		maximise();
	}
}

function minimise(){
	
	$( "#sidePanel" ).hide();
	$("#sidePanelButton").css("left", "0px");
	open = false;
	$("#sidePanelButton").html(">");
	

}

function maximise(){
	$( "#sidePanel" ).show();
	$("#sidePanelButton").css("left", "200px");
	open = true;
	$("#sidePanelButton").html("<");
	
}