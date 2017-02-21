<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title> {{$article->title}}</title>
</head>

<body>
	<title> {{$article->title}}</title>
	<link rel="stylesheet" href=" {{ asset('css/general.css')}} "">
	Luis Marquez
	<br><br>

	{{$article->content}}
	<hr>

	{{ $name=$article->category->name }} 
	{{$article->user->name}} | {{ isset($name) ? $name : 'Diversion' }}
	
	
	@foreach($article->tags as $tag)
	   {{ $tag->name }}
	@endforeach 
	}
</body>
</html>

