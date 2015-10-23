* {
	transition: all .5s;
	box-sizing: border-box;
}
body{
	font: 1em 'PT Sans',Arial,Helvetica,sans-serif;
	background: url(http://subtlepatterns.com/patterns/grid.png);
	color: #333;
}
.container{
	width: 940px;
	margin: 0 auto;
}

/*  CSS GRID
========================*/
.row {
	margin-bottom: 20px;
}

.row:after{
	display: block;
	content: '.';
	height: 0;
	visibility: hidden;
	clear:both; /*отменяет float в span */
}


[class*="span"]{
	float: left;
	display:inline;
	margin-right: 20px;
}

[class*="span"]:last-child{
	margin-right: 0;
	float: right;
}
/* Ширина ячеек сетки */
.span1{width: 60px}
.span2{width: 140px}
.span3{width: 220px}
.span4{width: 300px}
.span5{width: 380px}
.span6{width: 460px}
.span7{width: 540px}
.span8{width: 620px}
.span9{width: 700px}
.span10{width: 780px}
.span11{width: 860px}
.span12{width: 940px}
/* Отступы слева ячеек сетки */
.offset1{margin-left: 60px}
.offset2{margin-left: 140px}
.offset3{margin-left: 220px}
.offset4{margin-left: 300px}
.offset5{margin-left: 380px}
.offset6{margin-left: 450px}
.offset7{margin-left: 540px}
.offset8{margin-left: 620px}
.offset9{margin-left: 700px}
.offset10{margin-left: 780px}
.offset11{margin-left: 860px}
.offset12{margin-left: 940px}

/*  MAIN
=========================*/

.header{
	margin-top: 20px;
}
.header h1{
	font-weight: bold;
	text-shadow: 0 1px rgba(255,255,255,.8);
}
.search{
	margin-top: 40px;
}
.search input{
	width:100%;
	height: 30px;
}
.slider{
	height: 250px;
	background: url(http://img3.goodfon.su/wallpaper/big/2/16/norvegiya-nebo-oblaka-gory.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	box-shadow: 0 5px 5px rgba(0,0,0,.2);
}
.thumb img{
	box-shadow: 0 5px 5px rgba(0,0,0,.2);
}
.sidebar {
	padding: 0;
	margin: 0;
	box-shadow: 0 5px 5px rgba(0,0,0,.2);
}
.sidebar nav ul{
	padding: 0;
	margin: 0;
	box-shadow: 0 5px 5px rgba(0,0,0,.2); 
	list-style: none;
}
.sidebar nav ul li a{
	text-decoration: none;
	color:#eee;
	background: #bbb;
	display: block;
	width: 140px;
	height: 40px;
	text-align: center;
	line-height: 40px;
	margin-bottom: 1px;
}
.sidebar nav ul li a:hover{
	background: #aaa;
}
.content{
	padding: 0 20px;
	margin-bottom: 80px;
}
.footer{
	color: #444;
	text-align: center;
	border-top:1px dashed #888;
	padding: 40px 0;
}
