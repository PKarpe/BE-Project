<!--    NEWSLETTER     -->

  <hr class="border hr mx-auto border-dark opacity-100" />
  <section class="newsletter">
    <div class="container text-center my-5">

      <?php $a = new GlobalArea('Newsletter');
      $a->display();
      ?>


    </div>
  </section>

  <!--   ABOUT US     -->

  <section class="about" id="about">
    <div class="container py-5">

      <div class="row align-items-center justify-content-center">


        <?php $a = new GlobalArea('About Us');
        $a->display();
        ?>



      </div>


    </div>
  </section>

  <!--  FOOTER    -->

  <footer>
    <div class="container py-5">
      <div class="row footer pt-2">


        <div class="col order-sm-1 text-center">
          <?php $a = new GlobalArea('Footer Links');
          $a->display();
          ?>
        </div>

        <div class="col languages justify-content-evenly order-sm-0">
          <?php $a = new GlobalArea('Footer Languages');
          $a->display();
          ?>
        </div>

        <div class="col align-self-center order-sm-2 text-end">
          <?php $a = new GlobalArea('Site Logo');
          $a->display();
          ?>
        </div>


      </div>
    </div>
  </footer>

  <!--  MAIN JS FILES     -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- OWL CAROUSAL  -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- CODE  -->

  <script>
    //SEARCH AND NAVBAR

    $(function() {
      var desktopForm = $("#desktopSearch").html();
      $(window).on("load resize", function() {
        if ($(window).width() <= 991) {
          $("#mobileSearch").html(desktopForm);
        } else {
          $("#mobileSearch").empty();
        }
      });
    });

    $(".nav-link").on("click", function() {
      $(".nav-link.active").removeClass("active");
      $(this).addClass("active");
    });

    //LATEST SCHEMES

    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      responsive: {
        0: {
          items: 1,
        },
        575.98: {
          items: 2,
        },
        991.98: {
          items: 3,
        },
        1399.98: {
          items: 4,
        },
      },
    });

    //SEARCH FOR SCHEMES

    var incrementButton = document.getElementsByClassName("btn-plus");
    var decrementButton = document.getElementsByClassName("btn-minus");

    //INCREMENT
    for (var i = 0; i < incrementButton.length; i++) {
      var perD = incrementButton[i];
      perD.addEventListener("click", function(event) {
        var buttonClicked = event.target;

        var input = buttonClicked.parentElement.children[1];
        var inputValue = input.value;
        var newValue = parseInt(inputValue) + 1;
        if (newValue <= 100) {
          input.value = newValue;
        } else {
          input.value = 100;
        }
      });
    }



    //DECREMENT
    for (var i = 0; i < decrementButton.length; i++) {
      var perD = decrementButton[i];
      perD.addEventListener("click", function(event) {
        var buttonClicked = event.target;

        var input = buttonClicked.parentElement.children[1];
        var inputValue = input.value;
        var newValue = parseInt(inputValue) - 1;
        if (newValue >= 0) {
          input.value = newValue;
        } else {
          input.value = 0;
        }
      });
    }
  </script>



  <script>

    //ACCESSIBILITY MENU

    (function(d) {
      var s = d.createElement("script");
      /* uncomment the following line to override default position*/
      /* s.setAttribute("data-position", 1);*/
      /* uncomment the following line to override default size (values: small, large)*/
      /* s.setAttribute("data-size", "large");*/
      /* uncomment the following line to override default language (e.g., fr, de, es, he, nl, etc.)*/
      /* s.setAttribute("data-language", "null");*/
      /* uncomment the following line to override color set via widget (e.g., #053f67)*/
      /* s.setAttribute("data-color", "#2d68ff");*/
      /* uncomment the following line to override type set via widget (1=person, 2=chair, 3=eye, 4=text)*/
      /* s.setAttribute("data-type", "1");*/
      /* s.setAttribute("data-statement_text:", "Our Accessibility Statement");*/
      /* s.setAttribute("data-statement_url", "http://www.example.com/accessibility";*/
      /* uncomment the following line to override support on mobile devices*/
      /* s.setAttribute("data-mobile", true);*/
      /* uncomment the following line to set custom trigger action for accessibility menu*/
      /* s.setAttribute("data-trigger", "triggerId")*/
      s.setAttribute("data-account", "McrV552U00");
      s.setAttribute("src", "https://cdn.userway.org/widget.js");
      (d.body || d.head).appendChild(s);
    })(document);
  </script>
  <noscript>
    Please ensure Javascript is enabled for purposes of
    <a href="https://userway.org">website accessibility</a>
  </noscript>


<!--  SCREEN READER  -->

    <script>
     <!-- let msg = new SpeechSynthesisUtterance();
      let voices = speechSynthesis.getVoices();
      msg.voice = voices[0];
      let tags = document.querySelectorAll("a,button,div,p,h1,h2,h3,h4,h5,h6");
      tags.forEach((tag) => {
        tag.addEventListener("click", (e) => {
          msg.text = e.target.innerText;
          tag.style.backgroundColor = "white";
          speechSynthesis.speak(msg);

          let interval = setInterval(() => {
            if (!speechSynthesis.speaking) {
              tag.style.removeProperty("background-color");
              clearInterval(interval);
            }
          }, 100);
        });
      });-->
    </script>

    <!--  VOICE NAVIGATION  -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
    
    
    <!--<script>
      if (
        "SpeechRecognition" in window ||
        "webkitSpeechRecognition" in window
      ) {
      // API is supported
      } else {
      // API is not supported
      }
      const recognition = new (window.SpeechRecognition ||
      window.webkitSpeechRecognition)();

      recognition.lang = "en-US"; // Set recognition language
      recognition.continuous = true; // Enable continuous recognition
      recognition.interimResults = false; // Get final results only

      recognition.onresult = (event) => {
        const transcript =
        event.results[event.results.length - 1][0].transcript;
        // Process the recognized transcript
      };

      recognition.onerror = (event) => {
        // Handle recognition errors
      };

      recognition.onend = () => {
        // Recognition ended
      };

      // Start recognition
      function startRecognition() {
        recognition.start();
      }

      // Stop recognition
      function stopRecognition() {
        recognition.stop();
      }

      <button onclick="startRecognition()">
        Start Voice Navigation
      </button>
      <button onclick="stopRecognition()">Stop Voice Navigation</button>

      recognition.onresult = (event) => {
        const transcript = event.results[event.results.length - 1][0].transcript;
        if (transcript.includes('home')) {
          // Navigate to the home page
        } else if (transcript.includes('about')) {
          // Navigate to the about page
        }
        // Handle other navigation commands
      };

    </script>-->

  <!-- CONCRETE EDIT -->

  <?php View::element("footer_required"); ?>

</body>

</html>