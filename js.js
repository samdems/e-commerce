function makeitem (title,size,image,desciption) {
	var inputs = document.getElementById("items");
		inputs.innerHTML =  inputs.innerHTML +'<section class="' + size  + '"><h1>' + title + '</h1><img src="' + image + '"><p>' + desciption + '</p></section>'
}

function getitems(){

var xmlhttp =new XMLHttpRequest();

xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    data = JSON.parse(xmlhttp.responseText);
    for (var i = 0; i < data.length; i++) {
    	makeitem (data[i][1],"small","image",data[i][2] + "<br> £" + data[i][3]);
    };
    
    }
  }
xmlhttp.open("GET","/e-commerce/api/v1/products?s=1&e=5",true);
xmlhttp.send();
}

getitems();