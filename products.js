document.addEventListener('DOMContentLoaded', () => {
    const minusBtn = document.querySelector('.quantity-control button:first-child');
    const plusBtn = document.querySelector('.quantity-control button:last-child');
    const quantityDisplay = document.querySelector('.quantity-control span');
  
    let quantity = 1;
  
    minusBtn.addEventListener('click', () => {
      if (quantity > 1) {
        quantity--;
        quantityDisplay.textContent = quantity;
      }
    });
  
    plusBtn.addEventListener('click', () => {
      quantity++;
      quantityDisplay.textContent = quantity;
    });
  });
  