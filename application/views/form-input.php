<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Student Center</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	.body {
		background-image: url("winter.jpg");
		background-size: cover;
	}

	a {
		color: white;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: white;
		background-color: black;
		font-size: 45px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
		font-family: sans-serif;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	table{
		margin: 5px;
		border-collapse: collapse;
		font-family: verdana;
		font-size: 20px;
		background-color: white;
		color: black;
		text-align: justify;
		width: 100%;
	}

	th{
		background-color: #8eb7f9;
		height: 50%;
		text-align: left;
	}

	th, td{
		padding: 15px;
		border-bottom: 1px solid #ddd;
	}

	tr:nth-child(even) {
		background-color: #f5f5f5;
	}

	tr:hover {
		background-color: #e2e2e2;
	}

	h2{
		text-align: center;
		color: white;
		padding: 14px 10px 10px 10px;
		right: 3px;
		background-color: rgba(34, 75, 142, 0.5);
		margin: 0 0 1px 0;
		padding: 14px 15px 10px 15px;
	}

	button {
	    background-color: #4277ce;
	    border: none;
	    color: white;
	    padding: 15px 32px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;
	}
	button:hover {
		background-color: #11153a;
	}

	.buttona {
			background-color: #30bc1a;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
	}
	.buttona:hover {
		background-color: #259913;
	}

	.buttonb {
			background-color: #ce1a1a;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
	}
	.bittonb:hover {
		background-color: #a01010;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	footer {
		background-color: black;
		color: white;
		text-align: right;
		font-size: 11px;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
		position: fixed;
	 	bottom: 0;
	 	right: 0;
	}

	#container {
		margin: 10px;
		font-family: verdana;

	}
	#headers{
		font-size: 3vw;
		margin: 0px;
	}

	.add {
		position: absolute;
		right:27px;
	}

	</style>
</head>
<body class="body body">

<div id="headers">
	<h1>Add Data</h1>
</div>
	<div id="container">
	<div id="body">
		<a href="<?php echo site_url('welcome/index') ?>"><button type="button">Back</button></a>
		<form action="<?php echo site_url('welcome/insert') ?>" method="post">
      NIM <br>
      <input type="text" name="nim" /> <br>
      Nama Mahasiswa <br>
      <input type="text" name="nama" /><br>
      Semester <br>
      <input type="text" name="semester" /></br>
      IPK <br>
      <input type="text" name="ipk" /></br>
      <button class="buttona" type="submit" name="save" value="save" />Simpan</button>
    </form>
	</div>
</body>
</html>
