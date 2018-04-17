<div class="container">
    <div class="row">
    <div id="contact" class="text-center">
        <h1 class="title">Contact</h1>

<!-- contact form -->
        <div class="col-md-6">
            <h3 class="text-left text-bold">Send us a message</h3>
            <form method="post" action="message" id="message-form">

                {{csrf_field()}}
                <div class="form-group">
                    <label class="float-left">Email:</label>
                    <input name="email" type="email" class="form-control" placeholder="example@gmail.com" required>
                </div>
                <div class="form-group">
                    <label class="float-left">Message:</label>
                    <textarea name="message" id="message" minlength="10" rows="3" class="form-control" placeholder="Write your message here." required></textarea>
                </div>
                <div class="form-group text-left">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </form>
            <div class="alert alert-success"></div>
            <div class="alert alert-danger"></div>
        </div>
<!-- /contact form -->

        <!-- contact -->
        <div class="col-md-6">
            <div class="contact">
                <i class="fa fa-phone blue-color contact-fa"></i>
                <h3>Phone</h3>
                <p>+254-700-400-500</p>
            </div>
        </div>
        <!-- /contact -->

        <!-- contact -->
        <div class="col-md-6">
            <div class="contact">
                <i class="fa fa-envelope blue-color contact-fa"></i>
                <h3>Email</h3>
                <p>info@christianchurch.com</p>
            </div>
        </div>
        <!-- /contact -->
    </div>
    </div>
</div>