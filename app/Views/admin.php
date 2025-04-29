<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <h2 class="text-center">Welcome, <?= $username ?>!</h2>  <!-- Display username -->
    <!-- User Profile -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Profile</h5>
                    <p class="card-text"><strong>Name:</strong> <?= $username ?></p>
                    <p class="card-text"><strong>Email:</strong> user@gmail.com</p>
                    <p class="card-text"><strong>Joined:</strong> January 10, 2023</p>
                    <p class="card-text"><strong>Recent Activity:</strong> Viewed 1 new posts, commented on 2 posts</p>
                </div>
            </div>
        </div>
    </div>

    <!-- User Stats -->
    <div class="row mt-4">
        <!-- Card 1: Total Posts -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Posts</h5>
                    <p class="card-text">25</p>
                </div>
            </div>
        </div>

        <!-- Card 2: Comments -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Comments Made</h5>
                    <p class="card-text">15</p>
                </div>
            </div>
        </div>

        <!-- Card 3: Likes Given -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Likes Given</h5>
                    <p class="card-text">42</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Activity Section -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Latest Activity</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Liked a post about technology</li>
                        <li>Commented on a health-related article</li>
                        <li>Updated profile picture</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

