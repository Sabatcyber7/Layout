
<!DOCTYPE html>

@extends('layouts.app')

@section('content')




<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            

<html lang="pt">
<head>
	
<meta charset="UTF-8">


<title>Cadastrar</title>

</head>

<body>
<button type="button" class="btn btn-sm"><a href="{{ route('estatistica') }}"><img border="0" title="Estatísticas" src="\Imagem\fases3.jpg" width="30" height="30"></a>
 </button>

<button type="button" class="btn btn-sm"><a href="{{ route('atraso') }}"><img border="0" title="Atraso" src="\Imagem\relogio.jpg" width="30" height="30"></a>
 </button>
<br>
<br>

 <form class="form-group" method="POST" action="gravar" >
    @csrf	

<div style="margin-left: 2%; position: relative;">
<input type="text" name="concurso">
<br>
<br>
<input type="text" name="A">
<br>
<input type="text" name="B">
<br>
<input type="text" name="C">
<br>
<input type="text" name="D">
<br>
<input type="text" name="E">
<br>
<input type="text" name="F">
<br>

<input type="submit" value="OK">
</div >
</form>

<div  style="margin-left: 1%; margin-top: 2%; position: relative;" >
<table class="table-responsive">
  <thead class="table table-bordered">
  <tr >
    <th><font size=1>CON</font></th>
    <th><font size=1>A</font></th>
    <th><font size=1>B</font></th>
    <th><font size=1>C</font></th>
    <th><font size=1>D</font></th>
    <th><font size=1>E</font></th>
    <th><font size=1>F</font></th>
    
  </tr>
</thead>
@foreach($resultado as $res)
<tr>
    
    <td ><font size=1>{{$res->CON}} </font></td>
    <td ><font size=1>{{$res->A}} </font></td>
    <td ><font size=1>{{$res->B}} </font></td>
    <td ><font size=1>{{$res->C}} </font></td>
	<td ><font size=1>{{$res->D}} </font></td>
	<td ><font size=1>{{$res->E}} </font></td>
	<td ><font size=1>{{$res->F}} </font></td>
@endforeach
</tr>
</table>

</div>

<div style="margin-left: 20%;margin-top: -3013%; float: left; position: relative;">

<table class="table-responsive">
  <thead class="table table-bordered">
  <tr >
    <th><font size=1>NR</font></th>
    <th><font size=1>VZ</font></th>
   <th><font size=1>MD</font></th> 
  </tr>
</thead>

@foreach($estatistica as $estado)
<tr>
    
    <td ><font size=1>{{$estado->NR}} </font></td>
    <td ><font size=1>{{$estado->VZ}} </font></td>
    <td ><font size=1>{{$estado->MD}} </font></td>
	
@endforeach
</tr>
</table>

</div>


<div style="margin-left: 30%; margin-top: -3013%; float: left; position: static;">
<table class="table-responsive">
  <thead class="table table-bordered">
  <tr >
    <th><font size=1>NR</font></th>
    <th><font size=1>AT</font></th>
    
  </tr>
</thead>

@foreach($atrasou as $at)
<tr>
    
    <td ><font size=1>{{$at->NR}} </font></td>
    <td ><font size=1>{{$at->AT}} </font></td>
	  

@endforeach
</tr>
</table>

</div>

</body>
</html>

@endsection