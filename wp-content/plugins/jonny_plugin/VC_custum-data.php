<?php


add_filter( 'vc_iconpicker-type-fontawesome', 'jonny_tweak_vc_iconpicker_type_fontawesome2' );



function jonny_tweak_vc_iconpicker_type_fontawesome2( $icons ) {
// Add custom icons to array
    $icons[esc_html__( 'jonny et line icons', 'jonny' )] = array(
        array( " " => esc_html__( "", "jonny" ) ),
        array( " icon ion-social-googleplus" => esc_html__( "social googleplus", "jonny" ) ),
        array( "icon icon-home" => esc_html__("home","jonny")),
        array( "icon icon-home2" => esc_html__("home2","jonny")),
        array( "icon icon-home3" => esc_html__("home3","jonny")),
        array( "icon icon-home4" => esc_html__("home4","jonny")),
        array( "icon icon-home5" => esc_html__("home5","jonny")),
        array( "icon icon-home6" => esc_html__("home6","jonny")),
        array( "icon icon-bathtub" => esc_html__("bathtub","jonny")),
        array( "icon icon-toothbrush" => esc_html__("toothbrush","jonny")),
        array( "icon icon-bed" => esc_html__("bed","jonny")),
        array( "icon icon-couch" => esc_html__("couch","jonny")),
        array( "icon icon-chair" => esc_html__("chair","jonny")),
        array( "icon icon-city" => esc_html__("city","jonny")),
        array( "icon icon-apartment" => esc_html__("apartment","jonny")),
        array( "icon icon-pencil" => esc_html__("pencil","jonny")),
        array( "icon icon-pencil2" => esc_html__("pencil2","jonny")),
        array( "icon icon-pen" => esc_html__("pen","jonny")),
        array( "icon icon-pencil3" => esc_html__("pencil3","jonny")),
        array( "icon icon-eraser" => esc_html__("eraser","jonny")),
        array( "icon icon-pencil4" => esc_html__("pencil4","jonny")),
        array( "icon icon-pencil5" => esc_html__("pencil5","jonny")),
        array( "icon icon-feather" => esc_html__("feather","jonny")),
        array( "icon icon-feather2" => esc_html__("feather2","jonny")),
        array( "icon icon-feather3" => esc_html__("feather3","jonny")),
        array( "icon icon-pen2" => esc_html__("pen2","jonny")),
        array( "icon icon-pen-add" => esc_html__("pen add","jonny")),
        array( "icon icon-pen-remove" => esc_html__("pen remove","jonny")),
        array( "icon icon-vector" => esc_html__("vector","jonny")),
        array( "icon icon-pen3" => esc_html__("pen3","jonny")),
        array( "icon icon-blog" => esc_html__("blog","jonny")),
        array( "icon icon-brush" => esc_html__("brush","jonny")),
        array( "icon icon-brush2" => esc_html__("brush2","jonny")),
        array( "icon icon-spray" => esc_html__("spray","jonny")),
        array( "icon icon-paint-roller" => esc_html__("paint roller","jonny")),
        array( "icon icon-stamp" => esc_html__("stamp","jonny")),
        array( "icon icon-tape" => esc_html__("tape","jonny")),
        array( "icon icon-desk-tape" => esc_html__("desk tape","jonny")),
        array( "icon icon-texture" => esc_html__("texture","jonny")),
        array( "icon icon-eye-dropper" => esc_html__("eye dropper","jonny")),
        array( "icon icon-palette" => esc_html__("palette","jonny")),
        array( "icon icon-color-sampler" => esc_html__("color sampler","jonny")),
        array( "icon icon-bucket" => esc_html__("bucket","jonny")),
        array( "icon icon-gradient" => esc_html__("gradient","jonny")),
        array( "icon icon-gradient2" => esc_html__("gradient2","jonny")),
        array( "icon icon-magic-wand" => esc_html__("magic wand","jonny")),
        array( "icon icon-magnet" => esc_html__("magnet","jonny")),
        array( "icon icon-pencil-ruler" => esc_html__("pencil ruler","jonny")),
        array( "icon icon-pencil-ruler2" => esc_html__("pencil ruler2","jonny")),
        array( "icon icon-compass" => esc_html__("compass","jonny")),
        array( "icon icon-aim" => esc_html__("aim","jonny")),
        array( "icon icon-gun" => esc_html__("gun","jonny")),
        array( "icon icon-bottle" => esc_html__("bottle","jonny")),
        array( "icon icon-drop" => esc_html__("drop","jonny")),
        array( "icon icon-drop-crossed" => esc_html__("drop crossed","jonny")),
        array( "icon icon-drop2" => esc_html__("drop2","jonny")),
        array( "icon icon-snow" => esc_html__("snow","jonny")),
        array( "icon icon-snow2" => esc_html__("snow2","jonny")),
        array( "icon icon-fire" => esc_html__("fire","jonny")),
        array( "icon icon-lighter" => esc_html__("lighter","jonny")),
        array( "icon icon-knife" => esc_html__("knife","jonny")),
        array( "icon icon-dagger" => esc_html__("dagger","jonny")),
        array( "icon icon-tissue" => esc_html__("tissue","jonny")),
        array( "icon icon-toilet-paper" => esc_html__("toilet paper","jonny")),
        array( "icon icon-poop" => esc_html__("poop","jonny")),
        array( "icon icon-umbrella" => esc_html__("umbrella","jonny")),
        array( "icon icon-umbrella2" => esc_html__("umbrella2","jonny")),
        array( "icon icon-rain" => esc_html__("rain","jonny")),
        array( "icon icon-tornado" => esc_html__("tornado","jonny")),
        array( "icon icon-wind" => esc_html__("wind","jonny")),
        array( "icon icon-fan" => esc_html__("fan","jonny")),
        array( "icon icon-contrast" => esc_html__("contrast","jonny")),
        array( "icon icon-sun-small" => esc_html__("sun small","jonny")),
        array( "icon icon-sun" => esc_html__("sun","jonny")),
        array( "icon icon-sun2" => esc_html__("sun2","jonny")),
        array( "icon icon-moon" => esc_html__("moon","jonny")),
        array( "icon icon-cloud" => esc_html__("cloud","jonny")),
        array( "icon icon-cloud-upload" => esc_html__("cloud upload","jonny")),
        array( "icon icon-cloud-download" => esc_html__("cloud download","jonny")),
        array( "icon icon-cloud-rain" => esc_html__("cloud rain","jonny")),
        array( "icon icon-cloud-hailstones" => esc_html__("cloud hailstones","jonny")),
        array( "icon icon-cloud-snow" => esc_html__("cloud snow","jonny")),
        array( "icon icon-cloud-windy" => esc_html__("cloud windy","jonny")),
        array( "icon icon-sun-wind" => esc_html__("sun wind","jonny")),
        array( "icon icon-cloud-fog" => esc_html__("cloud fog","jonny")),
        array( "icon icon-cloud-sun" => esc_html__("cloud sun","jonny")),
        array( "icon icon-cloud-lightning" => esc_html__("cloud lightning","jonny")),
        array( "icon icon-cloud-sync" => esc_html__("cloud sync","jonny")),
        array( "icon icon-cloud-lock" => esc_html__("cloud lock","jonny")),
        array( "icon icon-cloud-gear" => esc_html__("cloud gear","jonny")),
        array( "icon icon-cloud-alert" => esc_html__("cloud alert","jonny")),
        array( "icon icon-cloud-check" => esc_html__("cloud check","jonny")),
        array( "icon icon-cloud-cross" => esc_html__("cloud cross","jonny")),
        array( "icon icon-cloud-crossed" => esc_html__("cloud crossed","jonny")),
        array( "icon icon-cloud-database" => esc_html__("cloud database","jonny")),
        array( "icon icon-database" => esc_html__("database","jonny")),
        array( "icon icon-database-add" => esc_html__("database add","jonny")),
        array( "icon icon-database-remove" => esc_html__("database remove","jonny")),
        array( "icon icon-database-lock" => esc_html__("database lock","jonny")),
        array( "icon icon-database-refresh" => esc_html__("database refresh","jonny")),
        array( "icon icon-database-check" => esc_html__("database check","jonny")),
        array( "icon icon-database-history" => esc_html__("database history","jonny")),
        array( "icon icon-database-upload" => esc_html__("database upload","jonny")),
        array( "icon icon-database-download" => esc_html__("database download","jonny")),
        array( "icon icon-server" => esc_html__("server","jonny")),
        array( "icon icon-shield" => esc_html__("shield","jonny")),
        array( "icon icon-shield-check" => esc_html__("shield check","jonny")),
        array( "icon icon-shield-alert" => esc_html__("shield alert","jonny")),
        array( "icon icon-shield-cross" => esc_html__("shield cross","jonny")),
        array( "icon icon-lock" => esc_html__("lock","jonny")),
        array( "icon icon-rotation-lock" => esc_html__("rotation lock","jonny")),
        array( "icon icon-unlock" => esc_html__("unlock","jonny")),
        array( "icon icon-key" => esc_html__("key","jonny")),
        array( "icon icon-key-hole" => esc_html__("key hole","jonny")),
        array( "icon icon-toggle-off" => esc_html__("toggle off","jonny")),
        array( "icon icon-toggle-on" => esc_html__("toggle on","jonny")),
        array( "icon icon-cog" => esc_html__("cog","jonny")),
        array( "icon icon-cog2" => esc_html__("cog2","jonny")),
        array( "icon icon-wrench" => esc_html__("wrench","jonny")),
        array( "icon icon-screwdriver" => esc_html__("screwdriver","jonny")),
        array( "icon icon-hammer-wrench" => esc_html__("hammer wrench","jonny")),
        array( "icon icon-hammer" => esc_html__("hammer","jonny")),
        array( "icon icon-saw" => esc_html__("saw","jonny")),
        array( "icon icon-axe" => esc_html__("axe","jonny")),
        array( "icon icon-axe2" => esc_html__("axe2","jonny")),
        array( "icon icon-shovel" => esc_html__("shovel","jonny")),
        array( "icon icon-pickaxe" => esc_html__("pickaxe","jonny")),
        array( "icon icon-factory" => esc_html__("factory","jonny")),
        array( "icon icon-factory2" => esc_html__("factory2","jonny")),
        array( "icon icon-recycle" => esc_html__("recycle","jonny")),
        array( "icon icon-trash" => esc_html__("trash","jonny")),
        array( "icon icon-trash2" => esc_html__("trash2","jonny")),
        array( "icon icon-trash3" => esc_html__("trash3","jonny")),
        array( "icon icon-broom" => esc_html__("broom","jonny")),
        array( "icon icon-game" => esc_html__("game","jonny")),
        array( "icon icon-gamepad" => esc_html__("gamepad","jonny")),
        array( "icon icon-joystick" => esc_html__("joystick","jonny")),
        array( "icon icon-dice" => esc_html__("dice","jonny")),
        array( "icon icon-spades" => esc_html__("spades","jonny")),
        array( "icon icon-diamonds" => esc_html__("diamonds","jonny")),
        array( "icon icon-clubs" => esc_html__("clubs","jonny")),
        array( "icon icon-hearts" => esc_html__("hearts","jonny")),
        array( "icon icon-heart" => esc_html__("heart","jonny")),
        array( "icon icon-star" => esc_html__("star","jonny")),
        array( "icon icon-star-half" => esc_html__("star half","jonny")),
        array( "icon icon-star-empty" => esc_html__("star empty","jonny")),
        array( "icon icon-flag" => esc_html__("flag","jonny")),
        array( "icon icon-flag2" => esc_html__("flag2","jonny")),
        array( "icon icon-flag3" => esc_html__("flag3","jonny")),
        array( "icon icon-mailbox-full" => esc_html__("mailbox full","jonny")),
        array( "icon icon-mailbox-empty" => esc_html__("mailbox empty","jonny")),
        array( "icon icon-at-sign" => esc_html__("at sign","jonny")),
        array( "icon icon-envelope" => esc_html__("envelope","jonny")),
        array( "icon icon-envelope-open" => esc_html__("envelope open","jonny")),
        array( "icon icon-paperclip" => esc_html__("paperclip","jonny")),
        array( "icon icon-paper-plane" => esc_html__("paper plane","jonny")),
        array( "icon icon-reply" => esc_html__("reply","jonny")),
        array( "icon icon-reply-all" => esc_html__("reply all","jonny")),
        array( "icon icon-inbox" => esc_html__("inbox","jonny")),
        array( "icon icon-inbox2" => esc_html__("inbox2","jonny")),
        array( "icon icon-outbox" => esc_html__("outbox","jonny")),
        array( "icon icon-box" => esc_html__("box","jonny")),
        array( "icon icon-archive" => esc_html__("archive","jonny")),
        array( "icon icon-archive2" => esc_html__("archive2","jonny")),
        array( "icon icon-drawers" => esc_html__("drawers","jonny")),
        array( "icon icon-drawers2" => esc_html__("drawers2","jonny")),
        array( "icon icon-drawers3" => esc_html__("drawers3","jonny")),
        array( "icon icon-eye" => esc_html__("eye","jonny")),
        array( "icon icon-eye-crossed" => esc_html__("eye crossed","jonny")),
        array( "icon icon-eye-plus" => esc_html__("eye plus","jonny")),
        array( "icon icon-eye-minus" => esc_html__("eye minus","jonny")),
        array( "icon icon-binoculars" => esc_html__("binoculars","jonny")),
        array( "icon icon-binoculars2" => esc_html__("binoculars2","jonny")),
        array( "icon icon-hdd" => esc_html__("hdd","jonny")),
        array( "icon icon-hdd-down" => esc_html__("hdd down","jonny")),
        array( "icon icon-hdd-up" => esc_html__("hdd up","jonny")),
        array( "icon icon-floppy-disk" => esc_html__("floppy disk","jonny")),
        array( "icon icon-disc" => esc_html__("disc","jonny")),
        array( "icon icon-tape2" => esc_html__("tape2","jonny")),
        array( "icon icon-printer" => esc_html__("printer","jonny")),
        array( "icon icon-shredder" => esc_html__("shredder","jonny")),
        array( "icon icon-file-empty" => esc_html__("file empty","jonny")),
        array( "icon icon-file-add" => esc_html__("file add","jonny")),
        array( "icon icon-file-check" => esc_html__("file check","jonny")),
        array( "icon icon-file-lock" => esc_html__("file lock","jonny")),
        array( "icon icon-files" => esc_html__("files","jonny")),
        array( "icon icon-copy" => esc_html__("copy","jonny")),
        array( "icon icon-compare" => esc_html__("compare","jonny")),
        array( "icon icon-folder" => esc_html__("folder","jonny")),
        array( "icon icon-folder-search" => esc_html__("folder search","jonny")),
        array( "icon icon-folder-plus" => esc_html__("folder plus","jonny")),
        array( "icon icon-folder-minus" => esc_html__("folder minus","jonny")),
        array( "icon icon-folder-download" => esc_html__("folder download","jonny")),
        array( "icon icon-folder-upload" => esc_html__("folder upload","jonny")),
        array( "icon icon-folder-star" => esc_html__("folder star","jonny")),
        array( "icon icon-folder-heart" => esc_html__("folder heart","jonny")),
        array( "icon icon-folder-user" => esc_html__("folder user","jonny")),
        array( "icon icon-folder-shared" => esc_html__("folder shared","jonny")),
        array( "icon icon-folder-music" => esc_html__("folder music","jonny")),
        array( "icon icon-folder-picture" => esc_html__("folder picture","jonny")),
        array( "icon icon-folder-film" => esc_html__("folder film","jonny")),
        array( "icon icon-scissors" => esc_html__("scissors","jonny")),
        array( "icon icon-paste" => esc_html__("paste","jonny")),
        array( "icon icon-clipboard-empty" => esc_html__("clipboard empty","jonny")),
        array( "icon icon-clipboard-pencil" => esc_html__("clipboard pencil","jonny")),
        array( "icon icon-clipboard-text" => esc_html__("clipboard text","jonny")),
        array( "icon icon-clipboard-check" => esc_html__("clipboard check","jonny")),
        array( "icon icon-clipboard-down" => esc_html__("clipboard down","jonny")),
        array( "icon icon-clipboard-left" => esc_html__("clipboard left","jonny")),
        array( "icon icon-clipboard-alert" => esc_html__("clipboard alert","jonny")),
        array( "icon icon-clipboard-user" => esc_html__("clipboard user","jonny")),
        array( "icon icon-register" => esc_html__("register","jonny")),
        array( "icon icon-enter" => esc_html__("enter","jonny")),
        array( "icon icon-exit" => esc_html__("exit","jonny")),
        array( "icon icon-papers" => esc_html__("papers","jonny")),
        array( "icon icon-news" => esc_html__("news","jonny")),
        array( "icon icon-reading" => esc_html__("reading","jonny")),
        array( "icon icon-typewriter" => esc_html__("typewriter","jonny")),
        array( "icon icon-document" => esc_html__("document","jonny")),
        array( "icon icon-document2" => esc_html__("document2","jonny")),
        array( "icon icon-graduation-hat" => esc_html__("graduation hat","jonny")),
        array( "icon icon-license" => esc_html__("license","jonny")),
        array( "icon icon-license2" => esc_html__("license2","jonny")),
        array( "icon icon-medal-empty" => esc_html__("medal empty","jonny")),
        array( "icon icon-medal-first" => esc_html__("medal first","jonny")),
        array( "icon icon-medal-second" => esc_html__("medal second","jonny")),
        array( "icon icon-medal-third" => esc_html__("medal third","jonny")),
        array( "icon icon-podium" => esc_html__("podium","jonny")),
        array( "icon icon-trophy" => esc_html__("trophy","jonny")),
        array( "icon icon-trophy2" => esc_html__("trophy2","jonny")),
        array( "icon icon-music-note" => esc_html__("music note","jonny")),
        array( "icon icon-music-note2" => esc_html__("music note2","jonny")),
        array( "icon icon-music-note3" => esc_html__("music note3","jonny")),
        array( "icon icon-playlist" => esc_html__("playlist","jonny")),
        array( "icon icon-playlist-add" => esc_html__("playlist add","jonny")),
        array( "icon icon-guitar" => esc_html__("guitar","jonny")),
        array( "icon icon-trumpet" => esc_html__("trumpet","jonny")),
        array( "icon icon-album" => esc_html__("album","jonny")),
        array( "icon icon-shuffle" => esc_html__("shuffle","jonny")),
        array( "icon icon-repeat-one" => esc_html__("repeat one","jonny")),
        array( "icon icon-repeat" => esc_html__("repeat","jonny")),
        array( "icon icon-headphones" => esc_html__("headphones","jonny")),
        array( "icon icon-headset" => esc_html__("headset","jonny")),
        array( "icon icon-loudspeaker" => esc_html__("loudspeaker","jonny")),
        array( "icon icon-equalizer" => esc_html__("equalizer","jonny")),
        array( "icon icon-theater" => esc_html__("theater","jonny")),
        array( "icon icon-3d-glasses" => esc_html__("3d glasses","jonny")),
        array( "icon icon-ticket" => esc_html__("ticket","jonny")),
        array( "icon icon-presentation" => esc_html__("presentation","jonny")),
        array( "icon icon-play" => esc_html__("play","jonny")),
        array( "icon icon-film-play" => esc_html__("film play","jonny")),
        array( "icon icon-clapboard-play" => esc_html__("clapboard play","jonny")),
        array( "icon icon-media" => esc_html__("media","jonny")),
        array( "icon icon-film" => esc_html__("film","jonny")),
        array( "icon icon-film2" => esc_html__("film2","jonny")),
        array( "icon icon-surveillance" => esc_html__("surveillance","jonny")),
        array( "icon icon-surveillance2" => esc_html__("surveillance2","jonny")),
        array( "icon icon-camera" => esc_html__("camera","jonny")),
        array( "icon icon-camera-crossed" => esc_html__("camera crossed","jonny")),
        array( "icon icon-camera-play" => esc_html__("camera play","jonny")),
        array( "icon icon-time-lapse" => esc_html__("time lapse","jonny")),
        array( "icon icon-record" => esc_html__("record","jonny")),
        array( "icon icon-camera2" => esc_html__("camera2","jonny")),
        array( "icon icon-camera-flip" => esc_html__("camera flip","jonny")),
        array( "icon icon-panorama" => esc_html__("panorama","jonny")),
        array( "icon icon-time-lapse2" => esc_html__("time lapse2","jonny")),
        array( "icon icon-shutter" => esc_html__("shutter","jonny")),
        array( "icon icon-shutter2" => esc_html__("shutter2","jonny")),
        array( "icon icon-face-detection" => esc_html__("face detection","jonny")),
        array( "icon icon-flare" => esc_html__("flare","jonny")),
        array( "icon icon-convex" => esc_html__("convex","jonny")),
        array( "icon icon-concave" => esc_html__("concave","jonny")),
        array( "icon icon-picture" => esc_html__("picture","jonny")),
        array( "icon icon-picture2" => esc_html__("picture2","jonny")),
        array( "icon icon-picture3" => esc_html__("picture3","jonny")),
        array( "icon icon-pictures" => esc_html__("pictures","jonny")),
        array( "icon icon-book" => esc_html__("book","jonny")),
        array( "icon icon-audio-book" => esc_html__("audio book","jonny")),
        array( "icon icon-book2" => esc_html__("book2","jonny")),
        array( "icon icon-bookmark" => esc_html__("bookmark","jonny")),
        array( "icon icon-bookmark2" => esc_html__("bookmark2","jonny")),
        array( "icon icon-label" => esc_html__("label","jonny")),
        array( "icon icon-library" => esc_html__("library","jonny")),
        array( "icon icon-library2" => esc_html__("library2","jonny")),
        array( "icon icon-contacts" => esc_html__("contacts","jonny")),
        array( "icon icon-profile" => esc_html__("profile","jonny")),
        array( "icon icon-portrait" => esc_html__("portrait","jonny")),
        array( "icon icon-portrait2" => esc_html__("portrait2","jonny")),
        array( "icon icon-user" => esc_html__("user","jonny")),
        array( "icon icon-user-plus" => esc_html__("user plus","jonny")),
        array( "icon icon-user-minus" => esc_html__("user minus","jonny")),
        array( "icon icon-user-lock" => esc_html__("user lock","jonny")),
        array( "icon icon-users" => esc_html__("users","jonny")),
        array( "icon icon-users2" => esc_html__("users2","jonny")),
        array( "icon icon-users-plus" => esc_html__("users plus","jonny")),
        array( "icon icon-users-minus" => esc_html__("users minus","jonny")),
        array( "icon icon-group-work" => esc_html__("group work","jonny")),
        array( "icon icon-woman" => esc_html__("woman","jonny")),
        array( "icon icon-man" => esc_html__("man","jonny")),
        array( "icon icon-baby" => esc_html__("baby","jonny")),
        array( "icon icon-baby2" => esc_html__("baby2","jonny")),
        array( "icon icon-baby3" => esc_html__("baby3","jonny")),
        array( "icon icon-baby-bottle" => esc_html__("baby bottle","jonny")),
        array( "icon icon-walk" => esc_html__("walk","jonny")),
        array( "icon icon-hand-waving" => esc_html__("hand waving","jonny")),
        array( "icon icon-jump" => esc_html__("jump","jonny")),
        array( "icon icon-run" => esc_html__("run","jonny")),
        array( "icon icon-woman2" => esc_html__("woman2","jonny")),
        array( "icon icon-man2" => esc_html__("man2","jonny")),
        array( "icon icon-man-woman" => esc_html__("man woman","jonny")),
        array( "icon icon-height" => esc_html__("height","jonny")),
        array( "icon icon-weight" => esc_html__("weight","jonny")),
        array( "icon icon-scale" => esc_html__("scale","jonny")),
        array( "icon icon-button" => esc_html__("button","jonny")),
        array( "icon icon-bow-tie" => esc_html__("bow tie","jonny")),
        array( "icon icon-tie" => esc_html__("tie","jonny")),
        array( "icon icon-socks" => esc_html__("socks","jonny")),
        array( "icon icon-shoe" => esc_html__("shoe","jonny")),
        array( "icon icon-shoes" => esc_html__("shoes","jonny")),
        array( "icon icon-hat" => esc_html__("hat","jonny")),
        array( "icon icon-pants" => esc_html__("pants","jonny")),
        array( "icon icon-shorts" => esc_html__("shorts","jonny")),
        array( "icon icon-flip-flops" => esc_html__("flip flops","jonny")),
        array( "icon icon-shirt" => esc_html__("shirt","jonny")),
        array( "icon icon-hanger" => esc_html__("hanger","jonny")),
        array( "icon icon-laundry" => esc_html__("laundry","jonny")),
        array( "icon icon-store" => esc_html__("store","jonny")),
        array( "icon icon-haircut" => esc_html__("haircut","jonny")),
        array( "icon icon-store-24" => esc_html__("store 24","jonny")),
        array( "icon icon-barcode" => esc_html__("barcode","jonny")),
        array( "icon icon-barcode2" => esc_html__("barcode2","jonny")),
        array( "icon icon-barcode3" => esc_html__("barcode3","jonny")),
        array( "icon icon-cashier" => esc_html__("cashier","jonny")),
        array( "icon icon-bag" => esc_html__("bag","jonny")),
        array( "icon icon-bag2" => esc_html__("bag2","jonny")),
        array( "icon icon-cart" => esc_html__("cart","jonny")),
        array( "icon icon-cart-empty" => esc_html__("cart empty","jonny")),
        array( "icon icon-cart-full" => esc_html__("cart full","jonny")),
        array( "icon icon-cart-plus" => esc_html__("cart plus","jonny")),
        array( "icon icon-cart-plus2" => esc_html__("cart plus2","jonny")),
        array( "icon icon-cart-add" => esc_html__("cart add","jonny")),
        array( "icon icon-cart-remove" => esc_html__("cart remove","jonny")),
        array( "icon icon-cart-exchange" => esc_html__("cart exchange","jonny")),
        array( "icon icon-tag" => esc_html__("tag","jonny")),
        array( "icon icon-tags" => esc_html__("tags","jonny")),
        array( "icon icon-receipt" => esc_html__("receipt","jonny")),
        array( "icon icon-wallet" => esc_html__("wallet","jonny")),
        array( "icon icon-credit-card" => esc_html__("credit card","jonny")),
        array( "icon icon-cash-dollar" => esc_html__("cash dollar","jonny")),
        array( "icon icon-cash-euro" => esc_html__("cash euro","jonny")),
        array( "icon icon-cash-pound" => esc_html__("cash pound","jonny")),
        array( "icon icon-cash-yen" => esc_html__("cash yen","jonny")),
        array( "icon icon-bag-dollar" => esc_html__("bag dollar","jonny")),
        array( "icon icon-bag-euro" => esc_html__("bag euro","jonny")),
        array( "icon icon-bag-pound" => esc_html__("bag pound","jonny")),
        array( "icon icon-bag-yen" => esc_html__("bag yen","jonny")),
        array( "icon icon-coin-dollar" => esc_html__("coin dollar","jonny")),
        array( "icon icon-coin-euro" => esc_html__("coin euro","jonny")),
        array( "icon icon-coin-pound" => esc_html__("coin pound","jonny")),
        array( "icon icon-coin-yen" => esc_html__("coin yen","jonny")),
        array( "icon icon-calculator" => esc_html__("calculator","jonny")),
        array( "icon icon-calculator2" => esc_html__("calculator2","jonny")),
        array( "icon icon-abacus" => esc_html__("abacus","jonny")),
        array( "icon icon-vault" => esc_html__("vault","jonny")),
        array( "icon icon-telephone" => esc_html__("telephone","jonny")),
        array( "icon icon-phone-lock" => esc_html__("phone lock","jonny")),
        array( "icon icon-phone-wave" => esc_html__("phone wave","jonny")),
        array( "icon icon-phone-pause" => esc_html__("phone pause","jonny")),
        array( "icon icon-phone-outgoing" => esc_html__("phone outgoing","jonny")),
        array( "icon icon-phone-incoming" => esc_html__("phone incoming","jonny")),
        array( "icon icon-phone-in-out" => esc_html__("phone in out","jonny")),
        array( "icon icon-phone-error" => esc_html__("phone error","jonny")),
        array( "icon icon-phone-sip" => esc_html__("phone sip","jonny")),
        array( "icon icon-phone-plus" => esc_html__("phone plus","jonny")),
        array( "icon icon-phone-minus" => esc_html__("phone minus","jonny")),
        array( "icon icon-voicemail" => esc_html__("voicemail","jonny")),
        array( "icon icon-dial" => esc_html__("dial","jonny")),
        array( "icon icon-telephone2" => esc_html__("telephone2","jonny")),
        array( "icon icon-pushpin" => esc_html__("pushpin","jonny")),
        array( "icon icon-pushpin2" => esc_html__("pushpin2","jonny")),
        array( "icon icon-map-marker" => esc_html__("map marker","jonny")),
        array( "icon icon-map-marker-user" => esc_html__("map marker user","jonny")),
        array( "icon icon-map-marker-down" => esc_html__("map marker down","jonny")),
        array( "icon icon-map-marker-check" => esc_html__("map marker check","jonny")),
        array( "icon icon-map-marker-crossed" => esc_html__("map marker crossed","jonny")),
        array( "icon icon-radar" => esc_html__("radar","jonny")),
        array( "icon icon-compass2" => esc_html__("compass2","jonny")),
        array( "icon icon-map" => esc_html__("map","jonny")),
        array( "icon icon-map2" => esc_html__("map2","jonny")),
        array( "icon icon-location" => esc_html__("location","jonny")),
        array( "icon icon-road-sign" => esc_html__("road sign","jonny")),
        array( "icon icon-calendar-empty" => esc_html__("calendar empty","jonny")),
        array( "icon icon-calendar-check" => esc_html__("calendar check","jonny")),
        array( "icon icon-calendar-cross" => esc_html__("calendar cross","jonny")),
        array( "icon icon-calendar-31" => esc_html__("calendar 31","jonny")),
        array( "icon icon-calendar-full" => esc_html__("calendar full","jonny")),
        array( "icon icon-calendar-insert" => esc_html__("calendar insert","jonny")),
        array( "icon icon-calendar-text" => esc_html__("calendar text","jonny")),
        array( "icon icon-calendar-user" => esc_html__("calendar user","jonny")),
        array( "icon icon-mouse" => esc_html__("mouse","jonny")),
        array( "icon icon-mouse-left" => esc_html__("mouse left","jonny")),
        array( "icon icon-mouse-right" => esc_html__("mouse right","jonny")),
        array( "icon icon-mouse-both" => esc_html__("mouse both","jonny")),
        array( "icon icon-keyboard" => esc_html__("keyboard","jonny")),
        array( "icon icon-keyboard-up" => esc_html__("keyboard up","jonny")),
        array( "icon icon-keyboard-down" => esc_html__("keyboard down","jonny")),
        array( "icon icon-delete" => esc_html__("delete","jonny")),
        array( "icon icon-spell-check" => esc_html__("spell check","jonny")),
        array( "icon icon-escape" => esc_html__("escape","jonny")),
        array( "icon icon-enter2" => esc_html__("enter2","jonny")),
        array( "icon icon-screen" => esc_html__("screen","jonny")),
        array( "icon icon-aspect-ratio" => esc_html__("aspect ratio","jonny")),
        array( "icon icon-signal" => esc_html__("signal","jonny")),
        array( "icon icon-signal-lock" => esc_html__("signal lock","jonny")),
        array( "icon icon-signal-80" => esc_html__("signal 80","jonny")),
        array( "icon icon-signal-60" => esc_html__("signal 60","jonny")),
        array( "icon icon-signal-40" => esc_html__("signal 40","jonny")),
        array( "icon icon-signal-20" => esc_html__("signal 20","jonny")),
        array( "icon icon-signal-0" => esc_html__("signal 0","jonny")),
        array( "icon icon-signal-blocked" => esc_html__("signal blocked","jonny")),
        array( "icon icon-sim" => esc_html__("sim","jonny")),
        array( "icon icon-flash-memory" => esc_html__("flash memory","jonny")),
        array( "icon icon-usb-drive" => esc_html__("usb drive","jonny")),
        array( "icon icon-phone" => esc_html__("phone","jonny")),
        array( "icon icon-smartphone" => esc_html__("smartphone","jonny")),
        array( "icon icon-smartphone-notification" => esc_html__("smartphone notification","jonny")),
        array( "icon icon-smartphone-vibration" => esc_html__("smartphone vibration","jonny")),
        array( "icon icon-smartphone-embed" => esc_html__("smartphone embed","jonny")),
        array( "icon icon-smartphone-waves" => esc_html__("smartphone waves","jonny")),
        array( "icon icon-tablet" => esc_html__("tablet","jonny")),
        array( "icon icon-tablet2" => esc_html__("tablet2","jonny")),
        array( "icon icon-laptop" => esc_html__("laptop","jonny")),
        array( "icon icon-laptop-phone" => esc_html__("laptop phone","jonny")),
        array( "icon icon-desktop" => esc_html__("desktop","jonny")),
        array( "icon icon-launch" => esc_html__("launch","jonny")),
        array( "icon icon-new-tab" => esc_html__("new tab","jonny")),
        array( "icon icon-window" => esc_html__("window","jonny")),
        array( "icon icon-cable" => esc_html__("cable","jonny")),
        array( "icon icon-cable2" => esc_html__("cable2","jonny")),
        array( "icon icon-tv" => esc_html__("tv","jonny")),
        array( "icon icon-radio" => esc_html__("radio","jonny")),
        array( "icon icon-remote-control" => esc_html__("remote control","jonny")),
        array( "icon icon-power-switch" => esc_html__("power switch","jonny")),
        array( "icon icon-power" => esc_html__("power","jonny")),
        array( "icon icon-power-crossed" => esc_html__("power crossed","jonny")),
        array( "icon icon-flash-auto" => esc_html__("flash auto","jonny")),
        array( "icon icon-lamp" => esc_html__("lamp","jonny")),
        array( "icon icon-flashlight" => esc_html__("flashlight","jonny")),
        array( "icon icon-lampshade" => esc_html__("lampshade","jonny")),
        array( "icon icon-cord" => esc_html__("cord","jonny")),
        array( "icon icon-outlet" => esc_html__("outlet","jonny")),
        array( "icon icon-battery-power" => esc_html__("battery power","jonny")),
        array( "icon icon-battery-empty" => esc_html__("battery empty","jonny")),
        array( "icon icon-battery-alert" => esc_html__("battery alert","jonny")),
        array( "icon icon-battery-error" => esc_html__("battery error","jonny")),
        array( "icon icon-battery-low1" => esc_html__("battery low1","jonny")),
        array( "icon icon-battery-low2" => esc_html__("battery low2","jonny")),
        array( "icon icon-battery-low3" => esc_html__("battery low3","jonny")),
        array( "icon icon-battery-mid1" => esc_html__("battery mid1","jonny")),
        array( "icon icon-battery-mid2" => esc_html__("battery mid2","jonny")),
        array( "icon icon-battery-mid3" => esc_html__("battery mid3","jonny")),
        array( "icon icon-battery-full" => esc_html__("battery full","jonny")),
        array( "icon icon-battery-charging" => esc_html__("battery charging","jonny")),
        array( "icon icon-battery-charging2" => esc_html__("battery charging2","jonny")),
        array( "icon icon-battery-charging3" => esc_html__("battery charging3","jonny")),
        array( "icon icon-battery-charging4" => esc_html__("battery charging4","jonny")),
        array( "icon icon-battery-charging5" => esc_html__("battery charging5","jonny")),
        array( "icon icon-battery-charging6" => esc_html__("battery charging6","jonny")),
        array( "icon icon-battery-charging7" => esc_html__("battery charging7","jonny")),
        array( "icon icon-chip" => esc_html__("chip","jonny")),
        array( "icon icon-chip-x64" => esc_html__("chip x64","jonny")),
        array( "icon icon-chip-x86" => esc_html__("chip x86","jonny")),
        array( "icon icon-bubble" => esc_html__("bubble","jonny")),
        array( "icon icon-bubbles" => esc_html__("bubbles","jonny")),
        array( "icon icon-bubble-dots" => esc_html__("bubble dots","jonny")),
        array( "icon icon-bubble-alert" => esc_html__("bubble alert","jonny")),
        array( "icon icon-bubble-question" => esc_html__("bubble question","jonny")),
        array( "icon icon-bubble-text" => esc_html__("bubble text","jonny")),
        array( "icon icon-bubble-pencil" => esc_html__("bubble pencil","jonny")),
        array( "icon icon-bubble-picture" => esc_html__("bubble picture","jonny")),
        array( "icon icon-bubble-video" => esc_html__("bubble video","jonny")),
        array( "icon icon-bubble-user" => esc_html__("bubble user","jonny")),
        array( "icon icon-bubble-quote" => esc_html__("bubble quote","jonny")),
        array( "icon icon-bubble-heart" => esc_html__("bubble heart","jonny")),
        array( "icon icon-bubble-emoticon" => esc_html__("bubble emoticon","jonny")),
        array( "icon icon-bubble-attachment" => esc_html__("bubble attachment","jonny")),
        array( "icon icon-phone-bubble" => esc_html__("phone bubble","jonny")),
        array( "icon icon-quote-open" => esc_html__("quote open","jonny")),
        array( "icon icon-quote-close" => esc_html__("quote close","jonny")),
        array( "icon icon-dna" => esc_html__("dna","jonny")),
        array( "icon icon-heart-pulse" => esc_html__("heart pulse","jonny")),
        array( "icon icon-pulse" => esc_html__("pulse","jonny")),
        array( "icon icon-syringe" => esc_html__("syringe","jonny")),
        array( "icon icon-pills" => esc_html__("pills","jonny")),
        array( "icon icon-first-aid" => esc_html__("first aid","jonny")),
        array( "icon icon-lifebuoy" => esc_html__("lifebuoy","jonny")),
        array( "icon icon-bandage" => esc_html__("bandage","jonny")),
        array( "icon icon-bandages" => esc_html__("bandages","jonny")),
        array( "icon icon-thermometer" => esc_html__("thermometer","jonny")),
        array( "icon icon-microscope" => esc_html__("microscope","jonny")),
        array( "icon icon-brain" => esc_html__("brain","jonny")),
        array( "icon icon-beaker" => esc_html__("beaker","jonny")),
        array( "icon icon-skull" => esc_html__("skull","jonny")),
        array( "icon icon-bone" => esc_html__("bone","jonny")),
        array( "icon icon-construction" => esc_html__("construction","jonny")),
        array( "icon icon-construction-cone" => esc_html__("construction cone","jonny")),
        array( "icon icon-pie-chart" => esc_html__("pie chart","jonny")),
        array( "icon icon-pie-chart2" => esc_html__("pie chart2","jonny")),
        array( "icon icon-graph" => esc_html__("graph","jonny")),
        array( "icon icon-chart-growth" => esc_html__("chart growth","jonny")),
        array( "icon icon-chart-bars" => esc_html__("chart bars","jonny")),
        array( "icon icon-chart-settings" => esc_html__("chart settings","jonny")),
        array( "icon icon-cake" => esc_html__("cake","jonny")),
        array( "icon icon-gift" => esc_html__("gift","jonny")),
        array( "icon icon-balloon" => esc_html__("balloon","jonny")),
        array( "icon icon-rank" => esc_html__("rank","jonny")),
        array( "icon icon-rank2" => esc_html__("rank2","jonny")),
        array( "icon icon-rank3" => esc_html__("rank3","jonny")),
        array( "icon icon-crown" => esc_html__("crown","jonny")),
        array( "icon icon-lotus" => esc_html__("lotus","jonny")),
        array( "icon icon-diamond" => esc_html__("diamond","jonny")),
        array( "icon icon-diamond2" => esc_html__("diamond2","jonny")),
        array( "icon icon-diamond3" => esc_html__("diamond3","jonny")),
        array( "icon icon-diamond4" => esc_html__("diamond4","jonny")),
        array( "icon icon-linearicons" => esc_html__("linearicons","jonny")),
        array( "icon icon-teacup" => esc_html__("teacup","jonny")),
        array( "icon icon-teapot" => esc_html__("teapot","jonny")),
        array( "icon icon-glass" => esc_html__("glass","jonny")),
        array( "icon icon-bottle2" => esc_html__("bottle2","jonny")),
        array( "icon icon-glass-cocktail" => esc_html__("glass cocktail","jonny")),
        array( "icon icon-glass2" => esc_html__("glass2","jonny")),
        array( "icon icon-dinner" => esc_html__("dinner","jonny")),
        array( "icon icon-dinner2" => esc_html__("dinner2","jonny")),
        array( "icon icon-chef" => esc_html__("chef","jonny")),
        array( "icon icon-scale2" => esc_html__("scale2","jonny")),
        array( "icon icon-egg" => esc_html__("egg","jonny")),
        array( "icon icon-egg2" => esc_html__("egg2","jonny")),
        array( "icon icon-eggs" => esc_html__("eggs","jonny")),
        array( "icon icon-platter" => esc_html__("platter","jonny")),
        array( "icon icon-steak" => esc_html__("steak","jonny")),
        array( "icon icon-hamburger" => esc_html__("hamburger","jonny")),
        array( "icon icon-hotdog" => esc_html__("hotdog","jonny")),
        array( "icon icon-pizza" => esc_html__("pizza","jonny")),
        array( "icon icon-sausage" => esc_html__("sausage","jonny")),
        array( "icon icon-chicken" => esc_html__("chicken","jonny")),
        array( "icon icon-fish" => esc_html__("fish","jonny")),
        array( "icon icon-carrot" => esc_html__("carrot","jonny")),
        array( "icon icon-cheese" => esc_html__("cheese","jonny")),
        array( "icon icon-bread" => esc_html__("bread","jonny")),
        array( "icon icon-ice-cream" => esc_html__("ice cream","jonny")),
        array( "icon icon-ice-cream2" => esc_html__("ice cream2","jonny")),
        array( "icon icon-candy" => esc_html__("candy","jonny")),
        array( "icon icon-lollipop" => esc_html__("lollipop","jonny")),
        array( "icon icon-coffee-bean" => esc_html__("coffee bean","jonny")),
        array( "icon icon-coffee-cup" => esc_html__("coffee cup","jonny")),
        array( "icon icon-cherry" => esc_html__("cherry","jonny")),
        array( "icon icon-grapes" => esc_html__("grapes","jonny")),
        array( "icon icon-citrus" => esc_html__("citrus","jonny")),
        array( "icon icon-apple" => esc_html__("apple","jonny")),
        array( "icon icon-leaf" => esc_html__("leaf","jonny")),
        array( "icon icon-landscape" => esc_html__("landscape","jonny")),
        array( "icon icon-pine-tree" => esc_html__("pine tree","jonny")),
        array( "icon icon-tree" => esc_html__("tree","jonny")),
        array( "icon icon-cactus" => esc_html__("cactus","jonny")),
        array( "icon icon-paw" => esc_html__("paw","jonny")),
        array( "icon icon-footprint" => esc_html__("footprint","jonny")),
        array( "icon icon-speed-slow" => esc_html__("speed slow","jonny")),
        array( "icon icon-speed-medium" => esc_html__("speed medium","jonny")),
        array( "icon icon-speed-fast" => esc_html__("speed fast","jonny")),
        array( "icon icon-rocket" => esc_html__("rocket","jonny")),
        array( "icon icon-hammer2" => esc_html__("hammer2","jonny")),
        array( "icon icon-balance" => esc_html__("balance","jonny")),
        array( "icon icon-briefcase" => esc_html__("briefcase","jonny")),
        array( "icon icon-luggage-weight" => esc_html__("luggage weight","jonny")),
        array( "icon icon-dolly" => esc_html__("dolly","jonny")),
        array( "icon icon-plane" => esc_html__("plane","jonny")),
        array( "icon icon-plane-crossed" => esc_html__("plane crossed","jonny")),
        array( "icon icon-helicopter" => esc_html__("helicopter","jonny")),
        array( "icon icon-traffic-lights" => esc_html__("traffic lights","jonny")),
        array( "icon icon-siren" => esc_html__("siren","jonny")),
        array( "icon icon-road" => esc_html__("road","jonny")),
        array( "icon icon-engine" => esc_html__("engine","jonny")),
        array( "icon icon-oil-pressure" => esc_html__("oil pressure","jonny")),
        array( "icon icon-coolant-temperature" => esc_html__("coolant temperature","jonny")),
        array( "icon icon-car-battery" => esc_html__("car battery","jonny")),
        array( "icon icon-gas" => esc_html__("gas","jonny")),
        array( "icon icon-gallon" => esc_html__("gallon","jonny")),
        array( "icon icon-transmission" => esc_html__("transmission","jonny")),
        array( "icon icon-car" => esc_html__("car","jonny")),
        array( "icon icon-car-wash" => esc_html__("car wash","jonny")),
        array( "icon icon-car-wash2" => esc_html__("car wash2","jonny")),
        array( "icon icon-bus" => esc_html__("bus","jonny")),
        array( "icon icon-bus2" => esc_html__("bus2","jonny")),
        array( "icon icon-car2" => esc_html__("car2","jonny")),
        array( "icon icon-parking" => esc_html__("parking","jonny")),
        array( "icon icon-car-lock" => esc_html__("car lock","jonny")),
        array( "icon icon-taxi" => esc_html__("taxi","jonny")),
        array( "icon icon-car-siren" => esc_html__("car siren","jonny")),
        array( "icon icon-car-wash3" => esc_html__("car wash3","jonny")),
        array( "icon icon-car-wash4" => esc_html__("car wash4","jonny")),
        array( "icon icon-ambulance" => esc_html__("ambulance","jonny")),
        array( "icon icon-truck" => esc_html__("truck","jonny")),
        array( "icon icon-trailer" => esc_html__("trailer","jonny")),
        array( "icon icon-scale-truck" => esc_html__("scale truck","jonny")),
        array( "icon icon-train" => esc_html__("train","jonny")),
        array( "icon icon-ship" => esc_html__("ship","jonny")),
        array( "icon icon-ship2" => esc_html__("ship2","jonny")),
        array( "icon icon-anchor" => esc_html__("anchor","jonny")),
        array( "icon icon-boat" => esc_html__("boat","jonny")),
        array( "icon icon-bicycle" => esc_html__("bicycle","jonny")),
        array( "icon icon-bicycle2" => esc_html__("bicycle2","jonny")),
        array( "icon icon-dumbbell" => esc_html__("dumbbell","jonny")),
        array( "icon icon-bench-press" => esc_html__("bench press","jonny")),
        array( "icon icon-swim" => esc_html__("swim","jonny")),
        array( "icon icon-football" => esc_html__("football","jonny")),
        array( "icon icon-baseball-bat" => esc_html__("baseball bat","jonny")),
        array( "icon icon-baseball" => esc_html__("baseball","jonny")),
        array( "icon icon-tennis" => esc_html__("tennis","jonny")),
        array( "icon icon-tennis2" => esc_html__("tennis2","jonny")),
        array( "icon icon-ping-pong" => esc_html__("ping pong","jonny")),
        array( "icon icon-hockey" => esc_html__("hockey","jonny")),
        array( "icon icon-8ball" => esc_html__("8ball","jonny")),
        array( "icon icon-bowling" => esc_html__("bowling","jonny")),
        array( "icon icon-bowling-pins" => esc_html__("bowling pins","jonny")),
        array( "icon icon-golf" => esc_html__("golf","jonny")),
        array( "icon icon-golf2" => esc_html__("golf2","jonny")),
        array( "icon icon-archery" => esc_html__("archery","jonny")),
        array( "icon icon-slingshot" => esc_html__("slingshot","jonny")),
        array( "icon icon-soccer" => esc_html__("soccer","jonny")),
        array( "icon icon-basketball" => esc_html__("basketball","jonny")),
        array( "icon icon-cube" => esc_html__("cube","jonny")),
        array( "icon icon-3d-rotate" => esc_html__("3d rotate","jonny")),
        array( "icon icon-puzzle" => esc_html__("puzzle","jonny")),
        array( "icon icon-glasses" => esc_html__("glasses","jonny")),
        array( "icon icon-glasses2" => esc_html__("glasses2","jonny")),
        array( "icon icon-accessibility" => esc_html__("accessibility","jonny")),
        array( "icon icon-wheelchair" => esc_html__("wheelchair","jonny")),
        array( "icon icon-wall" => esc_html__("wall","jonny")),
        array( "icon icon-fence" => esc_html__("fence","jonny")),
        array( "icon icon-wall2" => esc_html__("wall2","jonny")),
        array( "icon icon-icons" => esc_html__("icons","jonny")),
        array( "icon icon-resize-handle" => esc_html__("resize handle","jonny")),
        array( "icon icon-icons2" => esc_html__("icons2","jonny")),
        array( "icon icon-select" => esc_html__("select","jonny")),
        array( "icon icon-select2" => esc_html__("select2","jonny")),
        array( "icon icon-site-map" => esc_html__("site map","jonny")),
        array( "icon icon-earth" => esc_html__("earth","jonny")),
        array( "icon icon-earth-lock" => esc_html__("earth lock","jonny")),
        array( "icon icon-network" => esc_html__("network","jonny")),
        array( "icon icon-network-lock" => esc_html__("network lock","jonny")),
        array( "icon icon-planet" => esc_html__("planet","jonny")),
        array( "icon icon-happy" => esc_html__("happy","jonny")),
        array( "icon icon-smile" => esc_html__("smile","jonny")),
        array( "icon icon-grin" => esc_html__("grin","jonny")),
        array( "icon icon-tongue" => esc_html__("tongue","jonny")),
        array( "icon icon-sad" => esc_html__("sad","jonny")),
        array( "icon icon-wink" => esc_html__("wink","jonny")),
        array( "icon icon-dream" => esc_html__("dream","jonny")),
        array( "icon icon-shocked" => esc_html__("shocked","jonny")),
        array( "icon icon-shocked2" => esc_html__("shocked2","jonny")),
        array( "icon icon-tongue2" => esc_html__("tongue2","jonny")),
        array( "icon icon-neutral" => esc_html__("neutral","jonny")),
        array( "icon icon-happy-grin" => esc_html__("happy grin","jonny")),
        array( "icon icon-cool" => esc_html__("cool","jonny")),
        array( "icon icon-mad" => esc_html__("mad","jonny")),
        array( "icon icon-grin-evil" => esc_html__("grin evil","jonny")),
        array( "icon icon-evil" => esc_html__("evil","jonny")),
        array( "icon icon-wow" => esc_html__("wow","jonny")),
        array( "icon icon-annoyed" => esc_html__("annoyed","jonny")),
        array( "icon icon-wondering" => esc_html__("wondering","jonny")),
        array( "icon icon-confused" => esc_html__("confused","jonny")),
        array( "icon icon-zipped" => esc_html__("zipped","jonny")),
        array( "icon icon-grumpy" => esc_html__("grumpy","jonny")),
        array( "icon icon-mustache" => esc_html__("mustache","jonny")),
        array( "icon icon-tombstone-hipster" => esc_html__("tombstone hipster","jonny")),
        array( "icon icon-tombstone" => esc_html__("tombstone","jonny")),
        array( "icon icon-ghost" => esc_html__("ghost","jonny")),
        array( "icon icon-ghost-hipster" => esc_html__("ghost hipster","jonny")),
        array( "icon icon-halloween" => esc_html__("halloween","jonny")),
        array( "icon icon-christmas" => esc_html__("christmas","jonny")),
        array( "icon icon-easter-egg" => esc_html__("easter egg","jonny")),
        array( "icon icon-mustache2" => esc_html__("mustache2","jonny")),
        array( "icon icon-mustache-glasses" => esc_html__("mustache glasses","jonny")),
        array( "icon icon-pipe" => esc_html__("pipe","jonny")),
        array( "icon icon-alarm" => esc_html__("alarm","jonny")),
        array( "icon icon-alarm-add" => esc_html__("alarm add","jonny")),
        array( "icon icon-alarm-snooze" => esc_html__("alarm snooze","jonny")),
        array( "icon icon-alarm-ringing" => esc_html__("alarm ringing","jonny")),
        array( "icon icon-bullhorn" => esc_html__("bullhorn","jonny")),
        array( "icon icon-hearing" => esc_html__("hearing","jonny")),
        array( "icon icon-volume-high" => esc_html__("volume high","jonny")),
        array( "icon icon-volume-medium" => esc_html__("volume medium","jonny")),
        array( "icon icon-volume-low" => esc_html__("volume low","jonny")),
        array( "icon icon-volume" => esc_html__("volume","jonny")),
        array( "icon icon-mute" => esc_html__("mute","jonny")),
        array( "icon icon-lan" => esc_html__("lan","jonny")),
        array( "icon icon-lan2" => esc_html__("lan2","jonny")),
        array( "icon icon-wifi" => esc_html__("wifi","jonny")),
        array( "icon icon-wifi-lock" => esc_html__("wifi lock","jonny")),
        array( "icon icon-wifi-blocked" => esc_html__("wifi blocked","jonny")),
        array( "icon icon-wifi-mid" => esc_html__("wifi mid","jonny")),
        array( "icon icon-wifi-low" => esc_html__("wifi low","jonny")),
        array( "icon icon-wifi-low2" => esc_html__("wifi low2","jonny")),
        array( "icon icon-wifi-alert" => esc_html__("wifi alert","jonny")),
        array( "icon icon-wifi-alert-mid" => esc_html__("wifi alert mid","jonny")),
        array( "icon icon-wifi-alert-low" => esc_html__("wifi alert low","jonny")),
        array( "icon icon-wifi-alert-low2" => esc_html__("wifi alert low2","jonny")),
        array( "icon icon-stream" => esc_html__("stream","jonny")),
        array( "icon icon-stream-check" => esc_html__("stream check","jonny")),
        array( "icon icon-stream-error" => esc_html__("stream error","jonny")),
        array( "icon icon-stream-alert" => esc_html__("stream alert","jonny")),
        array( "icon icon-communication" => esc_html__("communication","jonny")),
        array( "icon icon-communication-crossed" => esc_html__("communication crossed","jonny")),
        array( "icon icon-broadcast" => esc_html__("broadcast","jonny")),
        array( "icon icon-antenna" => esc_html__("antenna","jonny")),
        array( "icon icon-satellite" => esc_html__("satellite","jonny")),
        array( "icon icon-satellite2" => esc_html__("satellite2","jonny")),
        array( "icon icon-mic" => esc_html__("mic","jonny")),
        array( "icon icon-mic-mute" => esc_html__("mic mute","jonny")),
        array( "icon icon-mic2" => esc_html__("mic2","jonny")),
        array( "icon icon-spotlights" => esc_html__("spotlights","jonny")),
        array( "icon icon-hourglass" => esc_html__("hourglass","jonny")),
        array( "icon icon-loading" => esc_html__("loading","jonny")),
        array( "icon icon-loading2" => esc_html__("loading2","jonny")),
        array( "icon icon-loading3" => esc_html__("loading3","jonny")),
        array( "icon icon-refresh" => esc_html__("refresh","jonny")),
        array( "icon icon-refresh2" => esc_html__("refresh2","jonny")),
        array( "icon icon-undo" => esc_html__("undo","jonny")),
        array( "icon icon-redo" => esc_html__("redo","jonny")),
        array( "icon icon-jump2" => esc_html__("jump2","jonny")),
        array( "icon icon-undo2" => esc_html__("undo2","jonny")),
        array( "icon icon-redo2" => esc_html__("redo2","jonny")),
        array( "icon icon-sync" => esc_html__("sync","jonny")),
        array( "icon icon-repeat-one2" => esc_html__("repeat one2","jonny")),
        array( "icon icon-sync-crossed" => esc_html__("sync crossed","jonny")),
        array( "icon icon-sync2" => esc_html__("sync2","jonny")),
        array( "icon icon-repeat-one3" => esc_html__("repeat one3","jonny")),
        array( "icon icon-sync-crossed2" => esc_html__("sync crossed2","jonny")),
        array( "icon icon-return" => esc_html__("return","jonny")),
        array( "icon icon-return2" => esc_html__("return2","jonny")),
        array( "icon icon-refund" => esc_html__("refund","jonny")),
        array( "icon icon-history" => esc_html__("history","jonny")),
        array( "icon icon-history2" => esc_html__("history2","jonny")),
        array( "icon icon-self-timer" => esc_html__("self timer","jonny")),
        array( "icon icon-clock" => esc_html__("clock","jonny")),
        array( "icon icon-clock2" => esc_html__("clock2","jonny")),
        array( "icon icon-clock3" => esc_html__("clock3","jonny")),
        array( "icon icon-watch" => esc_html__("watch","jonny")),
        array( "icon icon-alarm2" => esc_html__("alarm2","jonny")),
        array( "icon icon-alarm-add2" => esc_html__("alarm add2","jonny")),
        array( "icon icon-alarm-remove" => esc_html__("alarm remove","jonny")),
        array( "icon icon-alarm-check" => esc_html__("alarm check","jonny")),
        array( "icon icon-alarm-error" => esc_html__("alarm error","jonny")),
        array( "icon icon-timer" => esc_html__("timer","jonny")),
        array( "icon icon-timer-crossed" => esc_html__("timer crossed","jonny")),
        array( "icon icon-timer2" => esc_html__("timer2","jonny")),
        array( "icon icon-timer-crossed2" => esc_html__("timer crossed2","jonny")),
        array( "icon icon-download" => esc_html__("download","jonny")),
        array( "icon icon-upload" => esc_html__("upload","jonny")),
        array( "icon icon-download2" => esc_html__("download2","jonny")),
        array( "icon icon-upload2" => esc_html__("upload2","jonny")),
        array( "icon icon-enter-up" => esc_html__("enter up","jonny")),
        array( "icon icon-enter-down" => esc_html__("enter down","jonny")),
        array( "icon icon-enter-left" => esc_html__("enter left","jonny")),
        array( "icon icon-enter-right" => esc_html__("enter right","jonny")),
        array( "icon icon-exit-up" => esc_html__("exit up","jonny")),
        array( "icon icon-exit-down" => esc_html__("exit down","jonny")),
        array( "icon icon-exit-left" => esc_html__("exit left","jonny")),
        array( "icon icon-exit-right" => esc_html__("exit right","jonny")),
        array( "icon icon-enter-up2" => esc_html__("enter up2","jonny")),
        array( "icon icon-enter-down2" => esc_html__("enter down2","jonny")),
        array( "icon icon-enter-vertical" => esc_html__("enter vertical","jonny")),
        array( "icon icon-enter-left2" => esc_html__("enter left2","jonny")),
        array( "icon icon-enter-right2" => esc_html__("enter right2","jonny")),
        array( "icon icon-enter-horizontal" => esc_html__("enter horizontal","jonny")),
        array( "icon icon-exit-up2" => esc_html__("exit up2","jonny")),
        array( "icon icon-exit-down2" => esc_html__("exit down2","jonny")),
        array( "icon icon-exit-left2" => esc_html__("exit left2","jonny")),
        array( "icon icon-exit-right2" => esc_html__("exit right2","jonny")),
        array( "icon icon-cli" => esc_html__("cli","jonny")),
        array( "icon icon-bug" => esc_html__("bug","jonny")),
        array( "icon icon-code" => esc_html__("code","jonny")),
        array( "icon icon-file-code" => esc_html__("file code","jonny")),
        array( "icon icon-file-image" => esc_html__("file image","jonny")),
        array( "icon icon-file-zip" => esc_html__("file zip","jonny")),
        array( "icon icon-file-audio" => esc_html__("file audio","jonny")),
        array( "icon icon-file-video" => esc_html__("file video","jonny")),
        array( "icon icon-file-preview" => esc_html__("file preview","jonny")),
        array( "icon icon-file-charts" => esc_html__("file charts","jonny")),
        array( "icon icon-file-stats" => esc_html__("file stats","jonny")),
        array( "icon icon-file-spreadsheet" => esc_html__("file spreadsheet","jonny")),
        array( "icon icon-link" => esc_html__("link","jonny")),
        array( "icon icon-unlink" => esc_html__("unlink","jonny")),
        array( "icon icon-link2" => esc_html__("link2","jonny")),
        array( "icon icon-unlink2" => esc_html__("unlink2","jonny")),
        array( "icon icon-thumbs-up" => esc_html__("thumbs up","jonny")),
        array( "icon icon-thumbs-down" => esc_html__("thumbs down","jonny")),
        array( "icon icon-thumbs-up2" => esc_html__("thumbs up2","jonny")),
        array( "icon icon-thumbs-down2" => esc_html__("thumbs down2","jonny")),
        array( "icon icon-thumbs-up3" => esc_html__("thumbs up3","jonny")),
        array( "icon icon-thumbs-down3" => esc_html__("thumbs down3","jonny")),
        array( "icon icon-share" => esc_html__("share","jonny")),
        array( "icon icon-share2" => esc_html__("share2","jonny")),
        array( "icon icon-share3" => esc_html__("share3","jonny")),
        array( "icon icon-magnifier" => esc_html__("magnifier","jonny")),
        array( "icon icon-file-search" => esc_html__("file search","jonny")),
        array( "icon icon-find-replace" => esc_html__("find replace","jonny")),
        array( "icon icon-zoom-in" => esc_html__("zoom in","jonny")),
        array( "icon icon-zoom-out" => esc_html__("zoom out","jonny")),
        array( "icon icon-loupe" => esc_html__("loupe","jonny")),
        array( "icon icon-loupe-zoom-in" => esc_html__("loupe zoom in","jonny")),
        array( "icon icon-loupe-zoom-out" => esc_html__("loupe zoom out","jonny")),
        array( "icon icon-cross" => esc_html__("cross","jonny")),
        array( "icon icon-menu" => esc_html__("menu","jonny")),
        array( "icon icon-list" => esc_html__("list","jonny")),
        array( "icon icon-list2" => esc_html__("list2","jonny")),
        array( "icon icon-list3" => esc_html__("list3","jonny")),
        array( "icon icon-menu2" => esc_html__("menu2","jonny")),
        array( "icon icon-list4" => esc_html__("list4","jonny")),
        array( "icon icon-menu3" => esc_html__("menu3","jonny")),
        array( "icon icon-exclamation" => esc_html__("exclamation","jonny")),
        array( "icon icon-question" => esc_html__("question","jonny")),
        array( "icon icon-check" => esc_html__("check","jonny")),
        array( "icon icon-cross2" => esc_html__("cross2","jonny")),
        array( "icon icon-plus" => esc_html__("plus","jonny")),
        array( "icon icon-minus" => esc_html__("minus","jonny")),
        array( "icon icon-percent" => esc_html__("percent","jonny")),
        array( "icon icon-chevron-up" => esc_html__("chevron up","jonny")),
        array( "icon icon-chevron-down" => esc_html__("chevron down","jonny")),
        array( "icon icon-chevron-left" => esc_html__("chevron left","jonny")),
        array( "icon icon-chevron-right" => esc_html__("chevron right","jonny")),
        array( "icon icon-chevrons-expand-vertical" => esc_html__("chevrons expand vertical","jonny")),
        array( "icon icon-chevrons-expand-horizontal" => esc_html__("chevrons expand horizontal","jonny")),
        array( "icon icon-chevrons-contract-vertical" => esc_html__("chevrons contract vertical","jonny")),
        array( "icon icon-chevrons-contract-horizontal" => esc_html__("chevrons contract horizontal","jonny")),
        array( "icon icon-arrow-up" => esc_html__("arrow up","jonny")),
        array( "icon icon-arrow-down" => esc_html__("arrow down","jonny")),
        array( "icon icon-arrow-left" => esc_html__("arrow left","jonny")),
        array( "icon icon-arrow-right" => esc_html__("arrow right","jonny")),
        array( "icon icon-arrow-up-right" => esc_html__("arrow up right","jonny")),
        array( "icon icon-arrows-merge" => esc_html__("arrows merge","jonny")),
        array( "icon icon-arrows-split" => esc_html__("arrows split","jonny")),
        array( "icon icon-arrow-divert" => esc_html__("arrow divert","jonny")),
        array( "icon icon-arrow-return" => esc_html__("arrow return","jonny")),
        array( "icon icon-expand" => esc_html__("expand","jonny")),
        array( "icon icon-contract" => esc_html__("contract","jonny")),
        array( "icon icon-expand2" => esc_html__("expand2","jonny")),
        array( "icon icon-contract2" => esc_html__("contract2","jonny")),
        array( "icon icon-move" => esc_html__("move","jonny")),
        array( "icon icon-tab" => esc_html__("tab","jonny")),
        array( "icon icon-arrow-wave" => esc_html__("arrow wave","jonny")),
        array( "icon icon-expand3" => esc_html__("expand3","jonny")),
        array( "icon icon-expand4" => esc_html__("expand4","jonny")),
        array( "icon icon-contract3" => esc_html__("contract3","jonny")),
        array( "icon icon-notification" => esc_html__("notification","jonny")),
        array( "icon icon-warning" => esc_html__("warning","jonny")),
        array( "icon icon-notification-circle" => esc_html__("notification circle","jonny")),
        array( "icon icon-question-circle" => esc_html__("question circle","jonny")),
        array( "icon icon-menu-circle" => esc_html__("menu circle","jonny")),
        array( "icon icon-checkmark-circle" => esc_html__("checkmark circle","jonny")),
        array( "icon icon-cross-circle" => esc_html__("cross circle","jonny")),
        array( "icon icon-plus-circle" => esc_html__("plus circle","jonny")),
        array( "icon icon-circle-minus" => esc_html__("circle minus","jonny")),
        array( "icon icon-percent-circle" => esc_html__("percent circle","jonny")),
        array( "icon icon-arrow-up-circle" => esc_html__("arrow up circle","jonny")),
        array( "icon icon-arrow-down-circle" => esc_html__("arrow down circle","jonny")),
        array( "icon icon-arrow-left-circle" => esc_html__("arrow left circle","jonny")),
        array( "icon icon-arrow-right-circle" => esc_html__("arrow right circle","jonny")),
        array( "icon icon-chevron-up-circle" => esc_html__("chevron up circle","jonny")),
        array( "icon icon-chevron-down-circle" => esc_html__("chevron down circle","jonny")),
        array( "icon icon-chevron-left-circle" => esc_html__("chevron left circle","jonny")),
        array( "icon icon-chevron-right-circle" => esc_html__("chevron right circle","jonny")),
        array( "icon icon-backward-circle" => esc_html__("backward circle","jonny")),
        array( "icon icon-first-circle" => esc_html__("first circle","jonny")),
        array( "icon icon-previous-circle" => esc_html__("previous circle","jonny")),
        array( "icon icon-stop-circle" => esc_html__("stop circle","jonny")),
        array( "icon icon-play-circle" => esc_html__("play circle","jonny")),
        array( "icon icon-pause-circle" => esc_html__("pause circle","jonny")),
        array( "icon icon-next-circle" => esc_html__("next circle","jonny")),
        array( "icon icon-last-circle" => esc_html__("last circle","jonny")),
        array( "icon icon-forward-circle" => esc_html__("forward circle","jonny")),
        array( "icon icon-eject-circle" => esc_html__("eject circle","jonny")),
        array( "icon icon-crop" => esc_html__("crop","jonny")),
        array( "icon icon-frame-expand" => esc_html__("frame expand","jonny")),
        array( "icon icon-frame-contract" => esc_html__("frame contract","jonny")),
        array( "icon icon-focus" => esc_html__("focus","jonny")),
        array( "icon icon-transform" => esc_html__("transform","jonny")),
        array( "icon icon-grid" => esc_html__("grid","jonny")),
        array( "icon icon-grid-crossed" => esc_html__("grid crossed","jonny")),
        array( "icon icon-layers" => esc_html__("layers","jonny")),
        array( "icon icon-layers-crossed" => esc_html__("layers crossed","jonny")),
        array( "icon icon-toggle" => esc_html__("toggle","jonny")),
        array( "icon icon-rulers" => esc_html__("rulers","jonny")),
        array( "icon icon-ruler" => esc_html__("ruler","jonny")),
        array( "icon icon-funnel" => esc_html__("funnel","jonny")),
        array( "icon icon-flip-horizontal" => esc_html__("flip horizontal","jonny")),
        array( "icon icon-flip-vertical" => esc_html__("flip vertical","jonny")),
        array( "icon icon-flip-horizontal2" => esc_html__("flip horizontal2","jonny")),
        array( "icon icon-flip-vertical2" => esc_html__("flip vertical2","jonny")),
        array( "icon icon-angle" => esc_html__("angle","jonny")),
        array( "icon icon-angle2" => esc_html__("angle2","jonny")),
        array( "icon icon-subtract" => esc_html__("subtract","jonny")),
        array( "icon icon-combine" => esc_html__("combine","jonny")),
        array( "icon icon-intersect" => esc_html__("intersect","jonny")),
        array( "icon icon-exclude" => esc_html__("exclude","jonny")),
        array( "icon icon-align-center-vertical" => esc_html__("align center vertical","jonny")),
        array( "icon icon-align-right" => esc_html__("align right","jonny")),
        array( "icon icon-align-bottom" => esc_html__("align bottom","jonny")),
        array( "icon icon-align-left" => esc_html__("align left","jonny")),
        array( "icon icon-align-center-horizontal" => esc_html__("align center horizontal","jonny")),
        array( "icon icon-align-top" => esc_html__("align top","jonny")),
        array( "icon icon-square" => esc_html__("square","jonny")),
        array( "icon icon-plus-square" => esc_html__("plus square","jonny")),
        array( "icon icon-minus-square" => esc_html__("minus square","jonny")),
        array( "icon icon-percent-square" => esc_html__("percent square","jonny")),
        array( "icon icon-arrow-up-square" => esc_html__("arrow up square","jonny")),
        array( "icon icon-arrow-down-square" => esc_html__("arrow down square","jonny")),
        array( "icon icon-arrow-left-square" => esc_html__("arrow left square","jonny")),
        array( "icon icon-arrow-right-square" => esc_html__("arrow right square","jonny")),
        array( "icon icon-chevron-up-square" => esc_html__("chevron up square","jonny")),
        array( "icon icon-chevron-down-square" => esc_html__("chevron down square","jonny")),
        array( "icon icon-chevron-left-square" => esc_html__("chevron left square","jonny")),
        array( "icon icon-chevron-right-square" => esc_html__("chevron right square","jonny")),
        array( "icon icon-check-square" => esc_html__("check square","jonny")),
        array( "icon icon-cross-square" => esc_html__("cross square","jonny")),
        array( "icon icon-menu-square" => esc_html__("menu square","jonny")),
        array( "icon icon-prohibited" => esc_html__("prohibited","jonny")),
        array( "icon icon-circle" => esc_html__("circle","jonny")),
        array( "icon icon-radio-button" => esc_html__("radio button","jonny")),
        array( "icon icon-ligature" => esc_html__("ligature","jonny")),
        array( "icon icon-text-format" => esc_html__("text format","jonny")),
        array( "icon icon-text-format-remove" => esc_html__("text format remove","jonny")),
        array( "icon icon-text-size" => esc_html__("text size","jonny")),
        array( "icon icon-bold" => esc_html__("bold","jonny")),
        array( "icon icon-italic" => esc_html__("italic","jonny")),
        array( "icon icon-underline" => esc_html__("underline","jonny")),
        array( "icon icon-strikethrough" => esc_html__("strikethrough","jonny")),
        array( "icon icon-highlight" => esc_html__("highlight","jonny")),
        array( "icon icon-text-align-left" => esc_html__("text align left","jonny")),
        array( "icon icon-text-align-center" => esc_html__("text align center","jonny")),
        array( "icon icon-text-align-right" => esc_html__("text align right","jonny")),
        array( "icon icon-text-align-justify" => esc_html__("text align justify","jonny")),
        array( "icon icon-line-spacing" => esc_html__("line spacing","jonny")),
        array( "icon icon-indent-increase" => esc_html__("indent increase","jonny")),
        array( "icon icon-indent-decrease" => esc_html__("indent decrease","jonny")),
        array( "icon icon-text-wrap" => esc_html__("text wrap","jonny")),
        array( "icon icon-pilcrow" => esc_html__("pilcrow","jonny")),
        array( "icon icon-direction-ltr" => esc_html__("direction ltr","jonny")),
        array( "icon icon-direction-rtl" => esc_html__("direction rtl","jonny")),
        array( "icon icon-page-break" => esc_html__("page break","jonny")),
        array( "icon icon-page-break2" => esc_html__("page break2","jonny")),
        array( "icon icon-sort-alpha-asc" => esc_html__("sort alpha asc","jonny")),
        array( "icon icon-sort-alpha-desc" => esc_html__("sort alpha desc","jonny")),
        array( "icon icon-sort-numeric-asc" => esc_html__("sort numeric asc","jonny")),
        array( "icon icon-sort-numeric-desc" => esc_html__("sort numeric desc","jonny")),
        array( "icon icon-sort-amount-asc" => esc_html__("sort amount asc","jonny")),
        array( "icon icon-sort-amount-desc" => esc_html__("sort amount desc","jonny")),
        array( "icon icon-sort-time-asc" => esc_html__("sort time asc","jonny")),
        array( "icon icon-sort-time-desc" => esc_html__("sort time desc","jonny")),
        array( "icon icon-sigma" => esc_html__("sigma","jonny")),
        array( "icon icon-pencil-line" => esc_html__("pencil line","jonny")),
        array( "icon icon-hand" => esc_html__("hand","jonny")),
        array( "icon icon-pointer-up" => esc_html__("pointer up","jonny")),
        array( "icon icon-pointer-right" => esc_html__("pointer right","jonny")),
        array( "icon icon-pointer-down" => esc_html__("pointer down","jonny")),
        array( "icon icon-pointer-left" => esc_html__("pointer left","jonny")),
        array( "icon icon-finger-tap" => esc_html__("finger tap","jonny")),
        array( "icon icon-fingers-tap" => esc_html__("fingers tap","jonny")),
        array( "icon icon-reminder" => esc_html__("reminder","jonny")),
        array( "icon icon-fingers-crossed" => esc_html__("fingers crossed","jonny")),
        array( "icon icon-fingers-victory" => esc_html__("fingers victory","jonny")),
        array( "icon icon-gesture-zoom" => esc_html__("gesture zoom","jonny")),
        array( "icon icon-gesture-pinch" => esc_html__("gesture pinch","jonny")),
        array( "icon icon-fingers-scroll-horizontal" => esc_html__("fingers scroll horizontal","jonny")),
        array( "icon icon-fingers-scroll-vertical" => esc_html__("fingers scroll vertical","jonny")),
        array( "icon icon-fingers-scroll-left" => esc_html__("fingers scroll left","jonny")),
        array( "icon icon-fingers-scroll-right" => esc_html__("fingers scroll right","jonny")),
        array( "icon icon-hand2" => esc_html__("hand2","jonny")),
        array( "icon icon-pointer-up2" => esc_html__("pointer up2","jonny")),
        array( "icon icon-pointer-right2" => esc_html__("pointer right2","jonny")),
        array( "icon icon-pointer-down2" => esc_html__("pointer down2","jonny")),
        array( "icon icon-pointer-left2" => esc_html__("pointer left2","jonny")),
        array( "icon icon-finger-tap2" => esc_html__("finger tap2","jonny")),
        array( "icon icon-fingers-tap2" => esc_html__("fingers tap2","jonny")),
        array( "icon icon-reminder2" => esc_html__("reminder2","jonny")),
        array( "icon icon-gesture-zoom2" => esc_html__("gesture zoom2","jonny")),
        array( "icon icon-gesture-pinch2" => esc_html__("gesture pinch2","jonny")),
        array( "icon icon-fingers-scroll-horizontal2" => esc_html__("fingers scroll horizontal2","jonny")),
        array( "icon icon-fingers-scroll-vertical2" => esc_html__("fingers scroll vertical2","jonny")),
        array( "icon icon-fingers-scroll-left2" => esc_html__("fingers scroll left2","jonny")),
        array( "icon icon-fingers-scroll-right2" => esc_html__("fingers scroll right2","jonny")),
        array( "icon icon-fingers-scroll-vertical3" => esc_html__("fingers scroll vertical3","jonny")),
        array( "icon icon-border-style" => esc_html__("border style","jonny")),
        array( "icon icon-border-all" => esc_html__("border all","jonny")),
        array( "icon icon-border-outer" => esc_html__("border outer","jonny")),
        array( "icon icon-border-inner" => esc_html__("border inner","jonny")),
        array( "icon icon-border-top" => esc_html__("border top","jonny")),
        array( "icon icon-border-horizontal" => esc_html__("border horizontal","jonny")),
        array( "icon icon-border-bottom" => esc_html__("border bottom","jonny")),
        array( "icon icon-border-left" => esc_html__("border left","jonny")),
        array( "icon icon-border-vertical" => esc_html__("border vertical","jonny")),
        array( "icon icon-border-right" => esc_html__("border right","jonny")),
        array( "icon icon-border-none" => esc_html__("border none","jonny")),
        array( "icon icon-ellipsis" => esc_html__("ellipsis","jonny")),
        array( "icon icon-uni21" => esc_html__("uni21","jonny")),
        array( "icon icon-uni22" => esc_html__("uni22","jonny")),
        array( "icon icon-uni23" => esc_html__("uni23","jonny")),
        array( "icon icon-uni24" => esc_html__("uni24","jonny")),
        array( "icon icon-uni25" => esc_html__("uni25","jonny")),
        array( "icon icon-uni26" => esc_html__("uni26","jonny")),
        array( "icon icon-uni27" => esc_html__("uni27","jonny")),
        array( "icon icon-uni28" => esc_html__("uni28","jonny")),
        array( "icon icon-uni29" => esc_html__("uni29","jonny")),
        array( "icon icon-uni2a" => esc_html__("uni2a","jonny")),
        array( "icon icon-uni2b" => esc_html__("uni2b","jonny")),
        array( "icon icon-uni2c" => esc_html__("uni2c","jonny")),
        array( "icon icon-uni2d" => esc_html__("uni2d","jonny")),
        array( "icon icon-uni2e" => esc_html__("uni2e","jonny")),
        array( "icon icon-uni2f" => esc_html__("uni2f","jonny")),
        array( "icon icon-uni30" => esc_html__("uni30","jonny")),
        array( "icon icon-uni31" => esc_html__("uni31","jonny")),
        array( "icon icon-uni32" => esc_html__("uni32","jonny")),
        array( "icon icon-uni33" => esc_html__("uni33","jonny")),
        array( "icon icon-uni34" => esc_html__("uni34","jonny")),
        array( "icon icon-uni35" => esc_html__("uni35","jonny")),
        array( "icon icon-uni36<div><br></div>" => esc_html__("uni36<div><br></div>","jonny")),
        array( "icon icon-uni37" => esc_html__("uni37","jonny")),
        array( "icon icon-uni38" => esc_html__("uni38","jonny")),
        array( "icon icon-uni39" => esc_html__("uni39","jonny")),
        array( "icon icon-uni3a" => esc_html__("uni3a","jonny")),
        array( "icon icon-uni3b" => esc_html__("uni3b","jonny")),
        array( "icon icon-uni3c" => esc_html__("uni3c","jonny")),
        array( "icon icon-uni3d" => esc_html__("uni3d","jonny")),
        array( "icon icon-uni3e" => esc_html__("uni3e","jonny")),
        array( "icon icon-uni3f" => esc_html__("uni3f","jonny")),
        array( "icon icon-uni40" => esc_html__("uni40","jonny")),
        array( "icon icon-uni41" => esc_html__("uni41","jonny")),
        array( "icon icon-uni42" => esc_html__("uni42","jonny")),
        array( "icon icon-uni43" => esc_html__("uni43","jonny")),
        array( "icon icon-uni44" => esc_html__("uni44","jonny")),
        array( "icon icon-uni45" => esc_html__("uni45","jonny")),
        array( "icon icon-uni46" => esc_html__("uni46","jonny")),
        array( "icon icon-uni47" => esc_html__("uni47","jonny")),
        array( "icon icon-uni48" => esc_html__("uni48","jonny")),
        array( "icon icon-uni49" => esc_html__("uni49","jonny")),
        array( "icon icon-uni4a" => esc_html__("uni4a","jonny")),
        array( "icon icon-uni4b" => esc_html__("uni4b","jonny")),
        array( "icon icon-uni4c" => esc_html__("uni4c","jonny")),
        array( "icon icon-uni4d" => esc_html__("uni4d","jonny")),
        array( "icon icon-uni4e" => esc_html__("uni4e","jonny")),
        array( "icon icon-uni4f" => esc_html__("uni4f","jonny")),
        array( "icon icon-uni50" => esc_html__("uni50","jonny")),
        array( "icon icon-uni51" => esc_html__("uni51","jonny")),
        array( "icon icon-uni52" => esc_html__("uni52","jonny")),
        array( "icon icon-uni53" => esc_html__("uni53","jonny")),
        array( "icon icon-uni54" => esc_html__("uni54","jonny")),
        array( "icon icon-uni55" => esc_html__("uni55","jonny")),
        array( "icon icon-uni56" => esc_html__("uni56","jonny")),
        array( "icon icon-uni57" => esc_html__("uni57","jonny")),
        array( "icon icon-uni58" => esc_html__("uni58","jonny")),
        array( "icon icon-uni59" => esc_html__("uni59","jonny")),
        array( "icon icon-uni5a" => esc_html__("uni5a","jonny")),
        array( "icon icon-uni5b" => esc_html__("uni5b","jonny")),
        array( "icon icon-uni5c" => esc_html__("uni5c","jonny")),
        array( "icon icon-uni5d" => esc_html__("uni5d","jonny")),
        array( "icon icon-uni5e" => esc_html__("uni5e","jonny")),
        array( "icon icon-uni5f" => esc_html__("uni5f","jonny")),
        array( "icon icon-uni60" => esc_html__("uni60","jonny")),
        array( "icon icon-uni61" => esc_html__("uni61","jonny")),
        array( "icon icon-uni62" => esc_html__("uni62","jonny")),
        array( "icon icon-uni63" => esc_html__("uni63","jonny")),
        array( "icon icon-uni64" => esc_html__("uni64","jonny")),
        array( "icon icon-uni65" => esc_html__("uni65","jonny")),
        array( "icon icon-uni66" => esc_html__("uni66","jonny")),
        array( "icon icon-uni67" => esc_html__("uni67","jonny")),
        array( "icon icon-uni68" => esc_html__("uni68","jonny")),
        array( "icon icon-uni69" => esc_html__("uni69","jonny")),
        array( "icon icon-uni6a" => esc_html__("uni6a","jonny")),
        array( "icon icon-uni6b" => esc_html__("uni6b","jonny")),
        array( "icon icon-uni6c" => esc_html__("uni6c","jonny")),
        array( "icon icon-uni6d" => esc_html__("uni6d","jonny")),
        array( "icon icon-uni6e" => esc_html__("uni6e","jonny")),
        array( "icon icon-uni6f" => esc_html__("uni6f","jonny")),
        array( "icon icon-uni70" => esc_html__("uni70","jonny")),
        array( "icon icon-uni71" => esc_html__("uni71","jonny")),
        array( "icon icon-uni72" => esc_html__("uni72","jonny")),
        array( "icon icon-uni73" => esc_html__("uni73","jonny")),
        array( "icon icon-uni74" => esc_html__("uni74","jonny")),
        array( "icon icon-uni75" => esc_html__("uni75","jonny")),
        array( "icon icon-uni76" => esc_html__("uni76","jonny")),
        array( "icon icon-uni77" => esc_html__("uni77","jonny")),
        array( "icon icon-uni78" => esc_html__("uni78","jonny")),
        array( "icon icon-uni79" => esc_html__("uni79","jonny")),
        array( "icon icon-uni7a" => esc_html__("uni7a","jonny")),
        array( "icon icon-uni7b" => esc_html__("uni7b","jonny")),
        array( "icon icon-uni7c" => esc_html__("uni7c","jonny")),
        array( "icon icon-uni7d" => esc_html__("uni7d","jonny")),
        array( "icon icon-uni7e" => esc_html__("uni7e","jonny")),
        array( "icon icon-copyright" => esc_html__("copyright","jonny")),

    );

// Return icons
    return $icons;
}




