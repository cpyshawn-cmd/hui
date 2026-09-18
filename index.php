<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BiteDash | Order Food</title>
  <style>
    :root {
      --primary: #ff4757;
      --bg: #f8f9fa;
      --card-bg: #ffffff;
      --text: #2f3542;
      --subtext: #747d8c;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }

    body {
      background-color: var(--bg);
      color: var(--text);
      display: flex;
      justify-content: center;
      padding: 20px;
    }

    .app-container {
      width: 100%;
      max-width: 420px;
      background: var(--card-bg);
      border-radius: 24px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      min-height: 90vh;
    }

    /* Header */
    header {
      padding: 24px 20px 12px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .location-label {
      font-size: 12px;
      color: var(--subtext);
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .location {
      font-size: 16px;
      font-weight: 700;
    }

    .cart-badge {
      position: relative;
      background: #f1f2f6;
      border: none;
      padding: 10px 14px;
      border-radius: 12px;
      cursor: pointer;
      font-weight: 600;
    }

    /* Search & Filters */
    .search-box {
      padding: 0 20px 16px;
    }

    .search-input {
      width: 100%;
      padding: 12px 16px;
      border-radius: 12px;
      border: 1px solid #eccc68;
      background: #f1f2f6;
      font-size: 14px;
      outline: none;
    }

    /* Menu Items */
    .menu-section {
      padding: 0 20px;
      flex-grow: 1;
    }

    .menu-section h2 {
      font-size: 18px;
      margin-bottom: 12px;
    }

    .item-card {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px;
      border-radius: 16px;
      background: #ffffff;
      border: 1px solid #f1f2f6;
      margin-bottom: 12px;
    }

    .item-info h3 {
      font-size: 15px;
      margin-bottom: 4px;
    }

    .item-info p {
      font-size: 12px;
      color: var(--subtext);
      margin-bottom: 8px;
    }

    .price {
      font-weight: 700;
      color: var(--primary);
    }

    .add-btn {
      background: var(--primary);
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
    }

    /* Footer Checkout */
    footer {
      padding: 20px;
      background: #ffffff;
      border-top: 1px solid #f1f2f6;
    }

    .checkout-btn {
      width: 100%;
      background: var(--primary);
      color: white;
      border: none;
      padding: 16px;
      border-radius: 16px;
      font-size: 16px;
      font-weight: 700;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>
<body>

  <div class="app-container">
    <header>
      <div>
        <div class="location-label">Deliver to</div>
        <div class="location">📍 123 Main Street</div>
      </div>
      <button class="cart-badge">🛒 <span id="cart-count">0</span></button>
    </header>

    <div class="search-box">
      <input type="text" class="search-input" placeholder="Search dishes or cuisines..." />
    </div>

    <section class="menu-section">
      <h2>Popular Items</h2>

      <div class="item-card">
        <div class="item-info">
          <h3>Classic Cheeseburger</h3>
          <p>Angus beef, cheddar, special sauce</p>
          <div class="price">$12.99</div>
        </div>
        <button class="add-btn" onclick="addToCart()">Add</button>
      </div>

      <div class="item-card">
        <div class="item-info">
          <h3>Margherita Pizza</h3>
          <p>Fresh mozzarella, basil, tomato sauce</p>
          <div class="price">$14.50</div>
        </div>
        <button class="add-btn" onclick="addToCart()">Add</button>
      </div>

      <div class="item-card">
        <div class="item-info">
          <h3>Crispy Chicken Wrap</h3>
          <p>Spicy mayo, lettuce, pickles</p>
          <div class="price">$9.99</div>
        </div>
        <button class="add-btn" onclick="addToCart()">Add</button>
      </div>
    </section>

    <footer>
      <button class="checkout-btn">
        <span>View Order</span>
        <span id="cart-total">$0.00</span>
      </button>
    </footer>
  </div>

  <script>
    let itemCount = 0;
    let total = 0.0;

    function addToCart() {
      itemCount++;
      document.getElementById("cart-count").innerText = itemCount;
    }
  </script>
</body>
</html>