
// 1. LITRES VALIDATION

const litres = document.getElementById("litres");
const litresMessage = document.getElementById("litres-message");

function checkLitres() {
    const value = Number(litres.value);

    if (litres.value === "") {
        litresMessage.textContent = "";
        litres.classList.remove("invalid");
    }
    else if (value <= 0) {
        litresMessage.textContent = "Litres must be greater than 0";
        litres.classList.add("invalid");
    }
    else if (value > 60) {
        litresMessage.textContent =
            "Over 60 litres in one session. Check the reading.";
        litres.classList.add("invalid");
    }
    else {
        litresMessage.textContent = "";
        litres.classList.remove("invalid");
    }
}

if (litres) {
    litres.addEventListener("input", checkLitres);
}


// 2. MEMBER NUMBER VALIDATION

const member = document.querySelector('#member');
const memberMessage = document.querySelector('#member-message');

const memberShape = /^ER-[0-9]{4}$/;

function checkMember() {
    const typed = member.value.trim().toUpperCase();
    member.value = typed;

    if (typed === "") {
        memberMessage.textContent = "";
        member.classList.remove("invalid");
    }
    else if (memberShape.test(typed)) {
        memberMessage.textContent = "";
        member.classList.remove("invalid");
    }
    else {
        memberMessage.textContent =
            "A member number looks like ER-0001.";
        member.classList.add("invalid");
    }
}

if (member) {
    member.addEventListener('blur', checkMember);
}

const deliveryForm = document.querySelector('#delivery-form');
const formMessage = document.querySelector('#form-message');

function recordDelivery(event) {
    event.preventDefault();
    checkLitres();
    checkMember();

    if (member.classList.contains('invalid')) {
        member.focus();
    }
    else if (litres.classList.contains('invalid')) {
        litres.focus();
    }
    else {
        formMessage.textContent = 'Checked: ' + member.value + ', ' +
            litres.value + ' litres. Nothing is sent yet: that needs a server.';
    }
}

if (deliveryForm) {
    deliveryForm.addEventListener('submit', recordDelivery);
}
