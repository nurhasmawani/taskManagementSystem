<section class="mt-5">
    <div class="container py-2">

        <form action="<?php echo base_url(); ?> process_newtask" method="post">

            <h3>Add New Tasks</h3>
            <div class="border border-grey p-3 rounded">
                <p class="fw-bold">Task Details</p>
                <p>Please enter the details of the task you want to add.</p>

                <div class="mb-3 row">

                    <div class="form group">
                        <label>Title:</Label>
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="form group">
                        <label>deskription:</Label>

                        <div class="col-sm-10">
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="form group">
                        <label>Due Date:</Label>

                        <div class="col-sm-10">
                            <input type="date" name="duedate" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="mb-3 row">
                    <div class="form group">


                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
        </form>

</section>