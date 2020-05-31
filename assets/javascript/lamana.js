
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}


/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myNav() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

// Paypal

<script src="https://www.paypal.com/sdk/js?client-id=AdSBBt2wxstg1Kqw-6DcjuD0wd4fCBKUX-pdsBYvzC_taETS9D3aHFc8t8ri3aYpRYL90RzkKuu7b6Tb&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
      },
      createOrder: function(data, actions) {
          return actions.order.create({
              purchase_units: [{
                  amount: {
                      value: '49'
                  }
              }]
          });
      },
      onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              alert('Transaction completed by ' + details.payer.name.given_name + '!');
          });
      }
  }).render('#paypal-button-container');
</script>