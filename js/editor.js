$(function (){
	"use strict"
	var myCodeMirror = CodeMirror($("#editor")[0], {
		value: "function myScript () { return 100 }\n",
		mode: "javascript",
		lineNumbers: true
	});
	console.log(myCodeMirror);
	$("#save").on('click', function ( e ) {
		e.preventDefault();
		$.ajax({
			type: 'POST',
			url: 'save.php',
			dataType: 'text/plain',
			data: myCodeMirror.getValue
		})
		.done(function ( msg ) {

		});
	});
	$("#load").on('click', function ( e ) {
		e.preventDefault();
		$.ajax({
			type: 'GET',
			url: 'load.txt'
		})
		.done(function ( data ) {
			myCodeMirror.setValue(data);

		});
	});
});