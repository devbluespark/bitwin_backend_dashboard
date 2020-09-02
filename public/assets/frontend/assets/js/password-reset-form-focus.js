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

$('#confirmPassword').on('focus', function () {
    $('#confirmPasswordDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#confirmPasswordDiv').removeClass('bs-form-group-focused');
});