const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
// const passwordtwo = document.getElementById("password-two");
const profileImage = document.getElementById("profileImage");

$('#form').submit(() => {

  const usernameValue = username.value?.trim();
  const emailValue = email.value?.trim();
  const passwordValue = password.value?.trim();
  // const passwordtwoValue = passwordtwo.value?.trim();
  const profileImageValue = profileImage.value?.trim();

  if (usernameValue === "") {
    
    setErrorFor(username, "Preencha esse campo");
    return false
  } else {
   
    setSuccessFor(username);
  }

  if (!isEmail(emailValue)) {
    setErrorFor(email, "Email inválido");
    return false
  } else {
    
    setSuccessFor(email);
  }

  if (passwordValue.length < 8) {
    setErrorFor(password, "Senha deve ter mais que 8 caracteres");
    return false
  } else {
   
    setSuccessFor(password);
  }

  // if (passwordValue !== passwordtwoValue) {
  //   setErrorFor(passwordtwo, "Senhas não são iguais");
  //   //canSubmit = false
  //   return false
  // } else {
  //   // adicionar a classe de sucesso
  //   setSuccessFor(passwordtwo);
  // }

  if (profileImageValue === "") {
    setErrorFor(profileImage, "Adicionar Avatar");
    return false
  } else {
    setSuccessFor(profileImage);
  }

  return true
})

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const span = formControl.querySelector("span");

  span.innerText = message;

  formControl.className = "form-control error";
}

function setSuccessFor(input) {
  const formControl = input.parentElement;

  formControl.className = "form-control success";
}

function isEmail(email) {
  return /^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/.test(
    email
  );
}

function mostrarSenha (){
  let inputPass = document.getElementById("password");
  let btnShowPass = document.getElementById("btn-senha");

  if(inputPass.type === 'password'){
    inputPass.setAttribute('type','text');
    btnShowPass.classList.replace('fa-eye','fa-eye-slash');
  }else{
    inputPass.setAttribute('type','password');
    btnShowPass.classList.replace('fa-eye-slash', 'fa-eye');
  }
}
