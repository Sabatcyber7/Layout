@extends('layouts.app')

@section('content')



<div class="container">

<input style="width: 100%;" class="alert alert-success" type="text" name="status" id="status" value="{{ session('status') }}">

<h5 style="background:#084B8A; color:white;"><center>Cadastrar sua Empresa</center></h5>

 <form class="form-group" method="POST" action="cadastrar_empresa" enctype="multipart/form-data">
    @csrf
  <div class="form-row">
 
 <div class="form-group col-md-2">
      <label for="cnpj">CNPJ</label>
      <input type="text" class="form-control" maxlength="14" name="cnpj" id="cnpj" onblur="pesquisa_cnpj()">
</div>
 
<div class="form-group col-md-10" >
    <label for="nome">Nome</label>
    <input type="text" class="form-control" maxlength="50" name="nome" id="nome" value="{{ old('nome') }}" >
</div>


<div class="form-group col-md-4">
      <label for="nacionalidade">Nacionalidade</label>
      <select name="nacionalidade" id="nacionalidade" maxlength="20" class="form-control" >
        <option selected>{{ old('nacionalidade') }}</option>
        <option>Brasileira</option>
        <option>Estrangeira</option>

      </select>
    </div>

<div class="form-group col-md-2">
      <label for="estado">Estado Civil</label>
      <select name="estado_civil" id="estado_civil" maxlength="20" class="form-control">
        <option selected>{{ old('estado_civil') }}</option>
        <option>Casado(a)</option>
        <option>Solteiro(a)</option>
        <option>Disquitado(a)</option>
        <option>Separado(a)</option>
        <option>Viuvo(a)</option>
        <option>Outros</option>
      </select>
    </div>

<div class="form-group col-md-4">
      <label for="profissao">Profissão</label>
      <select name="profissao" id="profissao" class="form-control" maxlength="50" value="{{ old('profissao') }}">
        <option selected>{{ old('profissao') }}</option>
        <option>Vendedor</option>
      </select>
    </div>

<div class="form-group">
    <label for="identidade">Identidade</label>
    <input type="text" class="form-control" id="identidade" maxlength="15" name="identidade" value="{{ old('identidade') }}" >
</div>

<div class="form-group col-md-4">
    <label for="bairro">Bairro</label>
    <input type="text" class="form-control" id="bairro" maxlength="100" name="bairro" value="{{ old('bairro') }}">
</div>

<div class="form-group col-md-2">
    <label for="cep">Cep</label>
    <input type="text" class="form-control" id="cep" name="cep" maxlength="10" value="{{ old('cep') }}">
</div>


    <div class="form-group col-md-4">
      <label for="cidade">Cidade</label>
      <input type="text" class="form-control" name="cidade" maxlength="40" id="cidade" value="{{ old('cidade') }}" >
    </div>

<div class="form-group col-md-2">
      <label for="estado">Estado</label>
      <select name="estado" id="estado" maxlength="30" class="form-control">
        <option selected>{{ old('estado') }}</option>
    <option>Acre</option>
    <option>Alagoas</option>
    <option>Amapá</option>
    <option>Amazonas</option>
    <option>Bahia</option>
    <option>Ceará</option>
    <option>Distrito Federal</option>
    <option>Espírito Santo</option>
    <option>Goiás</option>
    <option>Maranhão</option>
    <option>Mato Grosso</option>
    <option>Mato Grosso do Sul</option>
    <option>Minas Gerais</option>
    <option>Pará</option>
    <option>Paraíba</option>
    <option>Paraná</option>
    <option>Pernambuco</option>
    <option>Piauí</option>
    <option>Rio de Janeiro</option>
    <option>Rio Grande do Norte</option>
    <option>Rio Grande do Sul</option>
    <option>Rondônia</option>
    <option>Roraima</option>
    <option>Santa Catarina</option>
    <option>São Paulo</option>
    <option>Sergipe</option>
    <option>Tocantins</option>
    <option>Estrangeiro</option>
      </select>
    </div>


    <div class="form-group col-md-4">
      <label for="representante">Representante Legal</label>
      <input type="text" class="form-control" name="representante" maxlength="50" id="representante" value="{{ old('representante') }}" >
    </div>
  
<div class="form-group col-md-8">
      <label for="nome_emp">Nome empresarial</label>
      <input type="text" class="form-control" name="nome_emp" maxlength="50" id="nome_emp" value="{{ old('nome_emp') }}" >
