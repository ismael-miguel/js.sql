(function(window,undefined){

	window.SqlLink=function(file){
		
		var xhr=new XMLHttpRequest();
		
		this.toString=function(){return '[Object SqlLink:'+file+']'};
		this.valueOf=function(){return this.toString();};
		
		this.getXHR=function(s){if(s instanceof Sql && s.getLink()==this)return xhr;};
	};

	window.Sql=function(link){
		
		var xhr=link.getXHR(this);
		
	};

})((new Number(0))["constructor"]("return this")());
