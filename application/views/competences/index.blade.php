@layout('templates.main')

@section('content')

<h1> Compétences </h1>
<ul>
<?php 
foreach ($categories as $cat) {
	# code...
	echo "<li>$cat->titre</li>";
    	echo "<ul>";
	foreach($cat->competences as $comp)
	{
	    echo "<li>$comp->nom $comp->niveau</li>";
	}
	echo "</ul>";
}
?>
</ul>
@endsection