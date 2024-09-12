<header class="bg-primary text-white text-center py-5 bg-gradient">
    <div class="container text-white text-center">
        <h1>Sign Up</h1>
        <p class="lead">It's quick and easy</p>
    </div>
</header>

<section class="mt-5">
    <div class="container">

        <form method="post" action="<?php echo base_url(); ?>register">
            <?php if (session()->getFlashdata('error')) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php } ?>

            <div class="mb-3">
                <label for="name" class="form-label">Full name</label>
                <input type="text" class="form-control" name="name"
                    placeholder="Please enter your full name">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username"
                    placeholder="Please enter your username">
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email"
                    placeholder="Please enter your email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password"
                    placeholder="Please enter your password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>

<?php if (session()->getFlashdata('error')) { ?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",

        });
    </script>
<?php } ?>