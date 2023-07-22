<link rel="stylesheet" href="<?= base_url('assets/css/peserta.css') ?>">
<style>
    .entry-player-all-wrap1 {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .entry-player-pair-wrap {
        width: 450px;
        padding: 10px;
        box-sizing: border-box;
    }

    .entry-player-wrap {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
    }

    .entry-player-image img {
        max-width: 75%;
        height: auto;
    }

    .entry-player-flag img {
        max-width: 20px;
        height: auto;
        vertical-align: middle;
    }

    .entry-player-flag .l {
        margin-left: 5px;
        vertical-align: middle;
    }
</style>
<header class="hero">
    <div class="hero-wrap">
        <p class="intro" id="intro">Peserta</p>
    </div>
</header>
<script>
    function showConfirmation() {
        var confirmation = confirm("Apakah Anda ingin bergabung?");
        if (confirmation) {
            var form = document.getElementById("join-form");
            form.submit();
        } else {
            alert("Cancel");
        }
    }
</script>
<div class="entry-player-all-wrap1">
    <?php if (!empty($compe)) {
        foreach ($compe as $isi) {
    ?>
            <div class="entry-player-all-wrap">
                <div class="entry-player-pair-wrap">
                    <div class="entry-player-wrap">
                        <div class="entry-player-image">
                            <img src="https://res.cloudinary.com/bwf/w_308,h_359,c_thumb,g_face:center/v1627947839/assets/players/thumbnail/25831" class=" b-error">
                        </div>
                        <div class="entry-player-info-wrap">
                            <div class="entry-player-name">
                                <?php echo $isi['nama'] ?></div>
                            <div class="entry-player-flag">
                                <p>Denmark</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
        <div style="text-align: center;">
            <h1>ceOops tidak ada kompetisi</h1>
        </div>
    <?php } ?>
</div>
<form id="join-form" method="POST" action="/join/add">
    <input type="hidden" name="idevent" value="<?php echo $selectedevent[0]['id_event'] ?>" class="formbold-form-input" />
    <input type="hidden" name="iduser" value="<?php echo $id_user ?>" class="formbold-form-input" />
    <center>
        <?php if ($show_join_button) : ?>
            <button type="button" class="btn btn-primary fw-bold" style="margin-top: 2cm;" onclick="showConfirmation()">JOIN</button>
        <?php endif; ?>
    </center>
</form>