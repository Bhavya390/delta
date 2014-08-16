<html>
<title>SportsFeed</title>
<head></head>
<style>
	
div.c1
{
	background-color:#666;
	font-family:'league Gothic'; 
	font-size:25px; float:right; 
	position:absolute; 
	width:560px; 
	height:40px;
	vertical-align:bottom; 
	visibility:hidden
}
div.container
{
	
	background:#FFF;
	float:right;
	height:525px;
	width:160px;
	margin-top:+90px;
}
div.cnbtn
{
	width:160px;
	height:40px;
	background-color:#FFF;
	text-align:center;
	font-weight:bold;
	font-family:"sex & Candy";
	font-size:36px;
	color:#999;
	cursor:pointer;
	
}
div.spacer
{
	height:10px;
	width:160px;
	background-color:#FFF;
}
div.transp
{
	height:485px;
	width:1125px;
	background-color:#CCC;
	float:left;
	position:absolute;
	margin-top:-500px;
	margin-left:-1175px;
	padding:10px 10px 10px 10px;
	opacity:0.2;
}
div.datacnt
{
	height:485px;
	width:1125px;
	float:left;
	position:absolute;
	margin-top:-500px;
	margin-left:-1175px;
	padding:10px 10px 10px 10px;

}
div.databx
{
	opacity:0.1;
	font-family:"sex & Candy";
	font-size:14px;
	color:#FFF;
}
</style>
<script>
/*document.addEventListener("mousemove",function(e){
	
    var yvar=e.clientY||e.pageY;
	var xvar=e.clientX||e.pageX;
		
	if(yvar<180 && xvar<500)
	{
		document.getElementById("c1").style.visibility="visible";
	}
	else
	{
		document.getElementById("c1").style.visibility="hidden"	;
	}

});*/
var xvar;
var vyar;
var val;

// RGB to HEX Converter 
function toHex(n) {
 n = parseInt(n,10);
 if (isNaN(n)) return "00";
 n = Math.max(0,Math.min(n,255));
 return "0123456789ABCDEF".charAt((n-n%16)/16)
      + "0123456789ABCDEF".charAt(n%16);
}

function rgbToHex(R,G,B) {return toHex(R)+toHex(G)+toHex(B)}

function anim(x)
{
	/*if(xvar<1200)
	{
		
	}
	if(xvar<1230 && xvar>1200)
	{
		document.getElementById(x).style.backgroundColor="#CCC";
	}
	if(xvar<1260 && xvar>1230)
	{
		document.getElementById(x).style.backgroundColor="#999";
	}
	if(xvar<1290 && xvar>1230)
	{
		document.getElementById(x).style.backgroundColor="#666";
	}
	if(xvar<1310 && xvar>1290)
	{
		document.getElementById(x).style.backgroundColor="#333";
	}
	if(xvar<1340 && xvar>1310)
	{
		document.getElementById(x).style.backgroundColor="#000";
	}*/
	val=(xvar-1182)*1.59375;
	document.getElementById(x).style.backgroundColor=rgbToHex(val,val,val);
	
}

var box;
var boxname;

function bxanim()
{
	var v=xvar-box.left;
	var mu=1/(box.right-box.left);
	document.getElementById(boxname).style.opacity=(v*mu);
}

function fx()
{
	var bx1=document.getElementById("cngbx1").getBoundingClientRect();
	var bx2=document.getElementById("cngbx2").getBoundingClientRect();
	var bx3=document.getElementById("cngbx3").getBoundingClientRect();
	var bx4=document.getElementById("cngbx4").getBoundingClientRect();
	
	if(xvar>bx1.left && xvar<bx1.right && vyar>bx1.top && vyar<bx1.bottom)
	{   
		boxname="cngbx1";
		box=bx1;
		bxanim();
	}
	else
	{ document.getElementById("cngbx1").style.opacity=0.1;
	  if(xvar>bx2.left && xvar<bx2.right && vyar>bx2.top && vyar<bx2.bottom)
	  {
	  	boxname="cngbx2";
		box=bx2;
		bxanim();
      }
	  else
	  { document.getElementById("cngbx2").style.opacity=0.1;
	    if(xvar>bx3.left && xvar<bx3.right && vyar>bx3.top && vyar<bx3.bottom)
	    {
		 boxname="cngbx3";
		 box=bx3;
		 bxanim();
	    }
		else
		{ document.getElementById("cngbx3").style.opacity=0.1;
	      if(xvar>bx4.left && xvar<bx4.right && vyar>bx4.top && vyar<bx4.bottom)
	      {
		   boxname="cngbx4";
		   box=bx4;
		   bxanim();
	      }
		  else
		  {  document.getElementById("cngbx4").style.opacity=0.1;
		  }
		}
	  }
	}

	
	
	
}

