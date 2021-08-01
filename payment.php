<?php
require("session.php");
?>
<?php
require("user_header.php");
?>
<div class="hk-pg-wrapper">
            <!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
      
                <form id="checkout-selection" method="POST">
                    <input type="radio" name="checkout" value="automatic">Automatic Checkout Demo<br>
                    <input type="radio" name="checkout" value="orders">Manual Checkout Demo<br>
                    <input type="submit" value="Submit">
                </form>

</div>
</div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        jQuery(document).ready(function($) 
        {
            var form = $('#checkout-selection');
            var radio = $('input[name="checkout"]');
            var choice = '';

            radio.change(function(e) 
            {
                choice = this.value;
                if (choice === 'orders') 
                {
                    form.attr('action', 'pay.php?checkout=manual');
                } 
                else 
                {
                    form.attr('action', 'pay.php?checkout=automatic');
                }
            });
        });
    </script>

<?php
require("user_footer.php");
?>