/*
jonny welcome
**/
vc_map(array(
        "name" => esc_html__("jonny welcome", "jonny"),
        "base" => "jonny_welcome",
        'show_settings_on_create' => true,
        'description' => esc_html__('', 'jonny'),
        'icon' => plugins_url('/icon/traffic-sign.png', __FILE__), // Simply pass url to your icon here
        'category' => esc_html__('jonny', 'jonny'),
        "params" => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Section ID', 'jonny'),
                'param_name' => 'section_id',
                'description' => esc_html__('Add Your Section ID', 'jonny'),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__( 'Background Image', 'jonny' ),
                'param_name' => 'src',
                'value' => '',
                'description' => esc_html__( 'Select images from media library.', 'jonny' ),
            ),
            array(
                'type' => 'textfield',

                'class' => '',
                'heading' => esc_html__('Vertical Title', 'jonny'),
                'param_name' => 'vt',
                'value' => esc_html__('Introduce', 'jonny'),
                'description' => esc_html__('insert text', 'jonny')
            ),
            array(
                'type' => 'textarea_raw_html',

                'class' => '',
                'heading' => esc_html__('Title', 'jonny'),
                'param_name' => 't',
                'value' => esc_html__('Welcome To', 'jonny'),
                'description' => esc_html__('insert text', 'jonny')
            ),
            array(
                'type' => 'textarea',
                'value' => esc_html__('Hello', 'jonny'),
                'heading' => esc_html__('Text primary', 'jonny'),
                'param_name' => 'd2',
                'description' => esc_html__('insert text', 'jonny')
            ),


            array(
                'type' => 'textarea',
                'value' => esc_html__('my name is jonny.', 'jonny'),
                'heading' => esc_html__('Text normal', 'jonny'),
                'param_name' => 'd1',
                'description' => esc_html__('insert text', 'jonny')
            ),



            array(
                'type' => 'css_editor',
                'heading' => esc_html__('Css', 'jonny'),
                'param_name' => 'css',
                'group' => esc_html__('Design options', 'jonny'),
            ),
        ),
    )
);
/**
 * About me
 **/
