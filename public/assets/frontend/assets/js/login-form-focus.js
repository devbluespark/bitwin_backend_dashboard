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

$('#pwResetEmail').on('focus', function () {
    $('#pwResetEmailDiv').addClass('bs-form-group-focused');
}).on('blur', function () {
    $('#pwResetEmailDiv').removeClass('bs-form-group-focused');
});