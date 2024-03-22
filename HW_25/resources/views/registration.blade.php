<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration</title>

        <style>
            *{margin: 0; padding: 0; box-sizing: border-box;}
            body{background-color: #AAA; color: #FFF;}
            .wrapper{height: 100vh; display: flex; justify-content: center; align-items: center;}
            .form{background-color: #111; padding: 20px; border-radius: 16px; display: flex; flex-direction: column; gap: 15px;}
            .form__title{margin-bottom: 15px; font-size: 2rem; font-weight: 700;}
            .form__el{display: flex; justify-content: space-between; align-items: center}
            .label{margin-right: 10px; font-size: 1.25rem; font-weight: 700;}
            .input{font-size: 1rem;padding: 5px; border-radius: 8px; outline: none; border: 2px solid #FFF; transition: all .2s linear;}
            .input:focus{border: 2px solid orange;}
            .input:hover{border: 2px solid yellow;}
            .form__btn{font-size: 1.25rem; font-weight: 700; margin-top: 10px; padding: 10px 12px; background-color: transparent; color: #FFF; border: 2px solid #FFF; cursor: pointer; transition: all .3s linear;}
            .form__btn:hover{background-color: #FFF; color: #000;}
            .form__alert{color: red;}
            .form-ul__alert{list-style: none}
        </style>
    </head>
    <body>

        <div class="wrapper">
            <form class="form" action="registration" method="post">
                @csrf
                <legend class="form__title">Registration form</legend>
                <div class="form__el">
                    <label class="label" for="name">Name: </label>
                    <input class="input" id="name" type="text" name="name">
                </div>
                <div class="form__el">
                    <label class="label" for="email">Email: </label>
                    <input class="input" id="email" type="email" name="email">
                </div>
                <div class="form__el">
                    <label class="label" for="pass">Password: </label>
                    <input class="input" id="pass" type="password" name="pass">
                </div>
                <div class="form__el">
                    <label class="label" for="confirm_pass">Confirm the password: </label>
                    <input class="input" id="confirm_pass" type="password" name="confirm_pass">
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger form__alert">
                        <ul class="form-ul__alert">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button class="form__btn" type="submit">Submit</button>
            </form>
        </div>

    </body>
</html>