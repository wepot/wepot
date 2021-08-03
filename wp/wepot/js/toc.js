jQuery(function($) {
    var idcount = 1;
    var toc = '';
    var currentlevel = 0;
    jQuery("article h2,article h3", this).each(function() {
        this.id = "toc-" + idcount;
        idcount++;
        var level = 0;
        if (this.nodeName.toLowerCase() == "h2") {
            level = 1;
        } else if (this.nodeName.toLowerCase() == "h3") {
            level = 2;
        }
        while (currentlevel < level) {
            toc += '<ol>';
            currentlevel++;
        }
        while (currentlevel > level) {
            toc += "</ol>";
            currentlevel--;
        }
        toc += '<li><a href="#' + this.id + '">' + jQuery(this).html() + "</a></li>\n";
    });
    while (currentlevel > 0) {
        toc += "</ol>";
        currentlevel--;
    }
    if (jQuery("article h2")[0]) {
        jQuery("#toc").html('<p>目次</p>'+ toc);
    }
});
