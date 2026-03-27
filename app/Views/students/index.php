<?= view('students/partials/header') ?>
<h2>Students</h2>
<a href="/students/create">Add Student</a>
<table>
  <tr><th>Name</th><th>Course</th><th>Year</th><th>Actions</th></tr>
  <?php foreach($students as $s): ?>
  <tr>
    <td><?= $s['name'] ?></td>
    <td><?= $s['course'] ?></td>
    <td><?= $s['year'] ?></td>
    <td>
      <a href="/students/edit/<?= $s['id'] ?>">Edit</a>
      <a href="/students/delete/<?= $s['id'] ?>">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
<?= view('students/partials/footer') ?>