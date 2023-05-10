<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ isset($persona->Nombre)?$persona->Nombre:'' }}" id="Nombre">
<br>

<label for="Apellidos"> Apellidos </label>
<input type="text" name="Apellidos" value="{{ isset($persona->Apellidos)?$persona->Apellidos:'' }}" id="Apellidos">
<br>

<label for="Edad"> Edad </label>
<input type="text" name="Edad" value="{{ isset($persona->Edad)?$persona->Edad:'' }}" id="Edad">
<br>

<input type="submit" value="Guardar datos">

<a href="{{ url('persona/') }}">Regresar</a>
<br>