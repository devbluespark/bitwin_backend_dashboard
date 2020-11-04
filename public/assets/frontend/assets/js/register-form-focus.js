$('#user_fname').on('focus', function () {
    $('#firstNameDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#firstNameDiv').removeClass('bs-form-group-focused');
});

$('#user_lname').on('focus', function () {
    $('#lastNameDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#lastNameDiv').removeClass('bs-form-group-focused');
});

$('#user_phn1').on('focus', function () {
    $('#mobileNumberDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#mobileNumberDiv').removeClass('bs-form-group-focused');
});

$('#email').on('focus', function () {
    $('#emailDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#emailDiv').removeClass('bs-form-group-focused');
});

$('#password').on('focus', function () {
    $('#passwordDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#passwordDiv').removeClass('bs-form-group-focused');
});

$('#password-confirm').on('focus', function () {
    $('#confirmPasswordDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#confirmPasswordDiv').removeClass('bs-form-group-focused');
});
