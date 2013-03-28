@layout('templates.main')

@section('content')
<h1>Expériences</h1>
    <div class="exp">@foreach ($experiences as $exp)
<div class="intitule">Métier : </div> {{$exp->nom}} <br /> <div class="intitule">Site : </div> {{$exp->site}} <br /> <div class="intitule">Description : </div> {{$exp->description}} <br /> <div class="intitule">Adresse : </div>{{$exp->adresse}} <br /><div class="intitule">Date de début : </div>{{$exp->datedebut}} <br /><div class="intitule">Date de fin : </div>{{$exp->datefin}} <br /><br />
    @endforeach
</div>
@endsection