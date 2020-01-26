//jvs pour chapitre categorie de la cim10
$(document).ready(function()
{
		$(".CHAPITRE").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",                        // Le type de ma requete
				url: "./1PAT/AJAX.PHP",                // L'url vers laquelle la requete sera envoyee
				data: dataString,                    // Les donnees que l'on souhaite envoyer au serveur au format varaible ,JSON
				cache: false,
				success: function(html)              // La reponse du serveur est contenu dans data  text xml json JSON (JavaScript Object Notation) 
						{
						$(".CATEGORIECIM").html(html);   // On peut faire ce qu'on veut avec ici
						} 
					
			});

		});
});
//jvs pour chapitre ACTE MEDICALE
$(document).ready(function()
{
		$(".CHAP").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",                        // Le type de ma requete
				url: "./1PAT/ACTEAJAX.PHP",                // L'url vers laquelle la requete sera envoyee
				data: dataString,                    // Les donnees que l'on souhaite envoyer au serveur au format varaible ,JSON
				cache: false,
				success: function(html)              // La reponse du serveur est contenu dans data  text xml json JSON (JavaScript Object Notation) 
						{
						$(".ACTE").html(html);   // On peut faire ce qu'on veut avec ici
						} 
					
			});

		});
});
//SYSTEME ARABE
$(document).ready(function()
{
		$(".WILAYAN").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",                        // Le type de ma requete
				url: "./GRH/AJAX.PHP",                // L'url vers laquelle la requete sera envoyee
				data: dataString,                    // Les donnees que l'on souhaite envoyer au serveur au format varaible ,JSON
				cache: false,
				success: function(html)              // La reponse du serveur est contenu dans data  text xml json JSON (JavaScript Object Notation) 
						{
						$(".COMMUNEN").html(html);   // On peut faire ce qu'on veut avec ici
						} 
					
			});

		});
});
$(document).ready(function()
{
		$(".WILAYAR").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",
				url: "./GRH/AJAX.PHP",
				data: dataString,
				cache: false,
				success: function(html)
						{
						$(".COMMUNER").html(html);
						} 
			});

		});
});
//SYSTEME FRANCE
$(document).ready(function()
{
		$(".WILAYANFR").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",                        // Le type de ma requete
				url: "./GRH/AJAXFR.PHP",                // L'url vers laquelle la requete sera envoyee
				data: dataString,                    // Les donnees que l'on souhaite envoyer au serveur au format varaible ,JSON
				cache: false,
				success: function(html)              // La reponse du serveur est contenu dans data  text xml json JSON (JavaScript Object Notation) 
						{
						$(".COMMUNENFR").html(html);   // On peut faire ce qu'on veut avec ici
						} 
					
			});

		});
});
$(document).ready(function()
{
		$(".WILAYARFR").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",
				url: "./GRH/AJAXFR.PHP",
				data: dataString,
				cache: false,
				success: function(html)
						{
						$(".COMMUNERFR").html(html);
						} 
			});

		});
});
$(document).ready(function()
{
		$(".SERVICE").change(function()
		{
			var id=$(this).val();
			var dataString = 'id='+ id;

			$.ajax
			({
				type: "POST",                        // Le type de ma requete
				url: "./3SERVICE/AJAX.PHP",                // L'url vers laquelle la requete sera envoyee
				data: dataString,                    // Les donnees que l'on souhaite envoyer au serveur au format varaible ,JSON
				cache: false,
				success: function(html)              // La reponse du serveur est contenu dans data  text xml json JSON (JavaScript Object Notation) 
						{
						$(".NLIT").html(html);   // On peut faire ce qu'on veut avec ici
						} 
					
			});

		});
});
//fonction qui confirme supression 
function ConfirmDeleteMessage(URL)
{
   if (confirm("Confirmez-vous la suppression ?"))
   {
       window.location = URL;
   }
}
//fonction javascripte qui empeche de saisire des caractere interdie
function valid_mail(evt) {
	var keyCode = evt.which ? evt.which : evt.keyCode;
	var interdit = 'àâäãçéèêëìîïòôöõùûüñ &*?!:;,\t#~"^¨%$£?²¤§%*()[]{}<>|\\/`\'-+=';
	if (interdit.indexOf(String.fromCharCode(keyCode)) >= 0) {
		return false;
	}
}

// ==================
//	Activations - Désactivations Masquer=0     Masquer=2  
// ==================
function GereControle(Controleur, Controle, Masquer) {
var objControleur = document.getElementById(Controleur);
var objControle = document.getElementById(Controle);
	if (Masquer=='1')
		objControle.style.visibility=(objControleur.checked==true)?'visible':'hidden';
	else
		objControle.disabled=(objControleur.checked==true)?false:true;
	return true;
}

//******panier *****//
jQuery(function($){
	function _getDir($el,event){
		var w 	= $el.width(),
			h	= $el.height(),
			cx  = $el.offset().left + w/2,
			cy  = $el.offset().top  + h/2,
			x	= (event.pageX - cx) * (w>h?(h/w) : 1),
			y   = -(event.pageY - cy) * (h>w?(w/h) : 1),
			direction = Math.round( ( (Math.atan2(x,y) + Math.PI) / (Math.PI/2)) + 2 ) % 4;
		var directions = {
			0 : {left:0, top:-h},
			1 : {left:w, top:0},
			2 : {left:0, top:h},
			3 : {left:-w,top:0}
		}
		return directions[direction]; 
	}

	$('.thumb').on('mouseenter',function(event){
		$(this).find('.alt').stop().css(_getDir($(this),event)).animate({top:0, left:0}, 300);
	});

	$('.thumb').on('mouseleave',function(event){
		$(this).find('.alt').stop().animate(_getDir($(this),event), 300);
	});
});

