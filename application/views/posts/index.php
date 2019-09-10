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
        <td><?php echo $ppl['nombre']; ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>