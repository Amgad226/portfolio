<div style="display: none" id="div-zoom" onclick="hideZoomF()">
    <x-lazy-image  id="zoom" alt="zoom img"/>

</div>
<style>
    #div-zoom {
        position: fixed;
        inset: 0;
        z-index: 999;
        display: none; 
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.7);
    }
    
    #zoom {
        max-width: 90vw; /* Ensures image does not overflow screen width */
        max-height: 90vh; /* Ensures image does not overflow screen height */
        object-fit: contain;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(255, 255, 255, 0.2);
        transition: transform 0.3s ease-in-out;
    }
    
    #zoom:hover {
        transform: scale(1.05);
    }
    
    </style>
    <script>
     function zoom(element) {
        const divZoom = document.getElementById("div-zoom");
        const zoomImg = document.getElementById("zoom");
    
        zoomImg.src = element.src;
        divZoom.style.display = "flex";
    }
    
    function hideZoomF() {
        document.getElementById("div-zoom").style.display = "none";
    }
    </script>