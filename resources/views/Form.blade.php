<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>

<h2>Student Registration Form</h2>

<!-- Validation Errors -->

@if($errors->any())

    <ul>

        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

@endif


<form action="{{ url('submit-Form') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <!-- Email -->

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}">
    
    <br><br>

    <!-- Password -->

    <label>Password:</label>
    <input type="password" name="password">

    <br><br>

    <!-- Confirm Password -->

    <label>Confirm Password:</label>
    <input type="password" name="confirmpassword">

    <br><br>

    <!-- Mobile Number -->

    <label>Mobile Number:</label>
    <input type="number" name="mobile" value="{{ old('mobile') }}">

    <br><br>

    <!-- Alternate Mobile -->

    <label>Alternate Mobile:</label>
    <input type="number" name="altmobile" value="{{ old('altmobile') }}">

    <br><br>

    <!-- Gender -->

    <label>Gender:</label>

    <input type="radio" name="gender" value="Male"> Male

    <input type="radio" name="gender" value="Female"> Female

    <input type="radio" name="gender" value="Other"> Other

    <br><br>

    <!-- Date of Birth -->

    <label>Date of Birth:</label>
    <input type="date" name="dob" value="{{ old('dob') }}">

    <br><br>

    <!-- Age -->

    <label>Age:</label>
    <input type="number" name="age" value="{{ old('age') }}">

    <br><br>

    <!-- Address -->

    <label>Address:</label>
    <input type="text" name="address" value="{{ old('address') }}">

    <br><br>

    <!-- Pincode -->

    <label>Pincode:</label>
    <input type="number" name="pincode" value="{{ old('pincode') }}">

    <br><br>

    <!-- Course -->

    <label>Course:</label>
    <input type="text" name="course" value="{{ old('course') }}">

    <br><br>

    <!-- Percentage -->

    <label>Percentage / Marks:</label>
    <input type="number" name="percentage" value="{{ old('percentage') }}">

    <br><br>

    <!-- Signature Upload -->

    <label>Upload Signature:</label>
    <input type="file" name="signature">

    <br><br>

    <!-- Terms and Conditions -->

    <input type="checkbox" name="terms">

    <label>I Accept Terms and Conditions</label>

    <br><br>

    <!-- Submit Button -->

    <button type="submit">Submit</button>

</form>

</body>
</html>