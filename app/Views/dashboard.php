<header class="text-dark text-center py-5">
    <div class="container text-dark text-center">
        <h1>Welcome to Task Management System</h1>
        <p class="lead">Your simple and effective to manage task efficiently</p>

        <a href="<?php echo base_url(); ?>newTask" class="bg-primary btn text-white">Add New Task</a>


    </div>
</header>

<section>
    <div class="container">
        <h3>Your tasks</h3>
        <table class="table border table-striped">
            <thead>
                <tr class="border">
                    <th class="border">Title</th>
                    <th class="border">Description</th>
                    <th class="border">Due date</th>
                    <th class="border">Status</th>
                    <th class="border">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr class="border">
                    <td class="border"></td>
                    <td class="border"></td>
                    <td class="border"></td>
                    <td class="border"></td>
                    <td class="border">
                        <button type="button" class="btn btn-warning">Update</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr> -->
                <?php
                $id = 1;
                foreach ($task as $task): ?>
                    <tr class="border">
                        <td class="border"><?php echo $task['title'] ?></td>
                        <td class="border"><?php echo $task['description'] ?></td>
                        <td class="border"><?php echo $task['due_date'] ?></td>
                        <td class="border"><?php echo $status[$task['status']]; ?></td>
                        <td class="border">

                            <a href="<?php echo base_url(); ?>update/<?= $task['id'] ?>" type="button" class="btn btn-warning">Update</button>
                                <a href="<?php echo base_url(); ?>delete/<?= $task['id'] ?>" type="button" class="btn btn-danger">Delete</button>


                        </td>
                    </tr>
                <?php $id++;
                endforeach; ?>
            </tbody>
        </table>

    </div>



</section>