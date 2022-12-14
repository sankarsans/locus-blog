<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="js/component.js"></script>
<script>
    var primarySlider = new Splide( '.channel-splide', {
        type       : 'fade',
        heightRatio: 0.5,
        pagination : true,
        arrows     : false,
        cover      : true,
    } ).mount();
    var secondarySlider = new Splide( '.post-splide', {
        type: 'loop',
        margin: '10%',
        perPage: 2,
        autoHeight: boolean = true,
        throttle: 300,
        perMove: 1,
        rewind : true,
        heightRatio: 0.5,
        pagination : false,
        arrows     : true,
        cover      : true,
    } ).mount();; 
</script>