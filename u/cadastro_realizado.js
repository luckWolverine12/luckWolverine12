function validar(){
    var nome = document.getElementById('nome');
    var email = document.getElementById('email');
    var senha = document.getElementById('senha');


if(nome.value == ""){
    alert("nome nao informado!");

nome.focus();

return;
}
if(email.value ==""){
    alert("email nao informado!");
    
    email.focus();
    
    return;
}
if(senha.value ==""){
    alert("senha nao informado!");
    
    senha.focus();
    
    return;
    
}

alert("cadastro enviado!");
}

function getUsuario(usuario,senha,email){
    var usuario = document.getElementById('usuario cadastrado com sucesso!').innerHTML('usuarios cadastrados com sucesso...');
    var senha = document.getElementById('senha cadastrada com sucesso!').innerHTML('senha cadastrada com sucesso!');
    
    var email = document.getElementById('email cadastrado com sucesso!').innerHTML('email cadastrada com sucesso!');
    
    if(usuario.value ==""){
        alert("usuario cadastrado!");
        
        usuario.focus();
        
        return false;
    }
    if(senha.value){
        alert("senha cadastrada com sucesso!");
         
         senha.focus();
          
          return false;
    }
    if(email.value){
        alert('email cadastrado com sucesso!');
        
        email.focus();
        
        return false;
    }
    
    alert("usuario cadastrado com sucesso!");
}