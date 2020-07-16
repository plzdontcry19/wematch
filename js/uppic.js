window.onload = pageLoad;

function pageLoad(){
	document.getElementById('fileToUpload').onchange = fileSubmit;
}

function fileUpload(){
	document.getElementById('fileToUpload').click();
}

function fileSubmit(){
	document.getElementById('img-upload').submit();
}