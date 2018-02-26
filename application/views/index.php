<div>
    <div class="container">
        <h1>Register a user</h1>
    <form action="<?php echo base_url()?>home/save_user" method="post">
        <div class="form-group">
            <label>First name:</label>
            <input type="text" class="form-control" name="first_name" placeholder="first name">
        </div>
        <div class="form-group">
            <label>Last name:</label>
            <input type="text" class="form-control" name="last_name" placeholder="last name">
        </div>
        <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" name="username" placeholder="username">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" placeholder="email">
        </div>
        <button name="submit" type="submit" class="btn btn-default">Submit</button>
    </div>
    </form>
</div>