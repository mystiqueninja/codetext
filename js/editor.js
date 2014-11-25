$(function (){
	"use strict"
	var myCodeMirror = CodeMirror($("#editor")[0], {
		value: "function myScript () { return 100 }\n",
		mode: "javascript",
		lineNumbers: true
	});
	$("#save").on('click', function ( e ) {
		e.preventDefault();
		var filePath = $("input#filePath").value,
			fileType = $("select#fileType").value;
		$.ajax({
			type: 'POST',
			url: '/functions/save.php',
			data: {
				fileContent: myCodeMirror.getValue(),
				fileType: fileType,
				filePath: filePath	
			}
		});
	});
	$("#load").on('click', function ( e ) {
		e.preventDefault();
		var filePath; 
		$.ajax({
			type: 'GET',
			url: 'functions/load.php?filePath='+filePath
		})
		.done(function ( data, msg ) {
			myCodeMirror.setValue(data);
		});
	});
});