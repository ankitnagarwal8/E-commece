




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

    <form method="POST" method="post" action="<?= base_url('sign_in/sign/emailverification'); ?>">
    <input type="hidden" name="email" value="<?php echo $data; ?>" required>
    <input type="text" name="verification_code" placeholder="Enter verification code" required />

    <input type="submit" name="verify_email" value="Verify Email">
    </form>



</body>
</html>
