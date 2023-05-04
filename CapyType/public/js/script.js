const typingText = document.querySelector(".typing-text p"),
  inpField = document.querySelector(".wrapper .input-field"),
  tryAgainBtn = document.querySelector(".refresh"),
  timeTag = document.querySelector(".time span b"),
  mistakeTag = document.querySelector(".mistake span"),
  wpmTag = document.querySelector(".wpm span"),
  cpmTag = document.querySelector(".cpm span"),
  accuracyTag = document.querySelector(".accuracy span"),
  timeButtons = document.querySelectorAll(".flex button");
  var custom;
  let paragraph, counter;

let timer,
  maxTime = 60,
  timeLeft = maxTime,
  charIndex = mistakes = isTyping = 0;

  function custom() {
    counter = 1;
    var customWordsBtn = document.querySelector("#custom-words-btn");
    var customWordsPopup = document.querySelector(".custom");

    custom = prompt("Enter your custom words:", "");
    if (custom != null) {
      paragraph = custom.value;
      loadParagraph();
      customWordsBtn.style.color = '#2ABA86';
      customWordsPopup.style.display = 'none';
    }
  }


  function loadParagraph() {
    paragraph = randomParagraph();

    typingText.innerHTML = "";
    let joinedParagraph = joinParagraph(paragraph, " ");
    joinedParagraph.split("").forEach(char => {
      let span = `<span>${char}</span>`;
      typingText.innerHTML += span;
    });
    typingText.querySelectorAll("span")[0].classList.add("active");
    document.addEventListener("keydown", () => inpField.focus());
    typingText.addEventListener("click", () => inpField.focus());
  }


//function to make paragraph in string become random
const randomParagraph = () => {
  const paragraphIndex = Math.floor(Math.random() * paragraphs.length);
  const words = paragraphs[paragraphIndex].split(" ").sort(() => Math.random() - 0.5);
  if (counter == 1){
    return custom;
  }
  else{
    return words.join(" ");
  }
};

//function to join paragraph many string
function joinParagraph(paragraph, delimiter) {
  let cleanParagraph = paragraph.replace(/[^\w\s]/g, "");
  let words = cleanParagraph.split(" ");
  let hyphenatedWords = words.map(word => word.replace(/[^A-Za-z0-9]/g, ""));
  let hyphenatedParagraph = hyphenatedWords.join(delimiter);
  return hyphenatedParagraph;
}

function initTyping() {
  let characters = typingText.querySelectorAll("span");
  let typedChar = inpField.value.split("")[charIndex];
  let isMistakeWord = false; // keep track of whether the current word has mistakes

  if (charIndex < characters.length - 1 && timeLeft > 0) {
    if (!isTyping) {
      timer = setInterval(initTimer, 1000);
      isTyping = true;
    }

    // check if the current word has mistakes
    const currentWord = characters[charIndex].innerText.trim();
    const currentWordChars = currentWord.split("");
    const typedChars = inpField.value.split("");
    for (let i = 0; i < currentWordChars.length; i++) {
      if (typedChars[charIndex + i] !== currentWordChars[i]) {
        isMistakeWord = true;
        break;
      }
    }

    if (typedChar == null) {
      if (charIndex > 0 && !isMistakeWord) {
        charIndex--;
        if (characters[charIndex].classList.contains("incorrect")) {
          mistakes--;
        }
        characters[charIndex].classList.remove("correct", "incorrect");
      }
    } else {
      if (characters[charIndex].innerText == typedChar) {
        characters[charIndex].classList.add("correct");
      } else {
        mistakes++;
        characters[charIndex].classList.add("incorrect");
      }
      charIndex++;
    }
    characters.forEach(span => span.classList.remove("active"));
    characters[charIndex].classList.add("active");

    let wpm = Math.round(((charIndex - mistakes) / 5) / (maxTime - timeLeft) * 60);
    wpm = wpm < 0 || !wpm || wpm === Infinity ? 0 : wpm;

    let accuracy = Math.round(((charIndex - mistakes) / charIndex) * 100);
    accuracy = accuracy < 0 || !accuracy || accuracy === Infinity ? 0 : accuracy;

    wpmTag.innerText = wpm;
    mistakeTag.innerText = mistakes;
    cpmTag.innerText = charIndex - mistakes;
    accuracyTag.innerText = accuracy;

    // if the current word has mistakes, prevent backspacing
    if (isMistakeWord) {
      inpField.addEventListener("keydown", (event) => {
        if (event.key === "Backspace") {
          event.preventDefault();
        }
      });
    } else {
      // otherwise, allow backspacing
      inpField.removeEventListener("keydown", (event) => {
        if (event.key === "Backspace") {
          event.preventDefault();
        }
      });
    }
  } else {
    if (timeLeft == 0 || charIndex == characters.length - 1) {
        let wpm = Math.round(((charIndex - mistakes) / 5) / (maxTime - timeLeft) * 60);
        wpm = wpm < 0 || !wpm || wpm === Infinity ? 0 : wpm;
        let accuracy = Math.round(((charIndex - mistakes) / charIndex) * 100);
        // make an AJAX request to Laravel controller to store the values
        $.ajax({
          url: '/updateWPM',
          type: 'get',
          data: {
            wpm: wpm,
            accuracy: accuracy,
            _token: $('meta[name="csrf-token"]').attr('content')
          },
          success: function(response) {
            console.log(response);
            console.log('WPM:', wpm);
            console.log('Accuracy:', accuracy);
            window.location.href = "/typing"
          },
          error: function(error) {
            console.log(error);
          }
        });
      }
    clearInterval(timer);
    inpField.value = "";
  }
}