vc_map(array(
        "name" => esc_html__("jonny about me", "jonny"),
        "base" => "jonny_about_me",
        'icon' => plugins_url('/icon/businessman.png', __FILE__), // Simply pass url to your icon here
        'show_settings_on_create' => true,
        'description' => esc_html__('', 'jonny'),
        'category' => esc_html__('jonny', 'jonny'),
        "params" => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Section ID', 'jonny'),
                'param_name' => 'section_id',
                'description' => esc_html__('Add Your Section ID', 'jonny'),
            ),

            array(
                'type' => 'textfield',
                'class' => '',
                'heading' => esc_html__('Vertical Title', 'jonny'),
                'param_name' => 'vt',
                'value' => esc_html__('what I do', 'jonny'),
                'description' => esc_html__('insert text', 'jonny')
            ),

            array(
                'type' => 'textfield',
                'class' => '',
                'heading' => esc_html__('Title', 'jonny'),
                'param_name' => 't',
                'value' => esc_html__('About me', 'jonny'),
                'description' => esc_html__('insert text', 'jonny')
            ),

            array(
                'type' => 'textarea',
                'value' => esc_html__('My mission is', 'jonny'),
                'heading' => esc_html__('Text normal', 'jonny'),
                'param_name' => 'd1',
                'description' => esc_html__('insert text', 'jonny')
            ),


            array(
                'type' => 'textarea',
                'value' => esc_html__('design &amp; develop', 'jonny'),
                'heading' => esc_html__('Text primary', 'jonny'),
                'param_name' => 'd2',
                'description' => esc_html__('insert text', 'jonny')
            ),

            array(
                'type' => 'textarea',
                'value' => esc_html__('the best Websites around', 'jonny'),
                'heading' => esc_html__('Text primary', 'jonny'),
                'param_name' => 'd3',
                'description' => esc_html__('insert text', 'jonny')
            ),

            array(
                'type' => 'textarea_html',
                'value' => esc_html__(' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dicta sit pariatur odio unde deleniti eveniet magni cum, ad iure, vel nisi minima vero voluptates ut ipsum amet iusto hic.', 'jonny'),
                'heading' => esc_html__('content', 'jonny'),
                'param_name' => 'content',
                'description' => esc_html__('insert text', 'jonny')
            ),


            array(
                'type' => 'param_group',
                'heading' => esc_html__('Chart  value', 'jonny'),
                'param_name' => 'items',
                'group' => esc_html__('Charts  items', 'jonny'),
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__('Chart title', 'jonny'),
                        'param_name' => 'title',
                        'value' => esc_html__('Development', 'jonny'),
                        'description' => esc_html__('insert text  ( example DESIGN )', 'jonny')
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__('chart number', 'jonny'),
                        'param_name' => 'number',
                        'value' => esc_html__('80', 'jonny'),
                        'description' => esc_html__('insert number ( example 80 )', 'jonny')
                    ),
                ),
            ),
            array(
                'type' => 'css_editor',
                'heading' => esc_html__('Css', 'jonny'),
                'param_name' => 'css',
                'group' => esc_html__('Design options', 'jonny'),
            ),
        ),
    )
);


