<link rel="stylesheet" href="<?= base_url('assets/css/peserta.css') ?>">
<header class="hero">
    <div class="hero-wrap">
        <p class="intro" id="intro">Peserta</p>
    </div>
</header>

<?php if (!empty($compe)) {
    foreach ($compe as $isi) {
?>
        <div class="entry-player-all-wrap">
            <div class="entry-player-pair-wrap">
                <a href="https://bwfworldtour.bwfbadminton.com/player/25831/viktor-axelsen">
                    <div class="entry-player-wrap">
                        <div class="entry-player-image">
                            <img src="https://res.cloudinary.com/bwf/w_308,h_359,c_thumb,g_face:center/v1627947839/assets/players/thumbnail/25831" class=" b-error">
                        </div>
                        <div class="entry-player-info-wrap">
                            <div class="entry-player-name">
                                Viktor AXELSEN [1] </div>
                            <div class="entry-player-flag">
                                <img src="https://extranet.bwf.sport/docs/flags/denmark.png" class=" b-error1">
                                <span class="l">Denmark</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    <?php } ?>
<?php } else { ?>
    <div style="text-align: center;">
        <h1>ceOops tidak ada kompetisi</h1>
    </div>
<?php } ?>