<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="media/logos/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="styles/root.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/aside.css">
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/footer.css">
  <title>WARQTEK</title>
</head>
<body>
  <?php require "splits/header.html"?>
  <?php require "splits/aside.html"?>
  <main>
    <article>
      <div>
        <img src="media/images/image 8.png" alt="" id="slide-1">
        <img src="media/images/Sign 1.png" alt="" id="slide-2">
        <img src="media/images/image 8.png" alt="" id="slide-3">
      </div>
      <div class="starting-paper">
        <h1>Paperwork, Simplified</h1>
        <p>Government documents, applications, and certificates &#8211; all in one place. Fast, clear, and hassle-free No more long queues, confusing forms, or wasted time</p>
        <div><a href="request.php" id="application-button">START YOUR APPLICATION</a></div>
      </div>
      <div id="how-it-works">
        <a href="#slide-1" class="slide-buttons" style="background-color: var(--button);"></a>
        <a href="#slide-2" class="slide-buttons"></a>
        <a href="#slide-3" class="slide-buttons"></a>
      </div>
    </article>
    <section class="how-it-works">
      <h1>How It Works</h1>
      <div>
        <div>
          <img src="media/images/Icon (Stroke).png" alt="">
          <strong>Choose Your Document</strong>
          <p>Browse our platform to find the exact government document, certificate, or application you need.</p>
        </div>
        <div>
          <img src="media/images/Icon (Stroke) (1).png" alt="">
          <strong>Fill Out The Deatials</strong>
          <p>Complete your form with our easy-to-follow process.</p>
        </div>
        <div>
          <img src="media/images/Icon (Stroke) (2).png" alt="">
          <strong>Submit Your Request</strong>
          <p>Send your completed application directly through our platform.</p>
        </div>
        <div>
          <img src="media/images/Icon (Stroke) (3).png" alt="">
          <strong>Track Your Document's Progress</strong>
          <p>Stay updated with real-time tracking as your application is processed.</p>
        </div>
        <div>
          <img src="media/images/Icon (Stroke) (4).png" alt="">
          <h3>Get Your Document Deliverd</h3>
          <p>Receive your official document digitally or at your doorstep.</p>
        </div>
      </div>
    </section>
    <section>
      <h1>Our Partners</h1>
      <div>
        <div><img src="media/logos/dawla.png" alt=""></div>
        <div><img src="media/logos/cnss.png" alt=""></div>
        <div><img src="media/logos/siha.png" alt=""></div>
        <div><img src="media/logos/ofppt.png" alt=""></div>
        <div><img src="media/logos/anapec.jpg" alt=""></div>
      </div>
    </section>
    <section>
      <h1>Official Stats</h1>
      <div>
        <div>
          <span class="animated-numbers" data-number="12500">12,500</span><span>+</span>
          <p>ongoing requests</p>
        </div>
        <div>
          <span class="animated-numbers" data-number="70900">70,900</span><span>+</span>
          <p>document successfully deliverd</p>
        </div>
        <div>
          <span class="animated-numbers" data-number="3100">3,100</span><span>+</span>
          <p>active users</p>
        </div>
      </div>
    </section>
  </main>
  <?php require "splits/footer.html"?>
</body>
<script type="module" src="scripts/aside.js"></script>
<script type="module" src="scripts/index.js"></script>
</html>