<?= view('students/partials/header') ?>
<h2>Students</h2>
<a href="/students/create">Add Student</a>

<form method="get" action="/students">
  <input name="search" value="<?= $search ?? '' ?>" placeholder="Search name or course">
  <button type="submit">Search</button>
</form>

<table class="table table-bordered table-hover">
  <tr><th>Name</th><th>Course</th><th>Year</th><th>Actions</th></tr>
  <?php foreach($students as $s): ?>
  <tr>
    <td><?= $s['name'] ?></td>
    <td><?= $s['course'] ?></td>
    <td><?= $s['year'] ?></td>
    <td>
      <a href="/students/create" class="btn btn-primary mb-3">Add Student</a>
      <a href="/students/edit/<?= $s['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
      <a href="/students/delete/<?= $s['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
<?= view('students/partials/footer') ?>
<?= $pager->links() ?>