$(document).ready(function () {

    var activeProject,
        link,
        portfolioContainer = $(".portfolio-ajax"),
        contentContainer = $(".portfolio-content"),
        errorMessage = "Failed to load Preview.",
        loader = $(".gallery-loader");

    function checkControls() {

        if (activeProject.is(':first-child')) {
            $(".prev-portfolio-item").addClass("disabled");
        } else {
            $(".prev-portfolio-item").removeClass("disabled");
        }

        if (activeProject.is(':last-child')) {
            $(".next-portfolio-item").addClass("disabled");
        } else {
            $(".next-portfolio-item").removeClass("disabled");
        }

        initPortfolio();
    }

    function initPortfolio() {

        link = activeProject.find("a").attr('href');

        portfolioContainer.removeClass("loaded").addClass("loading");

        loader.removeClass("hide");

        $(".content-wrap").animate({
            scrollTop: 0
        }, 600, function() {
            contentContainer.load(link, function (response, status, xhr) {
                if (status === "error") {
                    contentContainer.html("<div class=\"show text-center\">" + errorMessage + " " + xhr.status + " " + xhr.statusText + "</div>");
                }

                initPlugins();
            });
        });

        return false;
    }

    function initPlugins() {
        portfolioContainer.imagesLoaded()
            .always(function () {
                done();
            })
            .done(function () {})
            .fail(function () {
                contentContainer.prepend("<em class=\"show text-center\">Some images where not loaded</em>");
            });
    }

    function done() {

        portfolioContainer.removeClass("loading").addClass("loaded");

        loader.addClass("hide");

        $(".content-wrap").fadeOut(1000);

        if (!portfolioContainer.is(":visible")) {
            portfolioContainer.fadeIn(1000);
        }
    }

    function closePortfolio() {

        portfolioContainer.fadeOut().removeClass("loaded");

        $(".content-wrap").fadeIn();

        contentContainer.empty();

        activeProject = "";

        $container.isotope('layout');
        
    }

    $('.gallery > .item a').on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();

        if ($(this).parent().is(activeProject)) {
            return;
        }

        activeProject = $(this).parent();

        checkControls();
    });

    $(".next-portfolio-item").on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();

        if ($(this).hasClass("disabled")) {
            return;
        }

        loader.removeClass("hide");

        activeProject = activeProject.next();

        checkControls();
    });

    $(".prev-portfolio-item").on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();

        if ($(this).hasClass("disabled")) {
            return;
        }

        loader.removeClass("hide");

        activeProject = activeProject.prev();

        checkControls();
    });

    $(".close-view").on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();

        closePortfolio();
    });

    var $container = $(".gallery").isotope({
        resizable: false,
        itemSelector: ".item",
        layoutMode: "masonry"
    });

    $(document).on("click", ".toggle-sidebar", function (e) {
        e.preventDefault();
        $container.isotope('layout');
    });

    $(".gallery").imagesLoaded().always(function () {
        $(".gallery").fadeIn();
    }).progress(function (instance, image) {
        if (image.isLoaded) {
            $(image.img).addClass("loaded");
        }
    }).done(function () {
        $(".gallery-loader").addClass("hide");
        $(".gallery").removeClass("hide");
        $container.isotope('layout');
    });

    $(".toggle-sidebar").on("click", function (e) {
        e.preventDefault();
        $container.isotope('layout');
    });

});
