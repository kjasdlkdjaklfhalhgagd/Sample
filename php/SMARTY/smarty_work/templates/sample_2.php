<!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>smartyのforeach</title>
</head>
<body>
{foreach from=$myarray key=k item=v}
	<li>{$k}:{$v}</li>
{/foreach}
</body>
</html>