/*
* 	jonny my works
*/

vc_map(array(
    'name' => esc_html__('jonny my works', 'jonny'),
    'base' => 'jonny_works',
    'show_settings_on_create' => true,
    'category' => esc_html__('jonny', 'jonny'),
    'description' => esc_html__('', 'jonny'),
    'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
    'icon' => plugins_url('/icon/board.png', __FILE__), // Simply pass url to your icon here
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Section ID', 'jonny'),
            'param_name' => 'section_id',
            'description' => esc_html__('Add Your Section ID', 'jonny'),
        ),

        array(
            'type' => 'attach_images',
            'heading' => esc_html__(' Background Images', 'jonny'),
            'param_name' => 'src',
            'description' => esc_html__('Select images from media library.', 'jonny'),
        ),


        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__('Vertical Title', 'jonny'),
            'param_name' => 'vt',
            'value' => esc_html__('my works', 'jonny'),
            'description' => esc_html__('insert text', 'jonny')
        ),

        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__('Title', 'jonny'),
            'param_name' => 't',
            'value' => esc_html__('Featured works', 'jonny'),
            'description' => esc_html__('insert text', 'jonny')
        ),


        array(
            'type' => 'param_group',
            'heading' => esc_html__('Project item', 'jonny'),
            'param_name' => 'items',
            'group' => esc_html__('Item values', 'jonny'),
            'params' => array(

                array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => esc_html__('Title', 'jonny'),
                    'param_name' => 't',
                    'value' => esc_html__('UCAM Minimalist Apartment', 'jonny'),
                    'description' => esc_html__('insert text', 'jonny')
                ),

                array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => esc_html__('Single project link', 'jonny'),
                    'param_name' => 'url',
                    'value' => esc_html__('#', 'jonny'),
                    'description' => esc_html__('insert url', 'jonny')
                ),

                array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => esc_html__('Category', 'jonny'),
                    'param_name' => 'cat',
                    'value' => esc_html__('#', 'jonny'),
                    'description' => esc_html__('insert link', 'jonny')
                ),





            ),

        ),

        array(
            'type' => 'vc_link',
            'class' => '',
            'heading' => esc_html__('Link to all projects ', 'jonny'),
            'param_name' => 'url',
            'value' => esc_html__('#', 'jonny'),

        ),

        array(
            'type' => 'iconpicker',
            'heading' => esc_html__('The icons ', 'jonny'),
            'param_name' => 'icon',
            'value' => '',
            'description' => esc_html__('insert icon', 'jonny'),
            'settings' => array(
                'emptyIcon' => false,
                'iconsPerPage' => 100,
            )
        ),


        array(
            'type' => 'css_editor',
            'heading' => esc_html__('Css', 'jonny'),
            'param_name' => 'css',
            'group' => esc_html__('Design options', 'jonny'),
        ),
    ),

));



