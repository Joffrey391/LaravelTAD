Formulario de creacion de Persona
<form method="post" action="{{url('/persona')}}">
@csrf 
@include('persona.form')
</form>