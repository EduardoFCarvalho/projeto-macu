async function runWordsScroll() {
  var documentLoaded = await document.addEventListener('DOMContentLoaded', () => {
    function scrollHandler() {
      // Obtém todos os elementos com a classe "word"
      const words = document.querySelectorAll(".word-speed");
      if (words) {
        // Itera sobre todos os elementos
        for (const word of words) {
          // Obtém a posição do elemento na tela
          const position = word.getBoundingClientRect();

          // Verifica se o elemento está no centro da tela
          if (position.y > window.innerHeight / 2 - word.offsetHeight / 2 &&
            position.y < window.innerHeight / 2 + word.offsetHeight / 2) {
            word.classList.remove("translateStage1");
          }

          // Verifica se o elemento está perto dos 25% da tela
          if (position.y > window.innerHeight * 0.25 - word.offsetHeight / 2 &&
            position.y < window.innerHeight * 0.25 + word.offsetHeight / 2) {
            word.classList.remove("translateStage2");
          }

          if (position.y < window.innerHeight / 2 - word.offsetHeight / 2) {
            word.classList.add("translateStage1");
          }

          if (position.y < window.innerHeight * 0.25 - word.offsetHeight / 2) {
            word.classList.add("translateStage2");
          }

          if (window.scrollY == 0) {
            word.classList.remove("translateStage1");
            word.classList.remove("translateStage2");
          }
        }
      }
    }

    window.addEventListener("scroll", scrollHandler);
  })

} runWordsScroll()




