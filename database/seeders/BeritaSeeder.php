<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beritas')->insert([
            [
                'judul' => 'Tingkatkan Tri Dharma Perguruan Tinggi dan Konektivitas, PNL Teken MoU dengan PT Medianusa Permana',
                'konten' => 'Medan – Politeknik Negeri Lhokseumawe (PNL) sebagai lembaga pendidikan tinggi vokasi negeri yang mendukung Merdeka Belajar-Kampus Merdeka (MBKM) terus berupaya meningkatkan serta membangun kerja sama dan berkolaborasi dengan berbagai pihak. Di kesempatan ini PNL kembali melakukan kerja sama  dengan PT Medianusa Permana.

                Penandatanganan Nota Kesepahaman Memorandum of Understanding (MoU) dilakukan oleh Ir. Rizal Syahyadi, S.T., M.Eng.Sc selaku Direktur PNL dan Mangara Parpulungan Peranginangin selaku Direktur PT Medianusa Permana. Adapun acara tersebut diselenggarakan di Hotel Grand Mercure, Medan pada Sabtu (11/6/2022).
                
                Direktur PNL, Rizal Syahyadi beserta manajemen PNL dalam hal ini diwakili oleh Wakil Direktur III Ir. Sariyusda, MT, menyampaikan rasa terima kasih dan apresiasi kepada PT Medianusa Permana. Ini merupakan sebuah kehormatan bagi PNL untuk bisa bekerja sama dengan perusahaan yang hingga saat ini masih menjadi salah satu perusahaan Penyedia Layanan Internet dan Telekomunikasi yang unggul di Indonesia.
                
                Sariyusda juga menyampaikan bahwa outcome dari kerja sama ini selain melaksanakan Tri Dharma Perguruan Tinggi, juga sebagai wujud mendukung MBKM yang mana mahasiswa saat ini khususnya di bawah Pendidikan Vokasi (DIKSI) wajib menpunyai hard skill yang mumpuni. Maka untuk mendukung hal tersebut maka diperlunya Praktek Kerja Lapangan(PKL) atau magang di IDUKA yang mana hal tersebut sangat sesuai dengan arahan kemendikbudristek melalui permendikbud nomor 3 Tahun 2020 tentang standar Nasional Pendidikan Tinggi.
                
                "Selain itu, dengan adanya kerja sama ini, PNL juga dapat bermitra diantaranya dalam hal penyusunan kurikulum yang berbasis industri, pelaksanaan dosen praktisi, penyedia magang dosen dan mahasiswa di industri, kolaborasi riset dan project bersama, peningkatan layanan konektivitas internet dan infrastruktur, kuliah tamu serta program lain yang bisa mendukung antar kedua belah pihak nanti. Ujarnya".
                
                Direktur PT Medianusa Permana, Mangara Perpulungan Peranginangin menyampaikan juga rasa terima kasih atas kerjasama yang sudah terjalin selama ini.
                
                Dalam kesempatan ini Mangara juga sampaikan bahwa kami siap untuk melakukan kolaborasi untuk mendukung kebutuhan apa saja yang diperlukan PNL selaku lembaga pendidikan tinggi vokasi dalam hal menjalankan Tri Dharma Perguruan Tinggi.
                
                Turut berhadir juga dari manajemen PNL dalam penandatangan MoU tersebut Wakil Direktur II PNL, Nanang Prihatin, S.Kom. M.Cs. Ketua Jurusan Teknik Elektro, Yassir, S.T. M.Eng. Ketua Jurusan TIK, Muhammad Arhami, S.Si.,.M.Kom. Ka. UPT TIK Anwar, M.Cs dan Staf lainnya.
                
                 
                
                Sumber ( http://pnl.ac.id/id/detail/tingkatkan-tri-dharma-perguruan-tinggi-dan-konektivitas-pnl-teken-mou-dengan-pt-medianusa-permana )',
                'gambar' => 'Tri-Dharma-Perguruan-Tinggi.PNG',
                'admin_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'judul' => 'SIAP Event Seminar',
                'konten' => 'Batam, 03 juni 2023 - Sebuah seminar bernama SIAP (Seminar for Industrious Administrative Professionals) diadakan di Batam dengan tujuan untuk meningkatkan kompetensi para sekretaris perusahaan. Acara ini diselenggarakan sebagai upaya
                untuk memberikan wawasan dan keterampilan baru kepada para profesional administrasi yang berperan penting dalam kesuksesan perusahaan. SIAP, yang diadakan di salah satu hotel terkemuka di Batam, menghadirkan serangkaian pembicara terkenal yang memiliki pengalaman luas dalam dunia administrasi dan manajemen. Para pembicara ini membagikan pengetahuan mereka tentang praktik terbaik, strategi efektif, dan tren terkini yang relevan dengan pekerjaan seorang sekretaris perusahaan.
                
                Dalam seminar ini, peserta diajak untuk memperluas pengetahuan mereka dalam berbagai bidang, termasuk manajemen waktu, komunikasi efektif, pengelolaan stres, teknologi informasi, dan keterampilan kepemimpinan. Selain itu, peserta juga diberikan wawasan tentang peran sekretaris perusahaan dalam mendukung operasional perusahaan secara keseluruhan. SIAP memberikan platform yang sangat berharga bagi para sekretaris perusahaan di Batam untuk berinteraksi dan berbagi pengalaman dengan sesama profesional administrasi. Mereka dapat memperluas jaringan mereka, bertukar ide, dan mempelajari praktik terbaik dari berbagai industri.
                
                Acara ini juga menawarkan kesempatan bagi peserta untuk menghadiri sesi diskusi panel dengan para ahli industri. Diskusi ini memberikan kesempatan bagi peserta untuk mengajukan pertanyaan, mendapatkan wawasan langsung, dan mendengarkan pengalaman inspiratif dari para praktisi yang berpengalaman. Peserta SIAP juga mendapatkan akses ke berbagai sumber daya yang berguna, termasuk materi presentasi, artikel, dan panduan praktis yang dapat mereka gunakan dalam pekerjaan sehari-hari mereka. Mereka diberikan kesempatan untuk terus belajar dan mengembangkan diri, sehingga dapat menjadi lebih efisien, produktif, dan berkompeten dalam pekerjaan mereka sebagai sekretaris perusahaan.
                
                Dalam sambutannya, salah satu pembicara utama mengungkapkan harapannya bahwa SIAP dapat memberikan dorongan yang signifikan bagi perkembangan profesionalisme sekretaris perusahaan di Batam. Dia juga menekankan pentingnya beradaptasi dengan
                perubahan global dan menjadi agen perubahan yang positif di dalam organisasi. Seminar SIAP telah membawa semangat baru bagi para sekretaris perusahaan di Batam untuk terus meningkatkan diri dan menghadapi tantangan dengan percaya diri.
                Meningkatkan kompetensi mereka dalam bidang administrasi akan berkontribusi pada kesuksesan perusahaan dan memainkan peran penting dalam pengembangan bisnis di wilayah ini. Dengan demikian, seminar SIAP telah membuktikan nilainya sebagai acara yang
                bermanfaat dan relevan bagi para sekretaris perusahaan di Batam.
                
                Keberhasilan seminar ini mengilhami harapan akan adanya, senang rasanya permana bisa menjadisponsorship di acara ini dan mendapatkan kesempatan berdiskusi bersama dengan audience dan peserta yang hadir di acara ini.',
                'gambar' => '5.jpg',
                'admin_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
