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
?>
	 <script type="text/javascript"
       src="http://www.google.com/recaptcha/api/challenge?k=6LeI494SAAAAACelhz2UpFuDLBpNDKFSyvP2AoqB">
    </script>
    <noscript>
       <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LeI494SAAAAACelhz2UpFuDLBpNDKFSyvP2AoqB"
           height="300" width="500" frameborder="0"></iframe><br>
       <textarea name="recaptcha_challenge_field" rows="3" cols="40">
       </textarea>
       <input type="hidden" name="recaptcha_response_field"
           value="manual_challenge">
    </noscript>
<?php
	echo Form::submit('Click Me!');

	echo Form::close();
?>
@endsection