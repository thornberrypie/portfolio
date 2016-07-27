//TEMPORARY MESSAGE
function tempMesg()
{
	alert('This option is currently unavailable');
}

function sendComment(){
	document.getElementById('footer').innerHTML = '<form action="index.php?area=play&comment=sent" method="post">Comment:<input type="text" name="contents" size="33" /> &nbsp;&nbsp;&nbsp;Name&nbsp;(optional):<input type="text" name="name" size="15" /><input type="submit" name="submit" value="Send" /></form>';
}

// CREATE POP UP WINDOW FOR EXTRA INFO
function popImage(iName)
{
	var pURL=iName;
		pInfo='toolbar=0,';
		pInfo+='location=1,';
		pInfo+='directories=0,';
		pInfo+='status=0,';
		pInfo+='menubar=1,';
		pInfo+='scrollbars=1,';
		pInfo+='resizable=1,';
		pInfo+='width=600,';
		pInfo+='height=400,';
		pInfo+='screenX=100,';
		pInfo+='screenY=0,';
		pInfo+='left=0,';
		pInfo+='top=120';
	window.open(pURL, 'info', pInfo);
}
//AJAX FUNCTIONS
function createRequestObject()
{
	var ro;
	var browser = navigator.appName;
	if(browser == "Microsoft Internet Explorer"){
		ro = new ActiveXObject("Microsoft.XMLHTTP");	//FOR MICROSOFT BROWSER
	}else{
		ro = new XMLHttpRequest();	//FOR OTHER BROWSERS
	}
	return ro;
}
var http = createRequestObject();

function sendRequest(action)
{
	http.open('get','scripts/return.php?action='+action);
	http.onreadystatechange = handleResponse;
	http.send(null);
}

function handleResponse()
{
	if(http.readyState == 4){
		var response = http.responseText;
		//alert(response);
		var update = new Array();
		if(response.indexOf('|' != -1)){
			update = response.split('|');
			document.getElementById(update[0]).innerHTML = update[1];
		}
	}
}
