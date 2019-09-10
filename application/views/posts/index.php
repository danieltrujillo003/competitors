  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($people as $ppl) : ?>
      <tr>
        <td><?php echo $ppl['position']; ?></td>
        <td><a href="<?php echo site_url('/posts/'.$ppl['slug']); ?>"><?php echo $ppl['nombre']; ?></a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>