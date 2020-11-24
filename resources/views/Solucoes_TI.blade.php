@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="container">
            <div class="card">
                <div class="card-header" style="background:#0B3861;"><b><h4 style="color: white; text-shadow: black 0.1em 0.1em 0.2em">Soluções tecnológicas de TI
                

                </h4></b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            
 
 <button style="margin-left: 92%; width: 5%; margin-top: -3%;" type="button" data-toggle="modal" data-target="#modalExemplo"><img title="Subir Documento" src="/Imagem/upload.png" height="40px" width="40px">
</button> 
  
     <table class="table table-bordered">

        
            <tr>
                
                <td>
     
                <img title="Soluções tecnológicas" style="width: 250px; margin-right: 2%; height:250px; margin-top: 10px; border:4px solid #999;" align="left" src = "/Imagem/visita2.jpg">

                  <p style="margin-top: 1%;opacity:0.7;font-size: 17px;text-align: justify;">
                    Esta página traz algumas das soluções de TI que estão disponíveis na Sabatcyber para ajudar sua empresa a atender as demandas do dia-a-dia bem como
                    melhorar a qualidade dos serviços prestados por você. Navegue através das páginas abaixo e escolha uma solução ou melhoria para o seu negócio.<br><br>

                    Se preferir, baixe o prospecto completo da solução em PDF e saiba todos os detalhes do projeto ou serviço escolhido.<br>  

                    
                </p>

                
                </td>
                               
            </tr>
            
       </table>

<div class="table-responsive">

    <table class="table table-bordered">

        <tr style="background: #0B3861;">
        
  <th><center><font size=1 style="color:white">SOLUÇÃO</font></center></th>
  <th><center><font size=1 style="color:white">LINGUAGEM</font></center></th>
  <th><center><font size=1 style="color:white">BANCO DE DADOS</font></center></th>
  
  <th><center><font size=1 style="color:white">RESPONSÁVEL</font></center></th>
  <th><center><font size=1 style="color:white">TIPO SUPORTE</font></center></th>
  <th><center><font size=1 style="color:white">PROSPECTO</font></center></th>
  <th><center><font size=1 style="color:white">CONTRATAR</font></center></th>

  <th><center><font size=1 style="color:white">EXCLUIR</font></center></th>
  
        </tr>

        <tr >
        
  <td ><center><font size=1 > Sistema Web</font></center></td>
  <td ><center><font size=1 > Laravel 5</font></center></td>
  <td ><center><font size=1 > Sql Server ou Mysql</font></center></td>
  
  <td ><center><font size=1 > Leosmar Tavares</font></center></td>
  <td ><center><font size=1 > Suporte online</font></center></td>
        
  <td><center>
    <button type="button" class="btn btn-sm" data-toggle="modal" data-target=""><img border="0" title="Prospectro completo e detalhado da solução" src="\Imagem\pdf.jpg" width="30" height="30"></button>
  </center>
  </td>
  
<td><center>
    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#contrato"><img border="0" title="Contratar" src="\Imagem\contrato2.jpg" width="30" height="30"></button>
  </center>
  </td>

<td><center>
    <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#exclusao"><img border="0" title="Excluir" src="\Imagem\excluir.jpg" width="30" height="30"></button>
  </center>
  </td>
  

        </tr>
   

    </table>
</div>

<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="exampleModalLabel">Subir documentos</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  style="background-color:#EFFBF8; height:600px;">

    <form method="POST" id="Registra" action="{{route('projetos')}}" enctype="multipart/form-data">
    @csrf


<div class="col-md-10 offset-md-0">
  <label><font color="#045FB4">TIPO DE SOLUÇÃO</font></label>
  <select title="Tipo de solução" name="tp_solucao" id="tp_solucao" class="form-control">
  <option></option>
  <option>SITE</option>
  <option>SISTEMA WEB</option>
  <option>APLICAÇÃO DESKTOP</option>
  <option>APP CELULAR</option>
  <option>QUERY BANCO DE DADOS</option>
  <option>DIGITAÇÃO</option>
  <option>WEB DESIGNE</option>
  </select>
</div>

<br>

<div class="col-md-10 offset-md-0">
  <label><font color="#045FB4">LINGUAGEM</font></label>
  <select title="Tipo de linguagem" name="linguagem" id="linguagem" class="form-control">
  <option></option>
  <option>PHP LARAVEL</option>
  <option>JAVA</option>
  <option>ASP NET. C#</option>
  <option>C++ BUILDER XE6</option>
  </select>
</div>

<br>

<div class="col-md-10 offset-md-0">
  <label><font color="#045FB4">BANCO DE DADOS</font></label>
  <select title="Tipo de banco de dados" name="banco_dados" id="banco_dados" class="form-control">
  <option></option>
  <option>SQL SERVER</option>
  <option>MYSQL</option>
  <option>ORACLE</option>
  <option>FIREBIRD</option>
  </select>
</div>

<br>


<div class="col-md-10 offset-md-0">
  <label><font color="#045FB4">TIPO DE SUPORTE</font></label>
  <select title="Tipo de suporte" name="suporte" id="suporte" class="form-control">
  <option></option>
  <option>ABERTURA DE CHAMADO</option>
  <option>PESSOALMENTE</option>

  </select>
</div>

<br>

<div class="col-md-10 offset-md-0">
<label><font color="#045FB4">ÕBSERVAÇÕES</font></label>
<textarea rows="4" cols="50" name="obs"> </textarea>
</div>


<br>
<div class="col-md-10 offset-md-0">
    <label><font color="#DF0101"><b>Localizar prospectro do projeto *</b></font></label>
    <input type="file" title="Anexar documento" name="documento" class="form-control-file" aria-describedby="fileHelp" style="margin-left:-3%">
</div>
<br>
 <input type="submit" value="Subir" name="botao" class="btn btn-primary" >
        
    </form>

      </div>

      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal" >Fechar</button>      
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="contrato" tabindex="-1" role="dialog" aria-labelledby="contrato" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="contrato">Subir documentos</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  style="background-color:#EFFBF8; height:600px;">

    <form method="POST" id="Registra" action="" enctype="multipart/form-data">
    @csrf


<br>
<div class="col-md-10 offset-md-0">
    <label><font color="#DF0101"><b>Localizar prospectro do projeto *</b></font></label>
    <input type="file" title="Anexar documento" name="documento" class="form-control-file" aria-describedby="fileHelp" style="margin-left:-3%">
</div>
<br>
 <input type="submit" value="Subir" name="botao" class="btn btn-primary" >
        
    </form>

      </div>

      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal" >Fechar</button>      
      </div>
    </div>
  </div>
</div>


<!--TEXTOS -->


<div class="modal fade" id="exclusao" tabindex="-1" role="dialog" aria-labelledby="exclusao" aria-hidden="true">
  <div class="modal-dialog modal-sm"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img border="0" title="Excluir documento" src="\Imagem\Excluir.jpg" width="22" height="25"> &nbsp &nbsp 
        <h5 class="modal-title" id="">Tela de exclusão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <br>
        
          <a href="" class="btn btn-danger">Excluir Solução?</a>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>

           
            </div>
        </div>

    </div>
</div>
@endsection
