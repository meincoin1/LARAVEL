<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
	@foreach ($posts as $post)
		<div>
			<h2>{{ $post->title }}</h2>
			<div>
				{{ $post->text }}
			</div>
		</div>
	@endforeach
</body>
</html>