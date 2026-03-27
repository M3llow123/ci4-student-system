
<?= view('students/partials/header') ?>
<h2>Add Student</h2>
<form action="/students/store" method="post">
  <?= csrf_field() ?>
  <input name="name" placeholder="Name"><br>
  <input name="course" placeholder="Course"><br>
  <input name="year" type="number" placeholder="Year"><br>
  <button type="submit">Save</button>
</form>
<?= view('students/partials/footer') ?>