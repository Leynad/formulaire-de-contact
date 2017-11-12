$(function () {
	$('#contact-form').submit(function(e){//Event: lorsqu'on soumet 
		e.preventDefault();//Enlever le comportement par défaut lors de la soumission du formulaire
		$('.comments').empty();//remettre à 0 lors d'une soumission
		var postdata = $('#contact-form').serialize();//Mettre toutes les données dans la var
		
		$.ajax({
			type: 'POST',
			url: 'php/contact.php',
			data: postdata,
			dataType: 'json',
			success: function(result){
				if(result.isSuccess)//Message de remerciment si isSucess = true
				{
					$("#contact-form").append("<p class='thank-you'>Votre message a bien été envoyé. Merci de m'avoir contacté ;)</p>");
					$("#contact-form")[0].reset();//remettre à 0 tous les elements dans contact-form
				}
				else
				{//Si isSuccess = false => messages d'erreurs
					$("#firstname + .comments").html(result.firstnameError);
					$("#name + .comments").html(result.nameError);
					$("#email + .comments").html(result.emailError);
					$("#phone + .comments").html(result.phoneError);
					$("#message + .comments").html(result.messageError);
				}
			}
		});
		
	});
});