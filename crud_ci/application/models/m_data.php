<?php
class M_data extends CI_model {
    function input_data($data, $table) {
        // Perbaikan disini: Parameter pertama adalah nama tabel, parameter kedua adalah data yang akan dimasukkan
        return $this->db->insert($table, $data);
    }

    function tampil_data() {
        return $this->db->get('mahasiswa');
    }
}
?>
