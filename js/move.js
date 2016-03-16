// JavaScript Document
//完美运动框架（实现多种运动同时进行json）
function getStyle(obj, name) {
    if (obj.currentStyle) {
        return obj.currentStyle[name];
    }
    else {
        return getComputedStyle(obj, false)[name];
    }
}

//move(oDiv,{width:300,height:300})
function move(obj, json,fnEnd) {
    clearInterval(obj.timer)
    obj.timer = setInterval(function () {
		//取当前的值
		var bStop=true;
		for(attr in json){
			 var cur = 0;
				if (attr == 'opacity') {
					cur = Math.round(parseFloat(getStyle(obj, attr)) * 100);
				}
				else {
					cur = parseInt(getStyle(obj, attr));
				}
			//算速度	
				var speed = (json[attr] - cur) / 5;
				speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
				if(cur!=json[attr])
					bStop=false;
				//检测停止 
				if (attr == 'opacity') {
					obj.style.filter = 'alpha(opacity:'+(cur + speed)+')';
					obj.style.opacity = (cur + speed) / 100;
				}
				else {
					obj.style[attr] = cur + speed + 'px';
				}
			}
			if(bStop){
				clearInterval(obj.timer);
				if(fnEnd){fnEnd();}
				}
    }, 30);
}