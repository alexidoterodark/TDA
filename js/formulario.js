var destinosOp=document.querySelectorAll(".destinosOp");
console.log(destinosOp);
var hotelesOp=document.querySelectorAll(".hotelesOp");
console.log(hotelesOp);
console.log(destinosOp.length);
document.querySelector(".buscar").addEventListener('click',function(e){
	var cont=0,cont2=0;
	document.querySelector(".eNumDay").value=document.querySelector(".e-num-day").innerHTML;
	document.querySelector(".eMes").value=document.querySelector(".e-mes").innerHTML;
	document.querySelector(".eAnio").value=document.querySelector(".e-anio").innerHTML;
	document.querySelector(".eDay").value=document.querySelector(".e-day").innerHTML;

	document.querySelector(".sNumDay").value=document.querySelector(".s-num-day").innerHTML;
	document.querySelector(".sMes").value=document.querySelector(".s-mes").innerHTML;
	document.querySelector(".sAnio").value=document.querySelector(".s-anio").innerHTML;
	document.querySelector(".sDay").value=document.querySelector(".s-day").innerHTML;

	console.log(document.querySelector(".eNumDay").value);
	console.log(document.querySelector(".eMes").value);
	console.log(document.querySelector(".eAnio").value);
	console.log(document.querySelector(".eDay").value);

	console.log(document.querySelector(".sNumDay").value);
	console.log(document.querySelector(".sMes").value);
	console.log(document.querySelector(".sAnio").value);
	console.log(document.querySelector(".sDay").value);
	for(var i=0;i<destinosOp.length;i++){
		if(form.destinos.value!=destinosOp[i].value){
			console.log("error en datos");
			cont++;
		}
		else{
			console.log(form.destinos.value);
		}
		if(cont==destinosOp.length){
			console.log("error");
			e.preventDefault();
		}
		else{
			console.log("listo para enviar");
		}
	}
	for(var i=0;i<hotelesOp.length;i++){
		if(form.hoteles.value!=hotelesOp[i].value){
			console.log("error en datos2");
			cont2++;
		}
		else{
			console.log(form.hoteles.value);
		}
		if(cont2==hotelesOp.length){
			console.log("error2");
			e.preventDefault();
		}
		else{
			console.log("listo para enviar2");
		}
	}
	/*var eNumDayF=document.querySelector(".eNumDay").value;
	console.log(eNumDayF);*/
	/*eNumDayF.value=document.querySelector(".e-num-day").innerHTML;
	alert(eNumDayF);*/
});