function initTimer() {
  if (timeLeft > 0) {
    timeLeft--;
    timeTag.innerText = timeLeft;
    let wpm = Math.round(((charIndex - mistakes) / 5) / (maxTime - timeLeft) * 60);
    wpmTag.innerText = wpm;
  } else {
    clearInterval(timer);
  }
}

function resetGame() {
  loadParagraph();
  clearInterval(timer);
  timeLeft = maxTime;
  charIndex = mistakes = isTyping = 0;
  inpField.value = "";
  timeTag.innerText = timeLeft;
  wpmTag.innerText = 0;
  mistakeTag.innerText = 0;
  cpmTag.innerText = 0;
  accuracyTag.innerText = 0;
}
const btn15 = document.getElementById("btn-15");
const btn30 = document.getElementById("btn-30");
const btn60 = document.getElementById("btn-60");
const btn120 = document.getElementById("btn-120");

btn15.addEventListener("click", () => {
  maxTime = timeLeft = 15;
  resetGame();
});

btn30.addEventListener("click", () => {
  maxTime = timeLeft = 30;
  resetGame();
});

btn60.addEventListener("click", () => {
  maxTime = timeLeft = 60;
  resetGame();
});

btn120.addEventListener("click", () => {
  maxTime = timeLeft = 120;
  resetGame();
});

function changeColor(button) {
  var buttons = document.getElementsByTagName('button');
  for (var i = 0; i < buttons.length; i++) {
    buttons[i].style.color = '#526777';
  }
  if (button.id === 'time-btn') {
    document.getElementById('btn-60').style.color = '#2ABA86';
    document.querySelector('.time').style.color = '#2ABA86';
    document.getElementById('words-btn').style.color = '#526777';
    button.style.color = '#2ABA86';
    document.querySelector('.typing-text').style.fontFamily = 'initial';
  } else if (button.id === 'words-btn') {
    document.getElementById('time-btn').style.color = '#526777';
    document.querySelector('.time').style.color = '#526777';
    button.style.color = '#2ABA86';
    timeLeft = Infinity;
    if (document.querySelector('.typing-text').style.fontFamily === 'Times New Roman') {
      document.querySelector('.typing-text').style.fontFamily = 'initial';
    } else {
      document.querySelector('.typing-text').style.fontFamily = 'Times New Roman';
    }
  } else {
    button.style.color = '#2ABA86';
    document.querySelector('.time').style.color = '#2ABA86';
  }
}
loadParagraph();
inpField.addEventListener("input", initTyping);
tryAgainBtn.addEventListener("click", resetGame);
