@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background:#0B3861;"><b><h4 style="color: white; text-shadow: black 0.1em 0.1em 0.2em">Sabatcyber Informática - Seu portal de soluções de TI 
                
                </h4></b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            

     <table class="table table-bordered" style="margin-top: 10px;" >
        
            <tr>
                
                <td style="width:20px;">
                <center><a href="{{ route('Solucoes_TI') }}"><img title="Soluções tecnológicas" style="position:relative; width: 140px; height:150px; margin-top: 10px; border:4px solid #999;" src = "/Imagem/visita2.jpg"></a></center>
                 <p ><center style="color:#045FB4;"><b>SOLUÇÕES TECNOLÓGICAS</b></center></p>
                <p style="text-align: justify;opacity: 0.7;">Fique por dentro das soluções oferecidas pela Sabatcyber Informática e agende uma visita para que juntos possamos decidir qual a melhor solução de TI para o seu negócio.</p>
                </td>
                
                <td style="width:20px;">
                <center><a href="#"><img title="Fases do seu projeto" style="width: 140px; height:150px; margin-top: 10px; border:4px solid #999;" src = "/Imagem/fases3.jpg"></a></center>
                <p><center style="color:#045FB4;"><b>ANDAMENTO DO PROJETO</b></center></p>
                <p style="text-align: justify; opacity: 0.7;">Verifique em que fase o seu projeto se encontra, acesse o link do protótipo e veja a evolução do mesmo e participe dando sugestões de melhoria.</p>
                </td>

                <td style="width:20px;">
                <center><a href="#"><img title="Chamado técnico" style="width: 140px; height:150px; margin-top: 10px; border:4px solid #999;" src = "/Imagem/tecnico.png"></a></center>
                <p ><center style="color:#045FB4;"><b>CHAMADO TÉCNICO</b></center></p>
                <p style="text-align: justify; opacity: 0.7;">Abra um chamado, envie sua sugestão ou anexe uma tela de erro para que as melhorias ou correções sejam feitas o mais rápido possível no seu projeto.</p>
                </td>
                
                
            </tr>
            
    
    </table>



<!--TEXTOS -->


           
            </div>
        </div>

    </div>
</div>
@endsection
