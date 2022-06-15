let cep = document.querySelector('#cep');
let estado = document.querySelector('#estado');
let cidade = document.querySelector('#cidade');
let rua = document.querySelector('#rua');
let bairro = document.querySelector('#bairro');


cep.addEventListener('blur',function(e){
  let cep = e.target.value;
  let script = document.createElement('script');
  script.src = 'https://viacep.com.br/ws/'+cep+'/json/?callback=popularForm';
  document.body.appendChild(script); 
})

function popularForm(resposta){
  
  if("erro" in resposta){
    alert('cep não encontrado');
    return;
  }

  estado.value = resposta.uf;
  cidade.value = resposta.localidade;
  rua.value = resposta.logradouro;
  bairro.value = resposta.bairro;

}