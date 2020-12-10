export function contact(){
  
    /***************
     * FORMULAIRE
     ***************/

    let form = document.getElementById('myForm');
    let smallNom = form.querySelector('small.nom');
    let smallEmail = form.querySelector('small.email');
    let smallSujet = form.querySelector('small.sujet');
    let smallMessage = form.querySelector('small.message');
    let smallGeneral = form.querySelector('small.general');
    let erreurNom = '', erreurEmail = '', erreurSujet = '', erreurMessage = '';
    let isValid = false;

    form.addEventListener("submit", function(e){
      
      if(form.nom.value && form.email.value && form.sujet.value && form.message.value){
        smallGeneral.innerHTML = '';
        if(form.nom.value.length < 27){
          erreurNom = '';
         if(validEmail(form.email.value)){
          erreurEmail = '';
          isValid = true;
         }else{
          isValid = false;
          form.email.classList.add('is-danger');
          erreurEmail = 'adresse invalide';
         }
        }else{
          form.nom.classList.add('is-danger');
          isValid = false;
          erreurNom = 'nom incorrect';
        }
      }else{
        isValid = false;
        smallGeneral.innerHTML = 'Tous les champs doivent être remplis';
      }
      smallNom.innerHTML = erreurNom;
      smallEmail.innerHTML = erreurEmail;
      smallSujet.innerHTML = erreurSujet;
      smallMessage.innerHTML = erreurMessage;
      
      if(!isValid){
        e.preventDefault();
      }
      

  });

  const validEmail = function(inputEmail){
    let emailRegExp = new RegExp('^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$', 'g');
    let testEmail = emailRegExp.test(inputEmail);
    return testEmail;
  } 
  

}

