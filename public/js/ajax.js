function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
		}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function mostrar(){
	var nombre= document.getElementById('idioma').value;
	var nivel= document.getElementById('nivel').value;
	var naturale= document.getElementById('natural').value;
	var resultado= document.getElementById('resultado');
	ajax=objetoAjax();
	ajax.open('GET','/estudiante/idioma/'+nombre+"/"+nivel+"/"+naturale,true);
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			resultado.innerHTML=ajax.responseText;
		}
		
	}
	// alert('hola');
	ajax.send(null);
}

function mostrar2(){
	var estudio= document.getElementById('estudio').value;
	var grado= document.getElementById('grado').value;
	var estado=document.getElementById('estado').value;
	var naturale= document.getElementById('natural').value;
	var resultado2= document.getElementById('resultado2');
	ajax=objetoAjax();
	ajax.open('GET','/estudiante/estudio/'+estudio+"/"+grado+"/"+estado+"/"+naturale,true);
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			resultado2.innerHTML=ajax.responseText;
		}
		
	}
	// alert('hola');
	ajax.send(null);
}

function mostrar3(){
	var puesto= document.getElementById('puesto').value;
	var fecha_ini= document.getElementById('fecha_ini').value;
	var fecha_fin=document.getElementById('fecha_fin').value;
	var empresa=document.getElementById('empresa').value;
	var area=document.getElementById('area').value;
	var descripcion=document.getElementById('descripcion').value;
	var naturale= document.getElementById('natural').value;
	var resultado3= document.getElementById('resultado3');
	ajax=objetoAjax();
	ajax.open('GET','/estudiante/experiencia/'+puesto+"/"+fecha_ini+"/"+fecha_fin+"/"+empresa+"/"+area+"/"+descripcion+"/"+naturale,true);
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			resultado3.innerHTML=ajax.responseText;
		}
		
	}
	// alert('hola');
	ajax.send(null);
}

function mostraranucios(){
	
	var orga= document.getElementById('orga').value;
	var exiteper= document.getElementById('exitepersona').value;
	var anuncios= document.getElementById('crearanuncio');
	ajax=objetoAjax();
	ajax.open('GET','/organizacion/anuncios/'+orga+"/"+exiteper,true);
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			anuncios.innerHTML=ajax.responseText;
		}
		
	}
	// alert('hola');
	ajax.send(null);
}