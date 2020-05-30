<?php get_header(); ?>
    <main class="contentHome">
        <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0, 0, 100, 100" class="panels">
            <polygon transform="translate(0, 0)" points="0,0 0,100 100,0" class="panelLeft"></polygon>
            <polygon points="100,100 0,100 100,0" class="panelRight"></polygon>
        </svg>
        <div class="homepageOptions">
            <a class="optionLeft" href="/voice" onClick="handlePanelClick()">
                Voice Talent
            </a>
            <audio allow="autoplay" class="voice-audio" src='http://www.freedreman.com/wp-content/uploads/2020/05/voice-audio.mp3' display="none"> </audio>            
            <a class="optionRight" href="/video" onClick="handlePanelClick()">
                Video Editor
            </a>
            <audio allow="autoplay" class="video-audio" src='http://www.freedreman.com/wp-content/uploads/2020/05/video-audio.mp3' display="none"> </audio> 
        </div>
    </main>
<?php get_footer(); ?>
