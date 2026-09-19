jQuery(document).ready(function(){
    jQuery(window).on('scroll', function () {
        // Check if user scrolled down more than 50 pixels
        if (jQuery(window).scrollTop() > 50) {
            jQuery('header').addClass('scrolled');
        } else {
            jQuery('header').removeClass('scrolled');
        }
    });
    // 
    const marqueeTrack = document.querySelector(".marquee-track");
    const items = gsap.utils.toArray(".marquee-item");

    // Clone items to ensure smooth looping
    items.forEach((item) => {
    const clone = item.cloneNode(true);
    marqueeTrack.appendChild(clone);
    });

    const totalWidth = marqueeTrack.offsetWidth;

    gsap.to(marqueeTrack, {
    x: `-=${totalWidth / 2}`, // Move half the total width (original set only)
    duration: 10    ,
    ease: "none",
    repeat: -1
    });

});