$(function() {
    var VideoIdList = [];
    var VideoPlayers = [];

    function onImageClick(set, elem) {
        $('#image_set_' + set + ' > div').hide();
        $('#image_' + set + '_' + elem).show();
    }

    // Expose onImageClick to global scope if needed for inline onclick, 
    // but better to use event delegation or direct binding.
    window.onImageClick = onImageClick;

    function renderHeader(page) {
        $('.navlist a').removeClass('selected');
        if (page === 'portfolio') $('#nav-portfolio').addClass('selected');
        if (page === 'resume') $('#nav-resume').addClass('selected');
        if (page === 'about') $('#nav-about').addClass('selected');
    }

    function renderPortfolio() {
        renderHeader('portfolio');
        document.title = "Olive Au - Portfolio";
        var $app = $('#app');
        $app.empty();

        var html = '';
        
        // Group 1: Items 0 and 1
        portfolioData.slice(0, 2).forEach(function(item) {
            html += imageFrame(item.shortTitle, item.when, item.tn, item.alt, '#/item/' + item.id);
        });

        html += '<div style="display: table;" class="about_me_big">' +
                '<div style="display:table-cell; vertical-align:middle;">' +
                'I aspire to design experiences that better reflect the real practices and needs of people by uncovering how technologies are used in everyday life.' +
                '</div>' +
                '</div>';

        // Group 2: Items 2, 3, and 4
        portfolioData.slice(2, 5).forEach(function(item) {
            html += imageFrame(item.shortTitle, item.when, item.tn, item.alt, '#/item/' + item.id);
        });

        $app.append(html);
    }

    function imageFrame(caption, when, image, alt, link) {
        return '<div class="image_frame">' +
                '<a href="' + link + '">' +
                    '<div class="frame_image">' +
                        '<img border="0" alt="' + alt + '" width="240" height="180" src="' + image + '">' +
                    '</div>' +
                    '<div class="frame_caption">' +
                        '<center>' + caption + '<div class="image_frame_when">' + when + '</div></center>' +
                    '</div>' +
                '</a>' +
            '</div>';
    }

    function renderPortfolioItem(id) {
        renderHeader('portfolio');
        var item = portfolioData[id];
        if (!item) {
            router();
            return;
        }
        document.title = "Olive Au - " + item.title;
        var $app = $('#app');
        $app.empty();

        var prevId = (id - 1 + portfolioData.length) % portfolioData.length;
        var nextId = (id + 1) % portfolioData.length;

        var html = '<div style="clear:both; margin: 0 0 20px 5px; float:left;">' +
                '<h1>' + item.title + '</h1>' +
                item.intro +
            '</div>' +
            '<div style="float:right;">' +
                '<a href="#/item/' + prevId + '">previous</a> | <a href="#/item/' + nextId + '">next</a>' +
            '</div>';

        VideoIdList = [];
        var videoCount = 0;

        item.items.forEach(function(subItem, i) {
            html += '<div style="clear: both;">' +
                '<div style="width: 40%; float: left; margin: 0 10px">' +
                    '<h3 style="font-weight: bold">' + subItem.title + '</h3>' +
                    '<p>' + subItem.data + '</p>' +
                '</div>' +
                '<div style="width: 480px; float: left;">';

            var images = subItem.images || {};
            var imageKeys = Object.keys(images);

            if (imageKeys.length > 0) {
                html += '<div class="image_set_main" id="image_set_' + i + '" style="width: 100%">';
                imageKeys.forEach(function(key, j) {
                    var display = (j === 0) ? '' : 'none';
                    html += '<div id="image_' + i + '_' + j + '" style="display: ' + display + '">';
                    
                    var imgSource = images[key];
                    if (imgSource.indexOf('http://www.youtube.com/') === 0) {
                        videoCount++;
                        var videoId = imgSource.split('=')[1];
                        html += '<div id="' + videoId + '"></div>';
                        VideoIdList.push(videoId);
                    } else {
                        html += '<img height="360" alt="' + key + '" src="images/' + imgSource + '">';
                    }
                    html += '</div>';
                });
                html += '</div>';

                if (imageKeys.length > 1) {
                    html += '<div class="image_slider">';
                    imageKeys.forEach(function(key, j) {
                        var imgSource = images[key];
                        var thumbSrc = '';
                        if (imgSource.indexOf('http://www.youtube.com/') === 0) {
                            var vId = imgSource.split('=')[1];
                            thumbSrc = 'http://img.youtube.com/vi/' + vId + '/1.jpg';
                        } else {
                            thumbSrc = 'images/' + imgSource;
                        }
                        html += '<div class="image_slider_item" onclick="onImageClick(\'' + i + '\',\'' + j + '\')">' +
                                '<img width="100px" height="75px" alt="' + key + '" src="' + thumbSrc + '">' +
                            '</div>';
                    });
                    html += '</div>';
                } else {
                    html += '<div style="height: 20px;"></div>';
                }
            }
            html += '</div></div>';
        });

        $app.append(html);

        if (videoCount > 0) {
            if (window.YT && window.YT.Player) {
                onYouTubePlayerAPIReady();
            } else {
                var tag = document.createElement('script');
                tag.src = "https://www.youtube.com/player_api";
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                
                window.onYouTubePlayerAPIReady = function() {
                    VideoIdList.forEach(function(vId) {
                        var player = new YT.Player(vId, {
                            height: '360',
                            width: '480',
                            videoId: vId
                        });
                        VideoPlayers.push(player);
                    });
                };
            }
        }
    }

    function onYouTubePlayerAPIReady() {
        VideoPlayers = [];
        VideoIdList.forEach(function(vId) {
            var player = new YT.Player(vId, {
                height: '360',
                width: '480',
                videoId: vId
            });
            VideoPlayers.push(player);
        });
    }

    function renderResume() {
        renderHeader('resume');
        document.title = "Olive Au - Resume";
        var $app = $('#app');
        $app.empty();

        var html = '<div class="resume">';
        Object.keys(resumeData).forEach(function(section) {
            var coll = resumeData[section];
            html += '<div class="resume_item">' +
                    '<div class="resume_rhc" style="width: 100%; float:clear;">';
            coll.forEach(function(it, i) {
                html += '<div class="work_item">' +
                        '<div class="resume_section">' +
                            ((i === 0) ? section : '&nbsp;') +
                        '</div>' +
                        '<div style="float: left; width: 600px; margin: 0 0 10px 0; ' + ((i !== 0) ? 'padding-top: 15px;' : '') + '">' +
                            '<span class="resume_what">' + it.title + '</span>' +
                            '<span class="resume_where">' + ((it.where !== '') ? '@ ' + it.where : '') + '</span>' +
                            '<div class="resume_text">' +
                                ((it.when !== '') ? '<div class="resume_when" ' + (it.summary === '' ? 'style="padding-bottom: 0px;"' : '') + '>' + it.when + '</div>' : '') +
                                ((it.summary !== '') ? '<div class="resume_summary">' + it.summary + '</div>' : '') +
                                it.item_line +
                                ((it.item_list.length > 0) ? 
                                    '<div class="resume_list">' +
                                        'Activities:' +
                                        '<ul class="resume_list">' +
                                            it.item_list.map(function(item_text) { return '<li>' + item_text + '</li>'; }).join('') +
                                        '</ul>' +
                                    '</div>' : '') +
                            '</div>' +
                        '</div>' +
                    '</div>';
            });
            html += '</div></div>';
        });
        html += '</div>';
        html += '<div style="font-size: 13pt; width:400px; text-align:center; clear:both; margin: 0 auto;"><a href="OliveAuResume.pdf">Download PDF Resume</a></div>';

        $app.append(html);
    }

    function renderAbout() {
        renderHeader('about');
        document.title = "Olive Au - About Me";
        var $app = $('#app');
        $app.empty();

        var html = '<div style="min-height: 500px;">' +
                   '<div style="float:left; margin: 0 10px 0 0; width: 560px;">' +
                   aboutData.content +
                   '</div>' +
                   '<div style="margin: 16px 0 0 0; float:left">' +
                   '<img width="250" src="' + aboutData.profileImage + '">' +
                   '</div>' +
                   '</div>';
        $app.append(html);
    }

    function router() {
        var hash = window.location.hash || '#/';
        
        if (hash === '#/' || hash === '#/portfolio') {
            renderPortfolio();
        } else if (hash.indexOf('#/item/') === 0) {
            var id = parseInt(hash.replace('#/item/', ''));
            renderPortfolioItem(id);
        } else if (hash === '#/resume') {
            renderResume();
        } else if (hash === '#/about') {
            renderAbout();
        } else {
            renderPortfolio();
        }
    }

    window.addEventListener('hashchange', router);
    router();
});
