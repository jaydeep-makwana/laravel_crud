<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form(JS)</title>
    <style>
        .css {
            display: flex;
            margin: 5px;
            background-color: greenyellow;
            border: 3px solid red;
        }

        .lcss {
            display: flex;
            margin: 5px;

            color: rgb(41, 22, 218);
        }

        #root {
            background-color: rgb(228, 228, 228);
            position: absolute;
        }

        form {
            margin: 20px;
        }

        .scss {
            background-color: greenyellow;
            color: rgb(41, 22, 218);
            padding: 5px;
            margin: 5px;
            cursor: pointer;
            border: 3px solid red;
        }
    </style>
</head>

<body>
    <div id="root">
        <div id="root1"></div>
    </div>

    <script>
        const rootTag = document.getElementById('root');



        const formElement = document.createElement('form');
        const usernameLabel = document.createElement('lable');
        const usernameInput = document.createElement('input');
        const passwordLabel = document.createElement('lable');
        const passwordInput = document.createElement('input');
        const submitButton = document.createElement('input');
        const value = document.createElement('input');


        usernameLabel.innerText = "User_Name :";
        passwordLabel.innerText = "Password :";

        usernameLabel.className = 'lcss';
        usernameInput.className = 'css';
        passwordLabel.className = 'lcss';
        passwordInput.className = 'css';
        submitButton.className = 'scss';



        usernameInput.setAttribute('type', 'text');
        passwordInput.setAttribute('type', 'password');
        submitButton.setAttribute('type', 'button');
        submitButton.setAttribute('value', 'SUBMIT');


        formElement.appendChild(usernameLabel);
        formElement.appendChild(usernameInput);
        formElement.appendChild(passwordLabel);
        formElement.appendChild(passwordInput);
        formElement.appendChild(submitButton);




        rootTag.append(formElement);



        console.log(formElement);

        submitButton.addEventListener('click', () => {

            if (usernameInput.value == "" || usernameInput.value == " ") {
                alert('username should be not empty');
            } else if (passwordInput.value == "" || passwordInput.value == " ") {
                alert('password should be not empty');
            } else {
                document.getElementById('root1').innerHTML = 'your username is : ' + usernameInput.value + '<br>' + " and your password is : " + passwordInput.value;
            }
        });
    </script>
</body>

</html>