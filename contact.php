<?php include 'includes/header.php'; ?>

<section class="page">

    <div class="container">

        <h1 class="section-title">
            Contact Me
        </h1>

        <form class="contact-form"
              action="send-message.php"
              method="POST">

            <input type="text"
                   name="name"
                   placeholder="Your Name"
                   required>

            <input type="email"
                   name="email"
                   placeholder="Your Email"
                   required>

            <textarea name="message"
                      rows="6"
                      placeholder="Your Message"
                      required></textarea>

            <button type="submit"
                    name="send"
                    class="btn">

                Send Message

            </button>

        </form>

    </div>

</section>

<?php include 'includes/footer.php'; ?>