const doses = ['25 mg', '50 mg', '75 mg', '100 mg', '125 mg', '150 mg']
const group = document.querySelector("#group");
group.innerHTML = doses.map((dose) => `<div>
<p><input type="radio" name="dose" value="${dose}" id="${dose}"><label for="${dose}">${dose}</label></p>
  </div>`).join(' ');

const radioButtons = document.querySelectorAll('input[name="dose"]');
  for(const radioButton of radioButtons){
    radioButton.addEventListener('change', showSelected);
  }        
  function showSelected(e) {
    console.log(e);
    if (this.checked) {
      document.querySelector('#output').innerText = `Dose : ${this.value}`;
    }
}