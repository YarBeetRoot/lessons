function validateForm() {

    let name = $('#name').val();
    let age = $('#age').val();

    $('#name-help, #age-help').removeClass('is-danger');
    $('#name-help, #age-help').removeClass('is-success');

    if(name !== "" && name.length <= 15) {
        $('#name-help').addClass('is-success');
        $('#name-help').text('Имя - ОК!');
    }

    if(age >= 18 && age <= 100) {
        $('#age-help').addClass('is-success');
        $('#age-help').text('Возраст - ОК!');
    }

    if (name == "" && !age) {
        $('#name-help, #age-help').addClass('is-danger');
        $('#name-help, #age-help').text('Это поле обязательное');
        return false;
    }
    if (name == "") {
        $('#name-help').addClass('is-danger');
        $('#name-help').text('Это поле обязательное');
        return false;
    }
    if (name.length > 15) {
        $('#name-help').addClass('is-danger');
        $('#name-help').text('Имя не может содержать больше 15 символов');
        return false;
    }
    if (!age) {
        $('#age-help').addClass('is-danger');
        $('#age-help').text('Это поле обязательное');
        return false;
    }
    if (age < 18 || age > 100) {
        $('#age-help').addClass('is-danger');
        $('#age-help').text('Возраст может быть от 18 до 100');
        return false;
    }

}