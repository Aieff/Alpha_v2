let list = document.querySelectorAll('.list');
let card = document.querySelectorAll('.card');

for(let i = 0; i < list.length; i++) {
    list[i].addEventListener('click', function() {
        for(let j=0; j < list.length; j++) {
            list[j].classList.remove('active');
        }
        this.classList.add('active');

        let datafilter = this.getAttribute('data-filter');

        for(let k=0; k < card.length; k++) 
        {
            card[k].classList.remove('active')
            card[k].classList.add('hide')

            if(card[k].getAttribute('data-item') == datafilter || datafilter == 'all'){
                card[k].classList.remove('hide')
                card[k].classList.add('active')
            }
        }
    })
}

var side_action = document.querySelector(".side-action");
side_action.addEventListener("click", function(){

    document.querySelector("body").classList.toggle("active");

})

const openModalButton = document.querySelector("#open-modal");
const closeModalButton = document.querySelector("#close-modal");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");

const toggleModal = () => {
  modal.classList.toggle("hide");
  fade.classList.toggle("hide");
};

[openModalButton, closeModalButton, fade].forEach((el) => {
  el.addEventListener("click", () => toggleModal());
});