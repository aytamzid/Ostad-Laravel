<?php
include_once 'nav.php';

if ( isset( $_POST['submit'] ) ) {


    $name = htmlspecialchars( $_POST['name'] );
    $email = htmlspecialchars( $_POST['email'] );
    $subject = htmlspecialchars( $_POST['subject'] );
    $message = htmlspecialchars( $_POST['message'] );

    if ( empty( $name ) || empty( $email ) || empty( $subject ) || empty( $message ) ) {
        $warningMsg = "Please fill out all fields.";
    } else if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        $warningMsg = "Please enter a valid email address.";
    } else {

        $successMsg = "Successfuly message send.";
    }

}

?>
<body>

    <div class="container mt-5">
        <h1 class="text-center">Contact Us</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-sm-10">

            <?php
                if ( !empty( $warningMsg ) ) {
            ?>
                <div class="alert alert-danger text-center">
                    <?php echo $warningMsg; ?>
                </div>

            <?php
                } elseif ( !empty( $successMsg ) ) {
            ?>

                <div class="alert alert-success text-center">
                    <?php echo $successMsg; ?>
                </div>
            <?php
                }
            ?>

                <form method="POST" action="contact.php">
                <div class="form-group">
                    <label for="name">Name <span>*</span></label>
                    <input type="text" class="form-control" id="name" name="name" >
                </div>
                <div class="form-group">
                    <label for="email">Email address <span>*</span></label>
                    <input type="email" class="form-control" id="email" name="email" >
                </div>
                <div class="form-group">
                    <label for="subject">Subject <span>*</span></label>
                    <input type="text" class="form-control" id="subject" name="subject" >
                </div>
                <div class="form-group">
                    <label for="message">Message <span>*</span></label>
                    <textarea class="form-control" id="message" name="message" rows="5" ></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>