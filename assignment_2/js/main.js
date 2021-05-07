function validateForm(){}

function writeFormData(){}

$(function() {
    $('#submit-form').click(function() {
        let dictionary = {}
        $('input').each(function () {
            let key = this.previousSibling.previousSibling.textContent;
            let value = this.value;
            dictionary[key] = value;
        })
    })
})
window.onload = () => {
    validateForm();
}