
var x=document.getElementById('button-go');
var y= pageLoad1();

function getParams() {
  	var idx = document.URL.indexOf('?');
  	var params = new Array();
  	if (idx != -1) {
  		var pairs = document.URL.substring(idx+1, document.URL.length).split('&');
  		for (var i=0; i<pairs.length; i++) {
  			nameVal = pairs[i].split('=');
  			params[nameVal[0]] = nameVal[1];
  		}
 	}
  	return params;
 }

function pageLoad1(){
	var para = getParams();
	if(Object.keys(para).length >0){
		if (para["error"]==1){
			//document.getElementById('errordisplay').innerHTML = "Password is wrong!";
      		alert ("Username is duplicate!");
      
		}
	}
	
}