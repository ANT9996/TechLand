let form_enable = 0

function add_lang() {
    if (form_enable === 0) {
        document.getElementById('form').classList.toggle('d-block');
        form_enable = 1;
    } else {
        document.getElementById('form').classList.toggle('d-block');
        form_enable = 0;
    }
}
