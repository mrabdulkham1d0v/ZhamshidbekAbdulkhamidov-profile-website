<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="formBx">
                <form method= "POST" action="/upload" enctype="multipart/form-data">
                    @csrf
                    <h3>Message Me</h3>
                    <input type="text" name="Name" id="" placeholder="Name" required>
                    <input type="text" name="Surname" id="" placeholder="Surname" required>
                    <input type="text" name="Email" id="" placeholder="Type You Email" required>
                    <input type="file" name="Photo" id="" required>

                    <button type="submit">Send</button>
                </form>
    </div>
</body>
</html>