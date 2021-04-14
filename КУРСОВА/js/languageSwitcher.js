const langEl = document.querySelector('.langWrap');
const link = document.querySelectorAll('a');
const titleEl = document.querySelector('.title');
const descrEl = document.querySelector('.description');

link.forEach(el => {
    el.addEventListener('click',()=>{
        langEl.querySelector('.en').classList.remove('en');
        el.classList.add('en');

        const attr = el.getAttribute('language');

        titleEl.textContent = data[attr].title;
        descrEl.textContent = data[attr].description;
    });
});
let data = {
    "bulgarian": {
        /* "title": "Hello World",*/
        "description":
            "Бързо-развиващ се супер маркет, който Ви предлага огромно разнообразие от продукти, подбрани с добро качество."
    },
    "english": {
        /* "title": 'Hallo Welt', */
        "description":
            "Fast-growing supermarket that offers you a huge variety of products selected with good quality"
    },
    "german": {
        /* "title": "Bonjour le monde",*/
        "description": "Schnell wachsender Supermarkt, der Ihnen eine große Auswahl an Produkten bietet, die mit guter Qualität ausgewählt wurden"
    }
}