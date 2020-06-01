<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'book_name' => 'El Mundo y sus Demonios',
            'book_author' => 'Carl Sagan',
            'book_description' => 'El mundo y sus demonios. La ciencia como una luz en la oscuridad es un libro de Carl Sagan publicado en 1995 que trata de explicar el método científico y animar el uso del pensamiento crítico o escéptico. Explica métodos que ayudan a distinguir entre ideas que son consideradas ciencia válida e ideas consideradas pseudociencia; según él, indica que cuando una nueva idea se plantea, ésta debe ser sometida a consideración, para luego ser probada rigurosamente. El pensamiento escéptico da medios para construir, entender, razonar y reconocer ideas válidas o erróneas hasta donde la verificación sea posible.',
            'book_type' => 1,
            'book_image' => 'elmundoysusdemonios.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'El Camino de las Lágrimas',
            'book_author' => 'Jorge Bucay',
            'book_description' => 'El camino de las lágrimas, comienza cuando nos conectamos con lo doloroso; con la pérdida de alguien, (ya sea muerte o alejamiento) o algún objeto; debido a la cultura en la que vivimos, en donde nos han enseñado a sufrir por la muerte de un ser querido, a depender de alguien para realizar ciertas actividades, a tener una “muleta” para seguir adelante y si no la tenemos, no podemos continuar y nos enfrentaremos a caminar por el “oscuro” camino de las lagrimas aunque este alejamiento o perdida de objeto sea para mejorar o crecer, no evita la pena; el dolor que ocasiona: él se fue, él ya no estará, él se perdió.',
            'book_type' => 1,
            'book_image' => 'elcaminodelaslagrimas.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'El Caballero de la Armadura Oxidada',
            'book_author' => 'Robert Fisher',
            'book_description' => 'El relato gira en torno a un heroico caballero medieval, quien portaba una bella armadura, la cual reflejaba los rayos de sol. Con el tiempo, el caballero se habituó a llevarla siempre puesta sin quitársela ni para dormir. Un día, tras las súplicas de su esposa, decide quitársela y descubre que no puede. Así es como comienza un largo peregrinaje para encontrar ayuda para poder deshacerse de su armadura. En esta jornada recibirá la ayuda del mago Merlín y de otros personajes del cuento popular europeo.',
            'book_type' => 1,
            'book_image' => 'elcaballerodelaarmaduraoxidada.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'Harry Potter y la Piedra Filosofal',
            'book_author' => 'Joanne Kathleen Rowling',
            'book_description' => 'Harry Potter se ha quedado huérfano y vive en casa de sus abominables tíos y del insoportable primo Dudley. Harry se siente muy triste y solo, hasta que un buen día recibe una carta que cambiará su vida para siempre. En ella le comunican que ha sido aceptado como alumno en el colegio interno Hogwarts de magia y hechicería. A partir de ese momento, la suerte de Harry da un vuelco espectacular. En esa escuela tan especial aprenderá encantamientos, trucos fabulosos y tácticas de defensa contra las malas artes. Se convertirá en el campeón escolar de quidditch, especie de fútbol aéreo que se juega montado sobre escobas, y se hará un puñado de buenos amigos...',
            'book_type' => 1,
            'book_image' => 'harrypotterylapiedrafilosofal.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'El Diario de Ana Frank',
            'book_author' => 'Ana Frank',
            'book_description' => 'ras la invasión de Holanda, los Frank, comerciantes judíos alemanes emigrados a Amsterdam en 1933, se ocultaron de la Gestapo en una buhardilla anexa al edificio donde el padre de Ana tenía sus oficinas. Eran ocho personas y permanecieron recluidas desde junio de 1942 hasta agosto de 1944, fecha en que fueron detenidos y enviados a campos de concentración. En ese lugar y en las más precarias condiciones, Ana, a la sazón una niña de trece años, escribió su estremecedor Diario: un testimonio único en su género sobre el horror y la barbarie nazi, y sobre los sentimientos y experiencias de la propia Ana y sus acompañantes.',
            'book_type' => 3,
            'book_image' => 'eldiariodeanafrank.jpg'
        ]);

        DB::table('books')->insert([
            'book_name' => 'Samurai Chess',
            'book_author' => 'Michael J. Gelb y Raymond Keene',
            'book_description' => 'Suggests ways of using martial arts principle and strategies, including attack, follow-through, impenetrable defense, timing, distance, surprise and deception, and artful surrender, to improve chess skills',
            'book_type' => 4,
            'book_image' => 'samuraichess.jpg'
        ]);

        /* Plantilla
            DB::table('books')->insert([
            'book_name' => '',
            'book_author' => '',
            'book_description' => '',
            'book_type' => ,
            'book_image' => ''
        ]); */
    }
}
