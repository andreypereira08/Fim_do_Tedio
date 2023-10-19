document.addEventListener("DOMContentLoaded", function() {
    const suggestButton = document.getElementById("suggestActivity");
    const activityElement = document.getElementById("activity");

    suggestButton.addEventListener("click", function() {
        // Faz a solicitação à API Bored
        fetch("https://www.boredapi.com/api/activity/")
            .then((response) => response.json())
            .then((data) => {
                // Exibe a nova atividade sugerida
                activityElement.textContent = data.activity;
            })
            .catch((error) => {
                console.error("Erro ao obter a atividade: " + error);
            });
    });
});