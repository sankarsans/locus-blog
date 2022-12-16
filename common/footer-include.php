<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="js/component.js"></script>

<script>
    if(document.querySelector('.video-splide')){
        var thirtySlider = new Splide( '.video-splide', {
            type: 'loop',
            margin: '10%',
            perPage: 3,
            destroy: true,
            autoHeight: boolean = true,
            throttle: 300,
            perMove: 1,
            rewind : false,
            heightRatio: 0.5,
            pagination : false,
            arrows     : false,
            cover      : true,
            gap:20,
            breakpoints: {
                991.98: {
                    destroy: false,
                    perPage: 2,
                    height: 450,
                },
                766.98: {
                    destroy: false,
                    perPage: 1,
                    height: 400
                },
            },
        } ).mount();
    }

    if(document.querySelector('.webinar-splide')){
        var fourtySlider = new Splide( '.webinar-splide', {
            type: 'loop',
            margin: '10%',
            perPage: 3,
            destroy: true,
            autoHeight: boolean = true,
            throttle: 300,
            perMove: 1,
            rewind : false,
            heightRatio: 0.5,
            pagination : false,
            arrows     : false,
            cover      : true,
            gap:20,
            breakpoints: {
                991.98: {
                    destroy: false,
                    perPage: 2,
                    height: 450,
                },
                766.98: {
                    destroy: false,
                    perPage: 1,
                    height: 400
                },
            },
        } ).mount();
    }

    if(document.querySelector('.channel-splide')){
        var primarySlider = new Splide( '.channel-splide', {
            type       : 'fade',
            heightRatio: 0.5,
            pagination : true,
            arrows     : false,
            cover      : true,
        } ).mount();
    }
   

    if(document.querySelector('.post-splide')){
        var secondarySlider = new Splide( '.post-splide', {
            type: 'loop',
            margin: '10%',
            perPage: 2,
            breakpoints: {
                767: {
                    perPage: 1,
                },
            },
            autoHeight: boolean = true,
            throttle: 300,
            perMove: 1,
            rewind : true,
            heightRatio: 0.5,
            pagination : false,
            arrows     : true,
            cover      : true,
        } ).mount();
    }
    
</script>