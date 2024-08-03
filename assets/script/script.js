        // <!-- our services -->
        var owl = $('.team-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 25,
            autoplay: true,
            autoplayTimeout: 3000,
            nav: true,
            dots: false,
            autoplayHoverPause: true
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [3000])
        })
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        })
        
        
        // <!-- our patient -->
        var owl = $('.patient-carousel');
        owl.owlCarousel({
            items: 3,
            loop: true,
            margin: 30,
            autoplay: false,
            autoplayTimeout: 8000,
            nav: true,
            autoplayHoverPause: true
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [8000])
        })
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        })
        
        
        
        
        
        /* Load More */
        
        $(function () {
    let x = 3;
    const items = $('.doctors_container > .row > div');
    const loadMoreBtn = $('.load_btn');
    
    items.slice(0, x).show();
    
    loadMoreBtn.on('click', function (e) {
        e.preventDefault();
        
        if (loadMoreBtn.text() === 'Load More') {
            items.filter(':hidden').slice(0, 3).slideDown();
            x += 3;
            
            if (items.length <= x) {
                loadMoreBtn.text('Show Less');
            }
        } else {
            items.slice(3).slideUp();
            x = 3;
            loadMoreBtn.text('Load More');
        }
    });
});
        
        
        
        
        /*  Youtube Videos  */
        
        
            var playButtons = document.querySelectorAll('.play_button');
playButtons.forEach(function(playButton) {
    playButton.addEventListener('click', function() {
        this.style.opacity = '0'; // Hide the play button
        this.style.zIndex = '-1';
        var video = this.parentElement.querySelector('.inner_story_video');
        var image = this.parentElement.querySelector('.inner_story_img');
        video.style.opacity = '1'; // Make the video visible
        video.style.zIndex = '2';
        image.style.opacity = '0'; // Hide the image
        image.style.zIndex = '-1'; // Hide the image
        video.play();
    });
});

       
        
 

        
        
        