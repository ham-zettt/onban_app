<!-- component -->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/images/onban-icon.png') }}" type="image/png">
	<title>{{ $title }} | onbann</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-secondary">
  <div class="min-h-screen flex flex-col m-3 p-6 items-center justify-center">
		<div class="flex justify-center mb-8">
			<h1 class="text-5xl text-white m-5">Logo</h1>
	  	</div>
			@yield("content")
		<p class="text-xs text-white text-center mt-5 justify-end">&copy; 2024 OnBan-Corporation</p>
	</div>
  </div>
</body>
</html>
