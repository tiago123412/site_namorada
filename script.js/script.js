function enviarMensagem() {
    let mood = document.getElementById("mood").value;
    let message = document.getElementById("message").value;

    if (message.trim() === "") {
        alert("Por favor, escreva uma mensagem antes de enviar.");
        return;
    }

    let data = new FormData();
    data.append("mood", mood);
    data.append("message", message);

    fetch("salvar_mensagem.php", {
        method: "POST",
        body: data
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("mensagem-enviada").innerHTML = "<p>Mensagem enviada com sucesso!</p>";
        document.getElementById("message").value = "";
    })
    .catch(error => console.error("Erro ao enviar:", error));
}