/*
* 	jonny_services
*/

vc_map(array(
    'name' => esc_html__('jonny my services', 'jonny'),
    'base' => 'jonny_services',
    'show_settings_on_create' => true,
    'category' => esc_html__('jonny', 'jonny'),
    'description' => esc_html__('', 'jonny'),
    'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
    'icon' => plugins_url('/icon/two-settings-cogwheels.png', __FILE__), // Simply pass url to your icon here
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Section ID', 'jonny'),
            'param_name' => 'section_id',
            'description' => esc_html__('Add Your Section ID', 'jonny'),
        ),


        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__('Vertical Title', 'jonny'),
            'param_name' => 'vt',
            'value' => esc_html__('Services', 'jonny'),
            'description' => esc_html__('insert text', 'jonny')
        ),

        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__('Title', 'jonny'),
            'param_name' => 't',
            'value' => esc_html__('My services', 'jonny'),
            'description' => esc_html__('insert text', 'jonny')
        ),
        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__('Text', 'jonny'),
            'param_name' => 'd1',
            'value' => esc_html__('I like', 'jonny'),
            'description' => esc_html__('insert text', 'jonny')
        ),

        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__('Text primary', 'jonny'),
            'param_name' => 'd2',
            'value' => esc_html__('to make', 'jonny'),
            'description' => esc_html__('insert text', 'jonny')
        ),

        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__('Text ', 'jonny'),
            'param_name' => 'd3',
            'value' => esc_html__('things easy and fun', 'jonny'),
            'description' => esc_html__('insert text', 'jonny')
        ),


        array(
            'type' => 'param_group',
            'heading' => esc_html__('Service list ', 'jonny'),
            'param_name' => 'items',
            'group' => esc_html__('Item values', 'jonny'),
            'params' => array(
                array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => esc_html__('Single project link', 'jonny'),
                    'param_name' => 'url',
                    'value' => esc_html__('#', 'jonny'),
                    'description' => esc_html__('insert url', 'jonny')
                ),

                array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => esc_html__('Title', 'jonny'),
                    'param_name' => 't',
                    'value' => esc_html__('01.  Development', 'jonny'),
                    'description' => esc_html__('insert text', 'jonny')
                ),



            ),

        ),


        array(
            'type' => 'attach_image',
            'heading' => esc_html__('Image', 'jonny'),
            'param_name' => 'src',
            'group' => esc_html__('Right block', 'jonny'),
            'description' => esc_html__('Select image from media library.', 'jonny'),
        ),

        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__('Number', 'jonny'),
            'param_name' => 'num',
            'group' => esc_html__('Right block', 'jonny'),
            'value' => esc_html__('4', 'jonny'),
            'description' => esc_html__('insert number', 'jonny')
        ),

        array(
            'type' => 'textarea_raw_html',
            'heading' => esc_html__( 'Content', 'jonny' ),
            'param_name' => 'cont',
            'group' => esc_html__('Right block', 'jonny'),
            'description' => esc_html__( 'insert content', 'jonny' ),

        ),



        array(
            'type' => 'css_editor',
            'heading' => esc_html__('Css', 'jonny'),
            'param_name' => 'css',
            'group' => esc_html__('Design options', 'jonny'),
        ),
    ),

));



