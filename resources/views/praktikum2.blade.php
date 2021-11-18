<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2</title>

    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Google_Forms_logo_%282014-2020%29.svg/1489px-Google_Forms_logo_%282014-2020%29.svg.png">

    <link rel="stylesheet" href="style.css">

    <script src="script.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script>
(function validate() {
    ;
    window.addEventListener('load', function () {
        var forms = document.getElementsByClassName('need-validation');
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

$(document).ready(function () {
    $("#username").on('input', function () {
        var expression = /[^a-zA-z]/g;
        if ($(this).val().match(expression)) {
            $(this).val($(this).val().replace(expression, ""));
        }
    })
})

$(document).ready(function () {
    $("#zipcode").on('input', function () {
        var expression = /[^0-9]/g;
        if ($(this).val().match(expression)) {
            $(this).val($(this).val().replace(expression, ""));
        }
    })
})

function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


$(document).ready(function () {
    $("#telephone").on('input', function () {
        var expression = /[^0-9]/g;
        if ($(this).val().match(expression)) {
            $(this).val($(this).val().replace(expression, ""));
        }
    })
})
    </script>

</head>

    <div class="container p-sm-0">

        <div class="container-sm p-4 " style="text-align: center;" id="header">.

            <h5 style="font-weight: 600;">Registration Form</h5>

        </div>

        <div class="container-sm p-3" id="content">

        <p style="color: red; font-size: small;">*Required</p>

        <form id="form" class="need-validation" novalidate action="https://classroom.its.ac.id/login/index.php">
            <div class="form-group" >
                <label for="Name">Name*</label>
                <input type="text" placeholder="John Doe" id="username" required class="form-control" pattern="[a-zA-Z][a-zA-Z/s]">
                <div class="valid-feedback">Done!</div>
                <div class="invalid-feedback">Harus dilengkapi dan hanya dengan huruf</div>
                </div>

            <div class="form-group" >
                <label for="Name">Address*</label>
                <input type="text" placeholder="Alamat lengkap kamu!" id="address" required class="form-control">
                <div class="valid-feedback">Done!</div>
                <div class="invalid-feedback">Isi dengan alamat rumah kamu!</div>
                </div>

            <div class="form-group" >
                <label for="Name">E-mail address*</label>
                <input type="email" placeholder="youremail@email.com" id="email" required class="form-control">
                <div class="valid-feedback">Done!</div>
                <div class="invalid-feedback">Harus dilengkapi dengan alamat email yang valid!</div>
                </div>

            <div class="form-group" >
                <label for="Name">Password*</label>
                <input type="password" placeholder="password" id="password" required class="form-control" minlength="8" maxlength="16">
                <div class="valid-feedback">Done!</div>
                <div class="invalid-feedback">Tolong isi password anda dengan minimal 8 digit dan maksimal 16</div>
                </div>
                <input type="checkbox" onclick="myFunction()">Show Password

            <div class="form-group" >
                <label for="Name">Telephone*</label>
                <input type="text" placeholder="08xxxxxxxx" id="telephone" required class="form-control" minlength="7">
                <div class="valid-feedback">Done!</div>
                <div class="invalid-feedback">Tolong isi nomor anda dengan minimum 7 digit</div>
                </div>

                <div class="form-group">
                    <label for="course">Select Your Course*</label>
                    <select class="custom-select" name="state" id="state" required>
                        <option selected disabled value="">Please Choose</option>
                        <option>BTECH</option>
                        <option>BBA</option>
                        <option>B COM</option>
                        <option>GEEKFORGEEKS</option>
                    </select>
                    <div class="valid-feedback">Done!</div>
                    <div class="invalid-feedback">Pilih pelatihan yang anda minati!</div>
                </div>

                <div class="form-group" >
                    <label for="Name">Zip Code*</label>
                    <input type="text" placeholder="123456" id="zipcode" required class="form-control" maxlength="6">
                    <div class="valid-feedback">Done!</div>
                    <div class="invalid-feedback">Isi dengan 6 angka kodepos anda!</div>
                </div>
                <br>
                    <button class="btn btn-primary btn-l
                    btn-block">Send</button>
                    <br>
                    <button type="reset" class="btn btn-danger bt1 btn-block">
                         Reset</button>
        </form>

    </div>

</div>

<body>

</body>
</html>
