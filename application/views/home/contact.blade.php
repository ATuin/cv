@layout('templates.main')

@section('content')
@include('plugins.status')
<?php
	echo Form::open();
	echo Form::token();
	echo Form::label('nom', 'Nom');
	echo Form::text('nom', '');
	echo Form::label('prenom', 'Prenom');
	echo Form::text('prenom', '');
	echo Form::label('email', 'E-Mail Address');
	echo Form::text('email', '');
	echo Form::label('message', 'Message');
	echo Form::textarea('message', '');
	echo Form::submit('Click Me!');
	echo Form::close();
?>
@endsection