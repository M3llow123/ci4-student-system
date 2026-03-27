<?= view('students/partials/header') ?>
<h2>Edit Student</h2>
<form action="/students/update/<?= $student['id'] ?>" method="post">
  <?= csrf_field() ?>
  <input name="name" value="<?= $student['name'] ?>"><br>
  <input name="course" value="<?= $student['course'] ?>"><br>
  <input name="year" type="number" value="<?= $student['year'] ?>"><br>
  <button type="submit">Update</button>
</form>
<?= view('students/partials/footer') ?>