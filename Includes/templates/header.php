<!DOCTYPE html>
<html lang="en">
	
	<!-- HEAD -->

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
		<meta name="author" content="Swati Kannaujiya">
		<title>family restaurant</title>

		<!-- EXTERNAL CSS LINKS -->

		<link rel="stylesheet" type="text/css" href="Design/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="Design/fonts/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="Design/css/main.css">
		<link rel="stylesheet" type="text/css" href="Design/css/responsive.css">

		<!-- GOOGLE FONTS -->

		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">

	</head>
	<style>
@import url(https://fonts.googleapis.com/css?family=Muli);
* {
  margin: 0;
  padding: 0; 
  font-family: Muli;
  color: #777777;
    -moz-box-sizing:border-box;
    -webkit-box-sizing:border-box;
    box-sizing:border-box;
}
ul {
  list-style: none;
  position: relative;
}
li {
  display: block;
  clear: both;
  margin: 20px 0;
  position: relative;
}
:not(.valid) .feedback:after {
  content: '\263a';
  color: #E6E6E6;
  font-size: 36px;
  display: block;  
  margin: auto;
  width: 86px;
  position: absolute;
  top: 20%;
  left: 100%;
}
.error ~ .feedback:after {
  content: '\2639';
  color: red;
}
.valid ~ .feedback:after,
:valid .feedback:after {
  content: '\263b';
  color: green;
}
li:hover label, li:focus label {
  color: #333333;
}
form {
  width: 90%;
  max-width: 540px;
  margin: 2rem auto;
}
fieldset {
  border: 2px #888888 solid;
  border-radius: 12px;
  position: relative;
  width: 100%;
  padding: 20px 120px 40px;
}
legend {
  display: block;
  width: 100px;
  text-align: center;
  position: absolute;
  top: -15px;
  left: 0; 
  right: 0;
  margin: auto;
  background: white;
  font-size: 22px;
}
label, input {
  display: block;
  margin: 0 auto;
  width: 100%;
}
label {
  text-align: center;
}
input {
  line-height: 2;
  padding: 2px 4px;
  font-size: 14px;
}
input[type=submit] {
  text-align: center;
  display: block;
  color: white;
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#fcedf2+0,f9a7c1+50,fc8aae+51,ff7ca6+100 */
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#d15580+0,b72a59+50,a80038+51,c92e62+100 */
background: #d15580; /* Old browsers */
background: -moz-linear-gradient(top,  #d15580 0%, #b72a59 50%, #a80038 51%, #c92e62 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d15580), color-stop(50%,#b72a59), color-stop(51%,#a80038), color-stop(100%,#c92e62)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #d15580 0%,#b72a59 50%,#a80038 51%,#c92e62 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #d15580 0%,#b72a59 50%,#a80038 51%,#c92e62 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #d15580 0%,#b72a59 50%,#a80038 51%,#c92e62 100%); /* IE10+ */
background: linear-gradient(to bottom,  #d15580 0%,#b72a59 50%,#a80038 51%,#c92e62 100%); /* W3C */
}
:valid input[type=submit] {
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#bfd255+0,8eb92a+50,72aa00+51,9ecb2d+100;Green+Gloss */
background: #bfd255; /* Old browsers */
background: -moz-linear-gradient(top,  #bfd255 0%, #8eb92a 50%, #72aa00 51%, #9ecb2d 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#bfd255), color-stop(50%,#8eb92a), color-stop(51%,#72aa00), color-stop(100%,#9ecb2d)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #bfd255 0%,#8eb92a 50%,#72aa00 51%,#9ecb2d 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #bfd255 0%,#8eb92a 50%,#72aa00 51%,#9ecb2d 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #bfd255 0%,#8eb92a 50%,#72aa00 51%,#9ecb2d 100%); /* IE10+ */
background: linear-gradient(to bottom,  #bfd255 0%,#8eb92a 50%,#72aa00 51%,#9ecb2d 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bfd255', endColorstr='#9ecb2d',GradientType=0 ); /* IE6-9 */
}
#hint {
  display: none;
  color: red;
  font-size: 12px;
  position: absolute;
  top: 0;
  left: 110%;
  width: 200px;
  border-radius: 8px;
  background: lightblue;
  padding: 10px;
  box-shadow: 1px 0 2px #777;
}
#hint:before {
  content: "";
  position: absolute;
  top: 20px;
  left: -26px; 
  border-top: 12px solid transparent; 
  border-right: 26px solid lightblue; 
  border-bottom: 12px solid transparent;
}
#hint li {
  margin: 0;
  padding: 0;
  line-height: 1;
}
#password:focus ~ #hint {
  display: block;
}

p,a,h1,h2,h3,h4 {
	margin: 0;
	padding: 0;
}

.section-team {
	font-family: "Poppins", sans-serif;
	padding: 80px 0;
}

.section-team .header-section {
	margin-bottom: 50px;
}

.section-team .header-section .small-title {
    margin-bottom: 25px;
	font-size: 16px;
    font-weight: 500;
    color: #3e64ff;
}

.section-team .header-section .title {
    font-weight: 700;
    font-size: 45px;
}

.section-team .single-person {
	margin-top: 30px;
	padding: 30px;
	background-color: #f6f9ff;
	border-radius: 5px;
}

.section-team .single-person:hover {
	background: linear-gradient(to right, #016cec, #00b5f7);
}

.section-team .single-person .person-image {
    position: relative;
    margin-bottom: 50px;
    border-radius: 50%;
    border: 4px dashed transparent;
    transition: padding .3s;
}

.section-team .single-person:hover .person-image {
	padding: 12px;
    border: 4px dashed #fff;
}

.section-team .single-person .person-image img {
	width: 100%;
    border-radius: 50%;
}

.section-team .single-person .person-image .icon {
	position: absolute;
    bottom: 0;
    left: 50%;
    transform: translate(-50%,50%);
    display: inline-block;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    background: linear-gradient(to right, #016cec, #00b5f7);
    color: #fff;
    border-radius: 50%;
    font-size: 24px;
}

.section-team .single-person:hover .person-image .icon {
	background: none;
	background-color: #fff;
	color: #016cec;
}

.section-team .single-person .person-info .full-name {
	margin-bottom: 10px;
	font-size: 28px;
    font-weight: 700;
}

.section-team .single-person .person-info .speciality {
    text-transform: uppercase;
    font-size: 14px;
    color: #016cec;
}

.section-team .single-person:hover .full-name,
.section-team .single-person:hover .speciality {
	color: #fff;
}
.section-team .header-section {
    margin-bottom: 50px;
    display: none;
}
</style>
	<!-- BODY -->


	<body>
	