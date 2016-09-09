<?php include('header.php') ?>
<?php include('process.php') ?>

    <form id="signup-form" method="post" action="process.php" class="form-horizontal">
        <h1>צור חשבון חדש.</h1>
        <button type="button" id="google" class="btn btn-lg btn-block">Connect with <b>Google</b></button>
        <h4>או</h4>
        <input data-toggle="tooltip" title="8 תווים בלבד" class="form-control" type="text" id="formGroupInputLarge" placeholder="שם משתמש" name="username" />
        <input data-toggle="tooltip" title="אותיות ותווים בלבד" class="form-control" type="password" id="formGroupInputLarge" placeholder="סיסמא" name="password" />
        <input class="form-control" type="password" id="formGroupInputLarge" placeholder="הכנס סיסמא בשנית" name="password_c" />
        <input class="form-control" type="email" id="formGroupInputLarge" placeholder="מייל" name="email" />
        <h6>ביצירת החשבון, אתה מסכים לתנאי השימוש שלנו.</h6>
        <button type="submit" id="create-account" class="btn btn-lg btn-block" name="submit" value="submit">צור חשבון</button>
    </form>

<?php include('footer.php'); ?>