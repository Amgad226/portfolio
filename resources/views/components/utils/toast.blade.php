<div id="toast">
    <div id="toast-img">

        <img id="toast-img-src" src="">
    </div>
    <div id="toast-desc">A notification message..</div>
</div>

<style>
    #toast {
        visibility: hidden;
        max-width: 50px;
        height: 50px;
        margin-left: -125px;
        margin: auto;
        background-color: #979696;
        color: #fff;
        text-align: center;
        border-radius: 10px;
        position: fixed;
        z-index: 1;
        left: 0;
        right: 0;
        bottom: 30px;
        font-size: 17px;
        white-space: nowrap;
    }

    #toast #toast-img {
        width: 50px;
        height: 50px;
        border-radius: 10px;

        float: left;

        padding-top: 16px;
        padding-bottom: 16px;

        box-sizing: border-box;


        background-color: #363636;
        color: #fff;
    }

    #toast-img-src {
        width: 1rem;
        height: 1rem;
        background: #fff
    }

    #toast #toast-desc {


        color: #fff;

        padding: 16px;

        overflow: hidden;
        white-space: nowrap;
    }

    #toast.show {
        visibility: visible;
        animation: fadein 0.5s, expand 0.5s 0.5s, stay 3s 1s, fadeout 0.5s 4.5s;
    }

    @-webkit-keyframes fadein {
        from {
            bottom: 0;
            opacity: 0;
        }

        to {
            bottom: 30px;
            opacity: 1;
        }
    }

    @keyframes fadein {
        from {
            bottom: 0;
            opacity: 0;
        }

        to {
            bottom: 30px;
            opacity: 1;
        }
    }

    @-webkit-keyframes expand {
        from {
            min-width: 50px
        }

        to {
            min-width: 350px
        }
    }

    @keyframes expand {
        from {
            min-width: 50px
        }

        to {
            min-width: 350px
        }
    }

    @-webkit-keyframes stay {
        from {
            min-width: 350px
        }

        to {
            min-width: 350px
        }
    }

    @keyframes stay {
        from {
            min-width: 350px
        }

        to {
            min-width: 350px
        }
    }

    @-webkit-keyframes shrink {
        from {
            min-width: 350px;
        }

        to {
            min-width: 50px;
        }
    }

    @keyframes shrink {
        from {
            min-width: 350px;
        }

        to {
            min-width: 50px;
        }
    }

    @-webkit-keyframes fadeout {
        from {
            bottom: 30px;
            opacity: 1;
        }

        to {
            bottom: 60px;
            opacity: 0;
        }
    }

    @keyframes fadeout {
        from {
            bottom: 30px;
            opacity: 1;
        }

        to {
            bottom: 60px;
            opacity: 0;
        }
    }
</style>
<script>
    function launch_toast(description, iconSrc) {
        var x = document.getElementById("toast")
        const text = document.getElementById("toast-desc")
        const img = document.getElementById("toast-img-src")
        img.src = iconSrc
        text.innerHTML = description
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 2000);
    }
</script>
