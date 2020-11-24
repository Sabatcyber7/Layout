<!DOCTYPE html>

<html>

<head>

<title>
React
</title>

</head>

<body>
<div id="root">


</div>

<script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>



<script type="text/babel">

function Componente() {

    var nomes = "MARCOS";

return(   
<div>

<h1>Olá Alexandre </h1>
<p> O meu nome é {nomes} </p> 
</div>)
	
}
var teste = document.getElementById('root')
ReactDOM.render(<Componente/>,teste);	
</script>


</body>

</html>



<script type="text/babel">

class Meu extends React.Component {

render(){
    return(<div> <p>Teste </p> </div>)
}
    
}


var teste = document.getElementById('root')

ReactDOM.render(<Meu/>,teste);	

</script>


function CompA(props){

    return(<div>
    
    <p> Olá. {props.nome} {props.apelido} </p>
    </div>)

}

class CompB extends React.Component{
 
    render() {

        return(<div>
        <p>Ola novamente {this.props.nome} {this.props.apelido} </p>
        </div>)
    }
    

}

var teste = document.getElementById('root')

ReactDOM.render(<CompB nome="Alexandre" apelido="Dumas"/>,teste);	

