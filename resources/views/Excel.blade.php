
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


 <form class="form-group" method="POST" action="Transforma" enctype="multipart/form-data">
    @csrf	

<div style="margin-left: 10px;">

<label> Arquivo</label>

<input type="file" name="arquivo"><br><br>

<input type="submit" value="Enviar">
</div >

</form>


</body>
</html>

@endsection