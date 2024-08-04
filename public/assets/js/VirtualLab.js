document.addEventListener('DOMContentLoaded', function () {
    const metals = document.querySelectorAll('.metal');
    let draggedMetal = null;
    let currentStep = 0;

    metals.forEach(metal => {
        metal.addEventListener('dragstart', (e) => {
            draggedMetal = e.target;
            setTimeout(() => {
                e.target.style.display = 'none';
            }, 0);
        });

        metal.addEventListener('dragend', (e) => {
            setTimeout(() => {
                e.target.style.display = 'block';
                draggedMetal = null;
            }, 0);
        });
    });

    const reactionContainer = document.getElementById('reaction-container');
    const waterImage = document.getElementById('water-image');

    reactionContainer.addEventListener('dragover', (e) => {
        e.preventDefault();
    });

    reactionContainer.addEventListener('drop', (e) => {
        e.preventDefault();
        if (draggedMetal) {
            let reactionImageSrc = '';
            switch (draggedMetal.id) {
                case 'lithium':
                    reactionImageSrc = 'assets/img/VirtualLab/lithiumObservation.png';
                    break;
                case 'sodium':
                    reactionImageSrc = 'assets/img/VirtualLab/sodiumObservation.png';
                    break;
                case 'potassium':
                    reactionImageSrc = 'assets/img/VirtualLab/potassiumObservation.png';
                    break;
                case 'rubidium':
                    reactionImageSrc = 'assets/img/VirtualLab/rubidiumObservation.png';
                    break;
                default:
                    console.error('Unknown metal:', draggedMetal.id);
                    return;
            }
            waterImage.src = reactionImageSrc;
            currentStep++;
            nextStep();
        }
    });

    const chatbox = document.getElementById('chat-messages');
    const chatInput = document.getElementById('chat-input');
    const sendButton = document.getElementById('send-button');

    function sendMessage(message, sender = 'user') {
        const messageElement = document.createElement('div');
        messageElement.textContent = message;
        messageElement.classList.add('chat-message', `${sender}-message`);
        chatbox.appendChild(messageElement);
        chatbox.scrollTop = chatbox.scrollHeight;
    }

    function handleUserInput() {
        const message = chatInput.value.trim();
        if (message !== '') {
            sendMessage(message, 'user');
            chatInput.value = '';
            if (currentStep % 2 === 1) { // Check if it's the observation step
                checkObservation(message);
            } else if (currentStep === 8) { // Check if it's the ranking step
                checkRanking(message);
            }
        }
    }

    sendButton.addEventListener('click', handleUserInput);

    chatInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            handleUserInput();
        }
    });

    function checkObservation(observation) {
        const correctObservations = [
            ["slow","slowly", "fizzing", "no ignition"],
            ["vigorous", "skates", "fizzing", "yellow-orange flame"],
            ["very vigorous", "skates", "fizzing", "lilac flame","purple flame"],
            ["extremely vigorous", "explosive", "immediate ignition", "explosion"]
        ];
    
        const predefinedAnswers = [
            "The reaction with lithium is slow and produces fizzing, but there is no ignition.",
            "The reaction with sodium is vigorous, skates on the water surface, produces fizzing, and a yellow-orange flame.",
            "The reaction with potassium is very vigorous, skates on the water surface, produces fizzing, and a lilac flame.",
            "The reaction with rubidium is extremely vigorous, explosive, with immediate ignition, and an explosion."
        ];
    
        const index = Math.floor(currentStep / 2);
        const keywords = correctObservations[index];
        const matchedKeywords = keywords.filter(keyword => observation.toLowerCase().includes(keyword));
    
        if (matchedKeywords.length === keywords.length) {
            sendMessage("Correct! " + predefinedAnswers[index], 'assistant');
        } else if (matchedKeywords.length > 0) {
            sendMessage("You are almost correct. " + predefinedAnswers[index], 'assistant');
        } else {
            sendMessage("Incorrect. " + predefinedAnswers[index], 'assistant');
        }
    
        chatbox.scrollTop = chatbox.scrollHeight; // Auto-scroll to the bottom
    
        currentStep++;
        nextStep();
    }
    

    function checkRanking(ranking) {
        const correctRanking = ["rubidium", "potassium", "sodium", "lithium"];
        const userRanking = ranking.toLowerCase().split(',').map(item => item.trim());

        let correct = correctRanking.every((metal, index) => metal === userRanking[index]);

        if (correct) {
            sendMessage("Correct! The ranking of reactivity is: Rubidium, Potassium, Sodium, Lithium.", 'assistant');
        } else {
            sendMessage("Incorrect. The correct ranking of reactivity is: Rubidium, Potassium, Sodium, Lithium.", 'assistant');
        }

        // Provide explanation about the correct ranking
        sendMessage("Explanation: The reactivity of alkali metals increases as you move down the group in the periodic table. This is because the outer electron is further away from the nucleus, making it easier to lose and thus react.", 'assistant');
        
        // Congratulate the student for completing the lab
        sendMessage("Congratulations! You have completed the lab.", 'assistant');
        chatbox.scrollTop = chatbox.scrollHeight; // Auto-scroll to the bottom
    }

    function nextStep() {
        switch (currentStep) {
            case 0:
                sendMessage("Welcome to the lab! Let's start by dragging Lithium into the water and write your observation.", 'assistant');
                break;
            case 2:
                sendMessage("Now, drag Sodium into the water and write your observation.", 'assistant');
                break;
            case 4:
                sendMessage("Next, drag Potassium into the water and write your observation.", 'assistant');
                break;
            case 6:
                sendMessage("Finally, drag Rubidium into the water and write your observation.", 'assistant');
                break;
            case 8:
                sendMessage("Great! Now rank the reactivity of the metals you tested from most reactive to least reactive.", 'assistant');
                break;
            default:
                break;
        }
    }

    nextStep(); // Start the flow with the first instruction
});
