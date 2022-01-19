<a class="navbar-brand" href="#">Demo PHP Gallery</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item <?php echo (!isset($_GET['page']) || $_GET['page'] == 1) ? 'active' : ''; ?>">
            <a class="nav-link" href="index.php?page=1">Home</a>
        </li>
        <li class="nav-item <?php echo (isset($_GET['page']) && ($_GET['page'] == 2 || $_GET['page'] == 'upload')) ? 'active' : ''; ?>">
            <a class="nav-link" href="index.php?page=2">Upload</a>
        </li>
        <li class="nav-item <?php echo (isset($_GET['page']) && ($_GET['page'] == 3  || $_GET['page'] == 'gallery')) ? 'active' : ''; ?>">
            <a class="nav-link" href="index.php?page=3">Gallery</a>
        </li>
        <li class="nav-item <?php echo (isset($_GET['page']) && $_GET['page'] == 4) ? 'active' : ''; ?>">
            <a class="nav-link" href="index.php?page=4">Registration</a>
        </li>
    </ul>
</div>