/*
* 	jonny_resume
*/

vc_map(array(
    'name' => esc_html__('jonny resume', 'jonny'),
    'base' => 'jonny_resume',
    'show_settings_on_create' => true,
    'category' => esc_html__('jonny', 'jonny'),
    'description' => esc_html__('', 'jonny'),
    'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
    'icon' => plugins_url('/icon/list.png', __FILE__), // Simply pass url to your icon here
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Section ID', 'jonny'),
            'param_name' => 'section_id',
            'description' => esc_html__('Add Your Section ID', 'jonny'),
        ),


        array(
            'type' => 'attach_image',
            'heading' => esc_html__('Background Image', 'jonny'),
            'param_name' => 'src',
            'description' => esc_html__('Select image from media library.', 'jonny'),
        ),




        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__('Vertical Title', 'jonny'),
            'param_name' => 'vt',
            'value' => esc_html__('Resume', 'jonny'),
            'description' => esc_html__('insert text', 'jonny')
        ),



        array(
            'type' => 'param_group',
            'heading' => esc_html__('Resume item', 'jonny'),
            'param_name' => 'items',
            'group' => esc_html__('Item values', 'jonny'),
            'params' => array(
                array(
                    'type' => 'textfield',
                    'class' => '',
                    'heading' => esc_html__('Column Title', 'jonny'),
                    'param_name' => 't',
                    'value' => esc_html__('Resume', 'jonny'),
                    'description' => esc_html__('insert text', 'jonny')
                ),
                /*
                 * items 2
                 */


                array(
                    'type' => 'param_group',
                    'heading' => esc_html__('Resume list', 'jonny'),
                    'param_name' => 'items2',
                    'group' => esc_html__('Item values', 'jonny'),
                    'params' => array(
                        array(
                            'type' => 'textfield',
                            'holder' => 'div',
                            'class' => '',
                            'heading' => esc_html__('Resume type', 'jonny'),
                            'param_name' => 'resume_type',
                            'value' => esc_html__('SPECIALIZATION COURSE', 'jonny'),
                            'description' => esc_html__('insert text', 'jonny')
                        ),




                        array(
                            'type' => 'textfield',
                            'holder' => 'div',
                            'class' => '',
                            'heading' => esc_html__('Resume study', 'jonny'),
                            'param_name' => 'study',
                            'value' => esc_html__('University of studies, Poland, Cracow', 'jonny'),
                            'description' => esc_html__('insert text', 'jonny')
                        ),

                        array(
                            'type' => 'textfield',
                            'holder' => 'div',
                            'class' => '',
                            'heading' => esc_html__('Resume date ', 'jonny'),
                            'param_name' => 'date',
                            'value' => esc_html__('Jan 2004 - Dec 2006', 'jonny'),
                            'description' => esc_html__('insert text', 'jonny')
                        ),


                        array(
                            'type' => 'textarea',
                            'holder' => 'div',
                            'class' => '',
                            'heading' => esc_html__('Resume text ', 'jonny'),
                            'param_name' => 'text',
                            'value' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus nobis animi assumenda sint recusandae! Dolor placeat debitis animi illum quo repellendus pariatur, enim doloribus,', 'jonny'),
                            'description' => esc_html__('insert text', 'jonny')
                        ),



                    ),

                ),



            ),

        ),



        array(
            'type' => 'css_editor',
            'heading' => esc_html__('Css', 'jonny'),
            'param_name' => 'css',
            'group' => esc_html__('Design options', 'jonny'),
        ),
    ),

));



