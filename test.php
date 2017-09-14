<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<script src="/node_modules/jquery/dist/jquery.js"></script>
</head>
<body>

<ul>
	<li>
		dsfsf
	</li>
	<li class="li-list">
		<img src="" class="gambar">
	</li>
	<li>aa</li>
</ul>

<script type="text/javascript">
	var list = $("li");
	
	for (var i = list.length - 1; i >= 0; i--) {
		var findGambar = list.eq(i).find(".gambar");

		console.log(findGambar);

		if (findGambar.length == 0) {
			continue;
		}else{
			list.eq(i).remove();
		}
	}
</script>
</body>
</html>