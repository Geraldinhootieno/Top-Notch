body
{
	background-image: download1.jpg;
	background-size: cover;
	background-position: center;
	font-family: Sans-serif;
	align-content: center;;
}
.menu-bar
{
	background-color:grey;
	text-align: left;
	display: flex;
	width: 100%;
}
.menu-bar ul
{
	display: inline-flex;
	list-style: none;
	color: white;
	float: right;
}
.menu-bar ul li
{
	width:90px;
	margin: 20px;
	padding:10px;
}
.logo{
  color: white;
  font-size: 33px;
  font-weight: bold;
  line-height: 40px;
  padding-left: 10px;
  padding-top: 15px;

}
.menu-bar ul li a
{
text-decoration:none;
color:white;
}
.active, .menu-bar ul li:hover
{
	background:lightgree;
	border-radius:3px;
}
.sub-menu-1
{
	display: none;
}
.menu-bar ul li:hover .sub-menu-1
{
	display: block;
	position:absolute;
	background:grey;
	margin-top: 15px;
	margin-left:-15px;
}
.menu-bar ul li:hover .sub-menu-1 ul
{
	display:block;
	margin:10px;
}
.menu-bar ul li:hover .sub-menu-1 ul li
{
width: 150px;
padding: 10px;
border-bottom: 1px dotted white;
background: transparent;
border-radius: 0;
text-align: left;
}
.menu-bar ul li:hover .sub-menu-1 ul li:last-child
{
	border-bottom: none;
}
.container{
	width: 30%;
	height: 4%;
	display: flex;
	align-items: center;
	justify-content: center;
}
.swiper{
	width: 100%;
	height: fit-content;
}
.swiper-slide img{
	width: 100%;
	height: 1%;
}
.column {
  float: left;
  width: 50%;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
.footer{
	background-color: black;
  padding: 70px 0;
}
.container1{
	max-width: 1170px;
	margin: auto;
}
.row1{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer-col{
	width: 25%;
	padding: 0 15px;
	padding: 0;
	margin: 0; 
	box-sizing: border-box;
	text-decoration-color: white;

}
.footer-col h4{
	font-size: 18px;
	color: white;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: red;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: white;
	text-decoration: none;
	font-weight: 300;
	display: block;
	transition: all 03s ease;
}
.footer-col ul li a:hover{
	color: white;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	margin: 0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: white;
	transition: all 01s ease;
}
.footer-col .social-links a:hover{

}
.button {
  background-color: Green;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 5%;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
div.container2 {
  text-align: center;
}

ul.myUL {
  display: inline-block;
  text-align: left;
}













