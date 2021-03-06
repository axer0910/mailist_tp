$(document).ready(function () {

    function meta() {
        var content = $(".editable"),
            txt,
            charCount = content.text().length,
            wordCount = 0,
            paraCount = 0;

        if (charCount !== 0) {
            content.children().each(function (index, el) {
                txt += $(el).text() + "\n";
            });
        }

        if (typeof txt !== "undefined") {
            wordCount = txt.split(/\s+/).length - 1;
            paraCount = txt.replace(/\n$/gm, "").split(/\n/).length;
        }

        $(".characters").text("Characters: " + charCount);
        $(".words").text(" Words: " + wordCount);
        $(".paragraphs").text(" Paragraphs: " + paraCount);
    }


    $(".editable").bind("keyup", function () {
        meta();
    });

    var editor = new MediumEditor(".editable", {
        buttonLabels: "fontawesome"
    });

    meta();

});