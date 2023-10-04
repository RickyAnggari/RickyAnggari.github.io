
const nextButton = document.querySelector('.carousel-button.next');
const prevButton = document.querySelector('.carousel-button.prev');
nextButton.addEventListener('click', () => {
    alert('Anda menuju data berikutnya');
});

prevButton.addEventListener('click', () => {
    alert('Anda menuju menu sebelumnnya');
});
const buttons=document.querySelectorAll("[data-carousel-button]")
buttons.forEach(button=>{
    button.addEventListener("click",()=>{
        const offset=button.dataset.carouselButton==="next"?1:-1
        const slides=button.closest("[data-carousel]").querySelector("[data-slides]")
        const activeslides=slides.querySelector("[data-active]")
        let newindex=[...slides.children].indexOf(activeslides)+offset
        if(newindex<0) newindex=slides.children.length-1
        if(newindex>=slides.children.length) newindex=0
        slides.children[newindex].dataset.active=true
        delete activeslides.dataset.active
    })
})