<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Contact' ?></title>
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
        <form class="form" action="/contact" method="POST">
            @csrf
            <div>
                <label class="label" for="name">Name:</label>
                <input class="input" id="name" type="text" name="name">
            </div>
            <div>
                <label class="label" for="email">Email:</label>
                <input class="input" id="email" type="text" name="email">
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <button class="btn" type="submit">Send</button>
        </form>
    </div>

</body>

</html>