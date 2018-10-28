<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://images.farmatodo.com/bduc/img/ve/item/medium/ve_items_111582894_medium_standart_1428951637513.jpg',
            'title' => 'Brugesic',
            'stock' => '12',
            'description' => 'Brugesic (Ibuprofeno) es un antiinflamatorio no esteroideo indicado para el alivio sintomático del dolor leve a moderado: dolor de cabeza, dolor dental, mialgias, dolores menstruales, fiebre, neuritis, dolores postquirúrgicos. También se indica como antiinflamatorio en enfermedades como artritis, artritis reumatoidea y gota.',
            'price' => '2.70'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://sc01.alicdn.com/kf/HTB1moMTKpXXXXacXXXXq6xXFXXXl/Rinsol-Ayurvedic-Eye-Drops.jpg',
            'title' => 'Rinsol',
            'stock' => '3',
            'description' => 'Rinsol gotas nasales en solucion 0.9%. Suero fisiologico de uso topico. Para alivio de la membrana nasal irritada,seca o inflamada,lavado de ojos,heridas menores y mucosas',
            'price' => '1.80'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.grupofarma.com/wp-content/uploads/2018/04/ESTUCHE-RINARIS.png',
            'title' => 'Rinaris',
            'stock' => '5',
            'description' => 'RINARIS 10 tabletas, está indicado para el alivio de los síntomas nasales y oculares de la congestión de las mucosas respiratorias superiores, como las observadas en el caso de la rinitis alérgica y el resfriado común, que incluyen: congestión nasal, estornudos, rinorrea, prurito y lagrimeo.',
            'price' => '1.30'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://dug3fehy1j4tq.cloudfront.net/images/products/dokteronline-diclofenac-1116-3-1435746003.jpg',
            'title' => 'Voltarén',
            'stock' => '7',
            'description' => 'Voltares 75 mg, para Artrosis (osteoartrosis, artropatía degenerativa). 
            Bursitis. Dolor. Esguinces. Lumbalgias. Tendinitis. Tenosinovitis. Tortícolis',
            'price' => '2.20'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.farmaciatorrent.com/262268-large_default/bisolmel-jarabe-de-malvavisco-y-miel-para-la-tos-seca-100-ml.jpg',
            'title' => 'Bisolmel',
            'stock' => '4',
            'description' => ' BISOLMEL® jarabe Bálsamo de origen natural. Alivia la tos seca. Ayuda a reducir los síntomas de la tos seca.
            Calma la necesidad de toser.
            Ayuda a romper el ciclo de la tos seca debida al picor de garganta.',
            'price' => '7.30'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i-cf5.gskstatic.com/content/dam/cf-consumer-healthcare/panadol/es_CO/dolex-products/dolex%20base/Productos_455x455_base.png?auto=format',
            'title' => 'Dolex',
            'stock' => '2',
            'description' => 'Analgésico y antipirético. Inhibe la síntesis de prostaglandinas en el SNC y bloquea la generación del impulso doloroso a nivel periférico. Actúa sobre el centro hipotalámico regulador de la temperatura.',
            'price' => '5.20'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://viviendosanos.com/wp-content/uploads/2015/06/Vitaminas-Pastillas-para-estudiar-mejor-y-memorizar.png',
            'title' => 'Pharmaton',
            'stock' => '6',
            'description' => 'Pharmaton® Vit & Care
            Ayuda a mantener tu vitalidad con Pharmaton® Vit & Care, el multivitamínico con Antioxidantes y sin ginseng que cuida tu organismo cada día.',
            'price' => '8.10'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://innatia.info/images/galeria/multivitaminico-0.jpg',
            'title' => 'Centrum',
            'stock' => '1',
            'description' => 'Centrum® Multivitamínico Multimineral con su fórmula completa de la A al Zinc ayuda a cubrir las deficiencias nutricionales.',
            'price' => '4.40'
        ]);
        $product->save();
    }
}
