@extends('GestionClients.app')
@section('content')





    <form method="POST" action="{!! url('users') !!}" accept-charset="UTF-8">
    

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="nom">Entrez un nom : </label>    

        <input name="nom" type="text" id="nom">    

        <input type="submit" value="Chercher"> 

    </form>
    <table class="table table-hover">

<tr>

       <td>nom</td>

       <td>prenom</td>

       <td>ville</td>

   </tr>
   <tr>

       <td>Carmen</td>

       <td>33 ans</td>

       <td>Espagne</td>

   </tr>

   <tr>

       <td>Michelle</td>

       <td>26 ans</td>

       <td>États-Unis</td>

   </tr>

<tr>

       <td>Michelle</td>

       <td>26 ans</td>

       <td>États-Unis</td>

   </tr>
</table>



@endsection