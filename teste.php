<html>
<head>
<script type="text/javascript">
function slide1(){
document.getElementById('id').src="clientes.php";
setTimeout("slide2()", 3000)
document.getElementById('aId').href="clientes.php"
}

</script>
<body onLoad="slide1()">
<a id="aId"><img id="id"></a>
</body>
</html>