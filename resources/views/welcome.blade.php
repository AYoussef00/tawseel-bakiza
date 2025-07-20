<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Link Grid</title>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Cairo', sans-serif;
    }

    body {
      background-color: #40c2a8;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      width: 100%;
      max-width: 500px;
      margin: 40px auto;
      padding: 20px;
      text-align: center;
    }

    .logo img {
      width: 150px;
      margin-bottom: 30px;
      border-radius: 50%;
    }

    .grid-links {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 30px;
    }

    .link-card {
      background-color: #fff;
      border-radius: 20px;
      padding: 18px 10px 10px 10px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.10);
      text-align: center;
      transition: all 0.3s cubic-bezier(.4,2,.3,1);
      text-decoration: none;
      color: #000;
      width: 320px;
      max-width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      border: 1.5px solid #e0e0e0;
      overflow: hidden;
    }

    .link-card:hover {
      transform: translateY(-5px);
      background-color: #f1f1f1;
    }

    .link-card i {
      font-size: 30px;
      margin-bottom: 12px;
      color: #000;
    }

    .link-text {
      font-size: 14px;
      font-weight: 500;
    }

    .link-card .card-img {
      width: 100%;
      height: 140px;
      border-radius: 14px;
      overflow: hidden;
      margin-bottom: 12px;
      background: #f7f7f7;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .link-card .card-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    footer {
      margin-top: auto;
      padding: 30px 0;
      background-color: #000;
      width: 100%;
      text-align: center;
    }

    .social-icons a {
      color: #fff;
      margin: 0 10px;
      font-size: 18px;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #1da1f2;
    }
    .footer-text {
      color: #aaa;
      font-size: 13px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <!-- IMPORTANT: To properly load Font Awesome icons, please open this file using a local server such as Live Server in VS Code. -->

  <div class="container">
    <div class="logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 200px; border: 4px solid #fff;" />
    </div>
    <h2 style="font-size: 20px; font-weight: 600; margin-bottom: 35px;">هتلاقوني في</h2>

    <div class="grid-links">
      <a href="https://hungerstation.com/sa-en/restaurant/riyadh/al-muzahimiyah/147152" class="link-card">
        <div class="card-img">
          <img src="{{ asset('images/hunger.webp') }}" alt="Hunger Station" />
        </div>
      </a>
      <a href="https://jahez.link/ieLexrG96Tb" class="link-card">
        <div class="card-img">
          <img src="{{ asset('images/jahiz.png') }}" alt="Jahez" />
        </div>
      </a>
      <a href="https://food.noon.com/en-sa/outlet/TNTBKZQVT0" class="link-card">
        <div class="card-img">
          <img src="{{ asset('images/noon-food.png') }}" alt="Noon Food" />
        </div>
      </a>
      <a href="https://thechefzco.app.link/22nzXGfeNTb" class="link-card">
        <div class="card-img">
          <img src="{{ asset('images/the-chefz.png') }}" alt="ذا شيفز" />
        </div>
      </a>
    </div>
  </div>

  <footer>
    <div class="social-icons">
      <a href="https://www.facebook.com/share/196jd28E9d/" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/tunt_bakiza?igsh=MnFzNm4xZDEycXI4" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="https://www.tiktok.com/@tunt_bakiza?_t=ZS-8wJu8PZ86wU&_r=1" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
    </div>
    <div class="footer-text">
      &copy; 2025 Bakiza | All rights reserved.
    </div>
  </footer>

</body>
</html>
