<html>
<head>
<title>Kalkulator Sederhana</title>
<style>



body{
color:#000;
background-image:url(background.jpg);
background-size:full;
background-color:#fff;
font-family:Tahoma, sans-serif;
font-size:18px;
margin:0;
padding:0;
}

input{
font-size:24px;
padding:6px;
border: 1px solid #000;
}

.panel{
background-color:skyblue;
box-shadow:0 2px 5px #000;
padding:18px;
line-height:28px;
margin:150px auto 2px;
max-width:380px;
}

.tombol{
color:#fff;
font-size:14px;
background-color:#212121;
boder-bottom:2px solid #000;
padding:8px;
margin:2px;
}

.tombol:hover{
background-color:orange;
}

a{
	text-decoration:none;
	color: #F57C00;
}
/*=================================
  ||        Bagian Footer        ||
  =================================*/

.footer{
	max-width: 100%;
	padding: 10px;
	color: lime;
	/*background: #80DEEA;*/
	
}
</style>
</head>
<body>
<?php
$bil1 = isset($_POST['bil1']) ? $_POST['bil1'] : NULL;
$bil2 = isset($_POST['bil2']) ? $_POST['bil2'] : NULL;
$hasil = isset($hasil) ? $hasil : 0;

if(isset($_POST['tambah'])){
$hasil = $bil1+$bil2;
}

if(isset($_POST['kurang'])){
$hasil = $bil1-$bil2;	
}

if(isset($_POST['kali'])){
$hasil = $bil1*$bil2;
}

if(isset($_POST['bagi'])){
$hasil = $bil1/$bil2;
}

if(isset($_POST['clear'])){
$hasil='';
$bil1='';
$bil2='';
}

if(isset($_POST['sqrt'])){
$hasil=sqrt($bil1);

}

if(isset($_POST['^2'])){
$hasil=($bil1*$bil1);
}

if(isset($_POST['%'])){
$hasil=($bil1*$bil2)/100;
}

if(isset($_POST['1/x'])){
$hasil=(1/$bil1);
}

echo '<div class="panel">'.
'<form action="" method="post">'.
'<div align="center">   KALKULATOR SEDERHANA    </div>'.
'<div align="center">=============================</div>'.


'<b>MASUKAN BILANGAN KE-1:</b><br/>'.
'<input type="text" name="bil1" value="'.$bil1.'"/><br/>'.
'<b>MASUKAN BILANGAN KE-2:</b><br/>'.
'<input type="text" name="bil2" value="'.$bil2.'"/><br/>'.
'<input class="tombol" type="submit" name="tambah" value="+"/>'.
'<input class="tombol" type="submit" name="kurang" value="-"/>'.
'<input class="tombol" type="submit" name="kali" value="X"/>'.
'<input class="tombol" type="submit" name="bagi" value=":"/>'.
'<INPUT class="tombol" type="submit" name="clear" value="C"/>'.
'<input class="tombol" type="submit" name="sqrt" value="sqrt"/>'.
'<input class="tombol" type="submit" name="^2" value="^2"/>'.
'<input class="tombol" type="submit" name="%" value="%"/>'.
'<input class="tombol" type="submit" name="1/x" value="1/X"/><br/>'.

'</form>'.
'<b>HASIL:</b><br/>'.
'<input type="text" value="'.$hasil.'" readonly/><br/>'.
'</div>';
?><br/><br/><br/><br/><br/>
<div class="footer">
			Copyright © 14090008 & 14090018 | <a href="https://naufalhanifalbani.wordpress.com/">naufalhanifalbani.wordpress.com</a>, <a href="https://syahrulzzadie.blogspot.com/">syahrulzzadie.blogspot.com</a> | Jangan Lupa Kunjungi Blog Kami yaaa..
		</div>
</body>
</html>