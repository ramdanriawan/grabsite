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
		<div>ss
			<img src="" class="gambar">
		</div>
	</li>
	<li>aa</li>
</ul>

<script type="text/javascript">
	var list = $("li");

	for (var i = 0; i < list.length; i++) {
		var findGambar = list.eq(i).find("img.gambar");

		// console.log(findGambar);

		if (findGambar.length == 0) {
			continue;
		}else{
			console.log(findGambar[0].src);
			//list.eq(i).remove();
		}
	}
</script>
</body>
</html>
