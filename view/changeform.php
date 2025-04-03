<main>
    <h1>Change Your Information</h1>

    <form action="session_example.php" method="post">
        <label>Username:</label>
        <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>"><br>

        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>"><br>

        <input type="submit" name="action" value="Update Values"><br>
    </form>
</main>