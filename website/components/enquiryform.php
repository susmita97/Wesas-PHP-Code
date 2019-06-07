<div class="container">
    <div class="row">
        <div class="col m10 offset-m1 s12"">
            <h2 class="center-align">Quick Contact</h2>
            <div class="row">
                <form class="col m8 offset-m2 s12" action="index.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" name="sub_name">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" name="sub_email">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                          <textarea id="message" class="materialize-textarea" name="sub_message"></textarea>
                          <label for="message">Message</label>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col m12">
                         <p class="right-align"><button class="btn btn-large waves-effect waves-light" type="submit" name="submit">Send Message</button></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>