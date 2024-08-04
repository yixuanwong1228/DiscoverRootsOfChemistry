const canvas = document.getElementById('atomCanvas');
const ctx = canvas.getContext('2d');
canvas.width = 400;
canvas.height = 400;

const centerX = canvas.width / 2;
const centerY = canvas.height / 2;
const nucleusRadius = 30;
const firstOrbitalRadius = 60;  // Radius for the first orbital
const secondOrbitalRadius = 110; // Radius for the second orbital
const thirdOrbitalRadius = 160; // Radius for the third orbital
const electronRadius = 5;

const maxElectronsFirstOrbital = 2; // Max electrons in the first orbital
const maxElectronsSecondOrbital = 8; // Max electrons in the second orbital
const maxElectronsThirdOrbital = 8; // Max electrons in the third orbital

let electronsInFirstOrbital = 0;
let electronsInSecondOrbital = 0;
let electronsInThirdOrbital = 0;

const protonLimit = 18;
const neutronLimit = 18;
const electronLimit = 18; // Total electrons

let protonCount = 0;
let neutronCount = 0;
let electronCount = 0;

const particles = document.querySelectorAll('.particle');
let draggedParticle = null;
const currentProtonsElement = document.getElementById('current-protons');
    const currentNeutronsElement = document.getElementById('current-neutrons');
    const currentElectronsElement = document.getElementById('current-electrons');

// Event listeners for drag and drop
particles.forEach(particle => {
    particle.addEventListener('dragstart', (e) => {
        draggedParticle = e.target;
        setTimeout(() => {
            e.target.style.display = 'none';
        }, 0);
    });

    particle.addEventListener('dragend', (e) => {
        setTimeout(() => {
            e.target.style.display = 'block';
            draggedParticle = null;
        }, 0);
    });
});

const atomContainer = document.getElementById('atom-container');

atomContainer.addEventListener('dragover', (e) => {
    e.preventDefault();
});

atomContainer.addEventListener('drop', (e) => {
    e.preventDefault();
    const rect = atomContainer.getBoundingClientRect();
    const x = e.clientX - rect.left - draggedParticle.offsetWidth / 2;
    const y = e.clientY - rect.top - draggedParticle.offsetHeight / 2;

    if (draggedParticle.classList.contains('proton')) {
        // Constrain protons within the nucleus area
        const distanceFromCenter = Math.sqrt(Math.pow(x - centerX, 2) + Math.pow(y - centerY, 2));
        if (distanceFromCenter <= nucleusRadius && protonCount < protonLimit) {
            draggedParticle.style.left = `${x}px`;
            draggedParticle.style.top = `${y}px`;
            atomContainer.appendChild(draggedParticle);
            protonCount++;
            currentProtonsElement.textContent = protonCount; 
        }
    } else if (draggedParticle.classList.contains('neutron')) {
        // Constrain neutrons within the nucleus area
        const distanceFromCenter = Math.sqrt(Math.pow(x - centerX, 2) + Math.pow(y - centerY, 2));
        if (distanceFromCenter <= nucleusRadius && neutronCount < neutronLimit) {
            draggedParticle.style.left = `${x}px`;
            draggedParticle.style.top = `${y}px`;
            atomContainer.appendChild(draggedParticle);
            neutronCount++;
            currentNeutronsElement.textContent = neutronCount; 
        }
    } else if (draggedParticle.classList.contains('electron')) {
        let angle;
        let electronX;
        let electronY;

        if (electronsInFirstOrbital < maxElectronsFirstOrbital) {
            // Place in the first orbital
            angle = (electronsInFirstOrbital / maxElectronsFirstOrbital) * 2 * Math.PI;
            electronX = centerX + firstOrbitalRadius * Math.cos(angle);
            electronY = centerY + firstOrbitalRadius * Math.sin(angle);
            electronsInFirstOrbital++;
        } else if (electronsInSecondOrbital < maxElectronsSecondOrbital) {
            // Place in the second orbital
            angle = (electronsInSecondOrbital / maxElectronsSecondOrbital) * 2 * Math.PI;
            electronX = centerX + secondOrbitalRadius * Math.cos(angle);
            electronY = centerY + secondOrbitalRadius * Math.sin(angle);
            electronsInSecondOrbital++;
        } else if (electronsInThirdOrbital < maxElectronsThirdOrbital) {
            // Place in the third orbital
            angle = (electronsInThirdOrbital / maxElectronsThirdOrbital) * 2 * Math.PI;
            electronX = centerX + thirdOrbitalRadius * Math.cos(angle);
            electronY = centerY + thirdOrbitalRadius * Math.sin(angle);
            electronsInThirdOrbital++;
        } else {
            return; // No more space for electrons
        }

        draggedParticle.style.left = `${electronX - electronRadius}px`;
        draggedParticle.style.top = `${electronY - electronRadius}px`;
        atomContainer.appendChild(draggedParticle);
        electronCount++;
        currentElectronsElement.textContent = electronCount; 
    }
});

