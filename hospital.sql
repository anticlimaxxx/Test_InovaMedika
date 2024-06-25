/* Membuat database dan Table */
use hospital;
CREATE TABLE `datapengguna` (
    `id` int (11) NOT NULL auto_increment,
    `wilayah` varchar(255) ,
    `pasien` varchar(255),
    `pegawai` varchar(255),
    `tindakan` varchar(15),
    `obat` varchar(255),
    PRIMARY KEY (`id`)
);