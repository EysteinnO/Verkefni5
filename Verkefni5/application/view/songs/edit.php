<div class="container">
    <div>
        <h3>Edit a book</h3>
        <form action="<?php echo URL; ?>songs/updatesong" method="POST">
            <label>Author</label>
            <input type="text" name="Author" value="<?php echo htmlspecialchars($song->Author, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Book</label>
            <input type="text" name="Book" value="<?php echo htmlspecialchars($song->Book, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Publisher</label>
            <input type="text" name="Publisher" value="<?php echo htmlspecialchars($song->Publisher, ENT_QUOTES, 'UTF-8'); ?>" />
            <label>Year</label>
            <input type="text" name="Year" value="<?php echo htmlspecialchars($song->Year, ENT_QUOTES, 'UTF-8'); ?>" />

            <input type="hidden" name="BookID" value="<?php echo htmlspecialchars($song->BookID, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_song" value="Update" />
        </form>
    </div>
</div>

