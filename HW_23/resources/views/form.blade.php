<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Form' ?></title>
    <style>
        html,
        body {
            height: 100%;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100%;
        }

        .form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 15px;
        }

        .alert-danger ul {
            list-style: none;
            color: red;
        }

        .label {
            font-size: 1.5rem;
            font-weight: 700;
            margin-right: 10px;
        }

        .input {
            padding: 5px;
            font-size: 1rem;
        }

        .btn {
            font-size: 1.5rem;
            font-weight: 700;
            padding: 8px 15px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <form class="form" action="/submit-contact-form" method="POST">
            @csrf
            <div>
                <label class="label" for="name">POST Запрос</label>
            </div>
            <button class="btn" type="submit">Send</button>
        </form>
    </div>

</body>

</html>