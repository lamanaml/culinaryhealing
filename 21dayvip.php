  <head>
    <link rel="icon"  type="image/jpg" href="assets/images/favicon.jpg">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>21-Day Cleanse - VIP - Culinary Healing</title>
    <meta name="robots" content="noimageindex, noindex, nofollow, nosnippet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-26808506-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-26808506-1');
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/dist/lamana.css">
  </head>

  <body id="21day">
        
<!-- navigation -->
    <div class="nav-div">
      <?php include_once("includes/nav.html"); ?>
    </div>
     
     
<!-- Hero -->
      <div class="hero3-image">
        <div class="hero-text">
        <h1 class="display-4">21-DAY CLEANSE</h1>
        <h1 class="display-4">VIP PASS</h1>
        <p class="lead">Starts in January</p>
        </div>
      </div>


<!-- Header -->
    <div class="container" style="padding:75px">
      <p>This cleanse will help remove toxins from our bodies and help us maintain a healthy weight. We are exposed to toxins on a daily basis - from the air that we breathe, to the products that we use, to the foods that we eat.  Although our bodies are designed to rid themselves of these toxins naturally, they can become overburdened. Detox programs, such as this cleanse, give our bodies the support to get rid of these toxins and manage weight, which is important to our overall health and well-being.​</p>
          
      <p>During these 21 days, we will eat and drink REAL, unprocessed, natural foods and juices (don't worry, we will learn what that means). There are no gimmicks and there are no pills to buy.  We will allow food to be our medicine, repairing us at the cellular level.  There are simple guidelines to follow each day, recipes and videos for extra help, and peer support to help keep us motivated.  If you need a little help to get on track to better health, join us.</p>
   


<!-- ------------------------------  The phases --------------------------------------------- -->
      <h3>The Process</h3>
      <div>
        <?php include_once("includes/theprocess.html"); ?>
      </div>



  
<!-- ------------------------------  The components --------------------------------------------- -->
      <div>
        <h3>The Experience</h3>
        <div>This cleanse is for people with all levels of fasting experience from first timers to the experts. It is virtual, so you can live anywhere in the world and still participate. There are several components that work together to create the total cleanse experience.
        </div>
        <div class="card-group">

          <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">First Steps</div>
            <div class="card-body">
              <p class="card-text">Think of this step as a healthy eating bootcamp. Here we learn about the different phases of the cleanse, the ingredients, and what to expect. We will learn how to create a menu, a grocery list and even how to grocery shop for healthy items!  </p>
            </div>
          </div>    

          <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Daily Discussions</div>
            <div class="card-body">
              <p class="card-text">Each day we will touch base. Here we will motivate and support each other and share our experiences. Through images, links and kind words we will stay connected through this journey. </p>
            </div>
          </div>


          <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Recipes</div>
            <div class="card-body">
              <p class="card-text">There are several recipes for each phase of the cleanse.  You can test some out and find your favorites, or add your own! </p>
            </div>
          </div>

          <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Resources</div>
            <div class="card-body">
              <p class="card-text">FAQ's, Calendars, Roadmaps and other tools and resources to help us along the way. </p>
            </div>
          </div>
                
        </div>
      </div>
<!-- ------------------------------  Register --------------------------------------------- -->      
      <div class="alert alert-success" role="alert" >
        <div class="row" >
          <div class="col text-center">
            <h3 class="text-center" >REGISTER NOW!!</h3>
            <h3>Always $25 
            <h2>January 8 - 28, 2021</h2> 
            <div id="paypal-button-container"></div>
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
                                  value: '25'
                              }
                          }]
                      });
                  },
                  onApprove: function(data, actions) {
                      return actions.order.capture().then(function(details) {
                          alert('Transaction completed by ' + details.payer.name.given_name + '!');
                          window.location.replace("http://www.culinaryhealing21days.com");
                      });
                  }
              }).render('#paypal-button-container');
            </script>
          </div>
          <div class="col">
            <h6>DISCLAIMER: Do not participate in this cleanse if you are pregnant, nursing or have chronic medical conditions.  Although this cleanse is intended to improve overall health, it is not a replacement for professional medical care.  We are not medical doctors. If you are on medication, consult your doctor before participating.  By registering for this cleanse, you agree to hold harmless Culinary Healing and any of its employees for any issues while participating in this cleanse. 
            </h6>
          </div>
        </div>
      </div>
    </div>
     </div>
   
    <!-- Footer -->
    <?php include_once("includes/footer.html"); ?>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/javascript/lamana.js"></script>
  </body>
</html>