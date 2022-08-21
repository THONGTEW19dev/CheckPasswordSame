<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">

    <title>Check Password Same</title>
</head>

<body>

    <div class="container align-items-center" style="margin:200px 50px 0px 460px;">
        <form action="">
            <div class="card shadow" style="padding: 80px 100px;width:900px">
                <div class="card-body">
                    <div class="mb-4">
                        <h2>Form Check Password PHP</h2>
                        <hr>
                    </div>
                    <div class="mb-3">
                        <label for="password1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass1" placeholder="กรอกรหัสผ่าน" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control mb-2" id="pass2" placeholder="กรอกรหัสผ่านอีกครั้ง" required>
                        <h6 id="text" style="color: green;"></h4>
                    </div>
                    <button type="submit" onclick="chkpass()" class="btn btn-outline-primary">ยืนยัน</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        let pass1 = document.querySelector("#pass1");
        let pass2 = document.querySelector("#pass2");
        let textz = document.querySelector("#text");

        function chkpass() {
            textz.innerText = pass1.value == pass2.value ? 'Password Same ✅' : '';
        }

        pass1.addEventListener('keyup', () => {
            if (pass2.value.length != 0) chkpass();
        })

        pass2.addEventListener('keyup', chkpass);
    </script>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
</body>

</html>