document.addEventListener("mousemove",function(e){
	xvar=e.clientX||e.pageX;
	vyar=e.clientY||e.pageY;
	fx();
	if(xvar>1182 && xvar<1342)
	{
		if(vyar>108 && vyar<148)
	    anim(1);
		else
		{ document.getElementById(1).style.backgroundColor="#FFF";
		  if(vyar>159 && vyar<198)
	      anim(2);
		  else
		  { document.getElementById(2).style.backgroundColor="#FFF";
		    if(vyar>208 && vyar<247)
	        anim(3);
			else
			{ document.getElementById(3).style.backgroundColor="#FFF";
		      if(vyar>258 && vyar<297)
	          anim(4);
			  else
			  { document.getElementById(4).style.backgroundColor="#FFF";
		        if(vyar>309 && vyar<347)
	            anim(5);
				else
				{ document.getElementById(5).style.backgroundColor="#FFF";
		          if(vyar>359 && vyar<396)
	              anim(6);
				  else
				  {  document.getElementById(6).style.backgroundColor="#FFF";
		             if(vyar>409 && vyar<450)
	                 anim(7);
					 else
					 {  document.getElementById(7).style.backgroundColor="#FFF";
		                if(vyar>578 && vyar<617)
	                    anim(8);
						else
						{  document.getElementById(8).style.backgroundColor="#FFF";
						}
					 }
				  }
				}
			  }
			}
		  }
		}
	
	}
});

function loginshw()
{
	if(document.getElementById("c1").style.visibility=='hidden')
	{
		document.getElementById("c1").style.visibility='visible';
	}
	else
	{
		document.getElementById("c1").style.visibility='hidden';
	}
}

/*function hoveract()
{
	var id;
	for(var i=1;i<=8;i++)
	{
		if(document.getElementById(i).onmousemove)
		id=i;
		break;
	}
	anim(i);
	
}*/

</script>
<body background="Sports_Feed_Bg3.jpg">

<form id="signin" action="signin.php" method="post">
    <div id="c1" class="c1" >
    <p style="margin-top:0px; margin-left:10px">To access your profile, please sign in</p>
    <p style="margin-top:0px; margin-left:10px">USERNAME : <input type="text" id="uname" style=" border-radius:5px" />PASSWORD : <input type="text" id="pword" style=" border-radius:5px"/></p>
    <input type="submit" value="GO!" id="gbtn" style="width:60px;
	height:30px;
	margin-left:500px;
	background-color:#090;
	color:#FFF;
    margin-top:-55px;
	font-family:Consolas;
	font-size:14px;
	font-weight:bold;"/>
    </div>
</form>


<div id="container" class="container">
<div id="sp1" class="spacer"></div>
<div id="1" class="cnbtn" >Badminton</div>
<div id="sp5" class="spacer"></div>
<div id="2" class="cnbtn" >Basketball</div>
<div id="sp4" class="spacer"></div>
<div id="3" class="cnbtn" >Volleyball</div>
<div id="sp5" class="spacer"></div>
<div id="4" class="cnbtn" >Football</div>
<div id="sp2" class="spacer"></div>
<div id="5" class="cnbtn" >Handball</div>
<div id="sp5" class="spacer"></div>
<div id="6" class="cnbtn" >Cricket</div>
<div id="sp3" class="spacer"></div>
<div id="7" class="cnbtn" >Hockey</div>
<div id="sp5" class="spacer"></div>
<div id="sp5" class="spacer"></div>
<div id="sp5" class="spacer"></div>
<div id="sp5" class="spacer"></div>
<div id="sp5" class="spacer"></div>
<div id="sp5" class="spacer"></div>
<div id="sp5" class="spacer"></div>
<div id="sp5" class="spacer"></div>
<div id="sp5" class="spacer"></div>
<div id="sp5" class="spacer"></div>
<div id="sp5" class="spacer"></div>
<div id="sp5" class="spacer"></div>
<div id="sp5" class="spacer"></div>
<div id="8" class="cnbtn" onClick=loginshw()>Profiles</div>

<div id="datacnt" class="transp" >
</div>

<div id="datacnt_main" class="datacnt" onMouseOver=fx() >
<div id="cngbx1" class="databx" style="height:485px; width:500px; background-color:#000; float:left; background-image:url(bx1n.jpg)"></div>
<div id="cngbx2" class="databx" style="height:200px; width:615px; background-color:#060; float:left; margin-left:10px; background-image:url(bx2.jpg)"></div>
<div id="cngbx3" class="databx" style="height:275px; width:305px; background-color:#00C; float:left; margin-left:10px; margin-top:10px; background-image:url(bx4.jpg)"></div>
<div id="cngbx4" class="databx" style="height:275px; width:300px; background-color:#FF0; float:left; margin-left:10px; margin-top:10px; background-image:url(bx3.jpg)"></div>
</div>

</body>
</html>