<?php

namespace Illuminate\Foundation;

use Illuminate\Support\Collection;

/*
                                                   .~))>>
                                                  .~)>>
                                                .~))))>>>
                                              .~))>>             ___
                                            .~))>>)))>>      .-~))>>
                                          .~)))))>>       .-~))>>)>
                                        .~)))>>))))>>  .-~)>>)>
                    )                 .~))>>))))>>  .-~)))))>>)>
                 ( )@@*)             //)>))))))  .-~))))>>)>
               ).@(@@               //))>>))) .-~))>>)))))>>)>
             (( @.@).              //))))) .-~)>>)))))>>)>
           ))  )@@*.@@ )          //)>))) //))))))>>))))>>)>
        ((  ((@@@.@@             |/))))) //)))))>>)))>>)>
       )) @@*. )@@ )   (\_(\-\b  |))>)) //)))>>)))))))>>)>
     (( @@@(.@(@ .    _/`-`  ~|b |>))) //)>>)))))))>>)>
      )* @@@ )@*     (@)  (@) /\b|))) //))))))>>))))>>
    (( @. )@( @ .   _/  /    /  \b)) //))>>)))))>>>_._
     )@@ (@@*)@@.  (6///6)- / ^  \b)//))))))>>)))>>   ~~-.
  ( @jgs@@. @@@.*@_ VvvvvV//  ^  \b/)>>))))>>      _.     `bb
   ((@@ @@@*.(@@ . - | o |' \ (  ^   \b)))>>        .'       b`,
    ((@@).*@@ )@ )   \^^^/  ((   ^  ~)_        \  /           b `,
      (@@. (@@ ).     `-'   (((   ^    `\ \ \ \ \|             b  `.
        (*.@*              / ((((        \| | |  \       .       b `.
                          / / (((((  \    \ /  _.-~\     Y,      b  ;
                         / / / (((((( \    \.-~   _.`" _.-~`,    b  ;
                        /   /   `(((((()    )    (((((~      `,  b  ;
                      _/  _/      `"""/   /'                  ; b   ;
                  _.-~_.-~           /  /'                _.'~bb _.'
                ((((~~              / /'              _.'~bb.--~
                                   ((((          __.-~bb.-~
                                               .'  b .~~
                                               :bb ,'
                                               ~~~~
 */

class Inspiring
{
    /**
     * Get an inspiring quote.
     *
     * Taylor & Dayle made this commit from Jungfraujoch. (11,333 ft.)
     *
     * May McGinnis always control the board. #LaraconUS2015
     *
     * RIP Charlie - Feb 6, 2018
     *
     * @return string
     */
    public static function quote()
    {
        return static::quotes()
            ->map(fn ($quote) => static::formatForConsole($quote))
            ->random();
    }

    /**
     * Get the collection of inspiring quotes.
     *
     * @return \Illuminate\Support\Collection
     */
    public static function quotes()
    {
        return Collection::make([
            'Segala sesuatu memiliki kesudahan, yang sudah berakhir biarlah berlalu dan yakinlah semua akan baik-baik saja. - ',
            'Setiap detik sangatlah berharga karena waktu mengetahui banyak hal, termasuk rahasia hati. - ',
            'Jika kamu tak menemukan buku yang kamu cari di rak, maka tulislah sendiri. - ',
            'Jika hatimu banyak merasakan sakit, maka belajarlah dari rasa sakit itu untuk tidak memberikan rasa sakit pada orang lain. - ',
            'Rumah bukan hanya sebuah tempat, tetapi itu adalah perasaan. - ',
            'Bukan bahagia yang menjadikan kita bersyukur, tetapi dengan bersyukurlah yang akan menjadikan hidup kita bahagia. - ',
            'Keyakinan merupakan suatu pengetahuan di dalam hati, jauh tak terjangkau oleh bukti. - ',
            'Hanya seseorang yang takut yang bisa bertindak berani. Tanpa rasa takut itu tidak ada apa pun yang bisa disebut berani. - ',
            'Kebanggaan kita yang terbesar adalah bukan tidak pernah gagal, tetapi bangkit kembali setiap kali kita jatuh. - ',
            'Suatu pekerjaan yang paling tak kunjung bisa diselesaikan adalah pekerjaan yang tak kunjung pernah dimulai. - ',
            'Pikiran kamu bagaikan api yang perlu dinyalakan, bukan bejana yang menanti untuk diisi. - ',
            'Kejujuran adalah batu penjuru dari segala kesuksesan. - ',
            'Jalan yang sulit sering kali mengarah ke tujuan yang indah. - ',
            'Bukanlah kesabaran jika masih mempunyai batas dan bukanlah keikhlasan jika masih merasakan sakit. - ',
            'Berhenti berekspektasi bahwa orang lain akan mencintaimu seperti layaknya kamu mencintai mereka. - ',
            'Pengusaha itu bukan orang yang pintar tetapi mereka pintar mencari orang pintar. - ',
            'Hidup tak akan menjadi beban jika kau bisa menjalaninya dengan ikhlas. - ',
            'Obat terbaik dari segala kesulitan adalah kesabaran. - ',
            'Jika kita membuka pertengkaran antara masa lalu dan sekarang, kita akan menemukan bahwa kita telah kehilangan masa depan. - ',
            'Hidup adalah sebuah film. Jelaskan akhir cerita yang Anda inginkan. Tetap percayai. - ',
            'Majulah tanpa menyingkirkan orang lain. Naiklah tanpa menjatuhkan orang lain. -',
            'Pendidikan adalah paspor masa depan karena hari esok adalah milik mereka yang mempersiapkan hari ini. - ',
            'Kita menjadi bijak bukan karena mengingat masa lalu kita, tetapi karena tanggung jawab atas masa depan kita. - ',
            'Tegas itu bukan berarti kasar. Tegas itu memiliki integritas yang jelas dan prinsip yang dipatuhi secara konsisten. - ',
            'Konsisten dan fokus pada kebaikan, maka kebaikan akan mengalir padamu. - ',
            'Kebenaran selalu bersama kesabaran. Kebenaran adalah prinsip, kesabaran adalah metode. - ',
            'Ada tiga hal yang harus dimiliki dalam hidup. Perubahan, pilihan, dan prinsip. - ',
            'Cinta adalah sesuatu yang indah, ia laksana dalam sebuah lukisan di awan, cerah membingkai ufuk senja. - ',
            'Relasi merupakan seperti bunga yang membutuhkan air, yang bisa kering serta mati tanpa komunikasi. - ',
            'Setia itu sederhana, susah-senang, suka-duka, dan apa pun kondisinya yang selalu tetap bersama. - ',
            'Berpikir itu gampang, bertindak itu sulit, dan melaksanakan satu pikiran dalam tindakan adalah hal yang paling sulit di dunia. - '
            
        ]);
    }

    /**
     * Formats the given quote for a pretty console output.
     *
     * @param  string  $quote
     * @return string
     */
    protected static function formatForConsole($quote)
    {
        [$text, $author] = str($quote)->explode('-');

        return sprintf(
            " %s " ,
            trim($text)
        );
    }
}
