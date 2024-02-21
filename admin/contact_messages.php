<!-- Display success or error messages -->
<?php if (isset($_GET['status'])): ?>
    <?php if ($_GET['status'] == 'success'): ?>
        <p style="color: green;">Your message has been sent successfully!</p>
    <?php else: ?>
        <p style="color: red;">There was an error sending your message. Please try again.</p>
    <?php endif; ?>
<?php endif; ?>

<!-- Display contact messages -->
<table>
    <thead>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Message</td>
            <td>Date/Time</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($messages as $message): ?>
            <tr>
                <td><?= htmlspecialchars($message['name']) ?></td>
                <td><?= htmlspecialchars($message['email']) ?></td>
                <td><?= htmlspecialchars($message['message']) ?></td>
                <td><?= htmlspecialchars($message['created_at']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Contact form -->
<h2>Send a Message</h2>
<form action="contact_messages.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea>

    <input type="submit" name="submit" value="Send Message">
</form>