//*****SCORE DE glasgow///
num1 = 0 ; 
num2 = 0 ; 
num3 = 0;    
function calcul() 
{ 
chaine = " " ;  
num = num1+num2+num3;  
document.form1.res.value = num ;  
}
//*****SCORE D apgar///
num11 = 0 ; 
num22 = 0 ; 
num33 = 0;
num44 = 0 ; 
num55 = 0;       
function calcull() 
{ 
chaine = " " ;  
num = num11+num22+num33+num44+num55;  
document.form1.res.value = num ;  
}
//*****SCORE D apgar///
num111 = 0 ; 
num222 = 0 ; 
num333 = 0;
num444 = 0 ; 
num555 = 0;       
function calculll() 
{ 
chaine = " " ;  
num = num111+num222+num333+num444+num555;  
document.form1.res.value = num ;  
}
//*****SCORE DE ISS RTS TRISS///
function Comparaison(a,b) 
{
	if ((a)< (b)) return -1;
	else
	if ((b) == (a)) return 0;
	return 1;
	
	}
/* function comparaison was written by:trauma.org http://www.trauma.org/scores/triss.html*/

var isPaediatric=false

function  CalcISS(form){

form.zhead.value = form.head[form.head.selectedIndex].value
form.zface.value = form.face[form.face.selectedIndex].value
form.zchest.value = form.chest[form.chest.selectedIndex].value
form.zabdo.value = form.abdo[form.abdo.selectedIndex].value
form.zextre.value = form.extre[form.extre.selectedIndex].value
form.zexter.value = form.exter[form.exter.selectedIndex].value

organe = new Array(6);
	
	organe[0] = form.zhead.value;
	organe[1] = form.zface.value;
	organe[2] = form.zchest.value;
	organe[3] = form.zabdo.value;
	organe[4] = form.zextre.value;
	organe[5] = form.zexter.value;

	valeur = organe.sort(Comparaison);
	
	organe3 = Math.pow(valeur[3],2);
	organe4 = Math.pow(valeur[4],2);
	organe5 = Math.pow(valeur[5],2);
	
	
	if (organe5 == 36){iss = 75}
		else{iss = organe3 + organe4 + organe5}
			
form.ziss.value= iss
form.ztriss.value = CalcTRISS(form)
form.ztrisss.value = CalcTRISSS(form)
return z
}


function CalcFR(form) {
form.zfr.value = form.fr[form.fr.selectedIndex].value
form.zrts.value = CalcRTS(form)
form.ztriss.value = CalcTRISS(form)
form.ztrisss.value = CalcTRISSS(form)

}

function CalcPAS(form) {
form.zpas.value = form.pas[form.pas.selectedIndex].value
form.zrts.value = CalcRTS(form)
form.ztriss.value = CalcTRISS(form)
form.ztrisss.value = CalcTRISSS(form)

}

function CalcGLASGOW(form) {
form.zglasgow.value = form.glasgow[form.glasgow.selectedIndex].value
form.zrts.value = CalcRTS(form)
form.ztriss.value = CalcTRISS(form)
form.ztrisss.value = CalcTRISSS(form)


}function CalcRTS(form){
z = eval(form.zfr.value)
z = z *0.2908
t=eval(form.zpas.value)
t = t *0.7326
z = z+t
t = eval(form.zglasgow.value)
t = t *0.9368
z = z+t
z = Math.round(1000 * z)/1000
form.zrts.value = z
return z}




function CalcAGE(form) {
isPaediatric=form.age[form.age.selectedIndex].value==-1
form.zage.value=isPaediatric?0:form.age[form.age.selectedIndex].value
form.ztriss.value = CalcTRISS(form)
form.ztrisss.value = CalcTRISSS(form)
}
/* function CalcAGE was written for usby Jean Marc Rosengard  http://www.jmrosengard.com*/

function CalcTRISS(form){

z = -0.4499
t = eval(form.zrts.value)
t = t*0.8085
z = z + t
t = eval(form.ziss.value)
t = -t*0.0835
z = z + t
t = eval(form.zage.value)
t = -t*1.7430
z = z + t
z = 1/(1 + Math.exp(z))
z = Fmt(100 * z)+ " %"
form.ztriss.value = z
return z
}

function  CalcTRISSS(form)  {
if(isPaediatric) return form.ztrisss.value=CalcTRISS(form)

z =-2.5355
t = eval(form.zrts.value)
t = t*0.9934
z = z + t
t = eval(form.ziss.value)
t = -t*0.0651
z = z+ t
t = eval(form.zage.value)
t = -t*1.1360
z = z + t
z =1/(1 + Math.exp(z))
z = Fmt(100 * z)+ " %"
form.ztrisss.value = z
return z
}
/* function Fmt(x )was written by John C. Pezzullo  http://www.pezzullo.net*/


function Fmt(x) {
var v
if(x>=0) { v=''+(x+0.05)}else{ v=''+(x-0.05) }
return v.substring(0,v.indexOf('.')+2)
}















