<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">My Tasks</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?>">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item <?php echo e(Request::is('/create') ? 'active' : ''); ?>">
          <a class="nav-link" href="todo/create">Create</a>
        </li>
      </ul>
    </div>
  </nav>
<?php /* C:\xampp\htdocs\todolist\resources\views/layouts/navbar.blade.php */ ?>