



function buscaCep(){
			//tratando o numero informado para realizar a pesquisa
			var cep = document.getElementById('cep').value.replace(/[^0-9]/, "");

			
			if(cep.length != 8){
				alert("O CEP informado é invalido!");
				return false;
			}
			

				//definindo a url da pesquisa no webservice = url + CEP + tipo de retorno
				var url = "http://viacep.com.br/ws/"+cep+"/json/";

				//fazendo a pesquisa pelo cep e completando os campos
				$.getJSON(url, function(retorno){
					try{
						// Preenche os campos de acordo com o retorno da pesquisa
						$("#logradouro").val(retorno.logradouro);
						$("#bairro").val(retorno.bairro);
						$("#cidade").val(retorno.localidade);
						$("#estado").val(retorno.uf);
					}catch(ex){}
				});
			};