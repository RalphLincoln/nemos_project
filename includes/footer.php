<!-- THIS SCRIPTS ARE BOOTSTRAP DEPENDENCIES -->
<script src="./js/jquery-3.4.1.min.js"></script>
<script src="./js/bootstrap.bundle.min.js" charset="utf-8"></script>


<!-- THIS IS FOR THE SWEET ALERT -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- This SCRIPT is for the AOS Animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    // This is for the AOS animation
    AOS.init();

    // THIS IS FOR THE SUBMIT ALERT
    $("#submit").click(function() {

        let email = $('#email').val();

        if (email == '') {
            swal("Field can't be empty", "Please fill the form", "error");
        } else {
            swal("Well Done", "You have subscribe to our app. You'll be notified when the app is live!!", "success");
        }
    })
</script>
</body>

</html>