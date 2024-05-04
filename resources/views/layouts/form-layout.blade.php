<!-- component -->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iniciar sesión - Mi aplicación</title>
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
	@vite('resources/css/app.css')
</head>
<body class="bg-white">
	<div class="min-h-screen flex flex-col m-3 p-6 items-center justify-center">
		<div class="flex justify-center mb-8">
			<h1 class="text-5xl m-5">Logo</h1>
	  	</div>
			@yield("content")
		<p class="text-xs text-gray-600 text-center mt-5 justify-end">&copy; 2024 OnBan-Corporation</p>
	</div>
</body>
</html>