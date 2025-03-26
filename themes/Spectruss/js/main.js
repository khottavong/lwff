(function ($) {

    $(document).ready(function () {
        // let lazies = document.getElementsByClassName("nolazy");
        // for (let i = 0; i < lazies.length; i++) {
        //     let imgs = lazies[i].getElementsByTagName("img");
        //     for (let j = 0; j < imgs.length; j++) {

        //         $(imgs[j]).addClass("nolazy");
        //         $(imgs[j]).removeClass("lazy");
        //         $(imgs[j]).removeClass("lazy-hidden");
        //         imgs[j].removeAttribute("data-lazy-type");
        //         $(imgs[j]).attr("src", $(imgs[j]).attr("data-src"));
        //         imgs[j].removeAttribute("data-src");
        //         console.log(imgs[j]);
        //     }
        // }


        // handle teaser video

        if ($("#watch-the-teaser")[0]) {

            let vid = $("#watch-the-teaser video")[0];
            let vidPlaying = false;

            function playTeaser() {
                vid.play();
                $("#play-teaser").attr("src", `${window.location}/wp-content/uploads/media/pause.png`);
                vidPlaying = true;
            }

            function pauseTeaser() {
                vid.pause();
                $("#play-teaser").attr("src", `${window.location}/wp-content/uploads/media/play.png`);
                vidPlaying = false;
            }

            $("#watch-the-teaser").click(() => {
                if (vidPlaying) {
                    pauseTeaser();
                } else {
                    playTeaser();
                }
            });

            $(vid).on('ended', () => {
                pauseTeaser();
            });

        }

    });

})(jQuery);