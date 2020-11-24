<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;


use App\contratante;
use App\projeto;
use App\sena;
use App\estatistica;
use App\atraso;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(contratante $contratante,sena $sena,estatistica $estatistica,atraso $atraso)
    {
        $this->middleware('auth');

        $this->contratante = $contratante;
        
        $this->sena = $sena;
        $this->estatistica = $estatistica;
        $this->atraso = $atraso;
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


public function Solucoes_TI()
{
    return view('Solucoes_TI');
}

public function quem()
{
    return view('quem_somos');
}


public function cad_empresa()
{
    return view('Cad_empresa');
}




public function projetos(Request $formulario, projeto $projeto)
{

//--------------------------
If($formulario->hasFile('documento') && $formulario->file('documento')->isValid()) // verifica se a imagem colhida é valida
{
    $file = $formulario->file('documento');  //pega o nome da imagem sem extensão (prospectro_site)
    $fileFolder = "jomagapa"; // Nome do STORAGE AZURE lá em cima e o nome configurado no ENV
    $extensao = $formulario->documento->extension(); // pega extensão do arquivo selecionado
    $nome = rand(100,999999).time(); // cria numero aleatorio com horario do momento para servir de nome
    $nome_arquivo = "{$nome}.{$extensao}"; // junta nome com extensao
    $file->storeAs($fileFolder, $nome_arquivo, ['disk' => 'azure']); //sobe imagem e grava no storage do azure 
    
    $projeto->prospectro = $nome_arquivo; // informa ao banco o novo nome da imagem para ser gravada no banco de dados

    $projeto->tp_solucao = $formulario->tp_solucao;
    $projeto->linguagem = $formulario->linguagem;
    $projeto->banco_dados = $formulario->banco_dados;
    $projeto->suporte = $formulario->suporte;
    $projeto->obs = $formulario->obs;
    $projeto->save();
    return redirect()->back()->with('status','Upload e registro completados');    

}
else
{

    $projeto->prospectro = $nome_arquivo; // informa ao banco o novo nome da imagem para ser gravada no banco de dados
    $projeto->tp_solucao = $formulario->tp_solucao;
    $projeto->linguagem = $formulario->linguagem;
    $projeto->banco_dados = $formulario->banco_dados;
    $projeto->suporte = $formulario->suporte;
    $projeto->obs = $formulario->obs;
    $projeto->save();
    return redirect()->back()->with('status','Apenas registros salvos');  
}

}







public function cadastrar_empresa(request $formulario, contratante $contratante) 
{

$localiza = $this->contratante->where('cnpj','=',[$formulario->cnpj])->get()->first();

//$localiza = DB::table('contratantes')->where('cnpj','=',[$formulario->cnpj])->get()->first();


if($formulario->op == "Salvar")
{

if($formulario->nome != "" && $formulario->cnpj != "" && $formulario->nacionalidade != "" && $formulario->estado_civil != "" && $formulario->profissao != "" && $formulario->identidade != "" && $formulario->bairro != "" && $formulario->cep != "" && $formulario->cidade != "" && $formulario->estado != "" && $formulario->representante != "" && $formulario->nome_emp != "" && $formulario->inscricao_m != "" && $formulario->rua_m != "" && $formulario->bairro_m != "" && $formulario->cep_m != "" && $formulario->cidade_m != "" && $formulario->uf_m != "")
{

if(!$localiza)
{
$contratante->nome = $formulario->nome;
$contratante->cnpj = $formulario->cnpj;
$contratante->nacionalidade = $formulario->nacionalidade;
$contratante->estado_civil = $formulario->estado_civil;
$contratante->profissao = $formulario->profissao;
$contratante->identidade = $formulario->identidade;
$contratante->bairro = $formulario->bairro;
$contratante->cep = $formulario->cep;
$contratante->cidade = $formulario->cidade;
$contratante->estado = $formulario->estado;
$contratante->representante = $formulario->representante;

$contratante->nome_empresa = $formulario->nome_emp;

$contratante->IM = $formulario->inscricao_m;
$contratante->IM_rua = $formulario->rua_m;
$contratante->IM_bairro = $formulario->bairro_m;
$contratante->IM_cep = $formulario->cep_m;
$contratante->IM_cidade = $formulario->cidade_m;
$contratante->IM_estado = $formulario->uf_m;

$contratante->save();

return redirect()->back()->with('status','Registro salvo com sucesso');
}
else
{
return redirect()->back()->with('status','CNPJ já existe no banco de dados');    
}

}
else
{
return redirect()->back()->withInput()->with('status','Favor verificar campos em branco');      
}
}






if($formulario->op == "Alterar")
{

if($formulario->nome != "" && $formulario->cnpj != "" && $formulario->nacionalidade != "" && $formulario->estado_civil != "" && $formulario->profissao != "" && $formulario->identidade != "" && $formulario->bairro != "" && $formulario->cep != "" && $formulario->cidade != "" && $formulario->estado != "" && $formulario->representante != "" && $formulario->nome_emp != "" && $formulario->inscricao_m != "" && $formulario->rua_m != "" && $formulario->bairro_m != "" && $formulario->cep_m != "" && $formulario->cidade_m != "" && $formulario->uf_m != "")
{


if($localiza)
{
$localiza->cnpj = $formulario->cnpj;
$localiza->nome = $formulario->nome;
$localiza->nacionalidade = $formulario->nacionalidade;
$localiza->estado_civil = $formulario->estado_civil;
$localiza->profissao = $formulario->profissao;
$localiza->identidade = $formulario->identidade;
$localiza->bairro = $formulario->bairro;
$localiza->cep = $formulario->cep;
$localiza->cidade = $formulario->cidade;
$localiza->estado = $formulario->estado;
$localiza->representante = $formulario->representante;

$localiza->nome_empresa = $formulario->nome_emp;

$localiza->IM = $formulario->inscricao_m;
$localiza->IM_rua = $formulario->rua_m;
$localiza->IM_bairro = $formulario->bairro_m;
$localiza->IM_cep = $formulario->cep_m;
$localiza->IM_cidade = $formulario->cidade_m;
$localiza->IM_estado = $formulario->uf_m;

$localiza->update();

return redirect()->back()->with('status','Registro alterado com sucesso');
}
else
{
return redirect()->back()->with('status','CNPJ não existe no banco de dados');    
}

}
else
{
return redirect()->back()->withInput()->with('status','Favor verificar campos em branco');      
}
}
}


public function Excluir_empresa($cnpj)

{
$localiza = $this->contratante->where('cnpj','=',[$cnpj])->get()->first();


if($localiza)
{
$localiza->delete();

return redirect()->back()->with('status','Cnpj( '.$cnpj.' ) Excluído com sucesso');
}
else
{
return redirect()->back()->with('status','Cnpj( '.$cnpj.' ) Não localizado');
}

}


public function Pesquisa_cnpj($id)
{

$dados = DB::table('contratantes')->where('cnpj', '=', [$id])->get(); 


return Response::json($dados);
}


public function Resp_nome($nome)
{

$nomes = DB::table('contratantes')->where('nome', 'LIKE', "%{$nome}%")->orderBy('nome')->get();   

return $nomes;

}



public function cad_numero()
{
    

$resultado = DB::table('senas')->get()->unique();
$estatistica = DB::table('estatisticas')->orderBy('VZ','desc')->get();
$atrasou = DB::table('atrasos')->orderBy('at','asc')->get()->unique();


return view('grava',compact('resultado','estatistica','atrasou'));

}


public function gravar(request $formulario, sena $sena)
{

$localiza = $this->sena->where('con','=',[$formulario->concurso])->get()->first();

if(!$localiza)
{
$sena->CON = $formulario->concurso;
$sena->A = $formulario->A;
$sena->B = $formulario->B;
$sena->C = $formulario->C;
$sena->D = $formulario->D;
$sena->E = $formulario->E;
$sena->F = $formulario->F;

$sena->save();

return redirect()->back()->with('status','Numero salvo');
}
else
{
return redirect()->back()->with('status','Já existe');    
}

}

public function estatistica(estatistica $estatistica)
{

DB::table('estatisticas')->delete();
DB::table('atrasos')->delete();

$total = DB::table('senas')->count(); // pega o total de registros no banco de dados

for($n=1; $n <= 60; $n++)

{

$tot_A = DB::table('senas')->where('A','=',[$n])->count();
$tot_B = DB::table('senas')->where('B','=',[$n])->count();
$tot_C = DB::table('senas')->where('C','=',[$n])->count();
$tot_D = DB::table('senas')->where('D','=',[$n])->count();
$tot_E = DB::table('senas')->where('E','=',[$n])->count();
$tot_F = DB::table('senas')->where('F','=',[$n])->count();

$geral = $tot_A + $tot_B + $tot_C + $tot_D + $tot_E +  $tot_F; 


$banco[$n] = $geral;
$media = round($total / $geral);

DB::table('estatisticas')->insert(['NR' => $n, 'VZ' => $banco[$n],'MD' => $media]);

}

$resultado = DB::table('senas')->get()->unique();

//$estatistica = DB::table('estatisticas')->get()->unique();

$estatistica = DB::table('estatisticas')->orderBy('VZ','desc')->get();

$atrasou = DB::table('atrasos')->orderBy('at','asc')->get()->unique();


return view('grava',compact('resultado','estatistica','atrasou'));

}



public function atraso(sena $sena, atraso $atraso)
{

$conta;
$conta = 0;
$zero = 0;


$cupom = DB::table('senas')->get()->unique();
 
foreach($cupom as $pom)
{

for($i=1; $i <= 60; $i++) // LOOP de 1 a 60
{

if($pom->A == $i || $pom->B == $i || $pom->C == $i || $pom->D == $i || $pom->E == $i || $pom->F == $i)

{

$atras = DB::select('select * from atrasos where NR = ?', [$i]); // verifica se o número já foi encontrado no banco atraso

if(!$atras)
{


DB::table('atrasos')->insert(['NR' => $i, 'AT' => $conta] );

}

}
else
{


}

}
$conta++;

}

$resultado = DB::table('senas')->get()->unique();

$estatistica = DB::table('estatisticas')->orderBy('VZ','desc')->get();

$atrasou = DB::table('atrasos')->orderBy('at','asc')->get()->unique();

return view('grava',compact('resultado','estatistica','atrasou'));
}



public function react()
{

    return view('pagina_react');


}


public function Excel()
{

    

     return view('Excel');
}


public function Transforma(request $formulario, sena $senas )
{
DB::table('senas')->delete();

If($formulario->hasFile('arquivo') && $formulario->file('arquivo')->isValid())
{


 $arquivo = new \DOMDocument();
 $arquivo->load($formulario->file('arquivo'));
 //var_dump($arquivo);

$linhas = $arquivo->getElementsByTagName("Row");

//var_dump($linhas);

foreach($linhas as $linha)
{


$nome = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
echo "Concurso: $nome <br>";


$nr_01 = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
echo "$nr_01 - ";
$nr_02 = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
echo "$nr_02 - ";
$nr_03 = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
echo "$nr_03 - ";
$nr_04 = $linha->getElementsByTagName("Data")->item(4)->nodeValue;
echo "$nr_04 - ";
$nr_05 = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
echo "$nr_05 - ";

$nr_06 = $linha->getElementsByTagName("Data")->item(6)->nodeValue;
echo "$nr_06 - ";

echo "<hr>";

//if($nome != "bola 1" || $nome != "bola 2" || $nome != "bola 3" || $nome != "bola 4" || $nome != "bola 5" || $nome != "bola 6" )
//{
DB::table('senas')->insert(['CON' => $nome, 'A' => $nr_01,'B' => $nr_02,'C' => $nr_03,'D' => $nr_04,'E' => $nr_05,'F' => $nr_06]);
//}

}

}
else
{
echo "Arquivo vazio";

}

//var_dump($formulario->arquivo);

$resultado = DB::table('senas')->get()->unique();

$estatistica = DB::table('estatisticas')->orderBy('VZ','desc')->get();

$atrasou = DB::table('atrasos')->orderBy('at','asc')->get()->unique();

//$atrasou = DB::table('atrasos')->orderBy('NR', 'asc')->get(['NR','AT'])->unique();

//$atrasou = DB::select('select * from atrasos order by nr');

return view('grava',compact('resultado','estatistica','atrasou'));

    
}


}