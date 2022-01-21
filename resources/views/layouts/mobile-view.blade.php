<!-- Mobile view Get Started-->
<form id="myform" action="https://formspree.io/f/mbjwlqel" method="POST" class="row g-3 align-items-center mobile">
    <div class="col-12">
        <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
        <div class="input-group">
            <input type="email" class="form-control" name="mailer" placeholder="Enter your email address" required>
        </div>
    </div>
    <div class="col-12">
       <button id="my-form-button" class="btn get-started-btn">Get Started</button>
    </div>
    <p id="my-status"></p>
</form>


<script>
    var form = document.getElementById("myform");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        swal({
          title: "Thank you!",
          text: "Someone from MediSpark will be in touch soon",
          icon: "success",
          button: "OK",
        });
        // status.innerHTML = "Thanks for your submission!";
        form.reset()
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)
</script>
<!-- Ends -->