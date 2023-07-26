<?= $this->extend('./layout/index') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="box-name">
        <img src="/assets/img/circle-user-solid.svg" alt="">
        <div class="nama">Alfiyatu Nurinayah</div>
        <div class="skills">Web Developer</div>
    </div>
    <div class="box-detail">
        <h2>Tentang Saya</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Labore assumenda necessitatibus numquam inventore tempore, 
            dolor est quam obcaecati autem exercitationem mollitia expedita 
            dicta tempora blanditiis cumque quasi quibusdam? Repudiandae, minima.</p>
        <div class="detail-profile">
            <h2>Detail Profile</h2>
            <div class="form-detail">
                <table border="0">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>Alfiyatu Nurinayah</td>
                    </tr>
                    <tr>
                        <td>Umur </td>
                        <td>19</td>
                    </tr>
                    <tr>
                        <td>Status </td>
                        <td>Mahasiswa</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="medsos">
            <h2>Hubungi Saya</h2>
            <i class="fa-brands fa-linkedin fa-lg"></i>
            <i class="fa-brands fa-instagram fa-lg"></i>
            <i class="fa-brands fa-facebook fa-lg"></i>
            <i class="fa-brands fa-square-whatsapp fa-lg"></i>
        </div>
    </div>
</div>

<?= $this->endSection() ?>