</div>
 
   
<div class="form-group col-md-2">
      <label for="nome_emp">Inscrição Municipal</label>
      <input type="text" class="form-control" name="inscricao_m" maxlength="30" id="inscricao_m" value="{{ old('inscricao_m') }}" >
</div>

<div class="form-group col-md-10">
      <label for="nome_emp">Endereço</label>
      <input type="text" class="form-control" name="rua_m" maxlength="300" id="rua_m" value="{{ old('rua_m') }}" >
</div>


<div class="form-group col-md-4">
      <label for="nome_emp">Bairro</label>
      <input type="text" class="form-control" name="bairro_m" maxlength="40" id="bairro_m" value="{{ old('bairro_m') }}" >
</div>

<div class="form-group col-md-2">
      <label for="nome_emp">Cep</label>
      <input type="text" class="form-control" name="cep_m" maxlength="10" id="cep_m" value="{{ old('cep_m') }}" >
</div>

<div class="form-group col-md-5">
      <label for="nome_emp">Cidade</label>
      <input type="text" class="form-control" name="cidade_m" maxlength="40" id="cidade_m" value="{{ old('cidade_m') }}" >
</div>

<div class="form-group col-md-1">
      <label for="estado">Estado</label>
      <select name="uf_m" id="uf_m" maxlength="2" class="form-control">
        <option selected>{{ old('uf_m') }}</option>
    <option>AC</option>
    <option>AL</option>
    <option>AP</option>
    <option>AM</option>
    <option>BA</option>
    <option>CE</option>
    <option>DF</option>
    <option>ES</option>
    <option>GO</option>
    <option>MA</option>
    <option>MT</option>
    <option>MS</option>
    <option>MG</option>
    <option>PA</option>
    <option>PB</option>
    <option>PR</option>
    <option>PE</option>
    <option>PI</option>
    <option>RJ</option>
    <option>RN</option>
    <option>RS</option>
    <option>RO</option>
    <option>RR</option>
    <option>SC</option>
    <option>SP</option>
    <option>SE</option>
    <option>TO</option>
    <option>EX</option>
      </select>
    </div>

<input type="hidden" name="op" id="op" value="Salvar">

<button type="button" class="btn btn-primary" onclick="limpar()">Limpar</button>
&nbsp &nbsp
<input type="submit" id="salvar" value="Salvar" class="btn btn-primary">
&nbsp &nbsp
<button type="button" class="btn btn-primary" onclick="excluir()">Excluir</button>
&nbsp &nbsp

<button type="button" class="btn btn-sm" data-toggle="modal" id="bota" data-target="#pesquisar">Pesquisar pelo nome</button>  
&nbsp &nbsp
<button type="button" class="btn btn-primary" onclick="teste()">Testes</button>
  
</form>


<div class="modal fade" id="pesquisar"  tabindex="-1" role="dialog" aria-hidden="true">

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #00688B;color:#FFFAFA;">
        <img border="0" title="Pesquisa por nome" src="\Imagens\pesqg.jpg" width="22" height="25"> &nbsp &nbsp 
        <h5 class="modal-title" id="pesquisar">Pesquisar pelo nome da empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              
<div class="container" style="margin-left: 2%;"> 
     <label><font>Nome da empresa</font></label><br>
      <input type="text" name="digita" id="digita" size="10" style="background-color: #E0FFFF; width: 95%;" onkeyup="pesca()">
</div>

<div class="container" style="margin-left: 2%; width: 95%;">
     <label><font color="#045FB4"></font></label>
      <select multiple="multiple"  title="" name="diga" id="diga" class="form-control" >
      </select>
</div>
       
      </div>
      <div class="modal-footer" style="background-color:#071914;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>

</div>


<script type="text/javascript">
 
function validacnpj()
{


var cnpj = document.getElementById("cnpj").value;

 cnpj = cnpj.replace(/[^\d]+/g,'');
 
    if(cnpj == '' || cnpj.length != 14 ||
        cnpj == "00000000000000" || 
        cnpj == "11111111111111" || 
        cnpj == "22222222222222" || 
        cnpj == "33333333333333" || 
        cnpj == "44444444444444" || 
        cnpj == "55555555555555" || 
        cnpj == "66666666666666" || 
        cnpj == "77777777777777" || 
        cnpj == "88888888888888" || 
        cnpj == "99999999999999" )
 {   
        alert("caracteres inválidos");
 }       
 
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0,tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado1 = soma % 11 < 2 ? 0 : 11 - soma % 11;
 
    tamanho = tamanho + 1;
    numeros = cnpj.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado2 = soma % 11 < 2 ? 0 : 11 - soma % 11;
  
if(resultado1 != digitos.charAt(0) || resultado2 != digitos.charAt(1))
   alert("Cnpj informado está incorreto");

}

