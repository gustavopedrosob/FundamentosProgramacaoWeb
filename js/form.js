const urlParams = new URLSearchParams(window.location.search);
displayName.textContent = urlParams.get("nome");
displayEmail.textContent = urlParams.get("email");
displayTelephone.textContent = urlParams.get("telefone");
displayMessage.textContent = urlParams.get("mensagem");
