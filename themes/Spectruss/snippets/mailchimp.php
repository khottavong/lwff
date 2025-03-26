<?php
    function snippet_mailchimp()
    {
        ob_start();
    ?>
        <div id="mc_embed_signup">
            <form action="https://lookoutfilmfestival.us6.list-manage.com/subscribe/post?u=781e35bb935120e3e3797baac&amp;id=1c1e125e8d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <div class="mc-field-group">
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="email">
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_781e35bb935120e3e3797baac_1c1e125e8d" tabindex="-1" value=""></div>
                    <div class="clear"><input placeholder="email" type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
            </form>
        </div>
    <?php
        return ob_get_clean();
    } add_shortcode("mailchimp", "snippet_mailchimp");