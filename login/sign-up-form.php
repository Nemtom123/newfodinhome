<main class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 offset-sm-3">
                <div class="card spur-card">
                    <div class="card-header">
                        <div class="spur-card-icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <div class="spur-card-title"> Új felhasználó</div>
                    </div>
                    <div class="card-body ">
				<form method="post" class="form-signin">
                    <?php
                    if (isset($error)) {
                        foreach ($error as $error) {
                            ?>
							<div class="alert alert-danger">
								<i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
							</div>
                            <?php
                        }
                    } else if (isset($_GET['joined'])) {
                        ?>
						<div class="alert alert-info">
							<i class="glyphicon glyphicon-log-in"></i> &nbsp; Sikeres regisztráció

						</div>
                        <?php
                    }
                    ?>
					<div class="form-group">
						<input type="text" class="form-control" name="txt_uname" placeholder="Felhasználó neve"
						       value="<?php if (isset($error)) {
                                   echo $uname;
                               } ?>" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id='txtEmail' name="txt_umail" placeholder="E-Mail"
						       value="<?php if (isset($error)) {
                                   echo $umail;
                               } ?>" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="txt_upass" placeholder="Password" required>
					</div>
					<div class="clearfix"></div>
					<hr/>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" id="btnValidate" name="btn-signup" onclick="myFunction()">
							<i class="glyphicon glyphicon-open-file" onclick="myFunction()"></i>&nbsp;Regisztrálás
						</button>
						<button class="btn btn-primary" type="reset">Reset</button>
					</div>
					<br/>

				</form>
			</div>
		</div>
	</div>
</div>

        <script>
            $(document).ready(function(e) {
                $('#btnValidate').click(function() {
                    var sEmail = $('#txtEmail').val();
// Checking Empty Fields
                    if ($.trim(sEmail).length == 0 || $("#fname").val()=="" || $("#lname").val()=="") {
                        alert('Sikerült elrontani');
                        e.preventDefault();
                    }
                    if (validateEmail(sEmail)) {
                        alert('Nice!! your Email is valid, now you can continue..');
                    }
                    else {
                        alert('Nem jó email cím');
                        e.preventDefault();
                    }
                });
            });
            // Function that validates email address through a regular expression.
            function validateEmail(sEmail) {
                var filter = /^[w.+-]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
                if (filter.test(sEmail)) {
                    return true;
                }
                else {
                    return false;
                }
            }
        </script>
        <?php include_once 'script.php'; ?>




