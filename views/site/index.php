<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Service Provider Connector';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-light mt-5 mb-5 p-5 rounded">
        <h1 class="display-4">Connect with Service Providers</h1>

        <p class="lead">Find and book reliable service providers for your events and projects.</p>

        <?php if (Yii::$app->user->isGuest): ?>
            <p><?= Html::a('Get Started', ['/site/start'], ['class' => 'btn btn-lg btn-primary']) ?></p>
        <?php else: ?>
            <p><?= Html::a('Find Services', ['services/search'], ['class' => 'btn btn-lg btn-primary']) ?></p>
        <?php endif; ?>
    </div>

    <div class="body-content">

<div class="row">
    <div class="col-lg-4 mb-3">
        <h2>Intelligent Matching</h2>
        <!-- <p>Our advanced algorithm connects you with the perfect service providers based on your specific needs, location, and preferences.</p> -->
        <p><?= Html::a('Find Matches', ['/site/match'], ['class' => 'btn btn-outline-secondary']) ?></p>
    </div>
    <div class="col-lg-4 mb-3">
        <h2>Real-time Booking</h2>
        <!-- <p>Check availability and book services instantly. Our integrated payment system ensures secure and hassle-free transactions.</p> -->
        <p><?= Html::a('Book Now', ['/site/create'], ['class' => 'btn btn-outline-secondary']) ?></p>
    </div>
    <div class="col-lg-4">
        <h2>Reliable Reviews</h2>
        <!-- <p>Make informed decisions with our comprehensive rating and review system. Read feedback from other users and share your own experiences.</p> -->
        <p><?= Html::a('Read Reviews', ['/site/reviews'], ['class' => 'btn btn-outline-secondary']) ?></p>
    </div>
</div>

        <div class="row mt-5">
            <div class="col-lg-6 mb-3">
                <h3>Featured Services</h3>
                <ul class="list-group">
                    <li class="list-group-item">Event Planning</li>
                    <li class="list-group-item">Photography</li>
                    <li class="list-group-item">Catering</li>
                    <li class="list-group-item">Home Renovation</li>
                    <li class="list-group-item">Personal Training</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <h3>Why Choose Us</h3>
                <ul class="list-group">
                    <li class="list-group-item">Wide range of vetted service providers</li>
                    <li class="list-group-item">Secure in-app messaging</li>
                    <li class="list-group-item">Service bundling options</li>
                    <li class="list-group-item">Multi-language support</li>
                    <li class="list-group-item">Push notifications for updates</li>
                </ul>
            </div>
        </div>
    </div>
</div>