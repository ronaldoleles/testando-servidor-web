class Validator {
  constructor() {
    this.validations = [];
  }

  //iniciar a validação de todos os campos
  validate(form) {
    //pegar inputs
    let inputs = form.getElementsByTagName('input');
    console.log(inputs);
    //HTMLColeection -> array
    let inputsArray = [...inputs];

    console.log(inputsArray);
  }
}
//elementos que buscam os id
let form = document.getElementById('registrer-form');
let submit = document.getElementById('btn-submit');
let validator = new Validator();
//evento que dispara as validações
submit.addEventListener('click', function (e) {
  e.preventDefault();
  console.log('funcionou!');
  validator.validate(form);
});
