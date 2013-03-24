
@layout('templates.main')

@section('content')
<?php
foreach ($experiences as $exp) {
	# code...
	echo $exp->nom."<br />";
}

?>
@endsection