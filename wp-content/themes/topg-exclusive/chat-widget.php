<?php
/**
 * Chat Widget Template Part
 */
?>
<div style="width: 0; height: 0;" id="VG_OVERLAY_CONTAINER">
    <!-- Here is where TIXAE Agents renders the widget. -->
    <!-- Set render to 'full-width' then adjust the width and height to 500px (for example) to render the chatbot itself without the popup. -->
</div>

<script defer>
    (function() {
        window.VG_CONFIG = {
            ID: "vGpPdGCnk1Uw56dcRerP", // YOUR AGENT ID
            region: 'na', // YOUR ACCOUNT REGION 
            render: 'bottom-right', // can be 'full-width' or 'bottom-left' or 'bottom-right'
            // modalMode: true, // Set this to 'true' to open the widget in modal mode
            stylesheets: [
                // Base TIXAE Agents CSS
                "https://vg-bunny-cdn.b-cdn.net/vg_live_build/styles.css",
                // Add your custom css stylesheets, Can also add relative URL ('/public/your-file.css)
            ],
            // THIS IS SUPPOSED TO BE CHANGED OR REMOVED.
            // user: {
            //     name: 'John Doe', // User's name
            //     email: 'johndoe@gmail.com', // User's email
            //     phone: '+1234567890', // User's phone number
            // }
            // Optional user data -- end
            // **
            // userID: 'USER_ID', // If you want to use your own user_id
            // autostart: true, // Whether to autostart the chatbot with the proactive message
        }
        var VG_SCRIPT = document.createElement("script");
        VG_SCRIPT.src = "https://vg-bunny-cdn.b-cdn.net/vg_live_build/vg_bundle.js";
        VG_SCRIPT.defer = true; // Remove 'defer' if you want widget to load faster (Will affect website loading)
        document.body.appendChild(VG_SCRIPT);
    })()
</script>