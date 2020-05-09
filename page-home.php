<script>
window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');
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

<?php get_header(); ?>
    <main class="contentHome">
        <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0, 0, 100, 100" class="panels">
            <polygon transform="translate(0, 0)" points="0,0 0,100 100,0" class="panelLeft"></polygon>
            <polygon points="100,100 0,100 100,0" class="panelRight"></polygon>
        </svg>
        <div class="homepageOptions">
            <a class="optionLeft" href="/voice">
            <!-- <img class="voice-icon" src="http://localhost:8888/wp-content/uploads/2020/04/voice-icon.png"/> -->
                Voice Talent
            </a>
            <audio allow="autoplay" class="voice-audio" src='http://localhost:8888/wp-content/uploads/2020/05/voice-audio.mp3' display="none"> </audio>            
            <a class="optionRight" href="/video">
                Video Editor
            </a>
            <audio allow="autoplay" class="video-audio" src='http://localhost:8888/wp-content/uploads/2020/05/video-audio.mp3' display="none"> </audio> 
                <!-- <img class="video-icon"src="http://localhost:8888/wp-content/uploads/2020/04/video-icon.png"> -->
        </div>
    </main>
<?php get_footer(); ?>
