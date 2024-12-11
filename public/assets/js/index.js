// Toggle Menu Functionaliy Start
document.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".custom-toggler").addEventListener("click", function () {
    document.body.classList.add("menuToggle");
  });

  document.querySelector(".custom-closer").addEventListener("click", function () {
    document.body.classList.remove("menuToggle");
  });
});
// Toggle Menu Functionaliy End


// AOS JS Start
AOS.init();
// AOS JS Start




// Newsletter Validations JS Start
function validateNews() {
  const emailInput = document.getElementsByClassName('email-signup-input').value;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


  if (!emailInput) {
    alert('E-Mail darf nicht leer sein');
  } else if (!emailRegex.test(emailInput)) {
    alert('Ungültige E-Mail-Adresse! Bitte geben Sie eine gültige Adresse ein.');
  } else {
    alert('Registrierung erfolgreich! DANKE.');
  }
}
// Newsletter Validations JS End



// League Pages Tabs JS Start
$('.tab').on('click', function (evt) {
  evt.preventDefault();
    $('.tab').removeClass('active');
  $(this).addClass('active');
  var sel = $(this).attr('data-toggle-target');  
  $('.tab-content').removeClass('active');
  $(sel).addClass('active');
});
$(".profile").click(function(){
  $(this).find(".dropdown").slideToggle();
});
// League Pages Tabs JS Start

// Contact Form Validation Start
function validateContactForm() {
  const name = document.getElementsByClassName('contact-form').value.trim();
  const email = document.getElementsByClassName('contact-email').value.trim();
  const topic = document.getElementsByClassName('contact-topic').value;
  const message = document.getElementsByClassName('message').value.trim();

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (name.length < 2 || name.length > 100) {
    alert('Le nom doit comporter au minimum 2 caractères et au maximum 100 caractères.');
    return false;
  }
  if (!emailRegex.test(email)) {
    alert(`'S'il vous plaît, mettez une adresse email valide.'`);
    return false;
  }
  if (!topic) {
    alert('Veuillez choisir un sujet.');
    return false;
  }
  if (message.length < 10 || message.length > 1000) {
    alert('Le message doit comporter au minimum 10 et au maximum 1000 caractères.');
    return false;
  }
  alert('Le formulaire a été envoyé avec succès ! Merci de nous avoir contacté.');
  return true;
}
// Contact Form Validation End


