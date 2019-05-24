var request;
if (request) {
request.abort();
}

$('#inputArea').keyup(function(){
	console.log('Im going to start processing');
var data = $("#inputArea").val();
console.log(data);
var data_serialized = "data=" + data; 
console.log(data_serialized);
request = $.ajax({
    type: "POST",
    //contentType: "application/json; charset=utf-8",
	url: "./process.php",
	data: {'data' : data}
	});	

	// callback function that will be called on success
request.done(function (response, textStatus, jqXHR){   
    console.log('success'); 
    console.log(response); 
    console.log(textStatus);
    console.log(jqXHR);
	$("#user_output").val(response);
	request = null;
});

// callback function that will be called on failure
request.fail(function (jqXHR, textStatus, errorThrown){
	alert("error AJAX: " + textStatus);
});
})



function insertAtCaret(areaId,text) {
    var txtarea = document.getElementById(areaId);
    var scrollPos = txtarea.scrollTop;
    var strPos = 0;
    var br = ((txtarea.selectionStart || txtarea.selectionStart == '0') ? 
        "ff" : (document.selection ? "ie" : false ) );
    if (br == "ie") { 
        txtarea.focus();
        var range = document.selection.createRange();
        range.moveStart ('character', -txtarea.value.length);
        strPos = range.text.length;
    }
    else if (br == "ff") strPos = txtarea.selectionStart;

    var front = (txtarea.value).substring(0,strPos);  
    var back = (txtarea.value).substring(strPos,txtarea.value.length); 
    txtarea.value=front+text+back;
    strPos = strPos + text.length;
    if (br == "ie") { 
        txtarea.focus();
        var range = document.selection.createRange();
        range.moveStart ('character', -txtarea.value.length);
        range.moveStart ('character', strPos);
        range.moveEnd ('character', 0);
        range.select();
    }
    else if (br == "ff") {
        txtarea.selectionStart = strPos;
        txtarea.selectionEnd = strPos;
        txtarea.focus();
    }
    txtarea.scrollTop = scrollPos;
}


function preventFocus() {
    var ae = document.activeElement;
    setTimeout(function() { ae.focus() }, 1);
}
           



	
        