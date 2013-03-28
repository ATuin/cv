@layout('templates.main')

@section('content')
@include('plugins.status')
<h1>Contact</h1>
N'hésitez pas à remplir ce formulaire pour me contacter.
<br />

{{ Form::open('/','POST',array('id' => 'contact')); }}
{{ Form::token(); }}
<div class="control-group">
{{ Form::label('nom', 'Nom'); }}
     <div class="controls">
{{ Form::text('nom', '',array('class' => 'input-xlarge required', 'required' =>'true' )); }}
	 <span class="help-inline"></span>
</div>
</div>
<div class="control-group">
{{ Form::label('prenom', 'Prenom'); }}
     <div class="controls">
{{ Form::text('prenom', '',array('class' => 'input-xlarge required', 'required' =>'true')); }}
	 <span class="help-inline"></span>
</div>
</div>
<div class="control-group">
{{ Form::label('email', 'Courriel'); }}
     <div class="controls">
{{ Form::text('email', '',array('class' => 'input-xlarge required email', 'required' =>'true')); }}
	 <span class="help-inline"></span>
</div>
</div>
<div class="control-group">
{{ Form::label('message', 'Message'); }}
     <div class="controls">
{{ Form::textarea('message', '',array('class' => 'input-xlarge required','rows' => '3', 'required' =>'true')); }}
	 <span class="help-inline"></span>
</div>
    </div>

<script>
$("#contact").validate({
 submitHandler: function(form) {
   // some other code
   // maybe disabling submit button
   // then:
   $(form).submit();
 }
});
</script>

   <script type="text/javascript"
src="http://www.google.com/recaptcha/api/challenge?k=6Lcd-d4SAAAAAGpOBqVt2vfhUQDOK155061ZAeMU">
    </script>
  <noscript>
       <iframe src="http://www.google.com/recaptcha/api/noscript?k=6Lcd-d4SAAAAAGpOBqVt2vfhUQDOK155061ZAeMU"
           height="300" width="500" frameborder="0"></iframe><br>
       <textarea name="recaptcha_challenge_field" rows="3" cols="40">
       </textarea>
       <input type="hidden" name="recaptcha_response_field"
           value="manual_challenge">
</noscript>
<br />

<div class="form-actions">
{{Form::submit('ENVOYER');}}
</div>
{{Form::close();}} 
@endsection