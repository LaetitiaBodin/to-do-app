export function toggleDisplay (el) {
    el.classList.toggle('hidden');
    el.classList.toggle('flex');
}

export function editDataset (obj, val) {
    obj.id.value = val;
    obj.title.dataset.title = document.querySelector(`article[data-id='${val}'] h1`).dataset.title;
    obj.title.innerText = document.querySelector(`article[data-id='${val}'] h1`).dataset.title;
    obj.text.dataset.text = document.querySelector(`article[data-id='${val}'] p`).dataset.text;
    obj.text.innerText = document.querySelector(`article[data-id='${val}'] p`).dataset.text;  
}