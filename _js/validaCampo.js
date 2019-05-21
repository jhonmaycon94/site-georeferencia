function validaCampo(){

		if(document.dados.latitude.value=="")
		{
		alert( "Preencha campo Latitude!" );
		document.dados.latitude.focus();
		return false;
		}

		if(document.dados.longitude.value=="")
		{
		alert( "Preencha campo Longitude!" );
		document.dados.longitude.focus();
		return false;
		}
			  
		if(document.dados.logradouro.value=="")
		{
		alert( "Preencha campo LOGRADOURO!" );
		document.dados.logradouro.focus();
		return false;
		}

		if(document.dados.bairro.value=="")
		{
		alert( "Preencha campo BAIRRO!" );
		document.dados.bairro.focus();
		return false;
		}

		return true;
		}