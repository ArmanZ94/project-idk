<meta charset="utf-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900">
<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="/css/fonts.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/custom.css">

{{--<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">--}}


<style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

<script>
    // Open the Modal
    function openModal(imageSrc) {
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("imgModal");
    
        // Display the modal
        modal.style.display = "block";
        modalImg.src = imageSrc;
    
        // Disable scroll on the main page
        document.body.classList.add("no-scroll");
    }
    
    // Close the Modal
    function closeModal() {
        var modal = document.getElementById("myModal");
    
        // Hide the modal
        modal.style.display = "none";
    
        // Enable scroll on the main page
        document.body.classList.remove("no-scroll");
    }
    </script>