@extends('layout.site')

@section('titulo', 'Cachorros Perdidos')
<style media="screen">
body, html{
margin: 0;
font: 16px "Lato", sans-serif;
color: #777;
height: 100%; /*necessario p/ o parallax funcionar
pq ocupa toda a tela*/

}

.conteudo{
color: #777;
background-color: white;
text-align: justify;
padding: 50px 80px;
}

h3{
text-transform: uppercase;
color: #111;
text-align: center;
}

p{
margin-bottom: 20px;
}

/**************EFEITO PARALLAX***************/
.caixa1, .caixa2, .caixa3, .caixa4{
position: relative;
height: 100%;
opacity: 0.8; /*da opacidade a imagem*/
background-repeat: no-repeat;
background-attachment: fixed; /*segredo para
 parallax funcionar, deixa a imagem fixa*/
background-size: cover; /* cobre toda a
area da tela se a imagem for menor*/
background-position: center /*deixar img
centralizada quando diminuir e aumentar tela*/
}

.caixa1{
background: #FAFAD2;
}

.caixa2{
background: #FAFAD2;
}

.caixa3{
background: #FAFAD2;
}

.conteudo-titulo{
position: absolute;
left: 0;
top: 45%;
width: 100%;
text-align: center;
}

.conteudo-titulo span.titulo{
color: white;
background-color: rgb(1,1,1,0.5);
padding: 18px;
font-size: 25px;
letter-spacing: 5px;
text-transform: uppercase;
}
</style>

@section('conteudo')

<div class="caixa1">
			<div class="conteudo-titulo">
				<span class="titulo">
					Cadastre
				</span>
			</div>
		</div>

		<div class="conteudo">
			<h3>Cadastre doguinhos perdidos</h3>
			<p>Já encontrou um doguinho perdido na rua varias vezes e não soube
      como ajuda-lo a encontrar sua familia?</p>
			<p>Esse site é a solução para você! Cadastre os doguinhos achados,
      dê detalhes do porte, pelagem, adicione imagens e
      número para contato e ajude as familias a encontrarem seus
      melhores amigos!</p>
		</div>

		<div class="caixa2">
			<div class="conteudo-titulo">
				<span class="titulo">
					Ache
				</span>
			</div>
		</div>

		<div class="conteudo">
			<h3>Ache seu melhor amigo</h3>
      <p>
        Já você que perdeu um doguinho recentemente acesse a lista
        de doguinhos perdidos e procure seu melhor amigo, entre em
        contato com quem o achou e leve novamente a felicidade para
        a sua casa!
      </p>
		</div>

		<div class="caixa3">
			<div class="conteudo-titulo">
				<span class="titulo">
					Ajude uma familia s2
				</span>
			</div>
		</div>



@endsection
