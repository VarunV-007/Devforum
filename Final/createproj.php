<?php
session_start();
//if (session_status() == PHP_SESSION_NONE) {session_start();echo('adfds');}
if($_SESSION['loggedin']!=true) { header('Location:signin.html');}
$user=$_SESSION['user'];
//echo($user);

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
		
		
		
		
		
		
		
		
		<style>
		#file_list{
			visibility:hidden;
			width:400px;
			height:400px;
			position:absolute;
			top:250px;
			left:1300px;
			background-color:#e8ecd5;
			padding:10px;
font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
font-size:20px;
		}
		#file_wrap{
			position:relative;
			top:200px;
			left:300px;
			width:900px;
			height:500px;
			background-color:#e8ecd5;
			border:1px solid #ddd;
			
			
		}
		
		#link{
			text-decoration:none;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
font-size:30px;
position:absolute;
top:270px;
left:300px;
			
		}
#sub{
position:relative;
top:10px;
left:320px;
width:80px;
height:35px;
border:1px solid #ddd;
border-radius:1px;
font-size:18px;
padding: 1px 1px 1px 1px;
letter-spacing:0.5px;

}
#tit{
font-size:14px;	
padding-left:15px;
letter-spacing:.4px;
width:500px;
height:25px;
position:relative;
top:-80px;

}
#title input{
margin-left:8px;
width:
}
#instructions{
position:relative;
left:62%;
top:300px;
height:300px;
width:360px;
border:1.5px solid #d6d0d0;
border-radius:3px;
background-color:#cac7d0;
font-family: "Segoe UI",Arial,sans-serif;
font-size:18px;
padding:10px 10px 10px 10px;
animation:fade-in 2s;

}
#format{
position:relative;
left:65%;
top:130px;
opacity
height:400px;
width:360px;
border:1.5px solid #d6d0d0;
border-radius:3px;
background-color:#cac7d0;
font-family: "Segoe UI",Arial,sans-serif;
font-size:18px;
padding:0px 10px 10px 10px;
overflow:none;
transition:visibility 2s;

}
@keyframes fade-in{
from{opacity:0;}
to{opacity:1}
}
#instructions ul{
list-style-type:circle;
}
#format ul {
list-style-type:circle;
}
#inn li {
padding:7px 7px 7px 7px; 

}
#tagsContainer{
    border: 1px solid black;
    width: 400px;
    height: 28px;
    overflow-x: scroll;
}
#tagsBox{
    float: left;
}
#tagsTxtBox{
    float: right;
}
#nav{
height:600px;
position:relative;
top:100px;
background-size:cover;
}
#nav_wrapper{

z-index:10;
position:fixed;
height:120px;
top:0px;
width:100%; 	;
background:#053456;
pading:10px;
margin-left:auto;
margin-right:auto;
margin-top:10px;
opacity:0.7;
}
#nav_wrapper ul{
margin-top:30px;
}



#nav_wrapper ul li{
list-style-type:none;
display:inline;
font-wight:bold;
padding:20px 10px 20px 10px;
}


#nav_wrapper a{
font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";

font-size:25px;
font-weight:light;
text-align:center;
color:white;
margin-top:10px;
text-decoration:none;
padding:100px;
}
 
#nav_wrapper ul li:hover{
background:red;

transition:all 0.7s;
opacity:0.5;
}


.active{
background:#000013;
}

#na{
position:relative;
font-size:26px;
top:-49px;
left:-90px;
}
#readme{
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";

	position:relative;
	border:1px solid #ddd;
	top:500px;
	width:600px;
	left:90px;
	height:100px;
	background-color:#ddd;
	font-size:20px;
	padding-left:10px;
	padding-top:10px;
	}
#submit{
	position:relative;
	top:400px;
	right:-800px;
	width:90px;
	height:35px;
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
font-size:15px;
	border:0.5px solid #222;
	border-radius:2px;
	background-color:#ccc;
	
}
	</style>

		
		
		
		
		
		
		
    </head>
    <body>
	
	
	<div id="nav_wrapper" > <br>
<ul>
<li ><a href="Homepage.html" >Home</a></li>
<li  ><a href="#">Topics</a></a></li>
<li class="active" ><a href="#">Projects</a></li>
<li ><a href="#">Downloads</a></li>
<li ><a href="#">Example</a></li>
<li ><a href="#">About</a></li>


</ul> </div>
	<div id="file_wrap" >
<img alt="Feature image" style="position:relative;top:200px;left:350px;"draggable="false" height="52" src="img/files-lg.svg" width="204">
<div id="file">
        <form enctype="multipart/form-data" action="php/projects.php" method="POST">
		<textarea id="readme" name="dscription" placeholder="Describe Your Project"></textarea>
		<input style="visibility:hidden;"  id="haha" multiple="multiple" name="file" type="file"/>
		<input id="submit" type="submit"/>
	</form>	 
</div>
<a href=""  id="link">Click here to upload files</a>

</div>
<div id="file_list"></div>

    </body>
<script>
function ii(){
document.getElementById('format').style.visibility='visible';

document.getElementById('instructions').style.visibility='hidden';
}

var x=document.getElementById('link');
x.addEventListener('click',function(e){
	e.preventDefault();
	haha.click();
});
var r=document.getElementById('haha');

var list="";
var i=0;
var e=setInterval(function(){

	var k=r.files.length;
if(r.files[0]==null) console.log(0);
else if(i<k){
	document.getElementById('file_list').style.visibility="visible";
	console.log(k); files=r.files;for(i;i <k;i++){
	
	var size=files[i].size;
	var b='';
	if(size/(1024)>1  && size/(1024*1024) <1 ) {size=size/(1024);b='kb';size=size.toFixed(2);}
	else if(size/(1024*1024) >1 && size/(1024*1024*1024) <1) {size=size/(1024*1024);b='mb';size=size.toFixed(2);}
else {size=size/(1024*1024*1024) ;b='gb';size=size.toFixed(2);}
list+='<br>'+(i+1)+' . '+files[i].name+'    size:'+size+' '+b+'<br>';
			
}
document.getElementById('file_list').innerHTML=list;
}
},1000);

</script>
		
</html>
