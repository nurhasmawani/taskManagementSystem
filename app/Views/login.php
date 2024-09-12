<section class="mt-5">
    <div class="container">
        <form action="<?php base_url() ?>login" method="post">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username"
                            placeholder="Please enter your username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password"
                            placeholder="Please enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </div>
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