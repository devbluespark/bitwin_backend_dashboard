
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

