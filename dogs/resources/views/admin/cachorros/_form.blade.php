<div class="input-field">
  <input type="text" name="cor" value="{{isset($registro->cor) ? $registro->cor :'' }}" placeholder="Ex: marrom, branco, caramelo">
  <label>Cor</label>
</div>

<div class="input-field">
  <input type="text" name="porte" value="" placeholder="Pequeno, médio ou grande">
  <label>Porte</label>
</div>

<div class="input-field">
  <input type="text" name="pelagem" value="" placeholder="Pequena, média ou grande">
  <label>Pelagem</label>
</div>

<div class="input-field">
  <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao :'' }}" placeholder="Cachorro possui alguma deficiencia, mancha, coleira e onde foi encontrado">
  <label>Mais detalhes</label>
</div>

<div class="file-field input-field">
  <div class="btn">
    <span>Acidionar Imagem</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>

@if(isset($registro->imagem))
<div class="input-field">
  <img width="50" height="50" src="{{asset($registro->imagem)}}">
</div>
@endif
<div class="input-field">
  <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome :'' }}" placeholder="Nome para contato">
  <label>Seu nome</label>
</div>

<div class="input-field">
  <input type="text" name="telefone" value="{{isset($registro->telefone) ? $registro->telefone :'' }}" placeholder="Telefone para contato">
  <label>Telefone</label>
</div>
