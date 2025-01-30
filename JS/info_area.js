document.addEventListener('DOMContentLoaded', (event) => {
    const textarea = document.querySelector('.my-textarea');
    const textarea2 = document.querySelector('.my-textarea2');

    const adjustHeight = (element) => {
        element.style.height = 'auto'; // Primeiro, redefine a altura
        element.style.height = (element.scrollHeight) + 'px'; // Ajusta a altura conforme o conteúdo
    };

    textarea.addEventListener('input', () => adjustHeight(textarea));
    textarea2.addEventListener('input', () => adjustHeight(textarea2));

    // Ajusta a altura no carregamento inicial
    adjustHeight(textarea);
    adjustHeight(textarea2);
});