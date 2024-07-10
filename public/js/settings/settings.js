const togglePassword = document.getElementById('togglePassword');
const togglePasswordConfirm = document.getElementById('togglePasswordConfirm');
const passwordField = document.getElementById('password');
const passwordConfirmField = document.getElementById('password-confirm');

// Inisialisasi variabel untuk melacak apakah sandi sedang ditampilkan atau tidak
let passwordShown = false;
let passwordConfirmShown = false;

togglePassword.addEventListener('click', function () {
    // Ganti jenis input field antara text dan password
    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', type);

    // Ganti ikon mata sesuai dengan jenis input field
    this.innerHTML = type === 'password' ? '<i class="fa fa-eye"></i>' : '<i class="fa fa-eye-slash"></i>';

    // Perbarui variabel status
    passwordShown = !passwordShown;
});

togglePasswordConfirm.addEventListener('click', function () {
    // Ganti jenis input field antara text dan password
    const type = passwordConfirmField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordConfirmField.setAttribute('type', type);

    // Ganti ikon mata sesuai dengan jenis input field
    this.innerHTML = type === 'password' ? '<i class="fa fa-eye"></i>' : '<i class="fa fa-eye-slash"></i>';

    // Perbarui variabel status
    passwordConfirmShown = !passwordConfirmShown;
});