/*
* 	jonny partners
*/

vc_map(array(
    'name' => esc_html__('jonny partners', 'jonny'),
    'base' => 'jonny_partners',
    'show_settings_on_create' => true,
    'category' => esc_html__('jonny', 'jonny'),
    'description' => esc_html__('', 'jonny'),
    'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
    'icon' => plugins_url('/icon/partners.png', __FILE__), // Simply pass url to your icon here
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Section ID', 'jonny'),
            'param_name' => 'section_id',
            'description' => esc_html__('Add Your Section ID', 'jonny'),
        ),
        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__('Vertical Title', 'jonny'),
            'param_name' => 'vt',
            'value' => esc_html__('Partners', 'jonny'),
            'description' => esc_html__('insert text', 'jonny')
        ),


        array(
            'type' => 'attach_images',
            'heading' => esc_html__(' Partners logo', 'jonny'),
            'param_name' => 'src',
            'description' => esc_html__('Select images from media library.', 'jonny'),
        ),


        array(
            'type' => 'css_editor',
            'heading' => esc_html__('Css', 'jonny'),
            'param_name' => 'css',
            'group' => esc_html__('Design options', 'jonny'),
        ),
    ),

));



/*
* 	jonny my works
*/

vc_map(array(
    'name' => esc_html__('jonny testimonials', 'jonny'),
    'base' => 'jonny_testimonials',
    'show_settings_on_create' => true,
    'category' => esc_html__('jonny', 'jonny'),
    'description' => esc_html__('', 'jonny'),
    'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
    'icon' => plugins_url('/icon/rating.png', __FILE__), // Simply pass url to your icon here
    'params' => array(
        array(
            'type' => 'textfield',
            'heading' => esc_html__('Section ID', 'jonny'),
            'param_name' => 'section_id',
            'description' => esc_html__('Add Your Section ID', 'jonny'),
        ),

        array(
            'type' => 'attach_images',
            'heading' => esc_html__(' Background Image', 'jonny'),
            'param_name' => 'src',
            'description' => esc_html__('Select images from media library.', 'jonny'),
        ),


        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__('Vertical Title', 'jonny'),
            'param_name' => 'vt',
            'value' => esc_html__('testimonials', 'jonny'),
            'description' => esc_html__('insert text', 'jonny')
        ),

        array(
            'type' => 'textarea_html',
            'class' => '',
            'heading' => esc_html__('Content', 'jonny'),
            'param_name' => 'content',
            'value' => esc_html__('creative & dedicated is things that Jonny studio brings for your house', 'jonny'),
            'description' => esc_html__('insert text', 'jonny')
        ),


        array(
            'type' => 'param_group',
            'heading' => esc_html__('Carousel item', 'jonny'),
            'param_name' => 'items',
            'group' => esc_html__('Item values', 'jonny'),
            'params' => array(

                array(
                    'type' => 'textarea',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => esc_html__('Testimonial text', 'jonny'),
                    'param_name' => 'd',
                    'description' => esc_html__('insert text', 'jonny')
                ),



                array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => esc_html__('Author name', 'jonny'),
                    'param_name' => 'auth_name',
                    'value' => esc_html__('David & Elisa', 'jonny'),
                    'description' => esc_html__('insert text', 'jonny')
                ),

                array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => esc_html__('Project name', 'jonny'),
                    'param_name' => 'project_name',
                    'value' => esc_html__('Apartment view lake at Brooklyn', 'jonny'),
                    'description' => esc_html__('insert text', 'jonny')
                ),






            ),

        ),




        array(
            'type' => 'css_editor',
            'heading' => esc_html__('Css', 'jonny'),
            'param_name' => 'css',
            'group' => esc_html__('Design options', 'jonny'),
        ),
    ),

));



