
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        :root {
  font-size: 18px;
  box-sizing: inherit;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

p {
  margin: 0;
}

p:not(:last-child) {
  margin-bottom: 1.5em;
}

h3,
h4 {
  margin: 0 0 1rem;
  text-align:center;
}

body {
  font: 1em/1.618 Inter, sans-serif;
  display: flex;
  flex-direction: column;
  padding: 1.5em;
  background: url(https://source.unsplash.com/zFaSM1hz02c/2400x1823) center/cover no-repeat fixed;
  justify-content: center;
  align-items: center;
}

.page {
  font-family: Inter;
  border-radius: 0.5em;
  max-width: 200em;
  color: rgba(55, 21, 21, 0.9);
  border: 1px solid rgba(255, 255, 255, 0.25);
  background: rgba(255, 255, 255, 0.25);
  box-shadow: 0 0 1em 0.5em rgba(55, 21, 21, 0.45);
  backdrop-filter: blur(1em);
  overflow: hidden;
}

.page .page {
  background-color: rgba(255, 255, 255, 0.35);
  backdrop-filter: blur(0.5em);
  border-width: 0;
}

.page .page .page {
  background-color: rgba(255, 255, 255, 0.45);
  backdrop-filter: blur(0.25em);
}

.page-box {
  padding: 1.5em;
}

.page h3 {
  color: #6f2a2a;
}

.header-title {
  text-transform: uppercase;
}

.header-text {
  font-weight: bold;
}

.body-text {
  font-size: 30px;
}

.footer-text {
  font-size: 0.75em;
}
        </style>
</head>
<body>
<div class="page">
  <div class="page-box">
    <h3 class="header-title">Some Information About us</h3>
  </div>
  <div class="page">
    <div class="page-box">
      <h4>Want to know about us then go through this article</h4>
      <div class="body-text">
        <p>Our online service portal is a one-stop-shop for all your service needs. With a user-friendly interface and easy navigation, you can quickly and easily submit service requests, track the status of your requests, and access a wide range of services from the comfort of your own home. From scheduling appointments to requesting quotes, our portal is designed to make your life easier. With 24/7 access, you can manage your services at a time that suits you. Our portal is secure, reliable, and efficient, ensuring that your personal and service information is protected at all times. Whether you need to request a repair, schedule a maintenance check, or simply ask a question, our online service portal is here to help. Register now and start experiencing the convenience of online service management! </p>
      </div>
    </div>
    <div class="page">
      <div class="page-box">
        <div class="footer-text">
          <p>Written by susmita soma and monika<br>
            Updated on 11th june 2024</p>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>