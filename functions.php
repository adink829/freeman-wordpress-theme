<?php
function wp_enqueue_styles() {
    wp_enqueue_style( 'theme.css', get_template_directory_uri() . '/theme.css', array(), '0.0.1');
    wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css', array(), '0.0.1');
}

function handleMenu(){
    ?>
    <script>
    const handleShowMenu = () => {
        const menu = document.querySelector('.menuDropdown');
        menu.style.display = "flex"
    }
    const handleHideMenu = () => {
        const menu = document.querySelector('.menuDropdown');
        menu.style.display = "none"
    };
    const handleMenuClick = () => {
        const menu = document.querySelector('.menuDropdown');
       if (menu.style.display === "none"){
           menu.style.display = "flex"
       } else {
           menu.style.display = "none"
       }
    }
    </script>
    <?php
}

function handlePanelClick(){
?>
    <script>
    document.querySelector('.optionLeft').classList.add('animate');
    document.querySelector('.optionRight').classList.add('animate');
    document.querySelector('.panelLeft').classList.add('animate');
    document.querySelector('.panelRight').classList.add('animate');
    </script>
<?php
}

function addVoiceHover(){
    ?>
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
        const voiceHeader = document.querySelector('.optionLeft');
        const videoHeader = document.querySelector('.optionRight');
        const voiceAudio = document.querySelector('.voice-audio');
        const videoAudio = document.querySelector('.video-audio');

        videoHeader.addEventListener('mouseover', () => {
            voiceAudio.ended = true
            videoAudio.play()
        })
        voiceHeader.addEventListener('mouseover', () => {
            videoAudio.ended = true
            voiceAudio.play()
        })
        });
    </script>
    <?php
}

add_action( 'wp_enqueue_scripts', 'wp_enqueue_styles' );
add_action('wp_enqueue_scripts', 'handleMenu');
add_action('wp_enqueue_scripts', 'handlePanelClick');
add_action('wp_enqueue_scripts', 'addVoiceHover');
?>