/* Validação do formulário de Cadastro -Trabalhe Conosco */
$("#formCadasTrab").validate({
  rules:{
    nome: "required",
    telefone: "required",
    email: {
    	email: true,
    	required: true
    },
    faleSobreVoce: "required",
    anexo: "required"
  }
});
/* /Validação do formulário de Cadastro -Trabalhe Conosco */

/* Validação do formulário de Cadastro Simples */
$("#formCadastro").validate({
  rules:{
    email: {
        email: true,
        required: true
    },
    senha: {
        required: true,
        minlength: 5
    },
    confSenha: {
        required: true,
        minlength: 5,
        equalTo: "#senha"
    }
  }
});
/* /Validação do formulário de Cadastro Simples */

/* Validação do formulário de Login */
$("#formLoginPag").validate({
  rules:{
    email: {
        email: true,
        required: true
    },
    senha: 'required'
  }
});
/* /Validação do formulário de Login */

/* Validação do formulário de Cadastro Completo */
$("#formCadasConta").validate({
  rules:{
    senha: {
        required: true,
        minlength: 5
    },
    confSenha: {
        required: true,
        minlength: 5,
        equalTo: "#senha"
    }
  }
});
/* /Validação do formulário de Cadastro Completo */

/* Validação do formulário de Cadastro Revendedor */
$("#formCadasRevend").validate({});
/* /Validação do formulário de Cadastro Revendedor */

/* Validação do formulário de Login do Revendedor, no rodape */
$("#formLogin").validate({});

/* Validação do formulário de Login do Revendedor, no rodape */
$("#formNews").validate({});