</script>


<script>
function pesquisa_cnpj()
{
    
    var valor = document.getElementById("cnpj").value;
   
    $.get('/Pesquisa_cnpj/' + valor, function(data) {
    
       //$('select[name=servico]').empty();
    
    $.each(data, function(key,value){

      var cor = '#013ADF';
    
if(data)
{
document.getElementById("op").value = "Alterar"; 
document.getElementById("salvar").value = "Alterar"; 
}


document.getElementById("nome").value = value.nome;
document.getElementById("nome").style.color = cor;

document.getElementById("nacionalidade").value = value.nacionalidade;
document.getElementById("nacionalidade").style.color = cor;

document.getElementById("estado_civil").value = value.estado_civil;
document.getElementById("estado_civil").style.color = cor;

document.getElementById("profissao").value = value.profissao;
document.getElementById("profissao").style.color = cor;

document.getElementById("identidade").value = value.identidade;
document.getElementById("identidade").style.color = cor;

document.getElementById("bairro").value = value.bairro;
document.getElementById("bairro").style.color = cor;

document.getElementById("cep").value = value.cep;
document.getElementById("cep").style.color = cor;

document.getElementById("cidade").value = value.cidade;
document.getElementById("cidade").style.color = cor;

document.getElementById("estado").value = value.estado;
document.getElementById("estado").style.color = cor;

document.getElementById("representante").value = value.representante;
document.getElementById("representante").style.color = cor;

document.getElementById("nome_emp").value = value.nome_empresa;
document.getElementById("nome_emp").style.color = cor;

document.getElementById("inscricao_m").value = value.IM;
document.getElementById("inscricao_m").style.color = cor;

document.getElementById("rua_m").value = value.IM_rua;
document.getElementById("rua_m").style.color = cor;

document.getElementById("bairro_m").value = value.IM_bairro;
document.getElementById("bairro_m").style.color = cor;

document.getElementById("cep_m").value = value.IM_cep;
document.getElementById("cep_m").style.color = cor;

document.getElementById("cidade_m").value = value.IM_cidade;
document.getElementById("cidade_m").style.color = cor;

document.getElementById("uf_m").value = value.IM_estado;
document.getElementById("uf_m").style.color = cor;   

 


    });

    });
 }
</script>

<script type="text/javascript">
  function limpar()
  {
  

document.getElementById("nome").value = "";

document.getElementById("nacionalidade").value = "";

document.getElementById("estado_civil").value = "";

document.getElementById("profissao").value = "";

document.getElementById("identidade").value = "";

document.getElementById("bairro").value = "";

document.getElementById("cep").value = "";

document.getElementById("cidade").value = "";

document.getElementById("estado").value = "";

document.getElementById("representante").value = "";

document.getElementById("nome_emp").value = "";

document.getElementById("inscricao_m").value = "";

document.getElementById("rua_m").value = "";

document.getElementById("bairro_m").value = "";

document.getElementById("cep_m").value = "";

document.getElementById("cidade_m").value = "";

document.getElementById("uf_m").value = "";

document.getElementById("cnpj").value = "";

document.getElementById("cnpj").focus();

document.getElementById("status").value = "";

document.getElementById("op").value = "Salvar"; 
document.getElementById("salvar").value = "Salvar"; 



}


</script>


<script>
function excluir()
{


var conteudo = document.getElementById("cnpj").value;

if(conteudo != "")
{
location.href = "{{route('Excluir_empresa','_conteudo_')}}".replace('_conteudo_',conteudo);
}

}
</script>

<script>
function pesca()
{
    document.getElementById("cnpj").focus();
    document.getElementById("digita").focus();
    
     var valor = document.getElementById("digita").value;

    $.get('/Resp_nome/' + valor, function(data) {
    
       $('select[name=diga]').empty();
    $.each(data, function(key,value){
    
    $('select[name=diga]').append('<option value='+ value.nome + '>' + value.nome + '</option>');
    document.getElementById("cnpj").value = value.cnpj;

      });
    });
  }
 
</script>

<script type="text/javascript">
  
function teste()
{
var result = [];
   for (var i = 0; i < 100000; i++) {
       var user = "User: " + i + "\n";
       result.push(user);
   }
 
 alert(result.join("")); // mostra todos
 
 alert(result[3]); // mostra registro 3

 
}

</script>

@endsection