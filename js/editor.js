$(function (){
	"use strict"
	var myCodeMirror = CodeMirror($("#editor")[0], {
		value: "function myScript () { return 100 }\n",
		mode: "javascript",
		lineNumbers: true
	});
	$("#save").on('click', function ( e ) {
		e.preventDefault();
		var filePath = $("input#filePath").val(),
			fileType = $("select#fileType").val();
		$.ajax({
			type: 'POST',
			url: 'functions/save.php',
			data: {
				fileContent: myCodeMirror.getValue(),
				fileType: fileType,
				filePath: filePath + '.' + fileType	
			}
		}).done(function (msg){
			console.log(msg);
		});
	});
	$("#load").on('click', function ( e ) {
		e.preventDefault();
		var filePath = 'load.txt'; 
		$.ajax({
			type: 'POST',
			url: 'functions/load.php',
			data: {
				filePath: filePath 
			}
		})
		.done(function ( data, msg ) {
			myCodeMirror.setValue(data);
			console.log(data);
			console.log(msg);
		});
	});
});