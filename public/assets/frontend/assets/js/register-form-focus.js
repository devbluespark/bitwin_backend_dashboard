$('#firstName').on('focus', function () {
    $('#firstNameDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#firstNameDiv').removeClass('bs-form-group-focused');
});

$('#mobileNumber').on('focus', function () {
    $('#mobileNumberDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#mobileNumberDiv').removeClass('bs-form-group-focused');
});

$('#username').on('focus', function () {
    $('#usernameDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#usernameDiv').removeClass('bs-form-group-focused');
});

$('#password').on('focus', function () {
    $('#passwordDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#passwordDiv').removeClass('bs-form-group-focused');
});

$('#email').on('focus', function () {
    $('#emailDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#emailDiv').removeClass('bs-form-group-focused');
});

$('#confirmPassword').on('focus', function () {
    $('#confirmPasswordDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#confirmPasswordDiv').removeClass('bs-form-group-focused');
});
