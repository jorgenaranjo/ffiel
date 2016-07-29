<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableWorkshops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('startDate');
            $table->integer('quantity');//no se edita se muestra en la vista de creación, readonly
            $table->integer('available');//no se edita, readonly
            $table->string('street');
            $table->string('noExt');
            $table->string('city');
            $table->string('state');
            $table->longText('description');
            $table->string('speaker_name');
            $table->longText('speaker_image');
            $table->string('speaker_occupation');
            $table->longText('image');
            $table->date('endDate');
            $table->decimal('price',10,2);
            $table->string('code');
            $table->integer('event_id');
            $table->boolean('active')->default(true);
            $table->string('hours');
            $table->timestamps();
            $table->softDeletes();
        });
        \DB::table('workshops')->insert([
            [
                'name' => 'Taller de retrato',
                'event_id' => 1,
                'startDate' => '2016-09-02',
                'quantity' => 25,
                'available'=> 25,
                'street' => '',
                'noExt' => '',
                'city' => 'Leon',
                'state'=> 'Guanajuato',
                'description'=> '<p>&iquest;Te apasiona el mundo de las revistas y la moda? &iquest;Quieres aprender a tomar fotograf&iacute;as de portadas de revistas y contenido editorial? &iquest;Te gusta trabajar con modelos?</p><p>En este WORKSHOP aprender&aacute;s las bases te&oacute;ricas y pr&aacute;cticas de la Fotograf&iacute;a Editorial y Fashion. Atonatiuh es un m&aacute;ximo referente de &eacute;sta y muchas otras t&eacute;cnicas. Su trabajo ha sido reconocido internacionalmente y publicado en revistas y editoriales como: GQ, Life &amp; Style, Travel &amp; Leisure, Elle, Marie Claire, Esquire, Gatopardo, Chilango, Time Out, El Pa&iacute;s, El Universal, Reforma,&nbsp; entre otras.</p><p>Entre sus retratos m&aacute;s importantes destacan: La Buena Vista Social Club, el ex presidente de la Rep&uacute;blica de Uruguay Julio Mar&iacute;a Sanguinetti, el escritor Mario Vargas Llosa, el compositor franc&eacute;s Claude Bolling, Paloma Picasso y Liza Minnelli, el cineasta gal&eacute;s Peter Greenaway,&nbsp; Alejandro Gonz&aacute;lez I&ntilde;arritu, Julieta Venegas, Vicente Fox, Ana Gabriela Guevara, el actor norteamericano Edward James Olmos, el ex presidente de Espa&ntilde;a Felipe Gonz&aacute;lez, el Subcomandante Marcos, el pintor juchiteco Francisco Toledo, Salma Hayek, el escultor y pintor mexicano Juan Soriano, Ricardo &ldquo;Finito&rdquo; L&oacute;pez, Ana Claudia Talanc&oacute;n, la c&eacute;lebre Yolanda Montes &ldquo;Tongolele&rdquo;, entre muchos m&aacute;s.<br />&nbsp;</p><p><strong>Dirigido a:</strong></p><p>Fot&oacute;grafos, dise&ntilde;adores, comunic&oacute;logos, mercad&oacute;logos, aficionados y p&uacute;blico en general; aquellos amantes de la fotograf&iacute;a que quieran aprender acerca de los m&eacute;todos y pasos para lograr la fotograf&iacute;a adecuada para el mundo de la moda.</p><p><strong>Nivel de Conocimiento: </strong>Fotograf&iacute;a y Photoshop B&aacute;sicos</p><p><strong>Requisitos:</strong></p><p>C&aacute;mara Digital-Reflex (canon, nikon, sony, etc)</p><p>Laptop. Deber&aacute; contar con el programa PS CC o CS6 instalado</p><h4>Costos</h4><table align="center" border="1" cellpadding="0" cellspacing="0" style="width:100%"><tbody><tr><td width="33%"><h5 style="text-align: center;"><strong>Julio</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>Agosto</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>D&iacute;a del evento</strong></h5></td></tr><tr><td><h5 style="text-align: center;"><strong>$600</strong></h5></td><td><h5 style="text-align: center;"><strong>$700</strong></h5></td><td><h5 style="text-align: center;"><strong>$800</strong></h5></td></tr></tbody></table>',
                'speaker_name' => 'Atonatiuh Bracho',
                'speaker_image' => '/images/talleristas/atonatiuh.jpg',
                'image' => '/images/talleres/ffiel20161.png',
                'endDate' => '2016-09-03',
                'price' => 600,
                'code' => 'FFIEL2016X',
                'speaker_occupation' => 'Fotografía editorial/fashion',
                'hours' => '10:00 - 14:00',
                'active' => true
            ],
            [
                'name' => 'Iluminación profesional (Retrato/Fashion)',
                'event_id' => 1,
                'startDate' => '2016-09-02',
                'quantity' => 20,
                'available'=> 20,
                'street' => 'calle',
                'noExt' => '',
                'city' => 'Leon',
                'state'=> 'Guanajuato',
                'description'=> '<p><strong>&iexcl;S&aacute;cale todo el jugo a tu flash y juego de luces! &iquest;Quieres saber dirigir a tus modelos? &iquest;Te gusta la foto de moda?&iquest;Te gusta la iluminaci&oacute;n y la foto de estudio? </strong></p><p>Junto a este gran fot&oacute;grafo de Chiapas podr&aacute;s adquirir las bases para poder realizar fotograf&iacute;a e iluminaci&oacute;n social y de moda. Gabriel Sosa te ense&ntilde;ar&aacute; a realizar fant&aacute;sticas fotos en situaciones de luz natural y de estudio.</p><p>&nbsp;</p><p><strong>Dirigido a:</strong></p><p>Fot&oacute;grafos, dise&ntilde;adores, modelos, comunic&oacute;logos, mercad&oacute;logos, aficionados y p&uacute;blico en general. Aquellos interesados en la fotograf&iacute;a e iluminaci&oacute;n de estudio.</p><p><strong>Nivel de Conocimiento: </strong>Fotograf&iacute;a y Photoshop b&aacute;sica</p><p><strong>Requisitos:</strong></p><p>C&aacute;mara Digital-Reflex (canon, nikon, sony, etc)</p><p>Laptop. Deber&aacute; contar con el programa PS CC o CS6 instalado</p><p>Luz (Flash o strobos) El FFIEL prestar&aacute; 5 flashes en caso de que varios asistentes no cuenten con el propio.</p><h4>Costos</h4><table align="center" border="1" cellpadding="0" cellspacing="0" style="width:100%"><tbody><tr><td width="33%"><h5 style="text-align: center;"><strong>Julio</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>Agosto</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>D&iacute;a del evento</strong></h5></td></tr><tr><td><h5 style="text-align: center;"><strong>$700</strong></h5></td><td><h5 style="text-align: center;"><strong>$800</strong></h5></td><td><h5 style="text-align: center;"><strong>$900</strong></h5></td></tr></tbody></table>',
                'speaker_name' => 'Gabriel Sosa',
                'speaker_image' => '/images/talleristas/sosa.jpg',
                'image' => '/images/talleres/ffiel20162.png',
                'endDate' => '2016-09-03',
                'price' => 700,
                'code' => 'FFIEL2016X',
                'speaker_occupation' => 'Fotografía moda, editorial, social',
                'hours' => '10:00 - 14:00',
                'active' => true
            ],
            [
                'name' => 'Fotoperiodismo y creatividad',
                'event_id' => 1,
                'startDate' => '2016-09-02',
                'quantity' => 30,
                'available'=> 30,
                'street' => 'calle',
                'noExt' => '',
                'city' => 'Leon',
                'state'=> 'Guanajuato',
                'description'=> '<p>&iquest;El fot&oacute;grafo documental o foto periodista puede ser artista? Claro que s&iacute;! En este WORKSHOP aprender&aacute;s los caminos y herramientas para lograrlo en un recorrido a trav&eacute;s de la imagen, la comunicaci&oacute;n y de la creatividad. Aprender&aacute;s a expresar tus inquietudes como autor visual desde la percepci&oacute;n y el an&aacute;lisis de la imagen, hasta su difusi&oacute;n y publicaci&oacute;n. Dirigido a: Fot&oacute;grafos, reporteros, periodistas, comunic&oacute;logos, dise&ntilde;adores, aficionados y p&uacute;blico en general que tenga el gusto por adquirir los conocimientos documentales y period&iacute;sticos con un enfoque creativo y art&iacute;stico. Requisitos: C&aacute;mara Reflex Digital. *Si el participante puede llevar algo de su material fotogr&aacute;fico impreso o en alg&uacute;n dispositivo digital, el doctor en imagen Enrique Villase&ntilde;or le podr&aacute; orientar y retroalimentar. Nivel de Conocimiento: Fotograf&iacute;a b&aacute;sica-intermedia</p><h4>Costos</h4><table align="center" border="1" cellpadding="0" cellspacing="0" style="width:100%"><tbody><tr><td width="33%"><h5 style="text-align: center;"><strong>Julio</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>Agosto</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>D&iacute;a del evento</strong></h5></td></tr><tr><td><h5 style="text-align: center;"><strong>$600</strong></h5></td><td><h5 style="text-align: center;"><strong>$700</strong></h5></td><td><h5 style="text-align: center;"><strong>$800</strong></h5></td></tr></tbody></table>',
                'speaker_name' => 'Enrique Villaseñor',
                'speaker_image' => '/images/talleristas/enrique.jpg',
                'image' => '/images/talleres/ffiel20163.png',
                'endDate' => '2016-09-03',
                'price' => 600,
                'code' => 'FFIEL2016X',
                'speaker_occupation' => 'Fotoperiodismo',
                'hours' => '10:00 - 14:00',
                'active' => true
            ],
            [
                'name' => 'Foto Conceptual',
                'event_id' => 1,
                'startDate' => '2016-09-02',
                'quantity' => 20,
                'available'=> 20,
                'street' => 'calle',
                'noExt' => '',
                'city' => 'Leon',
                'state'=> 'Guanajuato',
                'description'=> '<p>&nbsp;</p><p>&iquest;Te gusta contar historias a trav&eacute;s de tus fotograf&iacute;as? Seguramente has visto las fant&aacute;sticas y sorprendentes fotograf&iacute;as de Felix Hernandez. En este WORKSHOP podr&aacute;s realizar tu propia producci&oacute;n fotogr&aacute;fica con maquetas y modelos a escala, mezclando la realidad y la fantas&iacute;a.</p><p>&nbsp;</p><p>&nbsp;</p><p>Estar&aacute;s a un lado de uno de los grandes creativos de nuestro pa&iacute;s y el extranjero. Sus fotos han sido publicadas en las revistas y sitios m&aacute;s importantes de fotograf&iacute;a digital y conceptual como: Digital Camera Magazine, Digital SLR Magazine, Digital Photo, Good Light Magazine, Retouched Magazine, Petapixel, FStoppers, 500px, Daily Mail, entre muchos otros.</p><p>&nbsp;</p><p><strong>Dirigido a:</strong></p><p>Fot&oacute;grafos, dise&ntilde;adores, arquitectos, comunic&oacute;logos, mercad&oacute;logos, aficionados y p&uacute;blico en general. Aquellos interesados en la fotograf&iacute;a creativa, realizada con maquetas y modelos a escala.</p><p><strong>Nivel de Conocimiento: </strong>Fotograf&iacute;a y Photoshop intermedios</p><p><strong>Requisitos:</strong></p><p>C&aacute;mara Digital-Reflex (con lente entre 50mm y 105mm)</p><p>Laptop. Deber&aacute; contar con el programa PS CC o CS6 instalado (con Nik Software Instalado - es un software gratuito -)</p><h4>Costos</h4><table align="center" border="1" cellpadding="0" cellspacing="0" style="width:100%"><tbody><tr><td width="33%"><h5 style="text-align: center;"><strong>Julio</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>Agosto</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>D&iacute;a del evento</strong></h5></td></tr><tr><td><h5 style="text-align: center;"><strong>$800</strong></h5></td><td><h5 style="text-align: center;"><strong>$900</strong></h5></td><td><h5 style="text-align: center;"><strong>$1000</strong></h5></td></tr></tbody></table>',
                'speaker_name' => 'Felix Hernandez',
                'speaker_image' => '/images/talleristas/felix.jpg',
                'image' => '/images/talleres/ffiel20164.png',
                'endDate' => '2016-09-03',
                'price' => 800,
                'code' => 'FFIEL2016X',
                'speaker_occupation' => 'Fotografía creativa/modelos a escala',
                'hours' => '10:00 - 14:00',
                'active' => true
            ],
            [
                'name' => 'Arquitectura HDR',
                'event_id' => 1,
                'startDate' => '2016-09-02',
                'quantity' => 20,
                'available'=> 20,
                'street' => 'calle',
                'noExt' => '',
                'city' => 'Leon',
                'state'=> 'Guanajuato',
                'description'=> '<p>3 &iquest;Te gusta la fotograf&iacute;a de calles y arquitectura? &iquest;Tu pasatiempo es viajar y tomar fotos de templos y edificios hist&oacute;ricos? No puedes desaprovechar esta gran oportunidad de sacarle jugo a la t&eacute;cnica HDR para hacer impresionantes efectos. Dirigido a: Fot&oacute;grafos, arquitectos, dise&ntilde;adores, ingenieros, comunic&oacute;logos, aficionados y p&uacute;blico en general que les apasione la fotograf&iacute;a urbana y de arquitectura en sus diferentes aristas. Requisitos: C&aacute;mara Reflex Digital. Tripie (con buen cuerpo) Laptop (se utilizar&aacute; el Software Photomatix, el asistente deber&aacute; llevarlo ya instalado, o en el Workshop se les proporcionar&aacute; la versi&oacute;n de prueba) Nivel de Conocimiento: Fotograf&iacute;a b&aacute;sica</p><h4>Costos</h4><table align="center" border="1" cellpadding="0" cellspacing="0" style="width:100%"><tbody><tr><td width="33%"><h5 style="text-align: center;"><strong>Julio</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>Agosto</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>D&iacute;a del evento</strong></h5></td></tr><tr><td><h5 style="text-align: center;"><strong>$400</strong></h5></td><td><h5 style="text-align: center;"><strong>$500</strong></h5></td><td><h5 style="text-align: center;"><strong>$600</strong></h5></td></tr></tbody></table>',
                'speaker_name' => 'Jos Azuela',
                'speaker_image' => '/images/talleristas/jos.png',
                'image' => '/images/talleres/ffiel20165.png',
                'endDate' => '2016-09-02',
                'price' => 400,
                'code' => 'FFIEL2016X',
                'speaker_occupation' => 'Arquitectura HDR',
                'hours' => '10:00 - 14:00',
                'active' => true
            ],
            [
                'name' => 'Foto Documental',
                'event_id' => 1,
                'startDate' => '2016-09-02',
                'quantity' => 20,
                'available'=> 20,
                'street' => 'calle',
                'noExt' => '',
                'city' => 'Leon',
                'state'=> 'Guanajuato',
                'description'=> '<p>Sergio Tapiro es ganador del concurso internacional World Press Photo, certamen con m&aacute;s de 60 a&ntilde;os y uno de los m&aacute;s importantes de todo el mundo. Dicho premio &uacute;nicamente lo han obtenido 2 fot&oacute;grafos mexicanos en la categor&iacute;a de Naturaleza. Dirigido a: Fot&oacute;grafos, reporteros, periodistas, comunic&oacute;logos, dise&ntilde;adores, aficionados y p&uacute;blico en general que tenga el gusto por adquirir los conocimientos documentales y period&iacute;sticos con un enfoque creativo y art&iacute;stico. Requisitos: C&aacute;mara Reflex Digital. *Si el participante puede llevar algo de su material fotogr&aacute;fico impreso o en alg&uacute;n dispositivo digital, el Mtro. Sergio Tapiro le podr&aacute; orientar y retroalimentar. Nivel de Conocimiento: Fotograf&iacute;a b&aacute;sica-intermedia</p><h4>Costos</h4><table align="center" border="1" cellpadding="0" cellspacing="0" style="width:100%"><tbody><tr><td width="33%"><h5 style="text-align: center;"><strong>Julio</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>Agosto</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>D&iacute;a del evento</strong></h5></td></tr><tr><td><h5 style="text-align: center;"><strong>$600</strong></h5></td><td><h5 style="text-align: center;"><strong>$700</strong></h5></td><td><h5 style="text-align: center;"><strong>$800</strong></h5></td></tr></tbody></table>',
                'speaker_name' => 'Sergio Tapiro',
                'speaker_image' => '/images/talleristas/tapiro.jpg',
                'image' => '/images/talleres/ffiel20166.png',
                'endDate' => '2016-09-03',
                'price' => 600,
                'code' => 'FFIEL2016X',
                'speaker_occupation' => 'Foto Documental',
                'hours' => '10:00 - 14:00',
                'active' => true
            ],
            [
                'name' => 'Fotografía comercial',
                'event_id' => 1,
                'startDate' => '2016-09-02',
                'quantity' => 20,
                'available'=> 20,
                'street' => 'calle',
                'noExt' => '',
                'city' => 'Leon',
                'state'=> 'Guanajuato',
                'description'=> '<p>&nbsp;</p><p><strong>&iquest;Te gustar&iacute;a adentrarte en la fotograf&iacute;a comercial y de producto? &iquest;Te gusta la publicidad, la moda o la mercadotecnia? En este Workshop aprender&aacute;s a realizar producciones con equipo profesional para dar a tus fotos una calidad de alto nivel. Aplicable para realizar fotograf&iacute;a para cat&aacute;logos comerciales.</strong></p><p>&nbsp;</p><p><strong>Dirigido a:</strong></p><p>Fot&oacute;grafos, dise&ntilde;adores, mercad&oacute;logos, comunic&oacute;logos, aficionados y p&uacute;blico en general que quieran adentrarse en el mundo de la publicidad visual.</p><p><strong>Requisitos:</strong></p><p>C&aacute;mara Reflex Digital.</p><p>Laptop con Photosho CC o CS6 instalado</p><p><strong>Nivel de Conocimiento: </strong>Fotograf&iacute;a y photoshop b&aacute;sico-intermedio</p><h4>Costos</h4><table align="center" border="1" cellpadding="0" cellspacing="0" style="width:100%"><tbody><tr><td width="33%"><h5 style="text-align: center;"><strong>Julio</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>Agosto</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>D&iacute;a del evento</strong></h5></td></tr><tr><td><h5 style="text-align: center;"><strong>$400</strong></h5></td><td><h5 style="text-align: center;"><strong>$500</strong></h5></td><td><h5 style="text-align: center;"><strong>$600</strong></h5></td></tr></tbody></table>',
                'speaker_name' => 'Berny Luna',
                'speaker_image' => '/images/talleristas/berny.jpg',
                'image' => '/images/talleres/ffiel20167.png',
                'endDate' => '2016-09-03',
                'price' => 400,
                'code' => 'FFIEL2016X',
                'speaker_occupation' => 'Fotografía Comercial y de producto ',
                'hours' => '10:00 - 14:00',
                'active' => true
            ],
            [
                'name' => 'Fotografía boudoir',
                'event_id' => 1,
                'startDate' => '2016-09-02',
                'quantity' => 20,
                'available'=> 20,
                'street' => 'calle',
                'noExt' => '',
                'city' => 'Leon',
                'state'=> 'Guanajuato',
                'description'=> '<p><strong>Los asistentes aprender&aacute;n a realizar una sesi&oacute;n y conocer&aacute;n lo que conlleva la producci&oacute;n de la fotograf&iacute;a sensual y er&oacute;tica del Boudoir. Los asistentes podr&aacute;n realizar una sesi&oacute;n con modelos profesionales.</strong></p><p>&nbsp;</p><p><strong>Dirigido a:</strong></p><p>Fot&oacute;grafos, dise&ntilde;adores, modelos, comunic&oacute;logos, estilistas, aficionados y p&uacute;blico en general <strong>que dese&eacute; aprender diferentes t&eacute;cnicas y m&eacute;todos para llevar a cabo un proyecto de fotograf&iacute;a er&oacute;tica desde la idea hasta la realizaci&oacute;n.</strong></p><p><strong>Cupo m&aacute;x.:&nbsp;&nbsp;&nbsp; </strong></p><p>20 personas</p><p><strong>Requisitos:</strong></p><p>C&aacute;mara Reflex Digital.</p><p>Es opcional llevar laptop con photoshop para editar.</p><p><strong>Nivel de Conocimiento: </strong>Fotograf&iacute;a b&aacute;sica</p><h4>Costos</h4><table align="center" border="1" cellpadding="0" cellspacing="0" style="width:100%"><tbody><tr><td width="33%"><h5 style="text-align: center;"><strong>Julio</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>Agosto</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>D&iacute;a del evento</strong></h5></td></tr><tr><td><h5 style="text-align: center;"><strong>$400</strong></h5></td><td><h5 style="text-align: center;"><strong>$500</strong></h5></td><td><h5 style="text-align: center;"><strong>$600</strong></h5></td></tr></tbody></table>',
                'speaker_name' => 'Juan Carlos de León',
                'speaker_image' => '/images/talleristas/jcdeleon.png',
                'image' => '/images/talleres/ffiel20168.png',
                'endDate' => '2016-09-03',
                'price' => 400,
                'code' => 'FFIEL2016X',
                'speaker_occupation' => 'Fotografía Publicitaria y Boudoir',
                'hours' => '10:00 - 14:00',
                'active' => true
            ],
            [
                'name' => 'Foto Conceptual',
                'event_id' => 1,
                'startDate' => '2016-09-02',
                'quantity' => 20,
                'available'=> 20,
                'street' => 'calle',
                'noExt' => '',
                'city' => 'Leon',
                'state'=> 'Guanajuato',
                'description'=> '<p>&nbsp;</p><p>&iquest;Te gusta contar historias a trav&eacute;s de tus fotograf&iacute;as? Seguramente has visto las fant&aacute;sticas y sorprendentes fotograf&iacute;as de Felix Hernandez. En este WORKSHOP podr&aacute;s realizar tu propia producci&oacute;n fotogr&aacute;fica con maquetas y modelos a escala, mezclando la realidad y la fantas&iacute;a.</p><p>&nbsp;</p><p>&nbsp;</p><p>Estar&aacute;s a un lado de uno de los grandes creativos de nuestro pa&iacute;s y el extranjero. Sus fotos han sido publicadas en las revistas y sitios m&aacute;s importantes de fotograf&iacute;a digital y conceptual como: Digital Camera Magazine, Digital SLR Magazine, Digital Photo, Good Light Magazine, Retouched Magazine, Petapixel, FStoppers, 500px, Daily Mail, entre muchos otros.</p><p>&nbsp;</p><p><strong>Dirigido a:</strong></p><p>Fot&oacute;grafos, dise&ntilde;adores, arquitectos, comunic&oacute;logos, mercad&oacute;logos, aficionados y p&uacute;blico en general. Aquellos interesados en la fotograf&iacute;a creativa, realizada con maquetas y modelos a escala.</p><p><strong>Nivel de Conocimiento: </strong>Fotograf&iacute;a y Photoshop intermedios</p><p><strong>Requisitos:</strong></p><p>C&aacute;mara Digital-Reflex (con lente entre 50mm y 105mm)</p><p>Laptop. Deber&aacute; contar con el programa PS CC o CS6 instalado (con Nik Software Instalado - es un software gratuito -)</p><h4>Costos</h4><table align="center" border="1" cellpadding="0" cellspacing="0" style="width:100%"><tbody><tr><td width="33%"><h5 style="text-align: center;"><strong>Julio</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>Agosto</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>D&iacute;a del evento</strong></h5></td></tr><tr><td><h5 style="text-align: center;"><strong>$800</strong></h5></td><td><h5 style="text-align: center;"><strong>$900</strong></h5></td><td><h5 style="text-align: center;"><strong>$1000</strong></h5></td></tr></tbody></table>',
                'speaker_name' => 'Felix Hernandez',
                'speaker_image' => '/images/talleristas/felix.jpg',
                'image' => '/images/talleres/ffiel20164.png',
                'endDate' => '2016-09-03',
                'price' => 800,
                'code' => 'FFIEL2016X',
                'speaker_occupation' => 'Fotografía creativa/modelos a escala',
                'hours' => '16:00 - 20:00',
                'active' => true
            ],
            [
                'name' => 'Iluminación profesional (Retrato/Fashion)',
                'event_id' => 1,
                'startDate' => '2016-09-02',
                'quantity' => 20,
                'available'=> 20,
                'street' => 'calle',
                'noExt' => '',
                'city' => 'Leon',
                'state'=> 'Guanajuato',
                'description'=> '<p><strong>&iexcl;S&aacute;cale todo el jugo a tu flash y juego de luces! &iquest;Quieres saber dirigir a tus modelos? &iquest;Te gusta la foto de moda?&iquest;Te gusta la iluminaci&oacute;n y la foto de estudio? </strong></p><p>Junto a este gran fot&oacute;grafo de Chiapas podr&aacute;s adquirir las bases para poder realizar fotograf&iacute;a e iluminaci&oacute;n social y de moda. Gabriel Sosa te ense&ntilde;ar&aacute; a realizar fant&aacute;sticas fotos en situaciones de luz natural y de estudio.</p><p>&nbsp;</p><p><strong>Dirigido a:</strong></p><p>Fot&oacute;grafos, dise&ntilde;adores, modelos, comunic&oacute;logos, mercad&oacute;logos, aficionados y p&uacute;blico en general. Aquellos interesados en la fotograf&iacute;a e iluminaci&oacute;n de estudio.</p><p><strong>Nivel de Conocimiento: </strong>Fotograf&iacute;a y Photoshop b&aacute;sica</p><p><strong>Requisitos:</strong></p><p>C&aacute;mara Digital-Reflex (canon, nikon, sony, etc)</p><p>Laptop. Deber&aacute; contar con el programa PS CC o CS6 instalado</p><p>Luz (Flash o strobos) El FFIEL prestar&aacute; 5 flashes en caso de que varios asistentes no cuenten con el propio.</p><h4>Costos</h4><table align="center" border="1" cellpadding="0" cellspacing="0" style="width:100%"><tbody><tr><td width="33%"><h5 style="text-align: center;"><strong>Julio</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>Agosto</strong></h5></td><td width="33%"><h5 style="text-align: center;"><strong>D&iacute;a del evento</strong></h5></td></tr><tr><td><h5 style="text-align: center;"><strong>$700</strong></h5></td><td><h5 style="text-align: center;"><strong>$800</strong></h5></td><td><h5 style="text-align: center;"><strong>$900</strong></h5></td></tr></tbody></table>',
                'speaker_name' => 'Gabriel Sosa',
                'speaker_image' => '/images/talleristas/sosa.jpg',
                'image' => '/images/talleres/ffiel20162.png',
                'endDate' => '2016-09-03',
                'price' => 700,
                'code' => 'FFIEL2016X',
                'speaker_occupation' => 'Fotografía moda, editorial, social',
                'hours' => '16:00 - 20:00',
                'active' => true
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('workshops');
    }
}
