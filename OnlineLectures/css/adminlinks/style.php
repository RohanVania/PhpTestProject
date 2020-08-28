<style type="text/css">

html{
	scroll-behavior: smooth; 
}








*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Muli', sans-serif;
	font-size: 18px;
}

.nav_style{
	background-color: #cdb99c!important;
}

.nav_style a{
	color: white!important; 
}

.right_side{
	font-size: 3rem;
}

.left_side img{
		animation: SizeChange 5s linear infinite;
}

@keyframes SizeChange
{
	0%{transform: scale(.75);}
	20%{transform: scale(1);}
	40%{transform: scale(.75);}
	60%{transform: scale(1);}
	80%{transform: scale(.75);}
	100%{transform: scale(.75);}
}

.img_rotate img{
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
	0% { transform: rotate(0); }
	100%{transform: rotate(360deg);}
	
}

/*********** Updates ***************/
.corona_updates {
	margin: 0 0 30px 0;

}

.corona_updates h3{
	 color: #ff7875;

}

.corona_updates h1{
	font-size: 2rem;
	text-align: center;
}

/*     About section         */

.sub_section{
	background-color: #fbfafd;
}

/*????///////// Footer //////////////////*/


.footer_style {
	background-color: #a29bfe !important; 
}

.footer_style p{
	margin-bottom: : 0!important;
}




/*?/////////////.top scroll ////////////////*/
#myBtn {
	display: none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline:none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
}

#myBtn:hover {


	background: #606060;

}



</style>