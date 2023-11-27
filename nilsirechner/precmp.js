$(document).ready(function(){
	
	window.setTimeout(function(){
		
		$("iframe.vert").fadeIn();
		$("iframe.horz").fadeIn();
		
	},window.showadsense?4500:333);
	
	var timer = window.setInterval(function(){
		
		if ($("ins.adsbygoogle iframe").length>0) {
			
			window.clearInterval(timer);
			
			$("iframe.vert").remove();
			$("iframe.horz").parent().parent().remove();
			
		}
		
	}, 222);
	
	
});