@layout('templates.main')

@section('content')
<h1>Portfolio</h1> 
    	@foreach ($portfolios as $folio)
		<div class="row-fluid offset1 span10 portfolio"><h2>{{ $folio->titre }}</h2> <br /> 
		<a href='#' id="folio{{$folio->id}}">{{ HTML::image("uploads/portfolios/$folio->screenshot", $folio->titre) }} </a> 
	    <script> $("a#folio{{$folio->id}}").colorbox({html:'{{HTML::image("uploads/portfolios/$folio->screenshot")}}'}); </script> <br />
		    <div class="descr"> {{ $folio->description }} </div></div>
    @endforeach
@endsection