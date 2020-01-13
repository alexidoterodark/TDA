var fecha=new Date();
var fecha2=new Date(fecha.getFullYear()+'-'+(fecha.getMonth()+1)+'-1');
var dias=["Lu","Ma","Mi","Ju","Vi","Sa","Do"];
var diasCompleto=["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];
var meses=["Ene.","Feb.","Mar.","Abr.","May.","Jun.","Jul.","Ago.","Sep.","Oct.","Nov.","Dic."];
var calendarioMostrar=document.querySelector('.calendarioMostrar');
var calendarioMostrar2=document.querySelector('.calendarioMostrar2');
var th,tr,td,thArrow;
var table=document.createElement('table');
var table2=document.createElement('table');
var tht=document.createElement('th');
var tht2=document.createElement('th');
var dateTemp=new Date(fecha.getFullYear()+'-'+(fecha.getMonth()+1)+'-1');
var dateTemp2=new Date(fecha2.getFullYear()+'-'+(fecha2.getMonth()+1)+'-1');
//console.log(dateTemp);
var diasDelMes=new Date(fecha.getFullYear(),fecha.getMonth()+1,0).getDate();
var diasDelMes2=new Date(fecha2.getFullYear(),fecha2.getMonth()+1,0).getDate();
//console.log(fecha.getDay()+" de "+meses[fecha.getMonth()]+" de "+fecha.getFullYear());
//console.log("el mes de "+meses[fecha.getMonth()]+" tiene "+new Date(fecha.getFullYear(),fecha.getMonth()+1,0).getDate()+" dias");
tht.setAttribute("colspan","7");
tht2.setAttribute("colspan","5");

tht.classList.add("titulo-mes");
tht2.setAttribute("class","titulo-mes nuevoTitulo");

tht.innerHTML=meses[fecha.getMonth()]+" "+fecha.getFullYear();
tht2.innerHTML=meses[fecha2.getMonth()]+" "+fecha2.getFullYear();

tr = document.createElement("tr");
tr.appendChild(tht);
table.appendChild(tr);

tr = document.createElement("tr");
thArrow=document.createElement("th");
thArrow.innerHTML="<";
thArrow.setAttribute("class","btnArrow backArrow");
tr.appendChild(thArrow);
tr.appendChild(tht2);
thArrow=document.createElement("th");
thArrow.innerHTML=">";
thArrow.setAttribute("class","btnArrow nextArrow");
tr.appendChild(thArrow);
table2.appendChild(tr);

tr = document.createElement("tr");
for(var i=0;i<7;i++){
	th = document.createElement("th");
	th.innerHTML=dias[i];
	tr.appendChild(th);
}
table2.appendChild(tr);

table.appendChild(tr);
//calendarioMostrar2.appendChild(table2);
		//console.log(fecha.getFullYear()+'-'+(fecha.getMonth()+1)+'-1');
		//console.log(fecha);
		//console.log(dateTemp);
		//console.log(dateTemp.getDay());
var num=1;
for(var i = 0; i<6;i++){
	tr = document.createElement("tr");
	for(var j=1;j<8;j++){
		td = document.createElement("td");
		if((((j<dateTemp.getDay()) || (dateTemp.getDay()==0 && j!=7)) && i==0)){
			//console.log(1);
			td.setAttribute("class","otroMes");
		}
		else if(num>diasDelMes){
			//console.log(2);
			td.setAttribute("class","otroMes");
		}
		else{
			td.innerHTML=num++;
			if(num>fecha.getDate()){
				td.setAttribute("class","mesActual disponible");
			}
			else{
				td.setAttribute("class","mesActual");
			}
		}
		tr.appendChild(td);
	}
	table.appendChild(tr);
	calendarioMostrar.appendChild(table);
}
//mesActualNum=document.querySelectorAll(".mesActual");
var mesActualDisponible=$(".disponible");
//console.log(mesActualDisponible);
var newday;
for(var i=0;i<mesActualDisponible.length;i++){
	//console.log(mesActualNum[i].innerHTML+" ");
	mesActualDisponible[i].addEventListener('click',function(){
		if(this.innerHTML<10){
			this.innerHTML="0"+this.innerHTML;
		}
		newday=new Date(fecha.getFullYear()+'-'+(fecha.getMonth()+1)+'-'+this.innerHTML);
		//console.log(this.innerHTML);
		//console.log(this.parentElement.innerHTML);
		document.querySelector(".e-num-day").innerHTML=this.innerHTML;
		document.querySelector(".e-mes").innerHTML=meses[newday.getMonth()];
		document.querySelector(".e-anio").innerHTML=newday.getYear()%100;
		//console.log(newday.getFullYear()%100);
		console.log(newday);
		console.log(fecha)
		document.querySelector(".e-day").innerHTML=diasCompleto[newday.getDay()];
		//console.log(newday.getDay());
		$(".calendarioMostrar").addClass('none');
		if(newday.getDate()<31){
			nextDateNew();
		}
	});
}
//////////////////////////////////////////////////////////
tr = document.createElement("tr");
for(var i=0;i<7;i++){
	th = document.createElement("th");
	th.innerHTML=dias[i];
	tr.appendChild(th);
}
table2.appendChild(tr);
var num2=1;
console.log(calendarioMostrar2);
for(var i = 0; i<6;i++){
	tr = document.createElement("tr");
	for(var j=1;j<8;j++){
		td = document.createElement("td");
		if((((j<dateTemp2.getDay()) || (dateTemp2.getDay()==0 && j!=7)) && i==0)){
			//console.log(1);
			td.setAttribute("class","otroMes");
		}
		else if(num2>diasDelMes2){
			//console.log(2);
			td.setAttribute("class","otroMes");
		}
		else{
			td.innerHTML=num2++;
			if(num2>fecha.getDate()+1){
				td.setAttribute("class","mesActual disponible2");
			}
			else{
				td.setAttribute("class","mesActual");
			}
		}
		tr.appendChild(td);
	}
	table2.appendChild(tr);
	calendarioMostrar2.appendChild(table2);
}


////////////////////////////////////////////////////////
function nextDateNew(){
	$('.s-num-day').text(newday.getDate()+1);
	$('.s-mes').text(meses[newday.getMonth()]);
	if(newday.getDay()>5){
		$('.s-day').text(diasCompleto[0]);
	}
	else{
		$('.s-day').text(diasCompleto[newday.getDay()+1]);
	}
}
function nextDate(){
	$('.s-num-day').text(fecha.getDate()+1);
	$('.s-mes').text(meses[fecha.getMonth()]);
	if(fecha.getDay()>5){
		$('.s-day').text(diasCompleto[0]);
	}
	else{
		$('.s-day').text(diasCompleto[fecha.getDay()+1]);
	}
}
/////////////////////////////////////////////////////////////////////////
/*$(".backArrow").click(function(){
	console.log("d");
	fecha2=new Date(fecha.getFullYear()+'-'+(fecha.getMonth()+1)+'-1');
	document.querySelector('.nuevoTitulo').innerHTML=meses[fecha2.getMonth()]+" "+fecha2.getFullYear();
	nuevaFecha();
});*/
//console.log(nextArrowNum);
$('.nextArrow').click(function(){
	fecha2=new Date(fecha.getFullYear()+'-'+(fecha.getMonth()+2)+'-1');
	document.querySelector('.nuevoTitulo').innerHTML=meses[fecha2.getMonth()]+" "+fecha2.getFullYear();
	nuevaFecha();
	mesSiguiente();
});
var num3=1
function nuevaFecha(){
	calendarioMostrar2.removeChild(table2);
	//calendarioMostrar2.innerHTML="";
	table2.innerHTML="";
	calendarioMostrar2=document.querySelector(".calendarioMostrar2");
	diasDelMes2=new Date(fecha2.getFullYear(),fecha2.getMonth()+1,0).getDate();
	dateTemp2=new Date(fecha2.getFullYear()+'-'+(fecha2.getMonth()+1)+'-1');
	tr = document.createElement("tr");
	thArrow=document.createElement("th");
	thArrow.innerHTML="<";
	thArrow.setAttribute("class","btnArrow backArrow");
	tr.appendChild(thArrow);
	tr.appendChild(tht2);
	thArrow=document.createElement("th");
	thArrow.innerHTML=">";
	thArrow.setAttribute("class","btnArrow nextArrow");
	tr.appendChild(thArrow);
	table2.appendChild(tr);
	tr = document.createElement("tr");
	for(var i=0;i<7;i++){
		th = document.createElement("th");
		th.innerHTML=dias[i];
		tr.appendChild(th);
	}
	table2.appendChild(tr);

	for(var i = 0; i<6;i++){
	tr = document.createElement("tr");
	for(var j=1;j<8;j++){
		td = document.createElement("td");
		if((((j<dateTemp2.getDay()) || (dateTemp2.getDay()==0 && j!=7)) && i==0)){
			//console.log(1);
			td.setAttribute("class","otroMes");
		}
		else if(num3>diasDelMes2){
			//console.log(2);
			td.setAttribute("class","otroMes");
		}
		else{
			td.innerHTML=num3++;
			//console.log(fecha2.getDate());
			if(num3>fecha2.getDate()){
				td.setAttribute("class","mesActual disponible3");
			}
			else{
				td.setAttribute("class","mesActual");
			}
		}
		tr.appendChild(td);
	}
	table2.appendChild(tr);
	}
	calendarioMostrar2.appendChild(table2);
	console.log(calendarioMostrar2);
}

///////////////////////////////////////////////////

var mesActualDisponible2=document.querySelectorAll(".disponible2");
//console.log(mesActualDisponible2);
var newday2;
for(var i=0;i<mesActualDisponible2.length;i++){
	//console.log(mesActualNum[i].innerHTML+" ");
	//console.log(mesActualDisponible2[i]);
	mesActualDisponible2[i].addEventListener('click',function(){
		if(this.innerHTML<10){
			this.innerHTML="0"+this.innerHTML;
		}
		newday2=new Date(fecha2.getFullYear()+'-'+(fecha2.getMonth()+1)+'-'+this.innerHTML);
		//console.log(this.innerHTML);
		//console.log(this.parentElement.innerHTML);
		document.querySelector(".s-num-day").innerHTML=this.innerHTML;
		document.querySelector(".s-mes").innerHTML=meses[newday2.getMonth()];
		document.querySelector(".s-anio").innerHTML=newday2.getYear()%100;
		//console.log(newday.getFullYear()%100);
		console.log(newday2);
		console.log(fecha2)
		document.querySelector(".s-day").innerHTML=diasCompleto[newday2.getDay()];
		console.log(newday2.getDay()+" --");
		$(".calendarioMostrar2").addClass('none');
		console.log(newday2.getDate()+" "+fecha.getDate());
		if(newday2.getDate()>fecha.getDate()){
			nextDateNew2();
		}
	});
}
function nextDateNew2(){
	//$('.s-num-day').text(newday2.getDate());
	$('.s-mes').text(meses[newday2.getMonth()]);
	console.log(newday2.getDay());
	if(newday2.getDay()>6){
		$('.s-day').text(diasCompleto[0]);
	}
	else{
		$('.s-day').text(diasCompleto[newday2.getDay()]);
	}
}
////////////////////////////////////////////////

var newday3;
function mesSiguiente(){
var mesActualDisponible3=document.querySelectorAll(".disponible3");
//console.log(mesActualDisponible2);
for(var i=0;i<mesActualDisponible3.length;i++){
	//console.log(mesActualNum[i].innerHTML+" ");
	//console.log(mesActualDisponible2[i]);
	mesActualDisponible3[i].addEventListener('click',function(){
		if(this.innerHTML<10){
			this.innerHTML="0"+this.innerHTML;
		}
		newday3=new Date(fecha2.getFullYear()+'-'+(fecha2.getMonth()+1)+'-'+this.innerHTML);
		//console.log(this.innerHTML);
		//console.log(this.parentElement.innerHTML);
		document.querySelector(".s-num-day").innerHTML=this.innerHTML;
		document.querySelector(".s-mes").innerHTML=meses[newday3.getMonth()];
		document.querySelector(".s-anio").innerHTML=newday3.getYear()%100;
		//console.log(newday.getFullYear()%100);
		console.log(newday3);
		console.log(fecha2)
		document.querySelector(".e-day").innerHTML=diasCompleto[newday3.getDay()];
		//console.log(newday.getDay());
		$(".calendarioMostrar2").addClass('none');
		console.log(newday3.getDate()+" "+fecha.getDate());
		nextDateNew3();
	});
}
}
function nextDateNew3(){
	//$('.s-num-day').text(newday3.getDate());
	//$('.s-mes').text(meses[newday3.getMonth()]);
	if(newday3.getDay()>6){
		$('.s-day').text(diasCompleto[0]);
	}
	else{
		$('.s-day').text(diasCompleto[newday3.getDay()]);
	}
	console.log(newday3.getDay());
}