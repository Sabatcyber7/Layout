<!DOCTYPE html>

<html>

<head>

<title>
React
</title>

</head>

<body>
<div id="root"> </div>

<script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
<script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>


<style>
.read{

    background-color: red;
    color: while;
    padding:10px;
}
</style>

<script type="text/babel">

class Adicao extends React.Component{

    render(){

        return(
<div className="read">
<p>Numero { this.props.a} + {this.props.b} = {this.props.a + this.props.b}
<br/>{this.props.nome}
</p>

</div>

        )
    }
}


var teste = document.getElementById('root')

ReactDOM.render(<Adicao a={10} b={5} nome="Alexandre" apelido="Dumas"/>,teste);	

</script>


</body>

</html>

