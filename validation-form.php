<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
<style>
    label.error{
        color:red;
    }
</style>
</head>
<body>
    <form action="" method="POST" id="form">
        <table cellpadding="5px">
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" id="">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" id="">
                </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td>
                    <input type="digits" name="phone" id="" >
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="age" id="">
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" id="" >Female
                    <input type="radio" name="gender" id="" >Male
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
    <script>
        $(document).ready(function(){
            $("#form").validate({
                rules:{
                    'name':'required',
                    'email':{
                        email:true,
                        required:true,
                    },
                    'phone':{
                        digits:true,
                        required:true,
                        minlength:10,
                        maxlength:12,
                    },
                    'age':'required',
                    'gender':'required',
                },
                messages:{
                    'name':'Name is Required',
                    'email':{
                        email:'Enter a valid email Address',
                        required:'Email is required field',
                    },
                    'phone':{
                        digits:'Please enter only digits.',
                        required:'Mobile is required field',
                       
                    },
                    'age':'Age is required field',
                    
                },
            });
        });

    </script>
</body>
</html>