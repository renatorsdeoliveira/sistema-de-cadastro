	var idContador = 0;
	var cont = 0;	
	function exclui(idCampo){
		var campo = $("#"+idCampo.id);
		campo.hide(200);
		cont--
	}

	$(document).ready(function() {
		$('input.campoTelefone').inputmask({mask: ['(99) 9999-9999', '(99) 99999-9999']});
		

		$("#btnAdicionaTelefone").click(function(e){
			e.preventDefault();
			adicionaCampo();
		})
		
		function adicionaCampo(){

			idContador++;
		
			if(cont < 2){
				cont++;

				var idCampo = "campoExtra"+idContador;
			
				var html = "";
				
				html += "<div style='margin-top: 8px;' class='input-group' id='"+idCampo+"'>";
				html += "<input type='text' name='telefoneCliente[]' class='form-control campoTelefone' placeholder='Digite um Telefone'/>";
				html += "<span class='input-group-btn'>";
				html +=	"<button class='btn' onclick='exclui("+idCampo+")' type='button'><span class='fa fa-trash'></span></button>";
				html += "</span>";
				html += "</div>";
		
				$("#novoCampo").append(html);
			}
		}
	
	});