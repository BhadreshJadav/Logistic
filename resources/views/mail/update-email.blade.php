<div style="text-align: center">
    <h1>Update email verification</h1><br>
    <h3>Hey, {{ $data->name }}</h3><br>
    <p>Enter this otp to change your password</p>
    <button>otp - {{ $data->reset_token }}</button>
</div>
