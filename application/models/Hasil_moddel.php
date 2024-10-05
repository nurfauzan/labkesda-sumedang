<?php
class Hasil_model extends CI_Model
{
    public function showdata()
    {
        return $this->db->get('pemeriksaan_hasil')->result_array();
    }

    public function inputhasil()
    {
        $tgl = date('Y-m-d');
        $data = [
            'tgl_periksa' => $tgl,
            'no_kwitansi' => $this->input->post('no_kwitansi'),
            'nama_pasien' => $this->input->post('nama_pasien'),
            'umur_pasien' => $this->input->post('umur_pasien'),
            'alamat_pasien' => $this->input->post('alamat_pasien'),

            //hematologi
            'hemoglobin' => $this->input->post('hemoglobin'),
            'leukosit' => $this->input->post('leukosit'),
            'bse' => $this->input->post('bse'),
            'differential_count' => $this->input->post('differential_count'),
            'trombosit' => $this->input->post('trombosit'),
            'hematokrit' => $this->input->post('hematokrit'),
            'blooding_time' => $this->input->post('blooding_time'),
            'clooting_time' => $this->input->post('clooting_time'),
            'eritrosit' => $this->input->post('eritrosit'),

            //urine
            'ph_urine' => $this->input->post('ph_urine'),
            'warna_urine' => $this->input->post('warna_urine'),
            'kejernihan' => $this->input->post('kejernihan'),
            'protein' => $this->input->post('protein'),
            'reduksi' => $this->input->post('reduksi'),
            'urobilin' => $this->input->post('urobilin'),
            'bilirubin_urine' => $this->input->post('bilirubin_urine'),
            'sedimen' => $this->input->post('sedimen'),
            'berat_jenis' => $this->input->post('berat_jenis'),
            'darah_samar' => $this->input->post('darah_samar'),

            //narkoba
            'morfin' => $this->input->post('morfin'),
            'canabinoid' => $this->input->post('canabinoid'),
            'amphetamin' => $this->input->post('amphetamin'),
            'methamphetamin' => $this->input->post('methamphetamin'),
            'benzodiazepin' => $this->input->post('benzodiazepin'),

            //faeses
            'faeces_rutin' => $this->input->post('faeces_rutin'),
            'telur_cacing' => $this->input->post('telur_cacing'),

            //kimia darah
            'gula_darah' => $this->input->post('gula_darah'),
            'cholesterol' => $this->input->post('cholesterol'),
            'hdl_cholesterol' => $this->input->post('hdl_cholesterol'),
            'ldl_cholesterol' => $this->input->post('ldl_cholesterol'),
            'trigliserida' => $this->input->post('trigliserida'),
            'asam_urat' => $this->input->post('asam_urat'),
            'kreatinin' => $this->input->post('kreatinin'),
            'bilirubin' => $this->input->post('bilirubin'),
            'sgot' => $this->input->post('sgot'),
            'sgpt' => $this->input->post('sgpt'),
            'rf' => $this->input->post('rf'),
            'ureum' => $this->input->post('ureum'),

            //mikrobiologi dan parasitologi
            'bta_crosscheck' => $this->input->post('bta_crosscheck'),
            'bta_pasien' => $this->input->post('bta_pasien'),
            'bta_lepra' => $this->input->post('bta_lepra'),
            'malaria' => $this->input->post('malaria'),
            'filiria' => $this->input->post('filiria'),
            'gram' => $this->input->post('gram'),
            'jamur' => $this->input->post('jamur'),

            //serologi
            'widal' => $this->input->post('widal'),
            'golongan_darah' => $this->input->post('golongan_darah'),
            'test_kehamilan' => $this->input->post('test_kehamilan'),
            'anti_hiv' => $this->input->post('anti_hiv'),
            'vdrl' => $this->input->post('vdrl'),
            'hbsag' => $this->input->post('hbsag'),

            //bakteriologi air
            'air_minum' => $this->input->post('air_minum'),
            'bakteri_air_bersih' => $this->input->post('bakteri_air_bersih'),

            //fisika air
            'suhu' => $this->input->post('suhu'),
            'warna' => $this->input->post('warna'),
            'bau' => $this->input->post('bau'),
            'rasa' => $this->input->post('rasa'),
            'kekeruhan' => $this->input->post('kekeruhan'),
            'tds' => $this->input->post('tds'),
            'conductivity' => $this->input->post('conductivity'),
            'ph' => $this->input->post('ph'),

            //kimia air
            'fe' => $this->input->post('fe'),
            'mn' => $this->input->post('mn'),
            'nitrit' => $this->input->post('nitrit'),
            'nitrat' => $this->input->post('nitrat'),
            'clorida' => $this->input->post('clorida'),
            'fluorida' => $this->input->post('fluorida'),
            'sulfat' => $this->input->post('sulfat'),
            'tembaga' => $this->input->post('tembaga'),
            'cromium_valensi_6' => $this->input->post('cromium_valensi_6'),
            'kesadahan' => $this->input->post('kesadahan'),
            'zat_organic' => $this->input->post('zat_organic'),
            'alumunium' => $this->input->post('alumunium'),
            'timbal' => $this->input->post('timbal'),
            'sianida' => $this->input->post('sianida'),
            'arsen' => $this->input->post('arsen'),
            'natrium' => $this->input->post('natrium'),

            //makanan
            'formalin' => $this->input->post('formalin'),
            'borax' => $this->input->post('borax'),
            'rhodamin_b' => $this->input->post('rhodamin_b'),
            'methanil_yellow' => $this->input->post('methanil_yellow'),
            'sakarin' => $this->input->post('sakarin')
        ];

        $this->db->insert('pemeriksaan_hasil', $data);
    }
}
