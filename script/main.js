import { toggleDisplay, editDataset } from "./utils.js";
import { todo_create, todo_update, todo_delete } from "./dom.js";

window.onload = () => {
    
    /* CREATE */
    /* The form is made visible */
    todo_create.btn_show.addEventListener('click', () => {
        toggleDisplay(todo_create.div);
    });
    /* The form is reset and hidden */
    todo_create.form.addEventListener('reset', () => {
        toggleDisplay(todo_create.div);
    });
    /* The form is blocked if the input values are not valid */
    todo_create.form.addEventListener('submit', event => {
        if (todo_create.title.value.trim() === '' || todo_create.text.value.trim() === '') {
            event.preventDefault();
            return false;
        }
    });
    
    /* UPDATE */
    /* The form is made visible */
    /* The form's data is populated with the data belonging to the to-do whose edit button was clicked on */
    todo_update.btns_show.forEach(btn => btn.addEventListener('click', () => {
        editDataset(todo_update, btn.dataset.id);
        toggleDisplay(todo_update.div);
    }));
    /* The form is reset and hidden */
    todo_update.form.addEventListener('reset', () => {
        toggleDisplay(todo_update.div);
    });
    /* The form is blocked if the input values are not valid */
    todo_update.form.addEventListener('submit', event => {
        if (todo_update.title.value.trim() === '' || todo_update.text.value.trim() === '') {
            event.preventDefault();
            return false;
        }
    });

    /* DELETE */
    /* The form is made visible */
    /* The form's data is populated with the data belonging to the to-do whose edit button was clicked on */
    todo_delete.btns_show.forEach(btn => btn.addEventListener('click', () => {
        editDataset(todo_delete, btn.dataset.id);
        toggleDisplay(todo_delete.div);
    }));
    /* The form is reset and hidden */
    todo_delete.form.addEventListener('reset', () => {
        toggleDisplay(todo_delete.div);
    });
}