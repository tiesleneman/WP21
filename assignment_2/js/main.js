function validateForm() {
    for (i=0;i<$('.form-control').length;i++) {
        if ($('.form-control')[i].value.length == 0) {
            $('.alert').show()
            $('.alert').html('Not all fields are filled in!')
            return
        }
    }

    if (!/^[a-zA-Z \-]+$/.test($('.form-control')[0].value)) {
        $('.alert').show()
        $('.alert').html('The Name field can only contain letters!')
        return
    }

    if (!/^[0-9]+$/.test($('.form-control')[1].value)) {
        $('.alert').show()
        $('.alert').html('The age field can only contain numbers')
        return
    }

    if (!/^[a-zA-Z]+$/.test($('.form-control')[2].value)) {
        $('.alert').show()
        $('.alert').html('The City field can only contain letters!')
        return
    }

    if (!/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/.test($('.form-control')[3].value)) {
        $('.alert').show()
        $('.alert').html('The Email address field should contain a proper email address')
        return
    }

    if (!/^[0-9]+$/.test($('.form-control')[4].value)) {
        $('.alert').show()
        $('.alert').html('The Phone number field can only contain numbers!')
        return
    }
    return true
}

function writeFormData(){
    let input_name = $('#inputName').val()
    let input_age = $('#inputAge').val()
    let input_city = $('#inputCity').val()
    let input_email = $('#inputEmail').val()
    let input_phone = $('#inputPhone').val()
    let data = {name:input_name, age:input_age, city:input_city, email:input_email, phone:input_phone}
    $('#form-content').show()
    $('#form-content td')[0].innerText = data['name']
    $('#form-content td')[1].innerText = data['age']
    $('#form-content td')[2].innerText = data['city']
    $('#form-content td')[3].innerText = data['email']
    $('#form-content td')[4].innerText = data['phone']
}

$(function() {


    if ($('#submit').click(function () {
        if (validateForm()) {
            writeFormData()
        }
    }));
    if ($('#erase').click(function () {
        $('.form-control').val('')
        $('.alert').hide()
        $('#form-content').hide()
    }));
    if ($('#contact-tab').click(function () {
        $('#link-tab').attr('class', 'nav-link')
        $('#contact-tab').attr('class', 'nav-link active')
        $('#links').attr('class', 'tab-pane')
        $('#contact').attr('class', 'tab-pane active')
    }));
    if ($('#link-tab').click(function () {
        $('#link-tab').attr('class', 'nav-link active')
        $('#contact-tab').attr('class', 'nav-link')
        $('#links').attr('class', 'tab-pane active')
        $('#contact').attr('class', 'tab-pane')
    }));



});