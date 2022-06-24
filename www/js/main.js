

function disableScroll() {
	$.fn.fullpage.setAllowScrolling(false);
}

function enableScroll() {
	$.fn.fullpage.setAllowScrolling(true);
}


function getDomain()
{
	var domain = location.href;
	var pattern = /^http:\/\/([a-z0-9-_\.]*)[\/\?]/i;
	domain = domain.match(pattern);
	domain = domain[1];
	domain = domain.replace("www.", ""); // "www."도 필요없는 경우.
	return domain;
}


function Config(gubun){
	//WEB
	if(w_screen>719){
		switch(gubun){
			case "wBar":
				return 94
				break;
		}
	} else {
	//MOBILE
		switch(gubun){
			case "wBar":
				return 32
				break;
		}
	}
}

