const inputFile =
document.querySelector("#foto"); // Pega o id do input

const pictureImage =
document.querySelector(".picture__image"); // Pega o nome da classe do span

const pictureImageTxt = "Escolha uma imagem"; // define o nome do span
pictureImage.innerHTML = pictureImageTxt; // coloca o nome do span no html

inputFile.addEventListener('change', function(e) { // Adicionando função na mudança do file
    const inputTarget = e.target; // Pega essa mudança e guarda no var
    
    const file = inputTarget.files[0];

    if(file) {
        const reader = new FileReader(); // Ler esse arquivo escolhido

        reader.addEventListener('load', function(e) { // Faz o a funcionalidade de mudança
            const readerTarget = e.target;

            const img = document.createElement('img'); // Criar imagem
            img.src = readerTarget.result;
            img.classList.add('picture__img');

            pictureImage.innerHTML = ''; // Não repetir as imagens
            pictureImage.appendChild(img); // Colocar a imagem escolhida
        })

        var div = document.querySelector(".msg"); // Exclui a mensagem da imagem
        if (div !== null) {
            div.remove();
        }

        reader.readAsDataURL(file); // Ler local da imagem
    } else {
        pictureImage.innerHTML = pictureImageTxt; // Caso nenhuma imagem é escolhida ele fará nada
    }
})