function drawAtom() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // Draw nucleus
    ctx.beginPath();
    ctx.arc(centerX, centerY, nucleusRadius, 0, 2 * Math.PI);
    ctx.fillStyle = 'orange';
    ctx.fill();

    // Draw first orbital path
    ctx.beginPath();
    ctx.setLineDash([5, 15]);
    ctx.arc(centerX, centerY, firstOrbitalRadius, 0, 2 * Math.PI);
    ctx.strokeStyle = 'white'; // Color for the first orbital
    ctx.stroke();
    ctx.setLineDash([]);

    // Draw second orbital path
    ctx.beginPath();
    ctx.setLineDash([5, 15]);
    ctx.arc(centerX, centerY, secondOrbitalRadius, 0, 2 * Math.PI);
    ctx.strokeStyle = 'white'; // Color for the second orbital
    ctx.stroke();
    ctx.setLineDash([]);

    // Draw third orbital path
    ctx.beginPath();
    ctx.setLineDash([5, 15]);
    ctx.arc(centerX, centerY, thirdOrbitalRadius, 0, 2 * Math.PI);
    ctx.strokeStyle = 'white'; // Color for the third orbital
    ctx.stroke();
    ctx.setLineDash([]);

    requestAnimationFrame(drawAtom);
}

const atomSelect = document.getElementById('atom-select');
const atomName = document.getElementById('atom-name');
const nucleonNumberElement = document.getElementById('nucleon-number');
    const protonNumberElement = document.getElementById('proton-number');
    const elementSymbolElement = document.getElementById('element-symbol');

    const atomData = {
        oxygen: { name: 'Oxygen (O)', protons: 8, neutrons: 8, electrons: 8, symbol: 'O' },
        sodium: { name: 'Sodium (Na)', protons: 11, neutrons: 12, electrons: 11, symbol: 'Na' },
        magnesium: { name: 'Magnesium (Mg)', protons: 12, neutrons: 12, electrons: 12, symbol: 'Mg' },
    };
function updateAtomData() {
    const selectedAtom = atomSelect.value;
    const data = atomData[selectedAtom];
    atomName.textContent = data.name;

    const nucleonNumber = data.protons + data.neutrons;
    nucleonNumberElement.textContent = nucleonNumber;
    protonNumberElement.textContent = data.protons;
    elementSymbolElement.textContent = data.symbol;
}

atomSelect.addEventListener('change', updateAtomData);
updateAtomData();


function checkAtom() {
    const selectedAtom = atomSelect.value;
    const data = atomData[selectedAtom];
    if (protonCount === data.protons && neutronCount === data.neutrons && electronCount === data.electrons) {
        feedback.textContent = `Correct! You've built a ${data.name} atom.`;
        feedback.style.color = 'green';
    } else {
        feedback.textContent = `Incorrect. Please check your atom configuration for ${data.name}.`;
        feedback.style.color = 'red';
    }
}

document.getElementById('check-button').addEventListener('click', checkAtom);

drawAtom();
