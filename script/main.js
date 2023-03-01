import { toggleDisplay } from "./utils.js";
import { todo_create } from "./dom.js";

window.onload = () => {
    
    /* CREATE */
    /* The form is made visible */
    todo_create.btn_show.addEventListener('click', () => {
        toggleDisplay(todo_create.div);
    });
    /* The form is reset */
    todo_create.form.addEventListener('reset', () => {
        toggleDisplay(todo_create.div);
    });
    /* The form is blocked */
    todo_create.form.addEventListener('submit', event => {
        if (todo_create.title.value.trim() === '' || todo_create.text.value.trim() === '') {
            event.preventDefault();
            return false;
        }
    });
}