/***********jonny_map_section***********/

vc_map( array(

    'name' => esc_html__( 'jonny contact form', 'jonny' ),
    'base' => 'jonny_contact_section',
    'show_settings_on_create' => true,
    'category' => esc_html__('jonny', 'jonny'),
    'description' => esc_html__( '', 'jonny' ),
    'icon' => plugins_url( '/icon/email.png', __FILE__ ), // Simply pass url to your icon here
    'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
    'params' => array(

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Section ID', 'jonny' ),
            'param_name' => 'section_id',
            'description' => esc_html__( 'Add Your Section ID', 'jonny' ),
        ),

        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__('Vertical Title', 'jonny'),
            'param_name' => 'vt',
            'value' => esc_html__('contact', 'jonny'),
            'description' => esc_html__('insert text', 'jonny')
        ),


        array(
            'type' => 'textfield',
            'holder' => 'div',
            'class' => '',
            'heading' => esc_html__('Title', 'jonny'),
            'param_name' => 't',
            'value' => esc_html__('Get In Touch', 'jonny'),
            'description' => esc_html__('insert text', 'jonny')
        ),



        array(
            'type' => 'textarea_raw_html',
            'heading' => esc_html__( 'insert contact form shortcode', 'arcon' ),
            'param_name' => 'c_short',
            'description' => esc_html__( 'insert text or shortcode or html tags', 'arcon' ),
            'group' => esc_html__( 'Contact form', 'arcon' ),
        ),



        array(
            'type' => 'css_editor',
            'heading' => esc_html__( 'Css', 'jonny' ),
            'param_name' => 'css',
            'group' => esc_html__( 'Design options', 'jonny' ),
        ),


    ),


) );




/*
* project detail
*/
vc_map( array(
    'name' => esc_html__( 'jonny project detail', 'jonny' ),
    'base' => 'jonny_project_detail',
    'show_settings_on_create' => true,
    'category' => esc_html__( 'jonny', 'jonny' ),
    'description' => esc_html__( '', 'jonny' ),
    'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
    'icon' => plugins_url( '/icon/businessman-board.png', __FILE__ ), // Simply pass url to your icon here
    'params' => array(
        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Carousel item', 'jonny' ),
            'param_name' => 'items_1',
            'params' => array(


                array(
            'type' => 'attach_image',
            'heading' => esc_html__('Background Image', 'jonny'),
            'param_name' => 'src',
            'description' => esc_html__('Select image from media library.', 'jonny'),
        ),

        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__( 'Heading', 'jonny' ),
            'param_name' => 't',
            'value' => 'Our core values.',
            'description' => esc_html__( 'insert text', 'jonny' )
        ),


        array(
            'type' => 'textarea',
            'class' => '',
            'heading' => esc_html__( 'Desciption', 'jonny' ),
            'param_name' => 'content',
            'description' => esc_html__( 'insert text', 'jonny' )
        ),


        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Features item', 'jonny' ),
            'param_name' => 'items',
            'group' => esc_html__( 'Item values', 'jonny' ),
            'params' => array(


                array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => esc_html__( 'Left text', 'jonny' ),
                    'param_name' => 'left_text',
                    'value' => esc_html__( 'Clients:', 'jonny' ),
                    'description' => esc_html__( 'insert text', 'jonny' )
                ),
                array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => esc_html__( 'Right text', 'jonny' ),
                    'param_name' => 'right_text',
                    'value' => esc_html__( 'Ethan Hunt', 'jonny' ),
                    'description' => esc_html__( 'insert text', 'jonny' )
                ),


            ),

        ),


        array(
            'type' => 'textfield',
            'class' => '',
            'heading' => esc_html__( 'Share  text', 'jonny' ),
            'param_name' => 't_social',
            'value' => 'Share:',
            'description' => esc_html__( 'insert text', 'jonny' )
        ),

        array(
            'type' => 'param_group',
            'heading' => esc_html__( 'Social', 'jonny' ),
            'param_name' => 'items2',
            'group' => esc_html__( 'Item values', 'jonny' ),
            'params' => array(

                array(
                    'type' => 'textfield',
                    'holder' => 'div',
                    'class' => '',
                    'heading' => esc_html__( 'Social url', 'jonny' ),
                    'param_name' => 'url',
                    'value' => esc_html__( '#', 'jonny' ),
                    'description' => esc_html__( 'insert url', 'jonny' )
                ),


                array(
                    'type' => 'iconpicker',
                    'heading' => esc_html__( 'The icons 1 ', 'jonny' ),
                    'param_name' => 'icon',
                    'value' => '',
                    'description' => esc_html__( 'insert icon', 'jonny' ),
                    'settings' => array(
                        'emptyIcon' => false,
                        'iconsPerPage' => 60,
                    )
                ),


            ),

        ),

            ),

        ),

        array(
            'type' => 'css_editor',
            'heading' => esc_html__( 'Css', 'jonny' ),
            'param_name' => 'css',
            'group' => esc_html__( 'Design options', 'jonny' ),
        ),
    ),

) );

