<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
     <title>Document</title>
</head>
<body>
   <?php 
   $uri= service('uri');
   ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="/">Login Demo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php if(session()->get('isLoggedIn')): ?>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item" <?= ($uri->getSegment(1)=='dashboard'? 'active' : null) ?>>
          <a class="nav-link " aria-current="page" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item" <?= ($uri->getSegment(1)=='profile'? 'active' : null) ?>>
          <a class="nav-link" href="/profile">Profile</a>
        </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item" <?= ($uri->getSegment(1)=='logout'? 'active' : null) ?>>
          <a class="nav-link" href="/logout">Logout</a>
        </li>
        </ul>
      <?php else: ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" <?= ($uri->getSegment(1)==''? 'active' : null) ?>>
          <a class="nav-link " aria-current="page" href="/">Login</a>
        </li>
        <li class="nav-item" <?= ($uri->getSegment(1)=='register'? 'active' : null) ?>>
          <a class="nav-link" href="/register">Register</a>
        </li>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</nav>
    
