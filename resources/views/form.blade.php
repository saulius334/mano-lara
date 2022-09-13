@if(Session::has('rez'))
<h2>{{ Session::get('rez') }}</h2>
@endif


{{-- @if ($rez != 'NIEKO')
<h2>{{$rez}}</h2>
@endif --}}

<form action="{{route('calculate')}}" method="post">
X:<input type="text" name="x"><br/><br/>
Y:<input type="text" name="y"><br/><br/>
@csrf
<button type="submit">Suma</button>
</form>