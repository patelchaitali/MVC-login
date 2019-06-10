<table border="1">
  <?php
  foreach ($books as $book) {
      ?>
      <tr>
        <th>Title</th>
        <th>Author Name</th>
        <th>Description</th>
      </tr>
    <tr style="border:1">
        <td><a href="index.php?book=<?php echo $book->title; ?>">
            <?php echo $book->title; ?></a></td>
        <td><?php echo $book->author; ?></td>
        <td><?php echo $book->description; ?></td>
    </tr>
    <?php
  }
   ?>
</table>
